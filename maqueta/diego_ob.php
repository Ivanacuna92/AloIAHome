<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor ASC a Excel</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --aloia-light-bg: #f9fafb;
            --aloia-light-accent: #f3f4f6;
        }
        
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden !important;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .page-wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        
        header {
            flex: 0 0 auto;
            height: 50px;
            display: flex;
            align-items: center;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            z-index: 10;
            border-bottom: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        main {
            flex: 1 1 auto;
            display: flex;
            align-items: stretch;
            overflow: hidden;
            position: relative;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .main-container {
            display: flex;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .left-column {
            width: 45%;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow-y: auto;
            overflow-x: hidden;
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            border-radius: 0 0 0 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        
        .right-column {
            width: 55%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.02) 0%, rgba(174, 58, 141, 0.02) 100%);
        }
        
        .converter-wrapper {
            width: 100%;
            height: 100%;
            max-width: 550px;
            max-height: 100%;
            transition: all 0.3s ease;
        }
        
        .converter-container {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background: white;
            width: 100%;
            border: 1px solid rgba(253, 97, 68, 0.1);
            display: flex;
            flex-direction: column;
        }
        
        .converter-header {
            padding: 1.5rem;
            background: var(--aloia-gradient);
            color: white;
            text-align: center;
        }
        
        .converter-body {
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .upload-area {
            border: 2px dashed #ddd;
            padding: 2rem;
            text-align: center;
            margin: 1rem 0;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(253, 97, 68, 0.02);
        }
        
        .upload-area:hover, .upload-area.dragover {
            border-color: var(--aloia-orange);
            background: rgba(253, 97, 68, 0.05);
            transform: translateY(-2px);
        }
        
        .upload-icon {
            font-size: 3rem;
            color: var(--aloia-orange);
            margin-bottom: 1rem;
        }
        
        .gradient-text {
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-primary {
            background: var(--aloia-gradient);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.2);
            font-size: 1rem;
            width: 100%;
            margin-top: 1rem;
        }
        
        .btn-primary:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(253, 50, 68, 0.3);
        }
        
        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        
        .badge {
            display: inline-block;
            background: rgba(253, 97, 68, 0.1);
            color: var(--aloia-red);
            padding: 0.2rem 0.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.7rem;
            margin-bottom: 0.25rem;
        }
        
        .content-section {
            margin-bottom: 0.75rem;
            background: rgba(255, 255, 255, 0.5);
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid rgba(253, 97, 68, 0.05);
        }
        
        .content-section h2 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #374151;
        }
        
        .content-section p {
            font-size: 0.8rem;
            color: #4b5563;
            margin-bottom: 0.5rem;
        }
        
        .process-steps {
            margin-top: 0.5rem;
        }
        
        .process-step {
            display: flex;
            margin-bottom: 0.5rem;
        }
        
        .step-number {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--aloia-gradient);
            color: white;
            font-size: 0.7rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            flex-shrink: 0;
            box-shadow: 0 2px 5px rgba(253, 50, 68, 0.2);
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-title {
            font-weight: 600;
            font-size: 0.75rem;
            margin-bottom: 0.1rem;
        }
        
        .step-description {
            font-size: 0.7rem;
            color: #6b7280;
        }
        
        .file-info {
            background: rgba(253, 97, 68, 0.05);
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            border-left: 4px solid var(--aloia-orange);
        }
        
        .file-name {
            font-weight: 600;
            color: var(--aloia-red);
            margin-bottom: 0.5rem;
        }
        
        .file-size {
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        .success-message, .error-message {
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            text-align: center;
        }
        
        .success-message {
            background: rgba(34, 197, 94, 0.1);
            color: #15803d;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .error-message {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
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
        
        /* Media queries para móviles */
        @media (max-width: 1023px) {
            .main-container {
                flex-direction: column;
            }
            
            .left-column, .right-column {
                width: 100%;
                padding: 0.75rem;
            }
            
            .left-column {
                height: 30%;
                min-height: 200px;
                overflow-y: auto;
                border-radius: 0;
            }
            
            .right-column {
                height: 70%;
                min-height: 400px;
                padding: 0.5rem;
            }
            
            .converter-wrapper {
                max-width: 100%;
                height: 100%;
            }
        }
        
        @media (max-width: 767px) {
            .converter-body {
                padding: 1rem;
            }
            
            .upload-area {
                padding: 1.5rem;
            }
            
            .upload-icon {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <header>
            <div class="container">
                <div style="display: flex; align-items: center;">
                    <h1 class="gradient-text" style="margin: 0; font-size: 1.2rem;">🔄 ASC to Excel Converter</h1>
                </div>
            </div>
        </header>
        
        <main>
            <div class="main-container">
                <div class="left-column">
                    <div class="badge">Información del Proceso</div>
                    <h1 class="gradient-text" style="font-size: 1.5rem; margin-bottom: 1rem;">Convertidor de Archivos ASC</h1>
                    
                    <div class="content-section">
                        <h2>¿Qué hace esta herramienta?</h2>
                        <p>Convierte archivos .asc (delimitados por "|") a formato Excel (.xlsx) con formato profesional y columnas organizadas.</p>
                    </div>
                    
                    <div class="content-section">
                        <h2>Proceso de Conversión</h2>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <div class="step-title">Cargar Archivo</div>
                                    <div class="step-description">Selecciona tu archivo .asc desde tu computadora</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <div class="step-title">Procesar Datos</div>
                                    <div class="step-description">El sistema lee y analiza el contenido del archivo</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <div class="step-title">Generar Excel</div>
                                    <div class="step-description">Se crea un archivo Excel con formato profesional</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <div class="step-title">Descargar</div>
                                    <div class="step-description">Descarga automática del archivo convertido</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-section">
                        <h2>Características</h2>
                        <p>✅ Encabezados formateados con estilo</p>
                        <p>✅ Columnas auto-ajustadas al contenido</p>
                        <p>✅ Manejo de datos aduaneros especializados</p>
                        <p>✅ Compatible con archivos grandes</p>
                    </div>
                </div>
                
                <div class="right-column">
                    <div class="converter-wrapper">
                        <div class="converter-container">
                            <div class="converter-header">
                                <h2 style="margin: 0; font-size: 1.2rem;">📊 Conversor ASC → Excel</h2>
                                <p style="margin: 0.5rem 0 0 0; opacity: 0.9; font-size: 0.9rem;">Arrastra tu archivo o haz clic para seleccionar</p>
                            </div>
                            
                            <div class="converter-body">
                                <form id="converterForm" enctype="multipart/form-data">
                                    <div class="upload-area" onclick="document.getElementById('fileInput').click()" ondrop="handleDrop(event)" ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)">
                                        <div class="upload-icon">📁</div>
                                        <input type="file" id="fileInput" name="ascFile" accept=".asc" style="display: none;" onchange="handleFileSelect(event)">
                                        <p id="uploadText" style="margin: 0; color: #6b7280; font-size: 0.9rem;">
                                            <strong>Selecciona tu archivo .asc</strong><br>
                                            <small>o arrastra y suelta aquí</small>
                                        </p>
                                    </div>
                                    
                                    <div id="fileInfo" class="file-info hidden">
                                        <div class="file-name" id="fileName"></div>
                                        <div class="file-size" id="fileSize"></div>
                                    </div>
                                    
                                    <div id="successMessage" class="success-message hidden">
                                        <strong>✅ ¡Conversión exitosa!</strong><br>
                                        <span id="processedRows"></span><br>
                                        <a id="downloadLink" class="btn-primary" style="margin-top: 0.5rem; display: inline-block; text-decoration: none;">⬇️ Descargar Excel</a>
                                    </div>
                                    
                                    <div id="errorMessage" class="error-message hidden">
                                        <strong>❌ Error en la conversión</strong><br>
                                        <span id="errorText"></span>
                                    </div>
                                    
                                    <button type="submit" id="convertBtn" class="btn-primary" disabled>
                                        <span id="convertText">🚀 Convertir a Excel</span>
                                        <span id="loadingText" class="hidden">
                                            <span class="loading-spinner"></span>Procesando...
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        let selectedFile = null;

        // Manejar selección de archivo
        function handleFileSelect(event) {
            const file = event.target.files[0];
            if (file) {
                selectedFile = file;
                showFileInfo(file);
                document.getElementById('convertBtn').disabled = false;
            }
        }

        // Manejar drag and drop
        function handleDragOver(event) {
            event.preventDefault();
            event.currentTarget.classList.add('dragover');
        }

        function handleDragLeave(event) {
            event.currentTarget.classList.remove('dragover');
        }

        function handleDrop(event) {
            event.preventDefault();
            event.currentTarget.classList.remove('dragover');
            
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                const file = files[0];
                if (file.name.toLowerCase().endsWith('.asc')) {
                    selectedFile = file;
                    document.getElementById('fileInput').files = files;
                    showFileInfo(file);
                    document.getElementById('convertBtn').disabled = false;
                } else {
                    showError('Por favor selecciona un archivo .asc válido');
                }
            }
        }

        // Mostrar información del archivo
        function showFileInfo(file) {
            document.getElementById('fileName').textContent = `📄 ${file.name}`;
            document.getElementById('fileSize').textContent = `Tamaño: ${formatFileSize(file.size)}`;
            document.getElementById('fileInfo').classList.remove('hidden');
            document.getElementById('uploadText').innerHTML = '<strong style="color: var(--aloia-green);">✅ Archivo cargado correctamente</strong>';
            hideMessages();
        }

        // Formatear tamaño de archivo
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Manejar envío del formulario
        document.getElementById('converterForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            
            if (!selectedFile) {
                showError('Por favor selecciona un archivo .asc primero');
                return;
            }

            // Mostrar estado de carga
            showLoading(true);
            hideMessages();

            try {
                // Leer el archivo
                const fileContent = await readFileAsText(selectedFile);
                
                // Procesar el contenido
                const excelBlob = await convertToExcel(fileContent, selectedFile.name);
                
                // Crear enlace de descarga
                const url = URL.createObjectURL(excelBlob);
                const fileName = selectedFile.name.replace('.asc', '_convertido.xlsx');
                
                // Mostrar éxito y enlace de descarga
                showSuccess(fileName, url);
                
            } catch (error) {
                console.error('Error:', error);
                showError(error.message || 'Error al procesar el archivo');
            } finally {
                showLoading(false);
            }
        });

        // Leer archivo como texto
        function readFileAsText(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = event => resolve(event.target.result);
                reader.onerror = error => reject(error);
                reader.readAsText(file, 'UTF-8');
            });
        }

        // Convertir a Excel usando SheetJS
        async function convertToExcel(content, fileName) {
            // Cargar SheetJS si no está disponible
            if (typeof XLSX === 'undefined') {
                await loadSheetJS();
            }

            // Procesar el contenido
            const lines = content.split('\n').filter(line => line.trim());
            if (lines.length === 0) {
                throw new Error('El archivo está vacío o no tiene contenido válido');
            }

            // Convertir a array de arrays
            const data = lines.map(line => line.split('|').map(cell => cell.trim()));
            
            // Crear workbook
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);
            
            // Configurar anchos de columna
            const colWidths = [];
            if (data.length > 0) {
                for (let i = 0; i < data[0].length; i++) {
                    let maxWidth = 0;
                    for (let j = 0; j < Math.min(data.length, 100); j++) { // Solo revisar primeras 100 filas para performance
                        if (data[j] && data[j][i]) {
                            maxWidth = Math.max(maxWidth, data[j][i].toString().length);
                        }
                    }
                    colWidths.push({ wch: Math.min(maxWidth + 2, 50) }); // Máximo 50 caracteres
                }
                ws['!cols'] = colWidths;
            }

            // Agregar hoja al workbook
            XLSX.utils.book_append_sheet(wb, ws, 'Datos Convertidos');
            
            // Generar archivo Excel
            const excelBuffer = XLSX.write(wb, { bookType: 'xlsx', type: 'array' });
            return new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
        }

        // Cargar SheetJS dinámicamente
        function loadSheetJS() {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js';
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Mostrar estado de carga
        function showLoading(show) {
            document.getElementById('convertText').classList.toggle('hidden', show);
            document.getElementById('loadingText').classList.toggle('hidden', !show);
            document.getElementById('convertBtn').disabled = show;
        }

        // Mostrar éxito
        function showSuccess(fileName, downloadUrl) {
            const rows = selectedFile ? Math.max(0, selectedFile.size / 100) : 0; // Estimación aproximada
            document.getElementById('processedRows').textContent = `Archivo procesado: ${fileName}`;
            document.getElementById('downloadLink').href = downloadUrl;
            document.getElementById('downloadLink').download = fileName;
            document.getElementById('successMessage').classList.remove('hidden');
        }

        // Mostrar error
        function showError(message) {
            document.getElementById('errorText').textContent = message;
            document.getElementById('errorMessage').classList.remove('hidden');
        }

        // Ocultar mensajes
        function hideMessages() {
            document.getElementById('successMessage').classList.add('hidden');
            document.getElementById('errorMessage').classList.add('hidden');
        }
    </script>
</body>
</html>