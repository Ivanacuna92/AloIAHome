<?php
session_start();

// Configuración
$max_file_size = 100 * 1024 * 1024; // 100MB máximo
$upload_dir = 'uploads/';
$compressed_dir = 'compressed/';

// Crear directorios si no existen
if (!file_exists($upload_dir)) {
    if (!mkdir($upload_dir, 0755, true)) {
        die("Error: No se pudo crear el directorio uploads/. Verifica los permisos.");
    }
}
if (!file_exists($compressed_dir)) {
    if (!mkdir($compressed_dir, 0755, true)) {
        die("Error: No se pudo crear el directorio compressed/. Verifica los permisos.");
    }
}

// Debug: Mostrar rutas absolutas
$message .= "\nDEBUG - Directorio actual: " . getcwd();
$message .= "\nDEBUG - Directorio uploads: " . realpath($upload_dir);
$message .= "\nDEBUG - Directorio compressed: " . realpath($compressed_dir);

$message = '';
$download_link = '';

// DEBUG: Mostrar info del sistema
if (isset($_GET['debug'])) {
    echo "<pre>";
    echo "Directorio actual: " . getcwd() . "\n";
    echo "Usuario web: " . get_current_user() . "\n";
    echo "Permisos uploads: " . (is_writable($upload_dir) ? 'Escribible' : 'No escribible') . "\n";
    echo "Permisos compressed: " . (is_writable($compressed_dir) ? 'Escribible' : 'No escribible') . "\n";
    echo "ZipArchive disponible: " . (class_exists('ZipArchive') ? 'Sí' : 'No') . "\n";
    echo "</pre>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    
    // DEBUG: Mostrar info del archivo subido
    $debug_info = "DEBUG - Información del archivo:\n";
    $debug_info .= "Nombre: " . $file['name'] . "\n";
    $debug_info .= "Tamaño: " . $file['size'] . " bytes\n";
    $debug_info .= "Tipo: " . $file['type'] . "\n";
    $debug_info .= "Error: " . $file['error'] . "\n";
    $debug_info .= "Archivo temporal: " . $file['tmp_name'] . "\n";
    
    // Validaciones
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $message = "Error al subir el archivo. Código de error: " . $file['error'] . "\n" . $debug_info;
    } elseif ($file['size'] > $max_file_size) {
        $message = "El archivo es demasiado grande. Máximo 100MB.\n" . $debug_info;
    } else {
        $original_name = $file['name'];
        $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);
        $base_name = pathinfo($original_name, PATHINFO_FILENAME);
        
        // Generar nombre único
        $unique_id = uniqid();
        $uploaded_file = $upload_dir . $unique_id . '_' . $original_name;
        
        if (move_uploaded_file($file['tmp_name'], $uploaded_file)) {
            $debug_info .= "Archivo subido exitosamente a: " . $uploaded_file . "\n";
            $debug_info .= "Archivo existe: " . (file_exists($uploaded_file) ? 'Sí' : 'No') . "\n";
            
            $compression_type = $_POST['compression_type'] ?? 'zip';
            $compression_level = intval($_POST['compression_level'] ?? 6);
            
            $debug_info .= "Tipo de compresión: " . $compression_type . "\n";
            $debug_info .= "Nivel de compresión: " . $compression_level . "\n";
            
            $compressed_file = '';
            $success = false;
            
            try {
                switch ($compression_type) {
                    case 'zip':
                        $compressed_file = $compressed_dir . $unique_id . '_' . $base_name . '_compressed.zip';
                        $debug_info .= "Intentando crear ZIP: " . $compressed_file . "\n";
                        $success = createZip($uploaded_file, $compressed_file, $compression_level, $original_name);
                        $debug_info .= "Resultado createZip: " . ($success ? 'Éxito' : 'Falló') . "\n";
                        break;
                        
                    case 'gzip':
                        $compressed_file = $compressed_dir . $unique_id . '_' . $base_name . '_compressed.gz';
                        $success = createGzip($uploaded_file, $compressed_file, $compression_level);
                        break;
                        
                    case '7z':
                        $compressed_file = $compressed_dir . $unique_id . '_' . $base_name . '_compressed.7z';
                        $success = create7z($uploaded_file, $compressed_file, $compression_level);
                        break;
                }
                
                if ($success && file_exists($compressed_file)) {
                    $original_size = filesize($uploaded_file);
                    $compressed_size = filesize($compressed_file);
                    $reduction = round((($original_size - $compressed_size) / $original_size) * 100, 2);
                    
                    $message = "¡Compresión exitosa! 
                               Tamaño original: " . formatBytes($original_size) . "
                               Tamaño comprimido: " . formatBytes($compressed_size) . "
                               Reducción: {$reduction}%
                               
                               " . $debug_info;
                    
                    $download_link = basename($compressed_file);
                    
                    // Limpiar archivo original
                    unlink($uploaded_file);
                } else {
                    $message = "Error durante la compresión.
                               
                               " . $debug_info . "
                               
                               Archivo comprimido esperado: " . $compressed_file . "
                               Archivo comprimido existe: " . (file_exists($compressed_file) ? 'Sí' : 'No');
                }
                
            } catch (Exception $e) {
                $message = "Error: " . $e->getMessage();
            }
        } else {
            $message = "Error al guardar el archivo subido.\n" . $debug_info;
        }
    }
}

// Función para crear ZIP
function createZip($source_file, $destination, $level, $original_name) {
    if (!class_exists('ZipArchive')) {
        error_log("ZipArchive class not found");
        return false;
    }
    
    $zip = new ZipArchive();
    $result = $zip->open($destination, ZipArchive::CREATE);
    
    if ($result === TRUE) {
        $add_result = $zip->addFile($source_file, $original_name);
        if ($add_result) {
            $zip->setCompressionIndex(0, ZipArchive::CM_DEFLATE, $level);
            $close_result = $zip->close();
            error_log("ZIP created: $destination, close result: " . ($close_result ? 'success' : 'failed'));
            return $close_result;
        } else {
            error_log("Failed to add file to ZIP: $source_file");
            $zip->close();
            return false;
        }
    } else {
        error_log("Failed to create ZIP file: $destination, error code: $result");
        return false;
    }
}

// Función para crear GZIP
function createGzip($source_file, $destination, $level) {
    $data = file_get_contents($source_file);
    $compressed = gzencode($data, $level);
    return file_put_contents($destination, $compressed) !== false;
}

// Función para crear 7Z (requiere 7zip instalado)
function create7z($source_file, $destination, $level) {
    $command = "7z a -mx={$level} " . escapeshellarg($destination) . " " . escapeshellarg($source_file);
    exec($command . " 2>&1", $output, $return_code);
    return $return_code === 0;
}

// Función para formatear bytes
function formatBytes($size, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    for ($i = 0; $size > 1024 && $i < count($units) - 1; $i++) {
        $size /= 1024;
    }
    return round($size, $precision) . ' ' . $units[$i];
}

// Limpiar archivos antiguos (más de 1 hora) - COMENTADO PARA DEBUG
/*
$directories = [$upload_dir, $compressed_dir];
foreach ($directories as $dir) {
    if (is_dir($dir)) {
        $files = glob($dir . '*');
        foreach ($files as $file) {
            if (is_file($file) && time() - filemtime($file) > 3600) {
                unlink($file);
            }
        }
    }
}
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compresor de Archivos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }
        
        .upload-area {
            border: 3px dashed #667eea;
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .upload-area:hover {
            border-color: #764ba2;
            background: #f8f9ff;
        }
        
        .upload-area.dragover {
            border-color: #764ba2;
            background: #f0f8ff;
            transform: scale(1.02);
        }
        
        #file-input {
            display: none;
        }
        
        .upload-text {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 10px;
        }
        
        .upload-subtext {
            color: #999;
            font-size: 0.9rem;
        }
        
        .options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .option-group {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        
        .option-group h3 {
            margin-bottom: 15px;
            color: #333;
            font-size: 1.1rem;
        }
        
        select, input[type="range"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        .level-display {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
            color: #667eea;
        }
        
        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
        }
        
        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            white-space: pre-line;
        }
        
        .message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .download-link {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 25px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        
        .download-link:hover {
            background: #218838;
        }
        
        .file-info {
            margin-top: 15px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 8px;
            font-size: 0.9rem;
            color: #495057;
        }
        
        @media (max-width: 768px) {
            .options {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🗜️ Compresor de Archivos</h1>
        
        <form method="POST" enctype="multipart/form-data" id="compress-form">
            <div class="upload-area" onclick="document.getElementById('file-input').click()">
                <input type="file" id="file-input" name="file" accept="*/*" required>
                <div class="upload-text">📁 Arrastra tu archivo aquí o haz clic para seleccionar</div>
                <div class="upload-subtext">Máximo 100MB - Todos los formatos soportados</div>
            </div>
            
            <div class="options">
                <div class="option-group">
                    <h3>Tipo de Compresión</h3>
                    <select name="compression_type" id="compression-type">
                        <option value="zip">ZIP (Recomendado)</option>
                        <option value="gzip">GZIP (Más rápido)</option>
                        <option value="7z">7Z (Mejor compresión)</option>
                    </select>
                </div>
                
                <div class="option-group">
                    <h3>Nivel de Compresión</h3>
                    <input type="range" name="compression_level" id="compression-level" 
                           min="1" max="9" value="6" oninput="updateLevelDisplay(this.value)">
                    <div class="level-display" id="level-display">Nivel 6 (Balanceado)</div>
                </div>
            </div>
            
            <button type="submit" class="submit-btn" id="submit-btn">
                🚀 Comprimir Archivo
            </button>
        </form>
        
        <?php if ($message): ?>
            <div class="message <?php echo strpos($message, 'Error') !== false ? 'error' : 'success'; ?>">
                <?php echo htmlspecialchars($message); ?>
                
                <?php if ($download_link): ?>
                    <a href="compressed/<?php echo htmlspecialchars($download_link); ?>" 
                       class="download-link" download>
                        ⬇️ Descargar Archivo Comprimido
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <script>
        const fileInput = document.getElementById('file-input');
        const uploadArea = document.querySelector('.upload-area');
        const form = document.getElementById('compress-form');
        const submitBtn = document.getElementById('submit-btn');
        
        // Drag and drop
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });
        
        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });
        
        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                updateFileInfo(files[0]);
            }
        });
        
        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                updateFileInfo(e.target.files[0]);
            }
        });
        
        function updateFileInfo(file) {
            const fileInfo = document.querySelector('.file-info');
            if (fileInfo) {
                fileInfo.remove();
            }
            
            const info = document.createElement('div');
            info.className = 'file-info';
            info.innerHTML = `
                <strong>Archivo seleccionado:</strong> ${file.name}<br>
                <strong>Tamaño:</strong> ${formatBytes(file.size)}<br>
                <strong>Tipo:</strong> ${file.type || 'Desconocido'}
            `;
            
            uploadArea.insertAdjacentElement('afterend', info);
        }
        
        function updateLevelDisplay(level) {
            const display = document.getElementById('level-display');
            const levels = {
                1: 'Nivel 1 (Más rápido)',
                2: 'Nivel 2 (Rápido)',
                3: 'Nivel 3 (Rápido)',
                4: 'Nivel 4 (Normal)',
                5: 'Nivel 5 (Normal)',
                6: 'Nivel 6 (Balanceado)',
                7: 'Nivel 7 (Bueno)',
                8: 'Nivel 8 (Mejor)',
                9: 'Nivel 9 (Máximo)'
            };
            display.textContent = levels[level];
        }
        
        function formatBytes(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Loading state
        form.addEventListener('submit', () => {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '⏳ Comprimiendo...';
        });
    </script>
</body>
</html>