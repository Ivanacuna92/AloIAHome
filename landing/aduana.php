<?php
// Primero revisar si es POST para webhook
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['webhook_data'])) {
    $data = json_decode($_POST['webhook_data'], true);
    
    if ($data) {
        $webhookUrl = 'https://hook.us1.make.com/iqrl0tv3t7i35t96pvosjek2qzpgpujq';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $webhookUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // IMPORTANTE: Solo devolver JSON y salir inmediatamente
        header('Content-Type: application/json');
        if ($httpCode >= 200 && $httpCode < 300) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Error webhook']);
        }
        exit; // CLAVE: salir sin procesar HTML
    }
    
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Invalid data']);
    exit;
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor ASC Aduanero - Automatiza tus Reportes en Segundos</title>
    <meta name="description" content="Convierte archivos ASC a Excel automáticamente. Ahorra horas de trabajo manual en tus operaciones aduaneras.">
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --dark: #1f2937;
            --light-bg: #f9fafb;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.05) 0%, rgba(174, 58, 141, 0.05) 100%);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(ellipse, rgba(253, 97, 68, 0.1) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            width: 100%;
            position: relative;
            z-index: 2;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-text .subtitle {
            font-size: 1.4rem;
            color: #4b5563;
            margin-bottom: 2rem;
            font-weight: 400;
        }
        
        .pain-points {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-left: 6px solid var(--aloia-orange);
            margin-bottom: 2rem;
        }
        
        .pain-points h3 {
            color: var(--aloia-red);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .pain-list {
            list-style: none;
            space-y: 0.5rem;
        }
        
        .pain-list li {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
            color: #374151;
        }
        
        .pain-list li::before {
            content: '⚠️';
            margin-right: 0.8rem;
            font-size: 1.1rem;
        }
        
        /* Form Card */
        .demo-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(253, 97, 68, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .demo-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--aloia-gradient);
        }
        
        .demo-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .demo-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .demo-header p {
            color: #6b7280;
            font-size: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }
        
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--aloia-orange);
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.1);
        }
        
        .btn-demo {
            width: 100%;
            background: var(--aloia-gradient);
            color: white;
            font-weight: 700;
            padding: 1.2rem 2rem;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(253, 50, 68, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-demo:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(253, 50, 68, 0.4);
        }
        
        .btn-demo::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-demo:hover::before {
            left: 100%;
        }
        
        /* Benefits Section */
        .benefits {
            padding: 6rem 0;
            background: var(--light-bg);
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .benefit-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(253, 97, 68, 0.05);
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .benefit-card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .benefit-card p {
            color: #6b7280;
            line-height: 1.6;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        
        .section-header p {
            font-size: 1.2rem;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Success Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }
        
        .success-icon {
            font-size: 4rem;
            color: #10b981;
            margin-bottom: 1rem;
            animation: bounce 1s ease-in-out;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .hero-text .subtitle {
                font-size: 1.1rem;
            }
            
            .container {
                padding: 0 1rem;
            }
            
            .demo-card {
                padding: 2rem;
            }
        }
        
        /* Loading state */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        
        .spinner {
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
        .hero {
            min-height: 100vh;
            padding-top: 80px; /* Añadir esta línea */
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.05) 0%, rgba(174, 58, 141, 0.05) 100%);
            /* resto del CSS igual... */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="mainHeader" style="position: fixed; top: 0; left: 0; right: 0; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); z-index: 100; padding: 1rem 0; border-bottom: 1px solid rgba(253, 97, 68, 0.1); transition: all 0.3s ease;">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: center;">
                <img src="/assets/img/aloia-color.png" alt="Aloia" style="height: 40px; width: auto;">
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>¿Cansado de Perder Horas Convirtiendo Archivos ASC?</h1>
                    <p class="subtitle">Automatiza tu flujo aduanero y recupera <strong>15 horas semanales</strong> para enfocarte en lo que realmente importa.</p>
                    
                    <div class="pain-points">
                        <h3> ¿Te suena familiar?</h3>
                        <ul class="pain-list">
                            <li>Copiar y pegar datos manualmente por horas</li>
                            <li>Errores humanos que cuestan tiempo y dinero</li>
                            <li>Reportes que deberían tomar minutos, no días</li>
                            <li>Clientes esperando mientras luchas con formatos</li>
                        </ul>
                    </div>
                </div>
                
                <div class="demo-card">
                    <div class="demo-header">
                        <h2>🚀 Prueba Gratuita Instantánea</h2>
                        <p>Convierte tu primer archivo en menos de 30 segundos</p>
                    </div>
                    
                    <form id="demoForm">
                        <div class="form-group">
                            <label for="nombre">Nombre completo *</label>
                            <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email corporativo *</label>
                            <input type="email" id="email" name="email" required placeholder="nombre@empresa.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <input type="text" id="empresa" name="empresa" placeholder="Nombre de tu empresa">
                        </div>
                        <div class="form-group">
                            <label for="celular">Número de celular *</label>
                            <input type="tel" id="celular" name="celular" required placeholder="+52 55 1234 5678">
                        </div>
                        <div class="form-group">
                            <label for="volumen">¿Cuántos archivos ASC procesas al mes?</label>
                            <select id="volumen" name="volumen">
                                <option value="">Selecciona una opción</option>
                                <option value="1-10">1-10 archivos</option>
                                <option value="11-50">11-50 archivos</option>
                                <option value="51-100">51-100 archivos</option>
                                <option value="100+">Más de 100 archivos</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn-demo">
                            <span id="btn-text">⚡ Activar Mi Demo Gratuita</span>
                            <span id="btn-loading" style="display: none;">
                                <span class="spinner"></span>Generando acceso...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Imagínate Recuperar 15 Horas Semanales</h2>
                <p>Tiempo que puedes invertir en crecer tu negocio en lugar de luchar con archivos</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <span class="benefit-icon">⚡</span>
                    <h3>Conversión Instantánea</h3>
                    <p>De ASC a Excel en segundos. Sin esperas, sin complicaciones. Tu tiempo vale oro.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">🎯</span>
                    <h3>Cero Errores Humanos</h3>
                    <p>Olvídate de los errores de transcripción que pueden costarte multas aduaneras.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">🤖</span>
                    <h3>Asistente IA Especializado</h3>
                    <p>Consulta sobre tus datos al instante. Como tener un experto aduanero 24/7.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">📊</span>
                    <h3>Reportes Profesionales</h3>
                    <p>Impresiona a tus clientes con reportes que se ven como hechos por un especialista.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">💰</span>
                    <h3>ROI Inmediato</h3>
                    <p>Recupera tu inversión en la primera semana. Cada hora ahorrada es dinero ganado.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">🔒</span>
                    <h3>Seguro y Confiable</h3>
                    <p>Tus datos están seguros. Procesamiento local, sin riesgos de filtración.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="success-icon">✅</div>
            <h2>Demo Activada!</h2>
            <p>Revisa tu email para acceder a tu demo personalizada.</p>
            <p><strong>Credenciales de acceso:</strong></p>
            <div style="background: #f3f4f6; padding: 1rem; border-radius: 8px; margin: 1rem 0;">
                <strong>Usuario:</strong> demo25<br>
                <strong>Contraseña:</strong> demo1234
            </div>
            <button onclick="window.location.href='https://aloia.ai/demos/aduana'" class="btn-demo" style="margin-top: 1rem;">
                🚀 Ir a Mi Demo
            </button>
        </div>
    </div>

    <!-- Second CTA Section -->
    <section style="padding: 6rem 0; background: linear-gradient(135deg, rgba(253, 97, 68, 0.02) 0%, rgba(174, 58, 141, 0.02) 100%); border-top: 1px solid rgba(253, 97, 68, 0.1);">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: 2.8rem; font-weight: 800; background: var(--aloia-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 1rem;">
                    Imagina las Horas que Ganarías con una Demo
                </h2>
                <p style="font-size: 1.3rem; color: #6b7280; margin-bottom: 3rem; font-weight: 500;">
                    ¿Cuánto valen para ti <strong style="color: var(--aloia-red);">15 horas extra</strong> a la semana?
                </p>
                
                <div style="background: white; padding: 3rem; border-radius: 24px; box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1); border: 2px solid rgba(253, 97, 68, 0.1); max-width: 600px; margin: 0 auto; position: relative; overflow: hidden;">
                    
                    <!-- Decorative gradient border -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 6px; background: var(--aloia-gradient);"></div>
                    
                    <div style="text-align: center; margin-bottom: 2.5rem;">
                        
                        <div style="font-size: 3rem; margin-bottom: 1rem;">🚀</div>
                        <h3 style="font-size: 1.6rem; font-weight: 700; color: var(--dark); margin-bottom: 0.5rem;">Demo VIP Personalizada</h3>
                        <p style="color: #6b7280; font-size: 1rem;">Descubre el poder de la automatización en tu flujo aduanero</p>
                    </div>
                    
                    <form id="demoForm2">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                            <div>
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark); text-align: left;">Nombre *</label>
                                <input type="text" name="nombre" required placeholder="Tu nombre" style="width: 100%; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease;">
                            </div>
                            <div>
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark); text-align: left;">Email *</label>
                                <input type="email" name="email" required placeholder="tu@empresa.com" style="width: 100%; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease;">
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark); text-align: left;">Empresa</label>
                            <input type="text" name="empresa" placeholder="Nombre de tu empresa" style="width: 100%; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease;">
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark); text-align: left;">Número de celular *</label>
                            <input type="tel" name="celular" required placeholder="+52 55 1234 5678" style="width: 100%; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease;">
                        </div>

                        <div style="margin-bottom: 2rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--dark); text-align: left;">¿Cuál es tu mayor dolor con los archivos ASC?</label>
                            <select name="dolor" style="width: 100%; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease; background: white;">
                                <option value="">Selecciona tu mayor frustración</option>
                                <option value="tiempo">Pierdo demasiado tiempo convirtiendo manualmente</option>
                                <option value="errores">Los errores me cuestan dinero en multas</option>
                                <option value="volumen">Tengo demasiados archivos para procesar</option>
                                <option value="clientes">Mis clientes esperan reportes más rápidos</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <button type="submit" style="width: 100%; background: var(--aloia-gradient); color: white; font-weight: 700; padding: 1.3rem 2rem; border: none; border-radius: 12px; font-size: 1.1rem; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 8px 20px rgba(253, 50, 68, 0.3); position: relative; overflow: hidden;">
                            <span id="btn-text-2">🚀 Quiero Mi Demo VIP Gratuita</span>
                            <span id="btn-loading-2" style="display: none;">
                                <span class="spinner"></span>Preparando tu demo...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Función para enviar webhook
        async function enviarWebhook(data) {
            try {
                console.log('Enviando data:', data);
                
                const formData = new FormData();
                formData.append('webhook_data', JSON.stringify(data));
                
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                });
                
                console.log('Response status:', response.status);
                
                const result = await response.json();
                console.log('Response result:', result);
                
                if (!result.success) {
                    throw new Error(result.error || 'Error desconocido');
                }
                
                console.log('Webhook enviado exitosamente:', data);
                return response;
                
            } catch (error) {
                console.error('Error enviando webhook:', error);
                throw error;
            }
        }

    function generarEmailHTML(data) {
        return `<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>¡Tu Demo del Convertidor ASC está Lista!</title>
                <style>
                    body { margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background-color: #f9fafb; }
                    .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); }
                    .header { background: linear-gradient(90deg, #FD6144, #FD3244); padding: 2rem; text-align: center; color: white; }
                    .header h1 { margin: 0; font-size: 1.8rem; font-weight: 700; }
                    .content { padding: 2rem; }
                    .greeting { font-size: 1.1rem; color: #1f2937; margin-bottom: 1.5rem; }
                    .credentials-box { background: linear-gradient(135deg, rgba(253, 97, 68, 0.05) 0%, rgba(174, 58, 141, 0.05) 100%); padding: 1.5rem; border-radius: 12px; border-left: 4px solid #FD6144; margin: 1.5rem 0; }
                    .cta-button { display: inline-block; background: linear-gradient(90deg, #FD6144, #FD3244); color: white !important; padding: 1rem 2rem; text-decoration: none; border-radius: 8px; font-weight: 700; margin: 1rem 0; }
                    .features { margin: 2rem 0; }
                    .feature { display: flex; align-items: center; margin-bottom: 1rem; }
                    .feature-icon { margin-right: 0.8rem; font-size: 1.2rem; }
                    .footer { background: #f3f4f6; padding: 1.5rem; text-align: center; color: #6b7280; font-size: 0.9rem; }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h1>🚀 ¡Tu Demo está Lista!</h1>
                        <p style="margin: 0.5rem 0 0 0; opacity: 0.9;">Convertidor ASC a Excel Automático</p>
                    </div>
                    
                    <div class="content">
                        <div class="greeting">
                            <strong>¡Hola ${data.nombre}!</strong>
                        </div>
                        
                        <p>¡Excelente noticia! Tu demo del Convertidor ASC ya está activada y lista para usar. Ahora puedes <strong>automatizar la conversión de tus archivos aduanales</strong> y recuperar esas valiosas horas semanales.</p>
                        
                        <div class="credentials-box">
                            <h3 style="color: #FD3244; margin-top: 0;">🔑 Credenciales de Acceso</h3>
                            <p><strong>Usuario:</strong> demo25<br>
                            <strong>Contraseña:</strong> demo1234</p>
                            <p style="margin-bottom: 0; font-size: 0.9rem; color: #6b7280;">Guarda estas credenciales para acceder cuando quieras</p>
                        </div>
                        
                        <div style="text-align: center; margin: 2rem 0;">
                            <a href="https://aloia.ai/demos/aduana.php" class="cta-button">
                                ⚡ Acceder a Mi Demo
                            </a>
                        </div>
                        
                        <div class="features">
                            <h3 style="color: #1f2937;">✨ Lo que puedes hacer ahora:</h3>
                            
                            <div class="feature">
                                <span class="feature-icon">📁</span>
                                <span>Subir archivos ASC y convertirlos a Excel en segundos</span>
                            </div>
                            
                            <div class="feature">
                                <span class="feature-icon">🤖</span>
                                <span>Consultar con el asistente IA sobre tus datos aduaneros</span>
                            </div>
                            
                            <div class="feature">
                                <span class="feature-icon">📊</span>
                                <span>Generar reportes profesionales con formato automático</span>
                            </div>
                            
                            <div class="feature">
                                <span class="feature-icon">⚡</span>
                                <span>Ahorrar hasta 15 horas semanales en procesos manuales</span>
                            </div>
                        </div>
                        
                        <div style="background: rgba(253, 97, 68, 0.02); padding: 1.5rem; border-radius: 8px; margin: 2rem 0;">
                            <h4 style="color: #FD3244; margin-top: 0;">📞 ¿Quieres una demo personalizada?</h4>
                            <p style="margin-bottom: 0;">Nuestro equipo te contactará pronto al <strong>${data.celular}</strong> para mostrarte funcionalidades avanzadas y resolver cualquier duda sobre tu flujo aduanero específico.</p>
                        </div>
                        
                        <p style="color: #6b7280; font-size: 0.95rem;">
                            <strong>Empresa:</strong> ${data.empresa || 'No especificada'}<br>
                            <strong>Volumen mensual:</strong> ${data.volumen || data.dolor || 'No especificado'}<br>
                            <strong>Activado:</strong> ${new Date(data.timestamp).toLocaleString('es-MX')}
                        </p>
                    </div>
                    
                    <div class="footer">
                        <p><strong>Aloia AI</strong> - Automatización Inteligente para Aduanas</p>
                        <p>Si tienes alguna pregunta, responde a este email o visita nuestro sitio web.</p>
                    </div>
                </div>
            </body>
            </html>`;
            }

        // Primer formulario
        document.getElementById('demoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                nombre: document.getElementById('nombre').value.trim(),
                email: document.getElementById('email').value.trim(),
                empresa: document.getElementById('empresa').value.trim(),
                celular: document.getElementById('celular').value.trim(),
                volumen: document.getElementById('volumen').value,
                formulario: 'principal',
                timestamp: new Date().toISOString(),
                url_origen: window.location.href,
                email_html: generarEmailHTML({
                    nombre: document.getElementById('nombre').value.trim(),
                    celular: document.getElementById('celular').value.trim(),
                    empresa: document.getElementById('empresa').value.trim(),
                    volumen: document.getElementById('volumen').value,
                    timestamp: new Date().toISOString()
                })
            };
            
            if (!formData.nombre || !formData.email) {
                alert('Por favor completa los campos obligatorios');
                return;
            }
            
            // Mostrar loading
            document.getElementById('btn-text').style.display = 'none';
            document.getElementById('btn-loading').style.display = 'inline-flex';
            this.classList.add('loading');
            
            // Enviar webhook
            enviarWebhook(formData).then(() => {
                // Resetear botón
                document.getElementById('btn-text').style.display = 'inline';
                document.getElementById('btn-loading').style.display = 'none';
                this.classList.remove('loading');
                
                // Mostrar modal de éxito
                document.getElementById('successModal').style.display = 'block';
                
            }).catch(error => {
                console.error('Error:', error);
                // Resetear botón
                document.getElementById('btn-text').style.display = 'inline';
                document.getElementById('btn-loading').style.display = 'none';
                this.classList.remove('loading');
                
                // Mostrar modal anyway (para UX)
                document.getElementById('successModal').style.display = 'block';
            });
        });

        // Segundo formulario
        document.getElementById('demoForm2').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                nombre: this.querySelector('[name="nombre"]').value.trim(),
                email: this.querySelector('[name="email"]').value.trim(),
                empresa: this.querySelector('[name="empresa"]').value.trim(),
                celular: this.querySelector('[name="celular"]').value.trim(),
                dolor: this.querySelector('[name="dolor"]').value,
                formulario: 'segundo_cta',
                timestamp: new Date().toISOString(),
                url_origen: window.location.href,
                email_html: generarEmailHTML({
                    nombre: this.querySelector('[name="nombre"]').value.trim(),
                    celular: this.querySelector('[name="celular"]').value.trim(),
                    empresa: this.querySelector('[name="empresa"]').value.trim(),
                    dolor: this.querySelector('[name="dolor"]').value,
                    timestamp: new Date().toISOString()
                })
            };
            
            if (!formData.nombre || !formData.email) {
                alert('Por favor completa los campos obligatorios');
                return;
            }
            
            // Mostrar loading
            document.getElementById('btn-text-2').style.display = 'none';
            document.getElementById('btn-loading-2').style.display = 'inline-flex';
            this.style.opacity = '0.7';
            
            // Enviar webhook
            enviarWebhook(formData).then(() => {
                document.getElementById('btn-text-2').style.display = 'inline';
                document.getElementById('btn-loading-2').style.display = 'none';
                this.style.opacity = '1';
                
                // Mostrar modal de éxito
                document.getElementById('successModal').style.display = 'block';
                
            }).catch(error => {
                console.error('Error:', error);
                document.getElementById('btn-text-2').style.display = 'inline';
                document.getElementById('btn-loading-2').style.display = 'none';
                this.style.opacity = '1';
                
                // Mostrar modal anyway
                document.getElementById('successModal').style.display = 'block';
            });
        });

        // Cerrar modal al hacer click fuera
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });

        // Header fade on scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            const scrollY = window.scrollY;
            
            // Calcular opacidad: de 0.95 a 0.3 basado en scroll
            const opacity = Math.max(0.3, 0.95 - (scrollY / 1000));
            
            header.style.background = `rgba(255, 255, 255, ${opacity})`;
        });

        // Añadir focus effects a los inputs del segundo form
        document.querySelectorAll('#demoForm2 input, #demoForm2 select').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--aloia-orange)';
                this.style.boxShadow = '0 0 0 3px rgba(253, 97, 68, 0.1)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#e5e7eb';
                this.style.boxShadow = 'none';
            });
        });
    </script>
</body>
</html>