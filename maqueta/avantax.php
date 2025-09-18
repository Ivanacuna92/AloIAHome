<?php
session_start();

// Aumentar límites de PHP para upload
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
ini_set('memory_limit', '256M');

// Configuración
$CLAUDE_API_KEY = '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';

// Headers anti-caché
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Debug de configuración PHP
debugLog("=== CONFIGURACIÓN PHP INICIAL ===");
debugLog("upload_max_filesize: " . ini_get('upload_max_filesize'));
debugLog("post_max_size: " . ini_get('post_max_size'));
debugLog("max_file_uploads: " . ini_get('max_file_uploads'));
debugLog("memory_limit: " . ini_get('memory_limit'));

// Intentar aumentar límites
$oldUploadLimit = ini_get('upload_max_filesize');
$oldPostLimit = ini_get('post_max_size');

ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
ini_set('memory_limit', '256M');

debugLog("=== DESPUÉS DE ini_set ===");
debugLog("upload_max_filesize: " . ini_get('upload_max_filesize'));
debugLog("post_max_size: " . ini_get('post_max_size'));
debugLog("memory_limit: " . ini_get('memory_limit'));

// Verificar si los cambios fueron aplicados
if (ini_get('upload_max_filesize') == $oldUploadLimit) {
    debugLog("⚠️ WARNING: ini_set no pudo cambiar upload_max_filesize");
}
if (ini_get('post_max_size') == $oldPostLimit) {
    debugLog("⚠️ WARNING: ini_set no pudo cambiar post_max_size");
}

// Inicializar resultados si no existen
if (!isset($_SESSION['results'])) {
    $_SESSION['results'] = [];
}

// Función para debug logging en PHP
function debugLog($message) {
    error_log("[TicketBot Debug] " . $message);
}

// Función para convertir tamaños PHP a bytes
function convertToBytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    $val = (int)$val;
    switch($last) {
        case 'g': $val *= 1024;
        case 'm': $val *= 1024;
        case 'k': $val *= 1024;
    }
    return $val;
}

// Función para analizar ticket con Claude
function analyzeWithClaude($imageData, $fileName, $apiKey) {
    debugLog("Iniciando análisis para archivo: $fileName");
    
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->buffer($imageData);
    $base64 = base64_encode($imageData);
    
    debugLog("Tipo MIME detectado: $mimeType");
    debugLog("Tamaño de imagen en base64: " . strlen($base64) . " caracteres");
    
    $payload = [
        'model' => 'claude-3-sonnet-20240229',
        'max_tokens' => 4000,
        'messages' => [
            [
                'role' => 'user',
                'content' => [
                    [
                        'type' => 'text',
                        'text' => 'Analiza este ticket y responde SOLO con JSON válido:
{
  "tipo_ticket": "gasolinera|restaurante|farmacia|supermercado|otro",
  "confianza": 0.95,
  "establecimiento": "nombre del negocio",
  "fecha": "YYYY-MM-DD",
  "total": 150.50,
  "productos": [
    {"nombre": "producto", "cantidad": 1, "precio": 50.00}
  ],
  "detalles_especificos": {}
}'
                    ],
                    [
                        'type' => 'image',
                        'source' => [
                            'type' => 'base64',
                            'media_type' => $mimeType,
                            'data' => $base64
                        ]
                    ]
                ]
            ]
        ]
    ];

    debugLog("Enviando solicitud a Claude API...");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.anthropic.com/v1/messages');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'x-api-key: ' . $apiKey,
        'anthropic-version: 2023-06-01'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    debugLog("Respuesta Claude - HTTP Code: $httpCode");
    
    if ($curlError) {
        debugLog("Error cURL: $curlError");
        throw new Exception("Error cURL: $curlError");
    }

    if ($httpCode !== 200) {
        debugLog("Error HTTP $httpCode - Respuesta: $response");
        $errorData = json_decode($response, true);
        $errorMsg = $errorData['error']['message'] ?? 'Error desconocido';
        throw new Exception("Claude API Error: $httpCode - $errorMsg");
    }

    debugLog("Respuesta exitosa de Claude API");
    $data = json_decode($response, true);
    
    if (!$data || !isset($data['content'][0]['text'])) {
        debugLog("Respuesta inválida: " . substr($response, 0, 500));
        throw new Exception("Respuesta inválida de Claude API");
    }
    
    $content = $data['content'][0]['text'];
    debugLog("Contenido recibido: " . substr($content, 0, 200) . "...");
    
    // Extraer JSON
    preg_match('/\{.*\}/s', $content, $matches);
    if (!$matches) {
        debugLog("No se encontró JSON en: $content");
        throw new Exception("No se encontró JSON válido en la respuesta");
    }
    
    $jsonResult = json_decode($matches[0], true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        debugLog("Error JSON: " . json_last_error_msg() . " - Content: " . $matches[0]);
        throw new Exception("Error parseando JSON: " . json_last_error_msg());
    }
    
    debugLog("JSON parseado exitosamente para $fileName");
    return $jsonResult;
}

// Endpoint para obtener datos de sesión via AJAX
if (isset($_GET['get_session_data'])) {
    header('Content-Type: application/json');
    echo json_encode($_SESSION['results'] ?? []);
    exit;
}

// Procesar archivos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'analyze') {
        debugLog("=== INICIANDO PROCESAMIENTO PHP ===");
        debugLog("FILES recibidos: " . print_r($_FILES, true));
        
        $results = [];
        
        if (!isset($_FILES['files']) || !isset($_FILES['files']['tmp_name'])) {
            debugLog("ERROR: No se encontró el array de archivos");
            header('Content-Type: application/json');
            echo json_encode([
                'results' => [],
                'debug_info' => ['error' => 'No se encontraron archivos en $_FILES'],
                'success' => false
            ]);
            exit;
        }
        
        $fileCount = is_array($_FILES['files']['tmp_name']) ? count($_FILES['files']['tmp_name']) : 1;
        debugLog("Total de archivos a procesar: $fileCount");
        
        // Asegurar que sea array
        $tmpNames = is_array($_FILES['files']['tmp_name']) ? $_FILES['files']['tmp_name'] : [$_FILES['files']['tmp_name']];
        $fileNames = is_array($_FILES['files']['name']) ? $_FILES['files']['name'] : [$_FILES['files']['name']];
        $fileErrors = is_array($_FILES['files']['error']) ? $_FILES['files']['error'] : [$_FILES['files']['error']];
        $fileSizes = is_array($_FILES['files']['size']) ? $_FILES['files']['size'] : [$_FILES['files']['size']];
        $fileTypes = is_array($_FILES['files']['type']) ? $_FILES['files']['type'] : [$_FILES['files']['type']];
        
        foreach ($tmpNames as $index => $tmpName) {
            $fileName = $fileNames[$index] ?? "archivo_$index";
            $fileError = $fileErrors[$index] ?? UPLOAD_ERR_OK;
            $fileSize = $fileSizes[$index] ?? 0;
            $fileMime = $fileTypes[$index] ?? 'unknown';
            
            debugLog("--- Procesando archivo $index: $fileName ---");
            debugLog("Temp path: $tmpName");
            debugLog("Upload error code: $fileError");
            
            // Explicar códigos de error específicos
            $uploadErrors = [
                UPLOAD_ERR_OK => 'Sin errores',
                UPLOAD_ERR_INI_SIZE => 'Archivo muy grande (upload_max_filesize)',
                UPLOAD_ERR_FORM_SIZE => 'Archivo muy grande (MAX_FILE_SIZE)',
                UPLOAD_ERR_PARTIAL => 'Upload parcial',
                UPLOAD_ERR_NO_FILE => 'No se subió archivo',
                UPLOAD_ERR_NO_TMP_DIR => 'No hay directorio temporal',
                UPLOAD_ERR_CANT_WRITE => 'Error escribiendo archivo',
                UPLOAD_ERR_EXTENSION => 'Extensión bloqueó upload'
            ];
            
            if (isset($uploadErrors[$fileError])) {
                debugLog("Significado del error: " . $uploadErrors[$fileError]);
            }
            
            debugLog("Límites PHP actuales:");
            debugLog("upload_max_filesize: " . ini_get('upload_max_filesize'));
            debugLog("post_max_size: " . ini_get('post_max_size'));
            debugLog("max_execution_time: " . ini_get('max_execution_time'));
            debugLog("File size: $fileSize bytes (" . round($fileSize / 1024 / 1024, 2) . " MB)");
            debugLog("MIME type: $fileMime");
            debugLog("Archivo existe en tmp: " . (file_exists($tmpName) ? 'SÍ' : 'NO'));
            
            // Verificar tamaño del archivo vs límites
            $uploadLimitBytes = ini_get('upload_max_filesize');
            $uploadLimitBytes = $uploadLimitBytes ? convertToBytes($uploadLimitBytes) : 0;
            debugLog("Límite upload_max_filesize en bytes: $uploadLimitBytes");
            debugLog("¿Archivo excede límite?: " . ($fileSize > $uploadLimitBytes ? 'SÍ' : 'NO'));
            
            if ($fileError !== UPLOAD_ERR_OK) {
                debugLog("ERROR: Upload error code $fileError para $fileName");
                $results[] = [
                    'file' => $fileName,
                    'status' => 'error',
                    'error' => "Error de upload: código $fileError"
                ];
                continue;
            }
            
            if (!file_exists($tmpName)) {
                debugLog("ERROR: Archivo temporal no existe: $tmpName");
                $results[] = [
                    'file' => $fileName,
                    'status' => 'error',
                    'error' => "Archivo temporal no encontrado"
                ];
                continue;
            }
            
            // Validaciones
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
            if (!in_array($fileMime, $allowedTypes)) {
                debugLog("ERROR: Tipo no soportado $fileMime para $fileName");
                $results[] = [
                    'file' => $fileName,
                    'status' => 'error',
                    'error' => "Tipo de archivo no soportado: $fileMime"
                ];
                continue;
            }
            
            if ($fileSize > 10 * 1024 * 1024) {
                debugLog("ERROR: Archivo muy grande ($fileSize bytes) para $fileName");
                $results[] = [
                    'file' => $fileName,
                    'status' => 'error',
                    'error' => "Archivo muy grande: " . round($fileSize / 1024 / 1024, 2) . "MB"
                ];
                continue;
            }
            
            debugLog("Archivo $fileName pasó todas las validaciones, iniciando análisis con Claude...");
            
            try {
                $imageData = file_get_contents($tmpName);
                debugLog("Datos de imagen leídos: " . strlen($imageData) . " bytes");
                
                $analysis = analyzeWithClaude($imageData, $fileName, $CLAUDE_API_KEY);
                
                $results[] = [
                    'file' => $fileName,
                    'status' => 'success',
                    'data' => $analysis
                ];
                
                $_SESSION['results'][] = [
                    'file' => $fileName,
                    'timestamp' => date('H:i:s'),
                    'data' => $analysis
                ];
                
                debugLog("✅ Análisis exitoso para $fileName");
                
            } catch (Exception $e) {
                $errorMsg = $e->getMessage();
                error_log("Error Claude API: " . $errorMsg);
                debugLog("❌ Error analizando $fileName: $errorMsg");
                
                $results[] = [
                    'file' => $fileName,
                    'status' => 'error',
                    'error' => $errorMsg,
                    'debug_info' => [
                        'file_size' => $fileSize,
                        'mime_type' => $fileMime,
                        'error_details' => $errorMsg
                    ]
                ];
            }
        }
        
        debugLog("=== PROCESAMIENTO COMPLETADO ===");
        debugLog("Total procesados: " . count($results));
        debugLog("Exitosos: " . count(array_filter($results, fn($r) => $r['status'] === 'success')));
        debugLog("Errores: " . count(array_filter($results, fn($r) => $r['status'] === 'error')));
        
        header('Content-Type: application/json');
        
        // Agregar debug info adicional
        $debugInfo = [
            'total_files_received' => count($_FILES['files']['tmp_name']),
            'total_processed' => count($results),
            'successful_analyses' => count(array_filter($results, fn($r) => $r['status'] === 'success')),
            'errors_count' => count(array_filter($results, fn($r) => $r['status'] === 'error')),
            'php_errors' => error_get_last()
        ];
        
        echo json_encode([
            'results' => $results,
            'debug_info' => $debugInfo,
            'success' => count($results) > 0
        ]);
        exit;
    }
    
    if ($_POST['action'] === 'reset') {
        $_SESSION['results'] = [];
        header('Location: ' . $_SERVER['PHP_SELF'] . '?reset=' . time());
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketBot - Análisis Inteligente</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --success-green: #10b981;
            --error-red: #ef4444;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }
        
        .header {
            background: white;
            padding: 1rem 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-bottom: 2px solid rgba(253, 97, 68, 0.1);
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-title {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-reset {
            background: var(--aloia-gradient);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .btn-reset:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(253, 50, 68, 0.3);
        }
        
        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        .panel {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .upload-zone {
            border: 3px dashed #e2e8f0;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 1.5rem;
        }
        
        .upload-zone:hover {
            border-color: var(--aloia-orange);
            background: rgba(253, 97, 68, 0.02);
            transform: translateY(-2px);
        }
        
        .upload-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .upload-text {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }
        
        .upload-subtext {
            color: #64748b;
            margin-bottom: 1rem;
        }
        
        .file-input {
            display: none;
        }
        
        .btn-upload {
            background: var(--aloia-gradient);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .btn-upload:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(253, 50, 68, 0.3);
        }
        
        .files-list {
            margin-bottom: 1.5rem;
            max-height: 200px;
            overflow-y: auto;
        }
        
        .file-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem;
            background: #f8fafc;
            border-radius: 8px;
            margin-bottom: 0.5rem;
        }
        
        .file-name {
            font-weight: 600;
            color: #1e293b;
        }
        
        .file-status {
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .status-pending { background: #fef3c7; color: #92400e; }
        .status-processing { background: #dbeafe; color: #1e40af; }
        .status-success { background: #d1fae5; color: #065f46; }
        .status-error { background: #fee2e2; color: #991b1b; }
        
        .btn-process {
            width: 100%;
            background: var(--aloia-gradient);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 1.1rem;
        }
        
        .btn-process:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .btn-process:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(253, 50, 68, 0.4);
        }
        
        .results-section {
            margin-top: 2rem;
        }
        
        .result-item {
            background: #f8fafc;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .result-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .result-filename {
            font-weight: 600;
            color: #1e293b;
        }
        
        .result-type {
            background: var(--aloia-gradient);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .result-data {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.5rem;
            margin-top: 0.75rem;
        }
        
        .data-field {
            background: white;
            padding: 0.5rem;
            border-radius: 4px;
        }
        
        .field-label {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .field-value {
            font-weight: 600;
            color: #1e293b;
            margin-top: 0.25rem;
        }
        
        .btn-download {
            background: var(--success-green);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 1rem;
        }
        
        .btn-download:hover {
            background: #059669;
            transform: translateY(-1px);
        }
        
        /* Debug Console */
        .debug-console {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #1e293b;
            color: #e2e8f0;
            max-height: 250px;
            border-top: 2px solid var(--aloia-orange);
            z-index: 1000;
        }
        
        .debug-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            background: #0f172a;
            border-bottom: 1px solid #334155;
        }
        
        .debug-title {
            font-size: 0.875rem;
            color: var(--aloia-orange);
            font-weight: 600;
        }
        
        .debug-content {
            max-height: 200px;
            overflow-y: auto;
            padding: 0.5rem;
        }
        
        .debug-entry {
            font-family: 'Courier New', monospace;
            font-size: 0.75rem;
            padding: 0.25rem 0;
            border-bottom: 1px solid #334155;
        }
        
        .debug-time {
            color: #94a3b8;
            margin-right: 0.5rem;
        }
        
        .debug-level {
            font-weight: 700;
            margin-right: 0.5rem;
        }
        
        .debug-level.info { color: #3b82f6; }
        .debug-level.success { color: #10b981; }
        .debug-level.error { color: #ef4444; }
        .debug-level.warning { color: #f59e0b; }
        
        .processing-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }
        
        .processing-modal {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f4f6;
            border-top: 4px solid var(--aloia-orange);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @media (max-width: 768px) {
            .main-container {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin: 1rem auto;
            }
            
            .panel {
                padding: 1rem;
            }
            
            .upload-zone {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-content">
            <h1 class="header-title">🎫 TicketBot - Análisis Inteligente</h1>
            <form method="post" style="display: inline;">
                <input type="hidden" name="action" value="reset">
                <button type="submit" class="btn-reset">🔄 Reset</button>
            </form>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Upload Panel -->
        <div class="panel">
            <h2>📤 Subir Tickets</h2>
            <p style="color: #64748b; margin-bottom: 1.5rem;">
                Arrastra o selecciona tus tickets para análisis automático con Claude AI
            </p>

            <form id="uploadForm" enctype="multipart/form-data">
                <div class="upload-zone" onclick="document.getElementById('fileInput').click()">
                    <div class="upload-icon">📄</div>
                    <div class="upload-text">Arrastra tus tickets aquí</div>
                    <div class="upload-subtext">JPG, PNG, PDF • Máx. <?= ini_get('upload_max_filesize') ?> por archivo</div>
                    <input type="file" id="fileInput" name="files[]" class="file-input" multiple accept=".jpg,.jpeg,.png,.pdf">
                    <button type="button" class="btn-upload">📁 Seleccionar Archivos</button>
                </div>

                <div class="files-list" id="filesList"></div>

                <button type="button" class="btn-process" id="processBtn" disabled>
                    🚀 Analizar Tickets
                </button>
            </form>
        </div>

        <!-- Results Panel -->
        <div class="panel">
            <h2>📊 Resultados</h2>
            <p style="color: #64748b; margin-bottom: 1.5rem;">
                Información extraída automáticamente de tus tickets
            </p>

            <div id="resultsContainer">
                <?php if (!empty($_SESSION['results'])): ?>
                    <?php foreach ($_SESSION['results'] as $result): ?>
                        <div class="result-item">
                            <div class="result-header">
                                <span class="result-filename"><?= htmlspecialchars($result['file']) ?></span>
                                <span class="result-type"><?= strtoupper($result['data']['tipo_ticket'] ?? 'DESCONOCIDO') ?></span>
                            </div>
                            <div class="result-data">
                                <div class="data-field">
                                    <div class="field-label">Establecimiento</div>
                                    <div class="field-value"><?= htmlspecialchars($result['data']['establecimiento'] ?? '-') ?></div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Total</div>
                                    <div class="field-value">$<?= number_format($result['data']['total'] ?? 0, 2) ?></div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Fecha</div>
                                    <div class="field-value"><?= htmlspecialchars($result['data']['fecha'] ?? '-') ?></div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Productos</div>
                                    <div class="field-value"><?= count($result['data']['productos'] ?? []) ?> items</div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <button class="btn-download" onclick="downloadExcelFromResults()">
                        📥 Descargar Excel
                    </button>
                <?php else: ?>
                    <p style="text-align: center; color: #64748b; padding: 2rem;">
                        No hay resultados para mostrar. Sube algunos tickets para comenzar.
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Processing Overlay -->
    <div class="processing-overlay" id="processingOverlay">
        <div class="processing-modal">
            <div class="spinner"></div>
            <h3>Analizando tickets...</h3>
            <p>Claude AI está extrayendo la información</p>
        </div>
    </div>

    <!-- Debug Console -->
    <div class="debug-console">
        <div class="debug-header">
            <div class="debug-title">🔧 Debug Console</div>
        </div>
        <div class="debug-content" id="debugContent"></div>
    </div>

    <!-- SheetJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
        let selectedFiles = [];

        // Debug function
        function debugLog(message, level = 'info') {
            const timestamp = new Date().toLocaleTimeString();
            const debugContent = document.getElementById('debugContent');
            
            const entry = document.createElement('div');
            entry.className = 'debug-entry';
            entry.innerHTML = `
                <span class="debug-time">[${timestamp}]</span>
                <span class="debug-level ${level}">${level.toUpperCase()}</span>
                <span>${message}</span>
            `;
            
            debugContent.appendChild(entry);
            debugContent.scrollTop = debugContent.scrollHeight;
            
            // Keep only last 100 entries (no borrar tan rápido)
            while (debugContent.children.length > 100) {
                debugContent.removeChild(debugContent.firstChild);
            }
        }

        // File handling
        const fileInput = document.getElementById('fileInput');
        const filesList = document.getElementById('filesList');
        const processBtn = document.getElementById('processBtn');

        fileInput.addEventListener('change', handleFileSelect);

        function handleFileSelect(e) {
            const files = Array.from(e.target.files);
            debugLog(`Seleccionados ${files.length} archivos`);
            
            selectedFiles = files.filter(file => {
                // Validate type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
                if (!validTypes.includes(file.type)) {
                    debugLog(`Archivo rechazado: ${file.name} (tipo no válido)`, 'error');
                    return false;
                }
                
                // Validate size - usar límite real de PHP
                const maxSize = <?= convertToBytes(ini_get('upload_max_filesize')) ?>;
                if (file.size > maxSize) {
                    debugLog(`Archivo rechazado: ${file.name} (${Math.round(file.size/1024/1024)} MB > ${Math.round(maxSize/1024/1024)} MB)`, 'error');
                    return false;
                }
                
                return true;
            });
            
            renderFilesList();
            updateProcessButton();
        }

        function renderFilesList() {
            if (selectedFiles.length === 0) {
                filesList.innerHTML = '';
                return;
            }

            filesList.innerHTML = selectedFiles.map(file => `
                <div class="file-item">
                    <span class="file-name">${file.name}</span>
                    <span class="file-status status-pending">Pendiente</span>
                </div>
            `).join('');
        }

        function updateProcessButton() {
            processBtn.disabled = selectedFiles.length === 0;
            processBtn.textContent = selectedFiles.length > 0 
                ? `🚀 Analizar ${selectedFiles.length} Ticket${selectedFiles.length > 1 ? 's' : ''}`
                : '🚀 Analizar Tickets';
        }

        // Process files
        processBtn.addEventListener('click', async function() {
            if (selectedFiles.length === 0) return;

            debugLog('=== INICIANDO ANÁLISIS ===');
            
            const overlay = document.getElementById('processingOverlay');
            overlay.style.display = 'flex';
            processBtn.disabled = true;

            const formData = new FormData();
            formData.append('action', 'analyze');
            
            selectedFiles.forEach(file => {
                formData.append('files[]', file);
            });

            try {
                debugLog('Enviando archivos al servidor...');
                
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}`);
                }

                const result = await response.json();
                debugLog(`Respuesta completa del servidor:`, 'info');
                debugLog(JSON.stringify(result, null, 2), 'info');
                debugLog(`Respuesta recibida: ${result.results ? result.results.length : 'SIN RESULTS'} resultados`);

                if (!result.results || result.results.length === 0) {
                    debugLog('❌ No se recibieron resultados válidos del servidor', 'error');
                    if (result.errors && result.errors.length > 0) {
                        result.errors.forEach(error => {
                            debugLog(`Error del servidor: ${error}`, 'error');
                        });
                    }
                    alert('No se pudieron procesar los archivos. Ver consola de debug.');
                    return;
                }

                // Update file statuses
                const fileItems = document.querySelectorAll('.file-item');
                result.results.forEach((res, index) => {
                    if (fileItems[index]) {
                        const statusEl = fileItems[index].querySelector('.file-status');
                        if (res.status === 'success') {
                            statusEl.className = 'file-status status-success';
                            statusEl.textContent = 'Completado';
                            debugLog(`✅ ${res.file} analizado correctamente`, 'success');
                        } else {
                            statusEl.className = 'file-status status-error';
                            statusEl.textContent = 'Error';
                            debugLog(`❌ Error en ${res.file}: ${res.error}`, 'error');
                        }
                    }
                });

                debugLog('=== ANÁLISIS COMPLETADO ===', 'success');
                
                // Mostrar resultados sin recargar
                displayResults(result.results);
                
                // Limpiar archivos seleccionados
                selectedFiles = [];
                fileInput.value = '';
                renderFilesList();
                updateProcessButton();

            } catch (error) {
                debugLog(`Error: ${error.message}`, 'error');
                alert('Error procesando los archivos. Ver consola de debug.');
            } finally {
                overlay.style.display = 'none';
                processBtn.disabled = false;
            }
        });

        // Display results dynamically
        function displayResults(results) {
            const resultsContainer = document.getElementById('resultsContainer');
            
            if (results.length === 0) {
                resultsContainer.innerHTML = `
                    <p style="text-align: center; color: #64748b; padding: 2rem;">
                        No se pudieron analizar los tickets. Ver consola de debug para más detalles.
                    </p>
                `;
                return;
            }

            let resultsHTML = '';
            let hasSuccess = false;

            results.forEach(result => {
                if (result.status === 'success') {
                    hasSuccess = true;
                    const data = result.data;
                    resultsHTML += `
                        <div class="result-item">
                            <div class="result-header">
                                <span class="result-filename">${result.file}</span>
                                <span class="result-type">${(data.tipo_ticket || 'DESCONOCIDO').toUpperCase()}</span>
                            </div>
                            <div class="result-data">
                                <div class="data-field">
                                    <div class="field-label">Establecimiento</div>
                                    <div class="field-value">${data.establecimiento || '-'}</div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Total</div>
                                    <div class="field-value">${(data.total || 0).toLocaleString('es-MX', {minimumFractionDigits: 2})}</div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Fecha</div>
                                    <div class="field-value">${data.fecha || '-'}</div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Productos</div>
                                    <div class="field-value">${(data.productos || []).length} items</div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Confianza</div>
                                    <div class="field-value">${Math.round((data.confianza || 0.8) * 100)}%</div>
                                </div>
                                <div class="data-field">
                                    <div class="field-label">Detalles</div>
                                    <div class="field-value">${Object.keys(data.detalles_especificos || {}).length} campos extra</div>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    resultsHTML += `
                        <div class="result-item" style="border-left: 4px solid #ef4444;">
                            <div class="result-header">
                                <span class="result-filename">${result.file}</span>
                                <span class="result-type" style="background: #ef4444;">ERROR</span>
                            </div>
                            <p style="color: #ef4444; margin-top: 0.5rem; font-size: 0.875rem;">
                                ${result.error}
                            </p>
                        </div>
                    `;
                }
            });

            if (hasSuccess) {
                resultsHTML += `
                    <button class="btn-download" onclick="downloadExcelFromResults()">
                        📥 Descargar Excel
                    </button>
                `;
            }

            resultsContainer.innerHTML = resultsHTML;
        }

        // Download Excel from current results
        function downloadExcelFromResults() {
            debugLog('Generando Excel desde resultados actuales...');
            
            // Obtener datos de la sesión PHP via AJAX
            fetch(window.location.href + '?get_session_data=1')
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        alert('No hay datos para exportar');
                        return;
                    }

                    const workbook = XLSX.utils.book_new();
                    
                    // Hoja de resumen
                    const summary = data.map(item => ({
                        'Archivo': item.file,
                        'Tipo': item.data.tipo_ticket || 'desconocido',
                        'Establecimiento': item.data.establecimiento || '-',
                        'Total': item.data.total || 0,
                        'Fecha': item.data.fecha || '-',
                        'Productos': (item.data.productos || []).length
                    }));
                    
                    const ws = XLSX.utils.json_to_sheet(summary);
                    XLSX.utils.book_append_sheet(workbook, ws, 'Resumen');
                    
                    // Hoja de productos
                    const products = [];
                    data.forEach(item => {
                        if (item.data.productos) {
                            item.data.productos.forEach(prod => {
                                products.push({
                                    'Archivo': item.file,
                                    'Establecimiento': item.data.establecimiento || '-',
                                    'Producto': prod.nombre || '-',
                                    'Cantidad': prod.cantidad || 0,
                                    'Precio': prod.precio || 0
                                });
                            });
                        }
                    });
                    
                    if (products.length > 0) {
                        const ws2 = XLSX.utils.json_to_sheet(products);
                        XLSX.utils.book_append_sheet(workbook, ws2, 'Productos');
                    }
                    
                    const fileName = `TicketBot_${new Date().toISOString().slice(0,10)}.xlsx`;
                    XLSX.writeFile(workbook, fileName);
                    
                    debugLog(`Excel descargado: ${fileName}`, 'success');
                })
                .catch(error => {
                    debugLog(`Error descargando Excel: ${error.message}`, 'error');
                    alert('Error generando Excel');
                });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            debugLog('TicketBot inicializado correctamente');
            
            // Drag and drop
            const uploadZone = document.querySelector('.upload-zone');
            
            uploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadZone.style.borderColor = 'var(--aloia-orange)';
            });
            
            uploadZone.addEventListener('dragleave', () => {
                uploadZone.style.borderColor = '#e2e8f0';
            });
            
            uploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadZone.style.borderColor = '#e2e8f0';
                
                const files = Array.from(e.dataTransfer.files);
                fileInput.files = e.dataTransfer.files;
                handleFileSelect({ target: { files } });
            });
        });
    </script>
</body>
</html>