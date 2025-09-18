<?php
session_start();

// Headers anti-caché para evitar problemas de refresh
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Configuración
$OPENAI_API_KEY = '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';
$ASSISTANT_ID = 'asst_ftSZZKgCz6tZnbyqlmI9k1WO';

// Inicializar inventario si no existe
if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [
        'manzanas_rojas' => [
            'nombre' => 'Manzanas Rojas',
            'descripcion' => 'Caja de 10kg - Manzanas frescas rojas',
            'stock' => 1045,
            'precio' => 180,
            'unidad' => 'caja de 10kg',
            'categoria' => 'frutas'
        ],
        'platanos_premium' => [
            'nombre' => 'Plátanos Premium',
            'descripcion' => 'Caja de 15kg - Plátanos maduros premium',
            'stock' => 1060,
            'precio' => 120,
            'unidad' => 'caja de 15kg',
            'categoria' => 'frutas'
        ],
        'zanahorias_organicas' => [
            'nombre' => 'Zanahorias Orgánicas',
            'descripcion' => 'Costal de 20kg - Zanahorias 100% orgánicas',
            'stock' => 1035,
            'precio' => 90,
            'unidad' => 'costal de 20kg',
            'categoria' => 'verduras'
        ],
        'tomates_bola' => [
            'nombre' => 'Tomates Bola',
            'descripcion' => 'Caja de 12kg - Tomates frescos bola',
            'stock' => 1028,
            'precio' => 150,
            'unidad' => 'caja de 12kg',
            'categoria' => 'verduras'
        ],
        'lechugas_romanas' => [
            'nombre' => 'Lechugas Romanas',
            'descripcion' => 'Caja de 24 piezas - Lechugas frescas',
            'stock' => 1040,
            'precio' => 95,
            'unidad' => 'caja de 24 piezas',
            'categoria' => 'verduras'
        ],
        'naranjas_valencia' => [
            'nombre' => 'Naranjas Valencia',
            'descripcion' => 'Caja de 18kg - Naranjas dulces para jugo',
            'stock' => 1052,
            'precio' => 160,
            'unidad' => 'caja de 18kg',
            'categoria' => 'frutas'
        ]
    ];
}

// Inicializar thread_id si no existe
if (!isset($_SESSION['thread_id'])) {
    $_SESSION['thread_id'] = null;
}

// Inicializar mensajes si no existen
if (!isset($_SESSION['mensajes'])) {
    $_SESSION['mensajes'] = [
        [
            'tipo' => 'bot',
            'contenido' => '¡Hola! 👋 Soy FrutaBot de la Distribuidora de Frutas y Verduras. ¿En qué puedo ayudarte hoy? Tenemos productos frescos: 🍎 frutas y 🥕 verduras.',
            'timestamp' => date('H:i')
        ]
    ];
}

// Funciones del inventario
function consultarInventario($producto = null) {
    if ($producto) {
        $prod = $_SESSION['inventario'][$producto] ?? null;
        return $prod ? array_merge($prod, ['disponible' => $prod['stock'] > 0]) : null;
    }
    return $_SESSION['inventario'];
}

function actualizarInventario($producto, $cantidad) {
    if (isset($_SESSION['inventario'][$producto]) && $_SESSION['inventario'][$producto]['stock'] >= $cantidad) {
        $_SESSION['inventario'][$producto]['stock'] -= $cantidad;
        return true;
    }
    return false;
}

function obtenerProductos() {
    $productos = [];
    foreach ($_SESSION['inventario'] as $key => $producto) {
        $productos[] = array_merge($producto, [
            'id' => $key,
            'disponible' => $producto['stock'] > 0
        ]);
    }
    return $productos;
}

// Función para crear thread de OpenAI
function crearThread($apiKey) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/threads');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode == 200) {
        $data = json_decode($response, true);
        return $data['id'];
    }
    return null;
}

// Función para enviar mensaje al asistente
function enviarMensajeAsistente($mensaje, $apiKey, $assistantId) {
    // Crear thread si no existe
    if (!$_SESSION['thread_id']) {
        $_SESSION['thread_id'] = crearThread($apiKey);
        if (!$_SESSION['thread_id']) {
            return "Error creando conversación.";
        }
    }
    
    $threadId = $_SESSION['thread_id'];
    
    // Preparar información del inventario
    $productos = obtenerProductos();
    $inventarioInfo = [];
    foreach ($productos as $p) {
        $disponible = $p['disponible'] ? '✅' : '❌';
        $inventarioInfo[] = "{$p['nombre']}: ${p['precio']} MXN por {$p['unidad']}, Stock: {$p['stock']} unidades $disponible";
    }
    $inventarioTexto = implode("\n", $inventarioInfo);
    
    $contextMessage = "INVENTARIO ACTUAL:\n$inventarioTexto\n\nMENSAJE DEL CLIENTE: $mensaje";
    
    // Agregar mensaje al thread
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/$threadId/messages");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'role' => 'user',
        'content' => $contextMessage
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_exec($ch);
    curl_close($ch);
    
    // Crear run
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/$threadId/runs");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
        'OpenAI-Beta: assistants=v2'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'assistant_id' => $assistantId
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $runData = json_decode($response, true);
    if (!isset($runData['id'])) {
        return "Error iniciando proceso.";
    }
    
    return esperarCompletarRun($runData['id'], $threadId, $apiKey);
}

// Función para esperar que complete el run
function esperarCompletarRun($runId, $threadId, $apiKey) {
    $intentos = 0;
    $maxIntentos = 30;
    
    while ($intentos < $maxIntentos) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/$threadId/runs/$runId");
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiKey,
            'OpenAI-Beta: assistants=v2'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        $runData = json_decode($response, true);
        
        if ($runData['status'] === 'completed') {
            // Obtener mensajes
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/threads/$threadId/messages");
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $apiKey,
                'OpenAI-Beta: assistants=v2'
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $response = curl_exec($ch);
            curl_close($ch);
            
            $messagesData = json_decode($response, true);
            $lastMessage = $messagesData['data'][0];
            return $lastMessage['content'][0]['text']['value'];
            
        } elseif ($runData['status'] === 'failed') {
            return "Hubo un error procesando tu mensaje. Intenta de nuevo.";
        }
        
        sleep(1);
        $intentos++;
    }
    
    return "El sistema está tardando más de lo esperado. Intenta de nuevo.";
}

// Procesar envío de mensaje
if (isset($_POST['action']) && $_POST['action'] === 'send_message' && !empty($_POST['message'])) {
    $mensaje = trim($_POST['message']);
    
    // Agregar mensaje del usuario
    $_SESSION['mensajes'][] = [
        'tipo' => 'user',
        'contenido' => $mensaje,
        'timestamp' => date('H:i')
    ];
    
    // Obtener respuesta del asistente
    try {
        $respuesta = enviarMensajeAsistente($mensaje, $OPENAI_API_KEY, $ASSISTANT_ID);
    } catch (Exception $e) {
        $respuesta = "Lo siento, hay un problema técnico. Intenta de nuevo.";
        error_log("Error OpenAI: " . $e->getMessage());
    }
    
    // Procesar actualizaciones de inventario
    $confirmationKeywords = ['pedido confirmado', 'pedido procesado', 'pedido registrado', 'hemos confirmado'];
    $esConfirmacion = false;
    foreach ($confirmationKeywords as $keyword) {
        if (stripos($respuesta, $keyword) !== false) {
            $esConfirmacion = true;
            break;
        }
    }
    
    if ($esConfirmacion) {
        // Extraer cantidades y productos del mensaje del usuario
        preg_match_all('/\d+/', $mensaje, $cantidades);
        $cantidades = array_map('intval', $cantidades[0]);
        
        $productos = [];
        $lowerText = strtolower($mensaje);
        
        // Frutas
        if (strpos($lowerText, 'manzana') !== false || strpos($lowerText, 'manzanas') !== false) $productos[] = 'manzanas_rojas';
        if (strpos($lowerText, 'plátano') !== false || strpos($lowerText, 'platano') !== false || strpos($lowerText, 'plátanos') !== false) $productos[] = 'platanos_premium';
        if (strpos($lowerText, 'naranja') !== false || strpos($lowerText, 'naranjas') !== false) $productos[] = 'naranjas_valencia';
        
        // Verduras
        if (strpos($lowerText, 'zanahoria') !== false || strpos($lowerText, 'zanahorias') !== false) $productos[] = 'zanahorias_organicas';
        if (strpos($lowerText, 'tomate') !== false || strpos($lowerText, 'tomates') !== false) $productos[] = 'tomates_bola';
        if (strpos($lowerText, 'lechuga') !== false || strpos($lowerText, 'lechugas') !== false) $productos[] = 'lechugas_romanas';
        
        if (empty($productos)) $productos[] = 'manzanas_rojas'; // Default
        
        // Actualizar inventario
        for ($i = 0; $i < count($productos); $i++) {
            $producto = $productos[$i];
            $cantidad = $cantidades[$i] ?? 1;
            
            if (actualizarInventario($producto, $cantidad)) {
                error_log("Stock actualizado: $producto - $cantidad unidades reducidas");
            } else {
                error_log("No se pudo actualizar stock: $producto");
            }
        }
    }
    
    // Agregar respuesta del bot
    $_SESSION['mensajes'][] = [
        'tipo' => 'bot',
        'contenido' => $respuesta,
        'timestamp' => date('H:i')
    ];
    
    // Debug: agregar info del error si hay
    if (!$_SESSION['thread_id']) {
        error_log("No se pudo crear thread de OpenAI");
    }
    
    // Redirect para evitar reenvío con JavaScript para mejor UX
    echo '<script>
        // Forzar refresh sin cache
        window.location.replace("' . $_SERVER['PHP_SELF'] . '?t=' . time() . '");
    </script>';
    exit;
}

// Reset demo - mejorado para evitar problemas de UX
if (isset($_POST['action']) && $_POST['action'] === 'reset_demo') {
    // Limpiar completamente la sesión
    $_SESSION = array();
    
    // Destruir la cookie de sesión si existe
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Destruir la sesión
    session_destroy();
    
    // Iniciar nueva sesión
    session_start();
    
    // Redirigir con JavaScript para mejor UX
    echo '<!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8"></head>
    <body>
    <script>
        // Limpia cache y redirige con timestamp
        window.location.replace("' . $_SERVER['PHP_SELF'] . '?reset=1&t=' . time() . '");
    </script>
    </body>
    </html>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>FrutaBot - Distribuidora Frutas y Verduras</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --aloia-light-bg: #f9fafb;
            --aloia-light-accent: #f3f4f6;
            --whatsapp-green: #25d366;
            --whatsapp-dark: #075e54;
            --whatsapp-light: #dcf8c6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            overflow: hidden;
        }
        
        .app-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
        }
        
        /* Header */
        .header {
            flex: 0 0 auto;
            background: white;
            padding: 1rem 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-bottom: 2px solid rgba(253, 97, 68, 0.1);
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .header-title {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .status-text {
            font-size: 0.875rem;
            color: #64748b;
            font-weight: 500;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            height: calc(100vh - 80px);
            gap: 1.5rem;
            padding: 1.5rem;
        }
        
        /* Left Panel - Info */
        .info-panel {
            flex: 0 0 45%;
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 1px solid rgba(253, 97, 68, 0.1);
            overflow-y: auto;
            height: 100%;
        }
        
        /* Right Panel - Chat */
        .chat-panel {
            flex: 0 0 55%;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        
        .chat-container {
            width: 100%;
            max-width: 450px;
            height: 600px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            background: #e5ddd5;
            display: flex;
            flex-direction: column;
        }
        
        /* Buttons */
        .btn-reset {
            background: var(--aloia-gradient);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 0.875rem;
        }
        
        .btn-reset:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(253, 50, 68, 0.3);
        }
        
        /* Info Panel Content */
        .section {
            margin-bottom: 1.5rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.02) 0%, rgba(174, 58, 141, 0.02) 100%);
            border-radius: 12px;
            border: 1px solid rgba(253, 97, 68, 0.08);
        }
        
        .section h2 {
            font-size: 1.125rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .section p {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 0.75rem;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        
        .product-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid rgba(253, 97, 68, 0.1);
            transition: all 0.2s ease;
        }
        
        .product-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .product-name {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        
        .product-details {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 0.5rem;
        }
        
        .product-price {
            font-weight: 700;
            color: var(--aloia-red);
            font-size: 1rem;
        }
        
        .inventory-status {
            background: rgba(37, 211, 102, 0.1);
            border: 1px solid rgba(37, 211, 102, 0.3);
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1rem;
        }
        
        .stock-item {
            display: flex;
            justify-content: space-between;
            padding: 0.25rem 0;
            border-bottom: 1px solid rgba(37, 211, 102, 0.1);
        }
        
        .stock-item:last-child {
            border-bottom: none;
        }
        
        .stock-name {
            font-weight: 600;
            color: #1e293b;
        }
        
        .stock-count {
            color: var(--whatsapp-green);
            font-weight: 700;
        }
        
        .examples-box {
            background: rgba(37, 211, 102, 0.05);
            border: 1px solid rgba(37, 211, 102, 0.2);
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1rem;
        }
        
        .example-message {
            background: white;
            padding: 0.5rem;
            border-radius: 6px;
            margin: 0.5rem 0;
            font-style: italic;
            color: #475569;
            border-left: 3px solid var(--whatsapp-green);
        }
        
        /* WhatsApp Chat Styles */
        .whatsapp-header {
            background: var(--whatsapp-dark);
            color: white;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .whatsapp-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--aloia-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
        }
        
        .whatsapp-info h3 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }
        
        .whatsapp-info p {
            margin: 0;
            font-size: 0.875rem;
            opacity: 0.8;
        }
        
        .whatsapp-messages {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
            background: #e5ddd5;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        
        .message {
            display: flex;
            animation: fadeInMessage 0.3s ease-out;
        }
        
        .message.user {
            justify-content: flex-end;
        }
        
        .message.bot {
            justify-content: flex-start;
        }
        
        .message-bubble {
            max-width: 80%;
            padding: 0.75rem 1rem;
            border-radius: 18px;
            font-size: 0.875rem;
            line-height: 1.5;
            position: relative;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .message.user .message-bubble {
            background: var(--whatsapp-light);
            color: #1e293b;
            border-bottom-right-radius: 4px;
        }
        
        .message.bot .message-bubble {
            background: white;
            color: #1e293b;
            border-bottom-left-radius: 4px;
        }
        
        .message-time {
            font-size: 0.75rem;
            opacity: 0.6;
            margin-top: 0.25rem;
            text-align: right;
        }
        
        .whatsapp-input {
            background: #f0f0f0;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .whatsapp-input input {
            flex: 1;
            border: none;
            background: white;
            padding: 0.75rem 1rem;
            border-radius: 25px;
            outline: none;
            font-size: 0.875rem;
            border: 1px solid #e2e8f0;
        }
        
        .whatsapp-input input:focus {
            border-color: var(--whatsapp-green);
        }
        
        .whatsapp-send {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--whatsapp-green);
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }
        
        .whatsapp-send:hover {
            background: #1ea952;
            transform: scale(1.05);
        }
        
        @keyframes fadeInMessage {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .main-content {
                flex-direction: column;
                height: calc(100vh - 80px);
                gap: 1rem;
                padding: 1rem;
            }
            
            .info-panel {
                flex: 0 0 40%;
                min-height: 300px;
                padding: 1.5rem;
            }
            
            .chat-panel {
                flex: 1;
                min-height: 400px;
            }
            
            .chat-container {
                height: 100%;
                max-height: 500px;
            }
        }
        
        @media (max-width: 768px) {
            .header-content {
                padding: 0 1rem;
            }
            
            .header-title {
                font-size: 1.25rem;
            }
            
            .status-text {
                display: none;
            }
            
            .main-content {
                padding: 0.75rem;
                gap: 0.75rem;
            }
            
            .info-panel {
                flex: 0 0 35%;
                padding: 1rem;
                min-height: 250px;
            }
            
            .section {
                margin-bottom: 1rem;
                padding: 1rem;
            }
            
            .section h2 {
                font-size: 1rem;
            }
            
            .chat-container {
                max-height: 450px;
            }
        }
        
        @media (max-width: 480px) {
            .header {
                padding: 0.75rem 1rem;
            }
            
            .header-title {
                font-size: 1.1rem;
            }
            
            .main-content {
                padding: 0.5rem;
                gap: 0.5rem;
            }
            
            .info-panel {
                flex: 0 0 30%;
                padding: 0.75rem;
                min-height: 200px;
            }
            
            .section {
                margin-bottom: 0.75rem;
                padding: 0.75rem;
            }
            
            .section h2 {
                font-size: 0.9rem;
            }
            
            .section p {
                font-size: 0.8rem;
            }
            
            .product-item {
                padding: 0.75rem;
            }
            
            .chat-container {
                max-height: 400px;
            }
            
            .whatsapp-header {
                padding: 0.75rem 1rem;
            }
            
            .whatsapp-messages {
                padding: 1rem;
            }
            
            .whatsapp-input {
                padding: 0.75rem 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h1 class="header-title">🍎🥕 FrutaBot Demo</h1>
                <div class="header-actions">
                    <span class="status-text">Inventario dinámico en tiempo real</span>
                    <form method="post" style="display: inline;" onsubmit="return confirm('¿Estás seguro de reiniciar la demo? Se perderá todo el progreso.');">
                        <input type="hidden" name="action" value="reset_demo">
                        <button type="submit" class="btn-reset">🔄 Reset</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Left Panel - Information -->
            <div class="info-panel">
                <div class="section">
                    <h2>🤖 Asistente Inteligente</h2>
                    <p>Chatbot automatizado con OpenAI que maneja consultas, pedidos y actualiza el inventario en tiempo real. Utiliza procesamiento de lenguaje natural para entender las solicitudes de los clientes.</p>
                </div>

                <div class="section">
                    <h2>📦 Productos Disponibles</h2>
                    <div class="product-grid">
                        <?php
                        $productos = obtenerProductos();
                        $frutasCount = 0;
                        $verdurasCount = 0;
                        
                        foreach ($productos as $producto): 
                            if ($producto['categoria'] === 'frutas') {
                                if ($frutasCount === 0) echo '<h3 style="margin: 1rem 0 0.5rem 0; color: var(--aloia-red); font-size: 0.9rem;">🍎 FRUTAS</h3>';
                                $frutasCount++;
                            } elseif ($producto['categoria'] === 'verduras') {
                                if ($verdurasCount === 0) echo '<h3 style="margin: 1rem 0 0.5rem 0; color: var(--aloia-red); font-size: 0.9rem;">🥕 VERDURAS</h3>';
                                $verdurasCount++;
                            }
                        ?>
                            <div class="product-item">
                                <div class="product-name"><?= htmlspecialchars($producto['nombre']) ?></div>
                                <div class="product-details"><?= htmlspecialchars($producto['unidad']) ?></div>
                                <div class="product-price">$<?= $producto['precio'] ?> MXN - Stock: <?= $producto['stock'] ?> unidades</div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="inventory-status">
                        <strong>📊 Estado del Inventario en Tiempo Real:</strong>
                        <?php foreach ($productos as $producto): ?>
                            <div class="stock-item">
                                <span class="stock-name"><?= htmlspecialchars($producto['nombre']) ?>:</span>
                                <span class="stock-count"><?= $producto['stock'] ?> unidades</span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section">
                    <h2>🔄 Funcionalidades del Sistema</h2>
                    <p>• <strong>Consulta de productos:</strong> Información detallada y precios<br>
                    • <strong>Verificación de inventario:</strong> Stock en tiempo real<br>
                    • <strong>Procesamiento de pedidos:</strong> Automatización completa<br>
                    • <strong>Actualización de stock:</strong> Reducción automática tras confirmar pedidos<br>
                    • <strong>Confirmación inteligente:</strong> Respuestas personalizadas</p>
                </div>

                <div class="section">
                    <h2>💡 Prueba el Sistema</h2>
                    <p>Interactúa con el chatbot usando mensajes naturales:</p>
                    
                    <div class="examples-box">
                        <div class="example-message">"Hola, ¿qué frutas tienen disponibles?"</div>
                        <div class="example-message">"Quiero 3 cajas de manzanas rojas"</div>
                        <div class="example-message">"¿Cuál es el precio de las zanahorias?"</div>
                        <div class="example-message">"Necesito verduras para mi restaurante"</div>
                        <div class="example-message">"¿Tienen plátanos en stock?"</div>
                    </div>
                </div>
            </div>

            <!-- Right Panel - Chat -->
            <div class="chat-panel">
                <div class="chat-container">
                    <!-- WhatsApp Header -->
                    <div class="whatsapp-header">
                        <div class="whatsapp-avatar">🍎</div>
                        <div class="whatsapp-info">
                            <h3>FrutaBot</h3>
                            <p>En línea • Distribuidora Frutas y Verduras</p>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="whatsapp-messages" id="messages-container">
                        <?php foreach ($_SESSION['mensajes'] as $mensaje): ?>
                            <div class="message <?= $mensaje['tipo'] ?>">
                                <div class="message-bubble">
                                    <?= nl2br(htmlspecialchars($mensaje['contenido'])) ?>
                                    <div class="message-time"><?= $mensaje['timestamp'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Input -->
                    <form method="post" class="whatsapp-input" id="message-form">
                        <input type="hidden" name="action" value="send_message">
                        <input 
                            type="text" 
                            name="message" 
                            placeholder="Escribe un mensaje..." 
                            required 
                            autocomplete="off"
                            id="message-input"
                        >
                        <button type="submit" class="whatsapp-send" id="send-button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Inventario en memoria para actualizaciones en tiempo real
        let inventario = {
            'manzanas_rojas': { nombre: 'Manzanas Rojas', stock: <?= $_SESSION['inventario']['manzanas_rojas']['stock'] ?>, precio: <?= $_SESSION['inventario']['manzanas_rojas']['precio'] ?> },
            'platanos_premium': { nombre: 'Plátanos Premium', stock: <?= $_SESSION['inventario']['platanos_premium']['stock'] ?>, precio: <?= $_SESSION['inventario']['platanos_premium']['precio'] ?> },
            'zanahorias_organicas': { nombre: 'Zanahorias Orgánicas', stock: <?= $_SESSION['inventario']['zanahorias_organicas']['stock'] ?>, precio: <?= $_SESSION['inventario']['zanahorias_organicas']['precio'] ?> },
            'tomates_bola': { nombre: 'Tomates Bola', stock: <?= $_SESSION['inventario']['tomates_bola']['stock'] ?>, precio: <?= $_SESSION['inventario']['tomates_bola']['precio'] ?> },
            'lechugas_romanas': { nombre: 'Lechugas Romanas', stock: <?= $_SESSION['inventario']['lechugas_romanas']['stock'] ?>, precio: <?= $_SESSION['inventario']['lechugas_romanas']['precio'] ?> },
            'naranjas_valencia': { nombre: 'Naranjas Valencia', stock: <?= $_SESSION['inventario']['naranjas_valencia']['stock'] ?>, precio: <?= $_SESSION['inventario']['naranjas_valencia']['precio'] ?> }
        };

        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const messagesContainer = document.getElementById('messages-container');
            const messageInput = document.getElementById('message-input');
            const messageForm = document.getElementById('message-form');
            const sendButton = document.getElementById('send-button');

            // Auto-scroll al último mensaje
            function scrollToBottom() {
                if (messagesContainer) {
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                }
            }

            // Actualizar inventario en tiempo real
            function actualizarInventarioVisual() {
                // Actualizar stock en los productos
                const productItems = document.querySelectorAll('.product-item');
                productItems.forEach(item => {
                    const productName = item.querySelector('.product-name').textContent;
                    const productPrice = item.querySelector('.product-price');
                    
                    // Buscar el producto en el inventario
                    for (let key in inventario) {
                        if (inventario[key].nombre === productName) {
                            productPrice.innerHTML = `${inventario[key].precio} MXN - Stock: <span class="stock-highlight">${inventario[key].stock}</span> unidades`;
                            
                            // Efecto visual de actualización
                            item.style.transform = 'scale(1.02)';
                            item.style.backgroundColor = '#f0fdf4';
                            setTimeout(() => {
                                item.style.transform = 'scale(1)';
                                item.style.backgroundColor = '';
                            }, 500);
                            break;
                        }
                    }
                });

                // Actualizar estado del inventario
                const stockItems = document.querySelectorAll('.stock-item');
                stockItems.forEach(item => {
                    const stockName = item.querySelector('.stock-name').textContent.replace(':', '');
                    const stockCount = item.querySelector('.stock-count');
                    
                    for (let key in inventario) {
                        if (inventario[key].nombre === stockName) {
                            stockCount.textContent = `${inventario[key].stock} unidades`;
                            
                            // Cambiar color si stock es bajo
                            if (inventario[key].stock < 50) {
                                stockCount.style.color = '#ef4444';
                            } else if (inventario[key].stock < 100) {
                                stockCount.style.color = '#f59e0b';
                            } else {
                                stockCount.style.color = '#25d366';
                            }
                            break;
                        }
                    }
                });
            }

            // Detectar productos y cantidades en el mensaje del usuario
            function detectarPedido(mensaje) {
                const productos = [];
                const lowerText = mensaje.toLowerCase();
                
                console.log('🔍 Analizando mensaje:', mensaje);
                
                // Detectar cantidades - mejorado para capturar todas las cantidades
                const cantidades = mensaje.match(/\d+/g);
                const cantidadesArray = cantidades ? cantidades.map(Number) : [];
                
                console.log('📊 Cantidades encontradas:', cantidadesArray);
                
                // Mapeo de productos con múltiples variaciones
                const productMap = {
                    'manzanas_rojas': ['manzana', 'manzanas'],
                    'platanos_premium': ['plátano', 'platano', 'plátanos', 'platanos', 'banana', 'bananas'],
                    'naranjas_valencia': ['naranja', 'naranjas'],
                    'zanahorias_organicas': ['zanahoria', 'zanahorias'],
                    'tomates_bola': ['tomate', 'tomates'],
                    'lechugas_romanas': ['lechuga', 'lechugas']
                };
                
                let cantidadIndex = 0;
                
                // Detectar productos y asignar cantidades correctamente
                for (const [productKey, variaciones] of Object.entries(productMap)) {
                    for (const variacion of variaciones) {
                        if (lowerText.includes(variacion)) {
                            // Buscar cantidad específica para este producto
                            let cantidad = 1; // Default
                            
                            // Intentar encontrar cantidad cerca del producto
                            const palabras = mensaje.split(/\s+/);
                            const indiceProducto = palabras.findIndex(palabra => 
                                palabra.toLowerCase().includes(variacion)
                            );
                            
                            if (indiceProducto !== -1) {
                                // Buscar número antes del producto
                                for (let i = Math.max(0, indiceProducto - 3); i < indiceProducto; i++) {
                                    const num = parseInt(palabras[i]);
                                    if (!isNaN(num) && num > 0) {
                                        cantidad = num;
                                        break;
                                    }
                                }
                                
                                // Si no encontró antes, buscar después
                                if (cantidad === 1) {
                                    for (let i = indiceProducto + 1; i < Math.min(palabras.length, indiceProducto + 3); i++) {
                                        const num = parseInt(palabras[i]);
                                        if (!isNaN(num) && num > 0) {
                                            cantidad = num;
                                            break;
                                        }
                                    }
                                }
                            }
                            
                            // Si no encontró cantidad específica, usar la primera disponible
                            if (cantidad === 1 && cantidadIndex < cantidadesArray.length) {
                                cantidad = cantidadesArray[cantidadIndex];
                                cantidadIndex++;
                            }
                            
                            productos.push({ 
                                key: productKey, 
                                cantidad: cantidad,
                                nombre: inventario[productKey].nombre
                            });
                            
                            console.log(`✅ Producto detectado: ${inventario[productKey].nombre} - Cantidad: ${cantidad}`);
                            break; // Solo agregar una vez por producto
                        }
                    }
                }
                
                console.log('📦 Productos finales:', productos);
                return productos;
            }

            // Simular respuesta del bot y actualizar inventario
            function simularRespuestaBot(mensajeUsuario) {
                const productos = detectarPedido(mensajeUsuario);
                
                if (productos.length > 0) {
                    console.log('⏳ Esperando confirmación del bot para:', productos);
                    
                    // Mostrar loader de procesamiento
                    mostrarLoaderProcesamiento();
                    
                    // Simular delay de respuesta del bot
                    setTimeout(() => {
                        // Verificar si el bot confirma el pedido
                        const lastMessage = messagesContainer.lastElementChild;
                        if (lastMessage && lastMessage.classList.contains('bot')) {
                            const botMessage = lastMessage.textContent.toLowerCase();
                            
                            // Palabras clave que indican confirmación
                            const confirmacionKeywords = [
                                'confirmado', 'procesado', 'registrado', 
                                'aceptado', 'listo', 'perfect', 'excelente',
                                'pedido', 'orden', 'solicitud'
                            ];
                            
                            const esConfirmacion = confirmacionKeywords.some(keyword => 
                                botMessage.includes(keyword)
                            );
                            
                            console.log('🤖 Respuesta del bot:', botMessage);
                            console.log('✅ Es confirmación:', esConfirmacion);
                            
                            if (esConfirmacion) {
                                // Actualizar inventario
                                productos.forEach(producto => {
                                    if (inventario[producto.key] && inventario[producto.key].stock >= producto.cantidad) {
                                        const stockAnterior = inventario[producto.key].stock;
                                        inventario[producto.key].stock -= producto.cantidad;
                                        
                                        console.log(`📦 Actualizando ${producto.nombre}: ${stockAnterior} → ${inventario[producto.key].stock} (-${producto.cantidad})`);
                                        
                                        // Mostrar notificación
                                        mostrarNotificacion(`✅ Stock actualizado: ${producto.nombre} (-${producto.cantidad})`);
                                    } else {
                                        console.log(`❌ Stock insuficiente para ${producto.nombre}`);
                                        mostrarNotificacion(`⚠️ Stock insuficiente: ${producto.nombre}`, 'warning');
                                    }
                                });
                                
                                // Actualizar visual
                                setTimeout(() => {
                                    actualizarInventarioVisual();
                                    ocultarLoaderProcesamiento();
                                }, 300);
                            } else {
                                console.log('❌ Bot no confirmó el pedido');
                                ocultarLoaderProcesamiento();
                            }
                        } else {
                            console.log('❌ No se encontró respuesta del bot');
                            ocultarLoaderProcesamiento();
                        }
                    }, 1500); // Esperar 1.5 segundos para que aparezca la respuesta del bot
                }
            }

            // Mostrar loader de procesamiento
            function mostrarLoaderProcesamiento() {
                const loader = document.createElement('div');
                loader.id = 'processing-loader';
                loader.style.cssText = `
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background: rgba(0, 0, 0, 0.8);
                    color: white;
                    padding: 20px 30px;
                    border-radius: 12px;
                    z-index: 2000;
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    font-weight: 600;
                    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
                `;
                
                loader.innerHTML = `
                    <div style="width:24px;height:24px;border:3px solid #fff;border-top:3px solid transparent;border-radius:50%;animation:spin 1s linear infinite;"></div>
                    <span>Procesando pedido...</span>
                `;
                
                document.body.appendChild(loader);
            }

            // Ocultar loader de procesamiento
            function ocultarLoaderProcesamiento() {
                const loader = document.getElementById('processing-loader');
                if (loader) {
                    loader.style.animation = 'fadeOut 0.3s ease-out forwards';
                    setTimeout(() => {
                        if (loader.parentNode) {
                            loader.parentNode.removeChild(loader);
                        }
                    }, 300);
                }
            }

            // Mostrar notificaciones
            function mostrarNotificacion(mensaje, tipo = 'success') {
                const notification = document.createElement('div');
                const bgColor = tipo === 'warning' ? 'linear-gradient(90deg, #f59e0b, #d97706)' : 'linear-gradient(90deg, #10b981, #059669)';
                
                notification.style.cssText = `
                    position: fixed;
                    top: 100px;
                    right: 20px;
                    background: ${bgColor};
                    color: white;
                    padding: 12px 20px;
                    border-radius: 8px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    z-index: 1000;
                    font-size: 14px;
                    font-weight: 600;
                    animation: slideInRight 0.3s ease-out;
                    max-width: 300px;
                `;
                notification.textContent = mensaje;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.style.animation = 'slideOutRight 0.3s ease-in forwards';
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.parentNode.removeChild(notification);
                        }
                    }, 300);
                }, 4000);
            }

            // Agregar loader al mensaje del usuario inmediatamente
            function agregarMensajeUsuarioConLoader(mensaje) {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'message user temp-message';
                messageDiv.innerHTML = `
                    <div class="message-bubble">
                        ${mensaje}
                        <div class="message-time">${new Date().toLocaleTimeString('es-ES', {hour: '2-digit', minute: '2-digit'})}</div>
                    </div>
                `;
                messagesContainer.appendChild(messageDiv);
                scrollToBottom();
                
                // Agregar indicador de "enviando..."
                const loadingDiv = document.createElement('div');
                loadingDiv.className = 'message bot temp-loading';
                loadingDiv.innerHTML = `
                    <div class="message-bubble" style="background: #f3f4f6; color: #6b7280;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div style="width:12px;height:12px;border:2px solid #6b7280;border-top:2px solid transparent;border-radius:50%;animation:spin 1s linear infinite;"></div>
                            <span>FrutaBot está escribiendo...</span>
                        </div>
                    </div>
                `;
                messagesContainer.appendChild(loadingDiv);
                scrollToBottom();
            }

            // Limpiar mensajes temporales
            function limpiarMensajesTemporales() {
                const tempMessages = messagesContainer.querySelectorAll('.temp-message, .temp-loading');
                tempMessages.forEach(msg => {
                    if (msg.parentNode) {
                        msg.parentNode.removeChild(msg);
                    }
                });
            }

            // CSS para las animaciones
            if (!document.getElementById('notification-styles')) {
                const style = document.createElement('style');
                style.id = 'notification-styles';
                style.textContent = `
                    @keyframes slideInRight {
                        from { transform: translateX(100%); opacity: 0; }
                        to { transform: translateX(0); opacity: 1; }
                    }
                    @keyframes slideOutRight {
                        from { transform: translateX(0); opacity: 1; }
                        to { transform: translateX(100%); opacity: 0; }
                    }
                    @keyframes fadeOut {
                        from { opacity: 1; }
                        to { opacity: 0; }
                    }
                    .stock-highlight {
                        font-weight: bold;
                        color: #059669;
                    }
                    .temp-message {
                        opacity: 0.8;
                    }
                    .temp-loading {
                        opacity: 0.9;
                    }
                `;
                document.head.appendChild(style);
            }

            // Scroll inicial
            scrollToBottom();

            // Focus en el input
            if (messageInput) {
                messageInput.focus();
            }

            // Envío con Enter
            if (messageInput) {
                messageInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault();
                        
                        // Capturar mensaje antes de enviar
                        const mensajeUsuario = this.value.trim();
                        
                        messageForm.submit();
                        
                        // Simular actualización del inventario
                        if (mensajeUsuario) {
                            simularRespuestaBot(mensajeUsuario);
                        }
                    }
                });
            }

            // Manejo del formulario
            if (messageForm) {
                messageForm.addEventListener('submit', function(e) {
                    const inputValue = messageInput.value.trim();
                    
                    if (!inputValue) {
                        e.preventDefault();
                        return false;
                    }

                    // Capturar mensaje para procesamiento
                    const mensajeUsuario = inputValue;

                    // Agregar mensaje del usuario inmediatamente con loader
                    agregarMensajeUsuarioConLoader(mensajeUsuario);

                    // Mostrar estado de carga en el botón
                    sendButton.innerHTML = `
                        <div style="width:20px;height:20px;border:2px solid #fff;border-top:2px solid transparent;border-radius:50%;animation:spin 1s linear infinite;"></div>
                    `;
                    sendButton.disabled = true;
                    messageInput.disabled = true;
                    messageInput.value = '';

                    // Agregar timestamp para evitar cache
                    const timestampInput = document.createElement('input');
                    timestampInput.type = 'hidden';
                    timestampInput.name = 'timestamp';
                    timestampInput.value = Date.now();
                    this.appendChild(timestampInput);

                    // Procesar actualización de inventario después del envío
                    setTimeout(() => {
                        simularRespuestaBot(mensajeUsuario);
                    }, 100);
                });
            }

            // Interceptar la página después de enviar el formulario
            window.addEventListener('beforeunload', function() {
                limpiarMensajesTemporales();
            });

            // Manejar cuando la página se recarga
            window.addEventListener('pageshow', function() {
                limpiarMensajesTemporales();
                // Restaurar estado del botón
                if (sendButton) {
                    sendButton.innerHTML = `
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        </svg>
                    `;
                    sendButton.disabled = false;
                }
                if (messageInput) {
                    messageInput.disabled = false;
                    messageInput.focus();
                }
            });

            // CSS para el spinner
            if (!document.getElementById('spinner-styles')) {
                const style = document.createElement('style');
                style.id = 'spinner-styles';
                style.textContent = `
                    @keyframes spin {
                        0% { transform: rotate(0deg); }
                        100% { transform: rotate(360deg); }
                    }
                `;
                document.head.appendChild(style);
            }

            // Prevenir cache del navegador
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.getRegistrations().then(function(registrations) {
                    for(let registration of registrations) {
                        registration.unregister();
                    }
                });
            }

            // Auto-refresh del inventario cada 60 segundos (opcional)
            let lastActivity = Date.now();
            
            document.addEventListener('click', () => lastActivity = Date.now());
            document.addEventListener('keypress', () => lastActivity = Date.now());
            
            setInterval(() => {
                if (Date.now() - lastActivity > 120000 && document.activeElement.tagName !== 'INPUT') {
                    window.location.href = window.location.href.split('?')[0] + '?refresh=' + Date.now();
                }
            }, 60000);
        // Función para manejar el resize de la ventana
        window.addEventListener('resize', function() {
            const messagesContainer = document.getElementById('messages-container');
            if (messagesContainer) {
                setTimeout(() => {
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                }, 100);
            }
        });
    </script>
</body>
</html>