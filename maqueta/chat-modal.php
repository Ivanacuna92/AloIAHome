<?php
session_start();

// Configuración de OpenAI
$OPENAI_API_KEY = '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';
$ASSISTANT_ID = 'asst_cUwROnRZvsrzwXEGiAQ1eo85';

// Obtener contexto del archivo si existe
$fileContext = $_GET['context'] ?? null;

// Manejar solicitudes AJAX del chat
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    switch ($_POST['action']) {
        case 'chat':
            handleChatMessage($_POST['message'], $_POST['context'] ?? null);
            break;
        case 'new_thread':
            createNewThread();
            break;
    }
    exit;
}

function handleChatMessage($message, $context = null) {
    global $OPENAI_API_KEY, $ASSISTANT_ID;
    
    try {
        // Obtener o crear thread
        $thread_id = $_SESSION['chat_thread_id'] ?? null;
        if (!$thread_id) {
            $thread_id = createThread();
            $_SESSION['chat_thread_id'] = $thread_id;
        }
        
        // Construir mensaje con contexto si existe
        $contextualMessage = $message;
        if ($context) {
            $contextualMessage = "Contexto: {$context}\n\nPregunta del usuario: {$message}";
        }
        
        // Agregar mensaje al thread
        addMessageToThread($thread_id, $contextualMessage);
        
        // Ejecutar assistant
        $run_id = runAssistant($thread_id, $ASSISTANT_ID);
        $_SESSION['chat_run_id'] = $run_id;
        
        // Esperar respuesta
        $response = waitForResponse($thread_id, $run_id);
        
        echo json_encode([
            'success' => true,
            'response' => $response
        ]);
        
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
}

function createThread() {
    global $OPENAI_API_KEY;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/threads');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $OPENAI_API_KEY,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([]));
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception('Error creando thread: ' . $response);
    }
    
    $data = json_decode($response, true);
    return $data['id'];
}

function addMessageToThread($thread_id, $message) {
    global $OPENAI_API_KEY;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/{$thread_id}/messages");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $OPENAI_API_KEY,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'role' => 'user',
        'content' => $message
    ]));
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception('Error agregando mensaje: ' . $response);
    }
}

function runAssistant($thread_id, $assistant_id) {
    global $OPENAI_API_KEY;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/{$thread_id}/runs");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $OPENAI_API_KEY,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'assistant_id' => $assistant_id
    ]));
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception('Error ejecutando assistant: ' . $response);
    }
    
    $data = json_decode($response, true);
    return $data['id'];
}

function waitForResponse($thread_id, $run_id) {
    global $OPENAI_API_KEY;
    
    $maxAttempts = 30;
    $attempt = 0;
    
    while ($attempt < $maxAttempts) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/{$thread_id}/runs/{$run_id}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $OPENAI_API_KEY,
            'OpenAI-Beta: assistants=v2'
        ]);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        $data = json_decode($response, true);
        
        if ($data['status'] === 'completed') {
            return getLatestMessage($thread_id);
        } elseif ($data['status'] === 'failed') {
            throw new Exception('El assistant falló al procesar la solicitud');
        }
        
        sleep(1);
        $attempt++;
    }
    
    throw new Exception('Timeout esperando respuesta del assistant');
}

function getLatestMessage($thread_id) {
    global $OPENAI_API_KEY;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/{$thread_id}/messages?limit=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $OPENAI_API_KEY,
        'OpenAI-Beta: assistants=v2'
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $data = json_decode($response, true);
    
    if (isset($data['data'][0]['content'][0]['text']['value'])) {
        return $data['data'][0]['content'][0]['text']['value'];
    }
    
    return 'No se pudo obtener respuesta del assistant';
}

function createNewThread() {
    unset($_SESSION['chat_thread_id']);
    unset($_SESSION['chat_run_id']);
    echo json_encode(['success' => true, 'message' => 'Nueva conversación iniciada']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤖 Asistente IA - Convertidor ASC</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .chat-header {
            background: var(--aloia-gradient);
            color: white;
            padding: 1rem;
            text-align: center;
            position: relative;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .chat-header h1 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }
        
        .chat-header p {
            font-size: 0.8rem;
            opacity: 0.9;
        }
        
        .new-chat-btn {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.7rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .new-chat-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        .close-btn {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 1rem;
            background: #f8f9fa;
        }
        
        .message {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        
        .message.user {
            justify-content: flex-end;
        }
        
        .message.user .message-content {
            background: var(--aloia-gradient);
            color: white;
            margin-left: 2rem;
        }
        
        .message.assistant .message-content {
            background: white;
            color: #333;
            margin-right: 2rem;
            border: 1px solid #e9ecef;
        }
        
        .message-content {
            padding: 0.8rem 1rem;
            border-radius: 18px;
            max-width: 85%;
            font-size: 0.9rem;
            line-height: 1.4;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            word-wrap: break-word;
        }
        
        .typing-indicator {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            background: white;
            border-radius: 18px;
            margin-right: 2rem;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .typing-dots {
            display: flex;
            gap: 0.3rem;
        }
        
        .typing-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--aloia-orange);
            animation: typing 1.4s infinite;
        }
        
        .typing-dot:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .typing-dot:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes typing {
            0%, 60%, 100% { transform: scale(0.8); opacity: 0.5; }
            30% { transform: scale(1); opacity: 1; }
        }
        
        .chat-input-container {
            padding: 1rem;
            background: white;
            border-top: 1px solid #e9ecef;
            display: flex;
            gap: 0.5rem;
        }
        
        .chat-input {
            flex: 1;
            border: 1px solid #e9ecef;
            border-radius: 25px;
            padding: 0.8rem 1rem;
            font-size: 0.9rem;
            outline: none;
            transition: border-color 0.3s ease;
        }
        
        .chat-input:focus {
            border-color: var(--aloia-orange);
        }
        
        .send-btn {
            background: var(--aloia-gradient);
            border: none;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            white-space: nowrap;
            min-width: 80px;
        }
        
        .send-btn:hover:not(:disabled) {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.3);
        }
        
        .send-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        
        .loading-spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .hidden {
            display: none;
        }
        
        /* Scrollbar personalizado */
        .chat-messages::-webkit-scrollbar {
            width: 6px;
        }
        
        .chat-messages::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }
        
        .chat-messages::-webkit-scrollbar-thumb {
            background: rgba(253, 97, 68, 0.3);
            border-radius: 10px;
        }
        
        .chat-messages::-webkit-scrollbar-thumb:hover {
            background: rgba(253, 97, 68, 0.5);
        }
        
        .context-info {
            background: rgba(253, 97, 68, 0.1);
            border: 1px solid rgba(253, 97, 68, 0.3);
            border-radius: 8px;
            padding: 0.8rem;
            margin-bottom: 1rem;
            font-size: 0.8rem;
            color: var(--aloia-red);
        }
        
        .context-info strong {
            display: block;
            margin-bottom: 0.3rem;
        }
    </style>
</head>
<body>
    <div class="chat-header">
        <button class="new-chat-btn" onclick="startNewChat()">🔄 Nueva</button>
        <h1>🤖 Asistente IA</h1>
        <p>Especialista en conversión de datos aduaneros</p>
        <button class="close-btn" onclick="window.history.back()">←</button>
    </div>
    
    <div class="chat-messages" id="chatMessages">
        <?php if ($fileContext): ?>
        <div class="context-info">
            <strong>📊 Contexto detectado:</strong>
            <?= htmlspecialchars($fileContext) ?>
        </div>
        <?php endif; ?>
        
        <div class="message assistant">
            <div class="message-content">
                ¡Hola! 👋 Soy tu asistente IA especializado en datos aduaneros.
                <br><br>
                <?php if ($fileContext): ?>
                Veo que acabas de convertir un archivo. Puedo ayudarte con:
                <br>• Análisis específico de tus datos convertidos
                <br>• Interpretación de campos aduaneros
                <br>• Optimización de procesos
                <br>• Detección de patrones en los datos
                <?php else: ?>
                Puedo ayudarte con:
                <br>• Preguntas sobre conversión de archivos ASC
                <br>• Análisis de datos aduaneros
                <br>• Formatos de Excel y optimización
                <br>• Resolución de problemas técnicos
                <?php endif; ?>
                <br><br>¿En qué puedo ayudarte?
            </div>
        </div>
    </div>
    
    <div class="chat-input-container">
        <input type="text" class="chat-input" id="chatInput" placeholder="Escribe tu pregunta..." maxlength="500">
        <button class="send-btn" id="sendBtn" onclick="sendMessage()">
            <span id="sendText">Enviar</span>
            <span id="sendLoading" class="hidden">
                <span class="loading-spinner"></span>
            </span>
        </button>
    </div>

    <script>
        let isWaitingForResponse = false;
        const fileContext = <?= json_encode($fileContext) ?>;

        // Configurar eventos
        document.getElementById('chatInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !isWaitingForResponse) {
                sendMessage();
            }
        });

        // Enviar mensaje
        async function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();
            
            if (!message || isWaitingForResponse) return;
            
            // Agregar mensaje del usuario
            addMessage('user', message);
            input.value = '';
            
            // Mostrar indicador de escritura
            showTypingIndicator();
            setSendButtonLoading(true);
            isWaitingForResponse = true;
            
            try {
                const formData = new FormData();
                formData.append('action', 'chat');
                formData.append('message', message);
                if (fileContext) {
                    formData.append('context', fileContext);
                }
                
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                
                if (data.success) {
                    addMessage('assistant', data.response);
                } else {
                    addMessage('assistant', `❌ Error: ${data.error}`);
                }
                
            } catch (error) {
                console.error('Error:', error);
                addMessage('assistant', '❌ Lo siento, hubo un error al procesar tu mensaje. Por favor intenta de nuevo.');
            } finally {
                hideTypingIndicator();
                setSendButtonLoading(false);
                isWaitingForResponse = false;
            }
        }

        function addMessage(sender, content) {
            const messagesContainer = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}`;
            
            const contentDiv = document.createElement('div');
            contentDiv.className = 'message-content';
            contentDiv.innerHTML = content.replace(/\n/g, '<br>');
            
            messageDiv.appendChild(contentDiv);
            messagesContainer.appendChild(messageDiv);
            
            // Scroll al final
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function showTypingIndicator() {
            const messagesContainer = document.getElementById('chatMessages');
            const typingDiv = document.createElement('div');
            typingDiv.className = 'message assistant';
            typingDiv.id = 'typingIndicator';
            
            const typingContent = document.createElement('div');
            typingContent.className = 'typing-indicator';
            typingContent.innerHTML = `
                <div class="typing-dots">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                </div>
            `;
            
            typingDiv.appendChild(typingContent);
            messagesContainer.appendChild(typingDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function hideTypingIndicator() {
            const typingIndicator = document.getElementById('typingIndicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }

        function setSendButtonLoading(loading) {
            document.getElementById('sendText').classList.toggle('hidden', loading);
            document.getElementById('sendLoading').classList.toggle('hidden', !loading);
            document.getElementById('sendBtn').disabled = loading;
        }

        async function startNewChat() {
            if (isWaitingForResponse) return;
            
            try {
                const formData = new FormData();
                formData.append('action', 'new_thread');
                
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Limpiar mensajes
                    const messagesContainer = document.getElementById('chatMessages');
                    messagesContainer.innerHTML = `
                        <div class="message assistant">
                            <div class="message-content">
                                🎉 ¡Nueva conversación iniciada!
                                <br><br>Soy tu asistente IA especializado en datos aduaneros. ¿En qué puedo ayudarte?
                            </div>
                        </div>
                    `;
                }
                
            } catch (error) {
                console.error('Error al iniciar nueva conversación:', error);
            }
        }

        // Foco automático en el input
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('chatInput').focus();
        });
    </script>
</body>
</html>