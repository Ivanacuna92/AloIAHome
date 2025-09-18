<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar Plantilla Excel - AloiaQuote</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --success-green: #10b981;
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
            padding: 2rem;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .title {
            font-size: 2rem;
            font-weight: 700;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            color: #64748b;
            font-size: 1rem;
        }
        
        .preview-section {
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 1rem;
            border-left: 4px solid var(--aloia-orange);
            padding-left: 0.75rem;
        }
        
        .demo-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
        
        .demo-table th,
        .demo-table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #e2e8f0;
        }
        
        .demo-table th {
            background: var(--aloia-gradient);
            color: white;
            font-weight: 600;
        }
        
        .demo-table tbody tr:nth-child(even) {
            background: #f8fafc;
        }
        
        .priority-alta { color: #ef4444; font-weight: 600; }
        .priority-media { color: #f59e0b; font-weight: 600; }
        .priority-baja { color: #10b981; font-weight: 600; }
        
        .download-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .btn-download {
            background: var(--aloia-gradient);
            color: white;
            border: none;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 1.1rem;
            text-align: center;
        }
        
        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(253, 50, 68, 0.4);
        }
        
        .btn-csv {
            background: var(--success-green);
        }
        
        .btn-csv:hover {
            background: #059669;
        }
        
        .instructions {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 1.5rem;
            border-left: 4px solid var(--aloia-orange);
        }
        
        .instructions h3 {
            color: #1e293b;
            margin-bottom: 1rem;
        }
        
        .instructions ul {
            color: #64748b;
            line-height: 1.6;
        }
        
        .instructions li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">📊 Plantilla Demo - AloiaQuote</h1>
            <p class="subtitle">Descarga la plantilla de ejemplo para probar el generador de cotizaciones</p>
        </div>

        <div class="preview-section">
            <h2 class="section-title">Vista Previa de Datos</h2>
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Falla/Problema</th>
                        <th>Ubicación</th>
                        <th>Prioridad</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Transformador Principal 115kV</td>
                        <td>Ruido excesivo y vibración</td>
                        <td>Subestación Central - Patio A</td>
                        <td class="priority-alta">Alta</td>
                        <td>Posible aflojamiento de núcleo</td>
                    </tr>
                    <tr>
                        <td>Sistema de Protección Diferencial</td>
                        <td>Relevador 87T descalibrado</td>
                        <td>Tablero de Control Principal</td>
                        <td class="priority-alta">Alta</td>
                        <td>Requiere pruebas de inyección</td>
                    </tr>
                    <tr>
                        <td>Seccionador 23kV Tripolar</td>
                        <td>Oxidación en contactos móviles</td>
                        <td>Patio de Maniobras - Bahía 1</td>
                        <td class="priority-media">Media</td>
                        <td>Limpieza y lubricación</td>
                    </tr>
                    <tr>
                        <td>Interruptor de Potencia SF6</td>
                        <td>Fuga menor de gas SF6</td>
                        <td>Celda Principal 115kV</td>
                        <td class="priority-alta">Alta</td>
                        <td>Verificar sellos y presión</td>
                    </tr>
                    <tr>
                        <td>Tablero de Servicios Auxiliares</td>
                        <td>Sobrecalentamiento en contactores</td>
                        <td>Caseta de Control</td>
                        <td class="priority-media">Media</td>
                        <td>Reemplazo de contactores</td>
                    </tr>
                    <tr>
                        <td>Sistema de Tierra</td>
                        <td>Alta resistencia medida</td>
                        <td>Malla de tierra perimetral</td>
                        <td class="priority-media">Media</td>
                        <td>Medición con telurómetro</td>
                    </tr>
                    <tr>
                        <td>Banco de Capacitores</td>
                        <td>Capacitor C2 fuera de servicio</td>
                        <td>Patio 23kV - Lado Oeste</td>
                        <td class="priority-baja">Baja</td>
                        <td>Reemplazo programado</td>
                    </tr>
                    <tr>
                        <td>Sistema de Iluminación</td>
                        <td>Luminarias LED dañadas</td>
                        <td>Patio general</td>
                        <td class="priority-baja">Baja</td>
                        <td>50% de luminarias afectadas</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="download-buttons">
            <button class="btn-download" onclick="downloadExcel()">
                📊 Descargar Excel (.xlsx)
            </button>
            <button class="btn-download btn-csv" onclick="downloadCSV()">
                📄 Descargar CSV (.csv)
            </button>
        </div>

        <div class="instructions">
            <h3>📋 Instrucciones de Uso</h3>
            <ul>
                <li><strong>Descarga la plantilla</strong> en el formato que prefieras (Excel o CSV)</li>
                <li><strong>Completa los datos</strong> de tus equipos siguiendo el formato de las columnas</li>
                <li><strong>Sube el archivo</strong> en AloiaQuote para generar tu cotización automáticamente</li>
                <li><strong>Columnas requeridas:</strong> Equipo, Falla/Problema, Ubicación, Prioridad</li>
                <li><strong>Columna opcional:</strong> Observaciones (detalles adicionales)</li>
                <li><strong>Prioridades válidas:</strong> Alta, Media, Baja</li>
            </ul>
        </div>
    </div>

    <script>
        // Datos de ejemplo para la plantilla
        const demoData = [
            {
                "Equipo": "Transformador Principal 115kV",
                "Falla/Problema": "Ruido excesivo y vibración",
                "Ubicación": "Subestación Central - Patio A",
                "Prioridad": "Alta",
                "Observaciones": "Posible aflojamiento de núcleo"
            },
            {
                "Equipo": "Sistema de Protección Diferencial",  
                "Falla/Problema": "Relevador 87T descalibrado",
                "Ubicación": "Tablero de Control Principal",
                "Prioridad": "Alta",
                "Observaciones": "Requiere pruebas de inyección"
            },
            {
                "Equipo": "Seccionador 23kV Tripolar",
                "Falla/Problema": "Oxidación en contactos móviles", 
                "Ubicación": "Patio de Maniobras - Bahía 1",
                "Prioridad": "Media",
                "Observaciones": "Limpieza y lubricación"
            },
            {
                "Equipo": "Interruptor de Potencia SF6",
                "Falla/Problema": "Fuga menor de gas SF6",
                "Ubicación": "Celda Principal 115kV", 
                "Prioridad": "Alta",
                "Observaciones": "Verificar sellos y presión"
            },
            {
                "Equipo": "Tablero de Servicios Auxiliares",
                "Falla/Problema": "Sobrecalentamiento en contactores",
                "Ubicación": "Caseta de Control",
                "Prioridad": "Media", 
                "Observaciones": "Reemplazo de contactores"
            },
            {
                "Equipo": "Sistema de Tierra",
                "Falla/Problema": "Alta resistencia medida",
                "Ubicación": "Malla de tierra perimetral",
                "Prioridad": "Media",
                "Observaciones": "Medición con telurómetro"
            },
            {
                "Equipo": "Banco de Capacitores", 
                "Falla/Problema": "Capacitor C2 fuera de servicio",
                "Ubicación": "Patio 23kV - Lado Oeste",
                "Prioridad": "Baja",
                "Observaciones": "Reemplazo programado"
            },
            {
                "Equipo": "Sistema de Iluminación",
                "Falla/Problema": "Luminarias LED dañadas", 
                "Ubicación": "Patio general",
                "Prioridad": "Baja",
                "Observaciones": "50% de luminarias afectadas"
            }
        ];

        function downloadExcel() {
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.json_to_sheet(demoData);
            
            // Establecer ancho de columnas
            const colWidths = [
                {wch: 35}, // Equipo
                {wch: 40}, // Falla/Problema  
                {wch: 35}, // Ubicación
                {wch: 12}, // Prioridad
                {wch: 40}  // Observaciones
            ];
            ws['!cols'] = colWidths;
            
            XLSX.utils.book_append_sheet(wb, ws, "Equipos_Mantenimiento");
            
            const fileName = `AloiaQuote_Plantilla_Demo_${new Date().toISOString().slice(0,10)}.xlsx`;
            XLSX.writeFile(wb, fileName);
            
            console.log(`✅ Excel descargado: ${fileName}`);
        }

        function downloadCSV() {
            const csvContent = convertToCSV(demoData);
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            
            if (link.download !== undefined) {
                const url = URL.createObjectURL(blob);
                link.setAttribute('href', url);
                link.setAttribute('download', `AloiaQuote_Plantilla_Demo_${new Date().toISOString().slice(0,10)}.csv`);
                link.style.visibility = 'hidden';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
            
            console.log('✅ CSV descargado');
        }

        function convertToCSV(data) {
            if (!data || data.length === 0) return '';
            
            const headers = Object.keys(data[0]);
            const csvHeaders = headers.join(',');
            
            const csvRows = data.map(row => {
                return headers.map(header => {
                    const value = row[header];
                    // Escapar comillas y envolver en comillas si contiene comas
                    return typeof value === 'string' && (value.includes(',') || value.includes('"')) 
                        ? `"${value.replace(/"/g, '""')}"` 
                        : value;
                }).join(',');
            });
            
            return [csvHeaders, ...csvRows].join('\n');
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            console.log('📊 Plantilla Demo AloiaQuote lista para descargar');
        });
    </script>
</body>
</html>