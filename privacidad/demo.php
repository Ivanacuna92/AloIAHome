<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloia - Demo para Facebook Review</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --aloia-light-bg: #f9fafb;
            --aloia-light-accent: #f3f4f6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: var(--aloia-light-bg);
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(253, 97, 68, 0.05) 0%, transparent 70%),
                radial-gradient(circle at 90% 90%, rgba(174, 58, 141, 0.05) 0%, transparent 70%);
            min-height: 100vh;
            color: #374151;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        .header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        
        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        
        .subtitle {
            color: #6b7280;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .demo-badge {
            display: inline-block;
            background: var(--aloia-gradient);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.3);
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(253, 97, 68, 0.1);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card h3 {
            color: #1f2937;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .card h3::before {
            content: "";
            display: inline-block;
            width: 8px;
            height: 8px;
            background: var(--aloia-gradient);
            border-radius: 50%;
            margin-right: 0.5rem;
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.2);
        }
        
        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: var(--aloia-gradient);
            color: white;
            border-radius: 50%;
            font-weight: 700;
            margin-right: 1rem;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.3);
        }
        
        .code-block {
            background: #1f2937;
            color: #f9fafb;
            padding: 1.5rem;
            border-radius: 12px;
            overflow-x: auto;
            margin: 1rem 0;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            border: 1px solid rgba(253, 97, 68, 0.2);
        }
        
        .endpoint-demo {
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.05) 0%, rgba(174, 58, 141, 0.05) 100%);
            padding: 2rem;
            border-radius: 16px;
            margin: 2rem 0;
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .status-indicator {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin: 0.5rem 0;
        }
        
        .status-active {
            background: rgba(34, 197, 94, 0.1);
            color: #059669;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .btn-primary {
            background: var(--aloia-gradient);
            color: white;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(253, 50, 68, 0.4);
        }
        
        .btn-secondary {
            background: rgba(253, 97, 68, 0.1);
            color: var(--aloia-red);
            border: 1px solid rgba(253, 97, 68, 0.2);
        }
        
        .test-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin: 2rem 0;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--aloia-orange);
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.1);
        }
        
        .webhook-log {
            background: #000;
            color: #00ff00;
            padding: 1.5rem;
            border-radius: 12px;
            height: 300px;
            overflow-y: auto;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            border: 2px solid #333;
            margin: 1rem 0;
        }
        
        .credentials-box {
            background: rgba(255, 248, 220, 0.8);
            padding: 2rem;
            border-radius: 16px;
            border: 1px solid rgba(253, 97, 68, 0.2);
            margin: 2rem 0;
        }
        
        .credentials-box h4 {
            color: var(--aloia-red);
            margin-bottom: 1rem;
        }
        
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 1rem;
            }
            
            .logo {
                font-size: 2rem;
            }
            
            .card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Aloia</div>
            <div class="subtitle">Demostración para Facebook App Review</div>
            <div class="demo-badge">🚀 Demo Funcional - leads_retrieval</div>
        </div>
        
        <div class="grid">
            <div class="card">
                <h3><span class="step-number">1</span>Webhook Endpoint</h3>
                <p>Nuestro webhook está configurado para recibir leads de Facebook Lead Ads en tiempo real.</p>
                
                <div class="status-indicator status-active">
                    ✅ Webhook Activo
                </div>
                
                <div class="code-block">
URL: https://aloia.ai/crm/test_webhook.php
Método: POST
Content-Type: application/json
                </div>
                
                <a href="https://aloia.ai/crm/test_webhook.php" target="_blank" class="btn btn-secondary">Ver Console en Vivo</a>
            </div>
            
            <div class="card">
                <h3><span class="step-number">2</span>Procesamiento de Datos</h3>
                <p>El webhook procesa automáticamente los datos del lead y los almacena en nuestra base de datos.</p>
                
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li>Recibe el webhook de Facebook</li>
                    <li>Obtiene datos detallados via Graph API</li>
                    <li>Almacena en base de datos MySQL</li>
                    <li>Envía notificaciones opcionales</li>
                </ul>
                
                <div class="code-block">
Campos procesados:
- Nombre completo
- Email
- Teléfono  
- Empresa
- Mensaje adicional
                </div>
            </div>
            
            <div class="card">
                <h3><span class="step-number">3</span>Uso del Permiso</h3>
                <p>Utilizamos <code>leads_retrieval</code> para obtener datos completos de los formularios de lead ads.</p>
                
                <div class="code-block">
// Llamada a Graph API
GET https://graph.facebook.com/v21.0/{lead_id}
?access_token={page_access_token}

// Respuesta con datos del formulario
{
  "field_data": [
    {"name": "full_name", "values": ["..."]},
    {"name": "email", "values": ["..."]},
    {"name": "phone_number", "values": ["..."]}
  ]
}
                </div>
            </div>
        </div>
        
        <div class="endpoint-demo">
            <h3>🧪 Demostración del Webhook</h3>
            <p>Esta es una simulación de cómo recibimos y procesamos leads de Facebook Lead Ads:</p>
            
            <div class="test-form">
                <h4>Simular Lead de Facebook</h4>
                <form id="testForm">
                    <div class="form-group">
                        <label>Lead ID (Facebook)</label>
                        <input type="text" id="leadId" value="demo_lead_<?php echo time(); ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Form ID</label>
                        <input type="text" id="formId" value="575341725135719" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Datos del prospecto (simulados)</label>
                        <textarea id="leadData" rows="4" readonly>
Nombre: Juan Pérez Demo
Email: juan.demo@empresa.com
Teléfono: +52 777 123 4567
Empresa: Demo Company SA
                        </textarea>
                    </div>
                    
                    <button type="button" class="btn btn-primary" onclick="simulateWebhook()">
                        🚀 Simular Webhook de Facebook
                    </button>
                </form>
            </div>
            
            <div class="webhook-log" id="webhookLog">
[Esperando simulación de webhook...]
            </div>
        </div>
        
        <div class="credentials-box">
            <h4>📋 Información para Facebook Reviewers</h4>
            <p><strong>URL de Testing:</strong> https://aloia.ai/demo-facebook-review.html</p>
            <p><strong>Webhook URL:</strong> https://aloia.ai/crm/test_webhook.php</p>
            <p><strong>Console de Debug:</strong> https://aloia.ai/crm/test_webhook.php (acceso via GET)</p>
            <p><strong>App ID:</strong> 10088781007866443</p>
            <p><strong>Form ID:</strong> 575341725135719</p>
            
            <h4 style="margin-top: 1.5rem;">🔑 Credenciales de Prueba</h4>
            <p><strong>Usuario Demo:</strong> demo@aloia.ai</p>
            <p><strong>Password:</strong> DemoAloia2025!</p>
            
            <h4 style="margin-top: 1.5rem;">📊 Cómo Testear</h4>
            <ol style="margin-left: 1.5rem;">
                <li>Use el formulario de lead ads configurado en la campaña "Aloia - Leads IA México Mayo"</li>
                <li>Complete el formulario con datos de prueba</li>
                <li>El webhook recibirá automáticamente los datos</li>
                <li>Verifique los logs en tiempo real en la console</li>
            </ol>
        </div>
        
        <div class="card">
            <h3>📚 Documentación Técnica</h3>
            <p>Links útiles para la revisión:</p>
            
            <div style="margin: 1rem 0;">
                <a href="https://aloia.ai/privacidad/aloleads.html" target="_blank" class="btn btn-secondary" style="margin: 0.5rem;">
                    📄 Política de Privacidad
                </a>
                
                <!--<a href="https://aloia.ai/crm/test_webhook.php" target="_blank" class="btn btn-secondary" style="margin: 0.5rem;">
                    🔍 Webhook Console
                </a>-->
                
                <a href="https://aloia.ai" target="_blank" class="btn btn-primary" style="margin: 0.5rem;">
                    🏠 Sitio Principal
                </a>
            </div>
        </div>
    </div>
    
    <script>
        function simulateWebhook() {
            const log = document.getElementById('webhookLog');
            const leadId = document.getElementById('leadId').value;
            
            log.innerHTML = '';
            
            const steps = [
                '[' + new Date().toLocaleTimeString() + '] 🔄 Simulando webhook de Facebook...',
                '[' + new Date().toLocaleTimeString() + '] ✅ Webhook recibido - Lead ID: ' + leadId,
                '[' + new Date().toLocaleTimeString() + '] 🔍 Obteniendo datos via Graph API...',
                '[' + new Date().toLocaleTimeString() + '] ✅ Datos obtenidos exitosamente',
                '[' + new Date().toLocaleTimeString() + '] 💾 Guardando en base de datos...',
                '[' + new Date().toLocaleTimeString() + '] ✅ Lead guardado exitosamente',
                '[' + new Date().toLocaleTimeString() + '] 📧 Enviando notificación...',
                '[' + new Date().toLocaleTimeString() + '] 🎉 Proceso completado - Lead procesado correctamente'
            ];
            
            steps.forEach((step, index) => {
                setTimeout(() => {
                    log.innerHTML += step + '\n';
                    log.scrollTop = log.scrollHeight;
                }, index * 800);
            });
        }
        
        // Auto-generar nuevo Lead ID cada 5 segundos
        setInterval(() => {
            document.getElementById('leadId').value = 'demo_lead_' + Date.now();
        }, 5000);
    </script>
</body>
</html>