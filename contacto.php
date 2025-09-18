<?php
require_once __DIR__ . '/includes/config.php';
$page_title = "Contacto | Aloia";
$activePage = 'contacto';

// PROCESAR EL FORMULARIO SI SE ENVIÓ
$mensaje_resultado = '';
$tipo_mensaje = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['enviar_demo'])) {
    // Procesar el formulario
    $nombre   = trim($_POST["nombre"] ?? '');
    $empresa  = trim($_POST["empresa"] ?? '');
    $email    = trim($_POST["email"] ?? '');
    $telefono = trim($_POST["telefono"] ?? '');
    $metodo_contacto = trim($_POST["metodo_contacto"] ?? '');
    $servicio = trim($_POST["servicio"] ?? '');
    $fecha    = trim($_POST["fecha"] ?? '');
    $mensaje  = trim($_POST["mensaje"] ?? '');
    
    // Validar campos obligatorios
    if ($nombre && $empresa && $email && $telefono && $metodo_contacto && $servicio && $fecha) {
        try {
            // Conectar a la base de datos
            require_once __DIR__ . '/../includes/db.php';
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if ($conn->connect_error) {
                throw new Exception('Error de conexión a la base de datos');
            }
            
            // Insertar en la base de datos
            $stmt = $conn->prepare("
                INSERT INTO contacto_demos 
                (nombre, empresa, email, telefono, metodo_contacto_preferido, servicio, fecha_preferida, mensaje)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");
            
            if ($stmt) {
                $stmt->bind_param("ssssssss", $nombre, $empresa, $email, $telefono, $metodo_contacto, $servicio, $fecha, $mensaje);
                
                if ($stmt->execute()) {
                    $registro_id = $conn->insert_id;
                    
                    // Enviar datos a la API del CRM
                    $api_enviado = false;
                    try {
                        $api_data = [
                            'company_name' => $empresa,
                            'contact_name' => $nombre,
                            'email' => $email,
                            'phone' => $telefono,
                            'organization_id' => 1,
                            'assigned_user_id' => 7,
                            'tags' => 'Landing Aloia',
                            'custom_fields' => [
                                'metodo_contacto_preferido' => $metodo_contacto,
                                'servicio' => $servicio,
                                'fecha_preferida' => $fecha,
                                'mensaje' => $mensaje
                            ]
                        ];
                        
                        $api_url = 'https://crm.aloia.ai/api/prospects.php';
                        $api_json = json_encode($api_data);
                        
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $api_url);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $api_json);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                            'Content-Type: application/json',
                            'Content-Length: ' . strlen($api_json)
                        ]);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
                        
                        $api_response = curl_exec($ch);
                        $api_http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                        $curl_error = curl_error($ch);
                        curl_close($ch);
                        
                        if ($curl_error) {
                            error_log("Error cURL enviando a API: " . $curl_error);
                        } elseif ($api_http_code >= 200 && $api_http_code < 300) {
                            $api_enviado = true;
                            error_log("Datos enviados exitosamente a la API CRM. Código: " . $api_http_code);
                        } else {
                            error_log("Error en API CRM. Código HTTP: " . $api_http_code . " Respuesta: " . $api_response);
                        }
                        
                    } catch (Exception $e) {
                        error_log("Excepción enviando a API CRM: " . $e->getMessage());
                    }
                    
                    // Enviar correo HTML profesional
                    $email_enviado = false;
                    try {
                        $to = 'ivan@aloia.ai';
                        $subject = "🚀 Nueva Solicitud de Demostración - $empresa";
                        
                        // Convertir servicio a texto legible
                        $servicios_nombres = [
                            'ia-personalizada' => 'IA Personalizada',
                            'automatizacion' => 'Automatización de Procesos',
                            'analisis-datos' => 'Análisis de Datos',
                            'chatbots' => 'Chatbots Inteligentes',
                            'vision-artificial' => 'Visión Artificial',
                            'otro' => 'Otro'
                        ];
                        $servicio_nombre = $servicios_nombres[$servicio] ?? $servicio;
                        
                        // Convertir método de contacto a texto legible
                        $metodos_nombres = [
                            'email' => 'Correo Electrónico',
                            'telefono' => 'Llamada Telefónica',
                            'whatsapp' => 'WhatsApp',
                            'videollamada' => 'Videollamada (Zoom/Meet)',
                            'presencial' => 'Reunión Presencial'
                        ];
                        $metodo_nombre = $metodos_nombres[$metodo_contacto] ?? $metodo_contacto;
                        
                        // Formatear fecha
                        $fecha_formateada = date('d/m/Y', strtotime($fecha));
                        
                        // Template HTML del correo - MEJORADO Y RESPONSIVE
                        $html_body = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nueva Solicitud de Demostración</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #f8f9fa !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif !important;
            line-height: 1.6 !important;
        }
        
        table {
            border-collapse: collapse !important;
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
            width: 100% !important;
        }
        
        img {
            border: 0 !important;
            height: auto !important;
            line-height: 100% !important;
            outline: none !important;
            text-decoration: none !important;
            -ms-interpolation-mode: bicubic !important;
            max-width: 100% !important;
        }
        
        /* Contenedor principal */
        .email-wrapper {
            width: 100% !important;
            background-color: #f8f9fa !important;
            padding: 20px 0 !important;
        }
        
        .email-container {
            max-width: 650px !important;
            margin: 0 auto !important;
            background-color: #ffffff !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
        }
        
        /* Header mejorado */
        .header {
            background: linear-gradient(135deg, #FF6B4A 0%, #E91E63 100%) !important;
            padding: 40px 30px !important;
            text-align: center !important;
            position: relative !important;
        }
        
        .header::before {
            content: '' !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"grain\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\"><circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"%23ffffff\" opacity=\"0.1\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23grain)\"/></svg>') !important;
        }
        
        .logo {
            width: 70px !important;
            height: 70px !important;
            margin-bottom: 15px !important;
            border-radius: 50% !important;
            background: rgba(255,255,255,0.2) !important;
            padding: 10px !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .header h1 {
            color: #ffffff !important;
            font-size: 28px !important;
            font-weight: 700 !important;
            margin: 15px 0 8px 0 !important;
            line-height: 1.3 !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .header p {
            color: #ffffff !important;
            font-size: 16px !important;
            margin: 0 !important;
            opacity: 0.95 !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        /* Alerta mejorada */
        .alert {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%) !important;
            border-left: 5px solid #ffc107 !important;
            padding: 20px 25px !important;
            margin: 25px !important;
            border-radius: 8px !important;
            box-shadow: 0 2px 10px rgba(255,193,7,0.2) !important;
        }
        
        .alert-text {
            color: #856404 !important;
            font-size: 15px !important;
            margin: 0 !important;
            line-height: 1.5 !important;
            font-weight: 500 !important;
        }
        
        /* Contenido principal */
        .content {
            padding: 35px 30px !important;
        }
        
        .section-title {
            color: #2c3e50 !important;
            font-size: 20px !important;
            font-weight: 700 !important;
            margin: 0 0 25px 0 !important;
            padding-bottom: 12px !important;
            border-bottom: 3px solid #FF6B4A !important;
            position: relative !important;
        }
        
        .section-title::after {
            content: '' !important;
            position: absolute !important;
            bottom: -3px !important;
            left: 0 !important;
            width: 60px !important;
            height: 3px !important;
            background: #E91E63 !important;
        }
        
        /* Grid de información mejorado */
        .info-grid {
            width: 100% !important;
            margin-bottom: 20px !important;
        }
        
        .info-row {
            margin-bottom: 20px !important;
        }
        
        .info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
            padding: 20px !important;
            border-radius: 10px !important;
            border-left: 4px solid #FF6B4A !important;
            margin-bottom: 15px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05) !important;
        }
        
        .info-card:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
        }
        
        .info-label {
            color: #6c757d !important;
            font-size: 12px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 1px !important;
            margin-bottom: 8px !important;
            display: block !important;
        }
        
        .info-value {
            color: #2c3e50 !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            margin: 0 !important;
            line-height: 1.4 !important;
        }
        
        .info-icon {
            color: #FF6B4A !important;
            font-size: 16px !important;
            margin-right: 8px !important;
            display: inline-block !important;
        }
        
        /* Sección de mensaje */
        .message-section {
            margin-top: 30px !important;
            padding-top: 25px !important;
            border-top: 2px solid #dee2e6 !important;
        }
        
        .message-content {
            background: linear-gradient(135deg, #e7f3ff 0%, #cce7ff 100%) !important;
            border-left: 4px solid #0066cc !important;
            padding: 20px !important;
            border-radius: 8px !important;
            font-style: italic !important;
            color: #004085 !important;
            margin: 15px 0 !important;
            line-height: 1.6 !important;
            box-shadow: 0 2px 8px rgba(0,102,204,0.1) !important;
        }
        
        /* CTA Section mejorada */
        .cta-section {
            background: linear-gradient(135deg, #FF6B4A 0%, #E91E63 100%) !important;
            color: #ffffff !important;
            padding: 30px 25px !important;
            text-align: center !important;
            margin: 25px 0 !important;
            border-radius: 12px !important;
            position: relative !important;
            overflow: hidden !important;
        }
        
        .cta-section::before {
            content: '' !important;
            position: absolute !important;
            top: -50% !important;
            left: -50% !important;
            width: 200% !important;
            height: 200% !important;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%) !important;
            animation: pulse 3s ease-in-out infinite !important;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .cta-title {
            font-size: 22px !important;
            font-weight: 700 !important;
            margin: 0 0 10px 0 !important;
            color: #ffffff !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .cta-text {
            font-size: 15px !important;
            margin: 0 0 20px 0 !important;
            opacity: 0.95 !important;
            color: #ffffff !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .cta-button {
            display: inline-block !important;
            background-color: #ffffff !important;
            color: #FF6B4A !important;
            padding: 14px 28px !important;
            text-decoration: none !important;
            border-radius: 30px !important;
            font-weight: 600 !important;
            font-size: 14px !important;
            margin: 5px 8px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .cta-button:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(0,0,0,0.3) !important;
        }
        
        /* Footer mejorado */
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%) !important;
            color: #ecf0f1 !important;
            padding: 30px 25px !important;
            text-align: center !important;
        }
        
        .footer-grid {
            margin-bottom: 20px !important;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: space-around !important;
        }
        
        .footer-item {
            margin-bottom: 15px !important;
            text-align: center !important;
            flex: 1 !important;
            min-width: 150px !important;
        }
        
        .footer-label {
            font-size: 12px !important;
            font-weight: 700 !important;
            color: #ecf0f1 !important;
            margin-bottom: 6px !important;
            display: block !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px !important;
        }
        
        .footer-value {
            font-size: 13px !important;
            color: #bdc3c7 !important;
            margin: 0 !important;
            line-height: 1.4 !important;
        }
        
        .footer-divider {
            border: none !important;
            border-top: 1px solid #34495e !important;
            margin: 20px 0 !important;
            opacity: 0.7 !important;
        }
        
        .footer-disclaimer {
            font-size: 12px !important;
            color: #bdc3c7 !important;
            line-height: 1.5 !important;
            margin: 0 !important;
            opacity: 0.8 !important;
        }
        
        /* Responsive Design */
        @media only screen and (max-width: 650px) {
            .email-wrapper { padding: 10px 0 !important; }
            .email-container { margin: 0 10px !important; border-radius: 8px !important; }
            .header { padding: 30px 20px !important; }
            .header h1 { font-size: 24px !important; }
            .content { padding: 25px 20px !important; }
            .alert { margin: 20px 15px !important; padding: 16px 20px !important; }
            .cta-section { margin: 20px 0 !important; padding: 25px 20px !important; }
            .footer { padding: 25px 20px !important; }
            .info-card { padding: 16px !important; }
            .logo { width: 60px !important; height: 60px !important; }
            .cta-button { 
                display: block !important; 
                margin: 8px 0 !important; 
                padding: 12px 24px !important;
            }
            .footer-grid { 
                flex-direction: column !important; 
                align-items: center !important; 
            }
            .footer-item { 
                flex: none !important; 
                width: 100% !important; 
                margin-bottom: 12px !important; 
            }
        }
        
        @media only screen and (max-width: 480px) {
            .header { padding: 25px 15px !important; }
            .header h1 { font-size: 22px !important; }
            .content { padding: 20px 15px !important; }
            .section-title { font-size: 18px !important; }
            .info-card { padding: 14px !important; }
            .cta-title { font-size: 20px !important; }
        }
    </style>
</head>
<body>
    <div class='email-wrapper'>
        <div class='email-container'>
            <!-- Header -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='header'>
                        <img src='https://aloia.ai/assets/img/icono.png' alt='Aloia Logo' class='logo' width='70' height='70'>
                        <h1>🎯 Nueva Solicitud de Demostración</h1>
                        <p>Un cliente potencial está interesado en nuestros servicios</p>
                    </td>
                </tr>
            </table>
            
            <!-- Alerta -->
            <div class='alert'>
                <p class='alert-text'><strong>⚡ ¡Atención!</strong> Se ha recibido una nueva solicitud de demostración que requiere seguimiento inmediato.</p>
            </div>
            
            <!-- Contenido Principal -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='content'>
                        <h3 class='section-title'>📋 Información del Cliente</h3>
                        
                        <!-- Grid de Información -->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' class='info-grid'>
                            <tr class='info-row'>
                                <td style='width: 50%; padding-right: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>👤</span>Nombre Completo</span>
                                        <p class='info-value'>$nombre</p>
                                    </div>
                                </td>
                                <td style='width: 50%; padding-left: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>🏢</span>Empresa</span>
                                        <p class='info-value'>$empresa</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class='info-row'>
                                <td style='width: 50%; padding-right: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>📧</span>Correo Electrónico</span>
                                        <p class='info-value'>$email</p>
                                    </div>
                                </td>
                                <td style='width: 50%; padding-left: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>📱</span>Teléfono</span>
                                        <p class='info-value'>$telefono</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class='info-row'>
                                <td style='width: 50%; padding-right: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>📞</span>Método Preferido</span>
                                        <p class='info-value'>$metodo_nombre</p>
                                    </div>
                                </td>
                                <td style='width: 50%; padding-left: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>🛠️</span>Servicio Solicitado</span>
                                        <p class='info-value'>$servicio_nombre</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class='info-row'>
                                <td style='width: 50%; padding-right: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>📅</span>Fecha Preferida</span>
                                        <p class='info-value'>$fecha_formateada</p>
                                    </div>
                                </td>
                                <td style='width: 50%; padding-left: 10px; vertical-align: top;'>
                                    <div class='info-card'>
                                        <span class='info-label'><span class='info-icon'>🔢</span>ID de Registro</span>
                                        <p class='info-value'>#$registro_id</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                        " . (!empty($mensaje) ? "
                        <div class='message-section'>
                            <h4 style='color: #2c3e50; font-size: 18px; margin-bottom: 15px; font-weight: 600;'>💬 Mensaje del Cliente:</h4>
                            <div class='message-content'>\"$mensaje\"</div>
                        </div>
                        " : "") . "
                    </td>
                </tr>
            </table>
            
            <!-- CTA Section -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='cta-section'>
                        <h3 class='cta-title'>🚀 Próximos Pasos</h3>
                        <p class='cta-text'>Contacta al cliente usando su método preferido: <strong>$metodo_nombre</strong></p>
                        <div>
                            " . ($metodo_contacto === 'email' ? "<a href='mailto:$email' class='cta-button'>📧 Enviar Email</a>" : "") . "
                            " . ($metodo_contacto === 'telefono' ? "<a href='tel:$telefono' class='cta-button'>📞 Llamar Ahora</a>" : "") . "
                            " . ($metodo_contacto === 'whatsapp' ? "<a href='https://wa.me/$telefono' class='cta-button'>💬 WhatsApp</a>" : "") . "
                            " . (in_array($metodo_contacto, ['videollamada', 'presencial']) ? "<a href='mailto:$email' class='cta-button'>📅 Coordinar $metodo_nombre</a>" : "") . "
                            <a href='mailto:$email' class='cta-button'>✉️ Responder Email</a>
                        </div>
                    </td>
                </tr>
            </table>
            
            <!-- Footer -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='footer'>
                        <div class='footer-grid'>
                            <div class='footer-item'>
                                <span class='footer-label'>📅 Fecha de Solicitud</span>
                                <p class='footer-value'>" . date('d/m/Y H:i:s') . "</p>
                            </div>
                            <div class='footer-item'>
                                <span class='footer-label'>🌐 Origen</span>
                                <p class='footer-value'>Formulario Web - aloia.ai</p>
                            </div>
                            <div class='footer-item'>
                                <span class='footer-label'>📞 Método Preferido</span>
                                <p class='footer-value'>$metodo_nombre</p>
                            </div>
                        </div>
                        
                        <hr class='footer-divider'>
                        
                        <p class='footer-disclaimer'>
                            Este correo fue generado automáticamente por el sistema de contacto de Aloia.<br>
                            Para gestionar estas notificaciones, contacta al administrador del sistema.
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>";
                        
                        // Headers para correo HTML
                        $headers = "From: Aloia Contacto <noreply@aloia.ai>\r\n";
                        $headers .= "Reply-To: $email\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                        $headers .= "X-Priority: 1\r\n";
                        $headers .= "X-MSMail-Priority: High\r\n";
                        $headers .= "Importance: High\r\n";
                        
                        $email_enviado = mail($to, $subject, $html_body, $headers);
                        
                        // Email de confirmación al cliente - MEJORADO
                        if ($email_enviado) {
                            $cliente_subject = "✅ Confirmación de Solicitud - Aloia";
                            $cliente_body = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Confirmación de Solicitud</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #f8f9fa !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif !important;
            line-height: 1.6 !important;
        }
        
        table {
            border-collapse: collapse !important;
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
            width: 100% !important;
        }
        
        img {
            border: 0 !important;
            height: auto !important;
            line-height: 100% !important;
            outline: none !important;
            text-decoration: none !important;
            max-width: 100% !important;
        }
        
        .email-wrapper {
            width: 100% !important;
            background-color: #f8f9fa !important;
            padding: 20px 0 !important;
        }
        
        .container {
            max-width: 600px !important;
            margin: 0 auto !important;
            background: #ffffff !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
        }
        
        .header {
            background: linear-gradient(135deg, #FF6B4A 0%, #E91E63 100%) !important;
            color: white !important;
            padding: 40px 30px !important;
            text-align: center !important;
            position: relative !important;
        }
        
        .header::before {
            content: '' !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%) !important;
        }
        
        .header h1 {
            color: #ffffff !important;
            font-size: 26px !important;
            margin: 15px 0 8px 0 !important;
            font-weight: 700 !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .header p {
            color: #ffffff !important;
            font-size: 16px !important;
            margin: 0 !important;
            opacity: 0.95 !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .logo {
            width: 70px !important;
            height: 70px !important;
            margin-bottom: 15px !important;
            border-radius: 50% !important;
            background: rgba(255,255,255,0.2) !important;
            padding: 10px !important;
            position: relative !important;
            z-index: 2 !important;
        }
        
        .content {
            padding: 35px 30px !important;
        }
        
        .content p {
            font-size: 16px !important;
            color: #333 !important;
            margin-bottom: 18px !important;
            line-height: 1.6 !important;
        }
        
        .highlight {
            background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%) !important;
            border-left: 5px solid #FF6B4A !important;
            padding: 22px !important;
            border-radius: 8px !important;
            margin: 25px 0 !important;
            box-shadow: 0 2px 10px rgba(255,107,74,0.1) !important;
        }
        
        .highlight h3 {
            color: #FF6B4A !important;
            font-size: 18px !important;
            margin-bottom: 15px !important;
            font-weight: 700 !important;
        }
        
        .highlight-content {
            color: #333 !important;
            line-height: 1.7 !important;
        }
        
        .highlight-content p {
            margin-bottom: 10px !important;
            font-size: 15px !important;
        }
        
        .highlight-content strong {
            color: #FF6B4A !important;
            font-weight: 600 !important;
        }
        
        .contact-info {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
            padding: 20px !important;
            border-radius: 10px !important;
            margin: 20px 0 !important;
            border-left: 4px solid #FF6B4A !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05) !important;
        }
        
        .contact-info h4 {
            color: #FF6B4A !important;
            margin-bottom: 15px !important;
            font-size: 16px !important;
            font-weight: 700 !important;
        }
        
        .contact-item {
            margin-bottom: 10px !important;
            font-size: 14px !important;
            color: #333 !important;
        }
        
        .contact-item strong {
            color: #2c3e50 !important;
            font-weight: 600 !important;
        }
        
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%) !important;
            padding: 25px 30px !important;
            text-align: center !important;
            color: #ecf0f1 !important;
        }
        
        .footer p {
            font-size: 13px !important;
            color: #bdc3c7 !important;
            margin-bottom: 8px !important;
            line-height: 1.5 !important;
        }
        
        .footer p:last-child {
            margin-bottom: 0 !important;
        }
        
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-wrapper { padding: 10px 0 !important; }
            .container { margin: 0 10px !important; border-radius: 8px !important; }
            .header { padding: 30px 20px !important; }
            .header h1 { font-size: 22px !important; }
            .content { padding: 25px 20px !important; }
            .footer { padding: 20px !important; }
            .logo { width: 60px !important; height: 60px !important; }
            .highlight { padding: 18px !important; margin: 20px 0 !important; }
            .contact-info { padding: 16px !important; }
        }
        
        @media only screen and (max-width: 480px) {
            .header { padding: 25px 15px !important; }
            .content { padding: 20px 15px !important; }
            .header h1 { font-size: 20px !important; }
            .content p { font-size: 15px !important; }
        }
    </style>
</head>
<body>
    <div class='email-wrapper'>
        <div class='container'>
            <!-- Header -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='header'>
                        <img src='https://aloia.ai/assets/img/icono.png' alt='Aloia' class='logo' width='70' height='70'>
                        <h1>¡Gracias por tu interés, $nombre!</h1>
                        <p>Hemos recibido tu solicitud de demostración</p>
                    </td>
                </tr>
            </table>
            
            <!-- Contenido -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='content'>
                        <p>Estimado/a <strong style='color: #FF6B4A;'>$nombre</strong>,</p>
                        
                        <p>Hemos recibido exitosamente tu solicitud de demostración para <strong style='color: #FF6B4A;'>$servicio_nombre</strong>. Nos complace saber de tu interés en nuestras soluciones de inteligencia artificial.</p>
                        
                        <div class='highlight'>
                            <h3>📅 Detalles de tu solicitud:</h3>
                            <div class='highlight-content'>
                                <p><strong>📅 Fecha preferida:</strong> $fecha_formateada</p>
                                <p><strong>📞 Método de contacto:</strong> $metodo_nombre</p>
                                <p><strong>🛠️ Servicio solicitado:</strong> $servicio_nombre</p>
                                <p><strong>🏢 Empresa:</strong> $empresa</p>
                            </div>
                        </div>
                        
                        <p>Nuestro equipo especializado se pondrá en contacto contigo mediante <strong style='color: #FF6B4A;'>$metodo_nombre</strong> en las <strong>próximas 24 horas</strong> para confirmar los detalles de la demostración y coordinar el mejor horario para ambas partes.</p>
                        
                        <div class='contact-info'>
                            <h4>📞 ¿Tienes alguna pregunta urgente?</h4>
                            <div class='contact-item'><strong>📧 Email:</strong> ivan@aloia.ai</div>
                            <div class='contact-item'><strong>📱 Teléfono:</strong> +(52) 56 6754 5777</div>
                            <div class='contact-item'><strong>🌐 Sitio web:</strong> aloia.ai</div>
                        </div>
                        
                        <p>Durante la demostración, te mostraremos cómo <strong style='color: #FF6B4A;'>Aloia</strong> puede transformar y optimizar los procesos de tu empresa mediante soluciones de inteligencia artificial personalizadas.</p>
                        
                        <p style='margin-top: 30px;'>¡Esperamos poder mostrarte el potencial de la IA para tu negocio!</p>
                        
                        <p style='margin-top: 25px; font-size: 16px;'>Saludos cordiales,<br><strong style='color: #FF6B4A; font-size: 18px;'>Equipo Aloia</strong></p>
                    </td>
                </tr>
            </table>
            
            <!-- Footer -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                <tr>
                    <td class='footer'>
                        <p><strong>© 2025 Aloia. Todos los derechos reservados.</strong></p>
                        <p>Este correo fue enviado a <strong>$email</strong> como confirmación de tu solicitud.</p>
                        <p>Si no solicitaste esta demostración, puedes ignorar este mensaje.</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>";
                            
                            $cliente_headers = "From: Aloia <noreply@aloia.ai>\r\n";
                            $cliente_headers .= "MIME-Version: 1.0\r\n";
                            $cliente_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                            
                            mail($email, $cliente_subject, $cliente_body, $cliente_headers);
                        }
                        
                    } catch (Exception $e) {
                        error_log("Error enviando email: " . $e->getMessage());
                    }
                    
                    // Mensaje de resultado con información de API
                    if ($api_enviado) {
                        $mensaje_resultado = '¡Gracias por tu interés! Hemos recibido tu solicitud y te contactaremos pronto mediante tu método preferido. También te hemos enviado un correo de confirmación.';
                    } else {
                        $mensaje_resultado = '¡Gracias por tu interés! Hemos recibido tu solicitud y te contactaremos pronto mediante tu método preferido. También te hemos enviado un correo de confirmación. (Nota: Hubo un problema menor con el sistema CRM, pero tu solicitud ha sido guardada correctamente)';
                    }
                    $tipo_mensaje = 'success';
                    
                    // Limpiar variables para resetear el formulario
                    $nombre = $empresa = $email = $telefono = $metodo_contacto = $servicio = $fecha = $mensaje = '';
                    
                } else {
                    throw new Exception('Error al guardar los datos');
                }
                
                $stmt->close();
            } else {
                throw new Exception('Error al preparar la consulta');
            }
            
            $conn->close();
            
        } catch (Exception $e) {
            $mensaje_resultado = 'Ha ocurrido un error al procesar su solicitud. Por favor, inténtelo de nuevo.';
            $tipo_mensaje = 'error';
            error_log("Error en formulario de contacto: " . $e->getMessage());
        }
    } else {
        $mensaje_resultado = 'Por favor, complete todos los campos obligatorios.';
        $tipo_mensaje = 'error';
    }
}
?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<!-- Estilos personalizados para la página sobre nosotros -->
<link rel="stylesheet" href="<?= CSS_PATH ?>/contacto.css">
<style>
    /* Esto puede ir en contacto.css */
.success-message,
.error-alert {
    display: none;
    padding: 1rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
}

.success-message {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.error-alert {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.success-message.show,
.error-alert.show {
    display: block;
}

/* Estilos para campos con error */
.form-control.error,
.form-select.error {
    border-color: #dc3545 !important;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
}

/* Estados de carga del botón */
.btn-submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4">
        <div class="contact-hero-content">
            <div class="contact-badge">
                <i class="fas fa-calendar-check mr-2"></i> Agenda una demo
            </div>
            <h1 class="contact-title">
    Transforma tu negocio con 
    <img src="<?= IMG_PATH ?>aloia-color.png" alt="Aloia" class="inline h-11 align-middle">
</h1>
            <p class="contact-subtitle">Descubre cómo nuestras soluciones de IA pueden optimizar tus procesos y potenciar tu crecimiento</p>
        </div>
    </div>
</section>

<!-- Formulario de Contacto -->
<section class="contact-form-section">
    <div class="container mx-auto px-4">
        <div class="contact-form-container">
            <div class="contact-form-card">
                <div class="contact-form-header">
                    <h3>Solicita una demostración personalizada</h3>
                    <p>Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas</p>
                </div>
                <div class="contact-form-body">
                    
                    <?php if ($mensaje_resultado): ?>
                        <div class="<?= $tipo_mensaje === 'success' ? 'success-message' : 'error-alert' ?> show">
                            <i class="fas fa-<?= $tipo_mensaje === 'success' ? 'check-circle' : 'exclamation-circle' ?> mr-2"></i> 
                            <?= htmlspecialchars($mensaje_resultado) ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <input type="hidden" name="enviar_demo" value="1">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre completo <span class="text-red-500">*</span></label>
                                <input type="text" id="nombre" name="nombre" class="form-control" 
                                       value="<?= htmlspecialchars($nombre ?? '') ?>" required>
                                <div class="error-message">Por favor, ingresa tu nombre completo</div>
                            </div>
                            <div class="form-group">
                                <label for="empresa" class="form-label">Empresa <span class="text-red-500">*</span></label>
                                <input type="text" id="empresa" name="empresa" class="form-control" 
                                       value="<?= htmlspecialchars($empresa ?? '') ?>" required>
                                <div class="error-message">Por favor, ingresa el nombre de tu empresa</div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="email" class="form-label">Correo electrónico <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" 
                                       value="<?= htmlspecialchars($email ?? '') ?>" required>
                                <div class="error-message">Por favor, ingresa un correo electrónico válido</div>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Teléfono <span class="text-red-500">*</span></label>
                                <input type="tel" id="telefono" name="telefono" class="form-control" 
                                       value="<?= htmlspecialchars($telefono ?? '') ?>" required>
                                <div class="error-message">Por favor, ingresa un número de teléfono válido</div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="metodo_contacto" class="form-label">Método de contacto preferido <span class="text-red-500">*</span></label>
                                <select id="metodo_contacto" name="metodo_contacto" class="form-select" required>
                                    <option value="" disabled <?= empty($metodo_contacto) ? 'selected' : '' ?>>Selecciona una opción</option>
                                    <option value="email" <?= ($metodo_contacto ?? '') === 'email' ? 'selected' : '' ?>>📧 Correo Electrónico</option>
                                    <option value="telefono" <?= ($metodo_contacto ?? '') === 'telefono' ? 'selected' : '' ?>>📞 Llamada Telefónica</option>
                                    <option value="whatsapp" <?= ($metodo_contacto ?? '') === 'whatsapp' ? 'selected' : '' ?>>💬 WhatsApp</option>
                                    <option value="videollamada" <?= ($metodo_contacto ?? '') === 'videollamada' ? 'selected' : '' ?>>📹 Videollamada (Zoom/Meet)</option>
                                    <option value="presencial" <?= ($metodo_contacto ?? '') === 'presencial' ? 'selected' : '' ?>>🏢 Reunión Presencial</option>
                                </select>
                                <div class="error-message">Por favor, selecciona un método de contacto</div>
                            </div>
                            <div class="form-group">
                                <label for="servicio" class="form-label">Servicio de interés <span class="text-red-500">*</span></label>
                                <select id="servicio" name="servicio" class="form-select" required>
                                    <option value="" disabled <?= empty($servicio) ? 'selected' : '' ?>>Selecciona una opción</option>
                                    <option value="ia-personalizada" <?= ($servicio ?? '') === 'ia-personalizada' ? 'selected' : '' ?>>IA Personalizada</option>
                                    <option value="automatizacion" <?= ($servicio ?? '') === 'automatizacion' ? 'selected' : '' ?>>Automatización de Procesos</option>
                                    <option value="analisis-datos" <?= ($servicio ?? '') === 'analisis-datos' ? 'selected' : '' ?>>Análisis de Datos</option>
                                    <option value="chatbots" <?= ($servicio ?? '') === 'chatbots' ? 'selected' : '' ?>>Chatbots Inteligentes</option>
                                    <option value="vision-artificial" <?= ($servicio ?? '') === 'vision-artificial' ? 'selected' : '' ?>>Visión Artificial</option>
                                    <option value="otro" <?= ($servicio ?? '') === 'otro' ? 'selected' : '' ?>>Otro</option>
                                </select>
                                <div class="error-message">Por favor, selecciona un servicio</div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fecha" class="form-label">Fecha preferida <span class="text-red-500">*</span></label>
                            <input type="text" id="fecha" name="fecha" class="form-control datepicker" 
                                   placeholder="Selecciona una fecha" 
                                   value="<?= htmlspecialchars($fecha ?? '') ?>" required>
                            <div class="error-message">Por favor, selecciona una fecha</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                            <textarea id="mensaje" name="mensaje" rows="4" class="form-control" 
                                      placeholder="Cuéntanos más sobre tus necesidades o preguntas específicas"><?= htmlspecialchars($mensaje ?? '') ?></textarea>
                        </div>
                        <button type="submit" class="btn-submit" id="submit-btn">
                            <span class="btn-text">Solicitar demostración</span>
                        </button>
                        <div class="form-footer">
                            Al enviar este formulario, aceptas nuestra <a href="#" class="text-aloia-red hover:underline">Política de Privacidad</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información de Contacto -->
<section class="contact-info-section">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="contact-info-title">Llámanos</h3>
                <p class="contact-info-text">Nuestro equipo está disponible para atenderte de lunes a viernes de 9:00 AM a 6:00 PM</p>
                <a href="tel:+52 56 6754 5777" class="contact-info-link">
                    +(52) 56 6754 5777 <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="contact-info-title">Escríbenos</h3>
                <p class="contact-info-text">Envíanos un correo electrónico y te responderemos en menos de 24 horas</p>
                <a href="mailto:ivan@aloia.ai" class="contact-info-link">
                    ivan@aloia.ai<i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="contact-info-title">Visítanos</h3>
                <p class="contact-info-text">Encuéntranos fácilmente desde cualquier punto de la ciudad.</p>
                <a href="https://maps.app.goo.gl/gjUu7qqg8Z9opPZr6" target="_blank" class="contact-info-link">
                    Ver en el mapa.<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Preguntas Frecuentes</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Respuestas a las preguntas más comunes sobre nuestros servicios y proceso de demostración</p>
        </div>
        
        <div class="max-w-3xl mx-auto">
            <div class="mb-6">
                <h3 class="text-xl font-bold mb-2">¿Cuánto dura una demostración?</h3>
                <p class="text-gray-600">Nuestras demostraciones tienen una duración aproximada de 45 minutos, donde presentamos nuestras soluciones y respondemos a todas tus preguntas.</p>
            </div>
            
            <div class="mb-6">
                <h3 class="text-xl font-bold mb-2">¿La demostración tiene algún costo?</h3>
                <p class="text-gray-600">No, nuestras demostraciones son completamente gratuitas y sin compromiso. Queremos que conozcas nuestras soluciones antes de tomar una decisión.</p>
            </div>
            
            <div class="mb-6">
                <h3 class="text-xl font-bold mb-2">¿Puedo solicitar una demostración para mi equipo completo?</h3>
                <p class="text-gray-600">Por supuesto! Podemos coordinar demostraciones grupales para que todo tu equipo conozca nuestras soluciones. Simplemente indícalo en el campo de mensaje.</p>
            </div>
            
            <div class="mb-6">
                <h3 class="text-xl font-bold mb-2">¿Ofrecen diferentes métodos de contacto?</h3>
                <p class="text-gray-600">Sí, nos adaptamos a tu preferencia. Puedes elegir entre email, llamada telefónica, WhatsApp, videollamada o reunión presencial según te resulte más cómodo.</p>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-2">¿Ofrecen soluciones personalizadas?</h3>
                <p class="text-gray-600">Sí, todas nuestras soluciones se adaptan a las necesidades específicas de cada cliente. Durante la demostración, analizaremos tus requerimientos para ofrecerte la mejor solución.</p>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar Flatpickr (datepicker)
    flatpickr("#fecha", {
        minDate: "today",
        dateFormat: "Y-m-d",
        disable: [
            function(date) {
                // Deshabilitar fines de semana
                return (date.getDay() === 0 || date.getDay() === 6);
            }
        ],
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            },
            months: {
                shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                longhand: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            }
        }
    });

    // Validación en tiempo real
    const inputFields = document.querySelectorAll('.form-control, .form-select');
    inputFields.forEach(field => {
        field.addEventListener('blur', function() {
            field.classList.remove('error');
            
            if (field.hasAttribute('required') && !field.value.trim()) {
                field.classList.add('error');
            }
            
            // Validación específica para email
            if (field.type === 'email' && field.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value.trim())) {
                    field.classList.add('error');
                }
            }
            
            // Validación específica para teléfono
            if (field.id === 'telefono' && field.value.trim()) {
                const phoneRegex = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
                if (!phoneRegex.test(field.value.trim())) {
                    field.classList.add('error');
                }
            }
        });
    });

    // Prevenir doble envío
    const form = document.querySelector('form');
    const submitBtn = document.getElementById('submit-btn');
    
    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.querySelector('.btn-text').textContent = 'Enviando...';
    });

    // Auto-scroll a mensaje de resultado si existe
    <?php if ($mensaje_resultado): ?>
    setTimeout(function() {
        document.querySelector('.<?= $tipo_mensaje === 'success' ? 'success-message' : 'error-alert' ?>').scrollIntoView({ 
            behavior: 'smooth', 
            block: 'center' 
        });
    }, 100);
    <?php endif; ?>
});
</script>

<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    if (document.getElementById('particles-canvas')) {
        initParticlesCanvas();
    }
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>