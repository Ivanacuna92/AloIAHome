<?php
require_once __DIR__ . '/includes/config.php';
$page_title = "Aviso de privacidad | Aloia";

?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad - Aloia</title>
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
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #374151;
            background: var(--aloia-light-bg);
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(253, 97, 68, 0.05) 0%, transparent 70%),
                radial-gradient(circle at 90% 90%, rgba(174, 58, 141, 0.05) 0%, transparent 70%);
            min-height: 100vh;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        .header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem 0;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        
        .logo {
            font-size: 2rem;
            font-weight: 700;
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            color: #6b7280;
            font-size: 1.1rem;
        }
        
        .last-updated {
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.1) 0%, rgba(174, 58, 141, 0.1) 100%);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border-left: 4px solid var(--aloia-orange);
            box-shadow: 0 5px 15px rgba(253, 97, 68, 0.1);
        }
        
        .last-updated strong {
            color: var(--aloia-red);
        }
        
        .section {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            margin-bottom: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(253, 97, 68, 0.05);
            transition: all 0.3s ease;
        }
        
        .section:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }
        
        .section h2 {
            color: #1f2937;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid transparent;
            background: var(--aloia-gradient);
            background-size: 100% 2px;
            background-repeat: no-repeat;
            background-position: left bottom;
        }
        
        .section h2::before {
            content: "";
            display: inline-block;
            width: 8px;
            height: 8px;
            background: var(--aloia-gradient);
            border-radius: 50%;
            margin-right: 0.5rem;
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.2);
        }
        
        .section p {
            margin-bottom: 1rem;
            color: #4b5563;
            font-size: 1rem;
        }
        
        .section ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .section li {
            margin-bottom: 0.5rem;
            color: #4b5563;
            position: relative;
        }
        
        .section li::marker {
            color: var(--aloia-orange);
        }
        
        .section strong {
            color: var(--aloia-red);
            font-weight: 600;
        }
        
        .contact-info {
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.05) 0%, rgba(174, 58, 141, 0.05) 100%);
            padding: 2rem;
            border-radius: 16px;
            margin-top: 2rem;
            border: 1px solid rgba(253, 97, 68, 0.1);
            box-shadow: 0 10px 25px rgba(253, 97, 68, 0.1);
        }
        
        .contact-info h2 {
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .contact-card {
            background: rgba(255, 255, 255, 0.8);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .highlight-box {
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.08) 0%, rgba(174, 58, 141, 0.08) 100%);
            padding: 1.5rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            border-left: 4px solid var(--aloia-orange);
        }
        
        .disclaimer {
            text-align: center;
            font-style: italic;
            color: #6b7280;
            margin-top: 2rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px;
            border: 1px solid rgba(253, 97, 68, 0.05);
        }
        
        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .section {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .section:nth-child(odd) {
            animation-delay: 0.1s;
        }
        
        .section:nth-child(even) {
            animation-delay: 0.2s;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .header {
                padding: 1.5rem 1rem;
                margin-bottom: 2rem;
            }
            
            .logo {
                font-size: 1.5rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .section {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .section h2 {
                font-size: 1.2rem;
            }
            
            .section p {
                font-size: 0.9rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }
        
        /* Blob decorativo */
        .blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.15;
            pointer-events: none;
        }
        
        .blob-1 {
            width: 400px;
            height: 400px;
            background: var(--aloia-orange);
            top: -200px;
            left: -200px;
            animation: float 20s infinite linear;
        }
        
        .blob-2 {
            width: 300px;
            height: 300px;
            background: var(--aloia-purple);
            bottom: -150px;
            right: -150px;
            animation: float 25s infinite reverse linear;
        }
        
        @keyframes float {
            0%, 100% { transform: rotate(0deg) translateX(20px) rotate(0deg); }
            50% { transform: rotate(180deg) translateX(20px) rotate(-180deg); }
        }
    </style>
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    
    <div class="container">
        <div class="header">
            <div class="logo">Aloia</div>
            <div class="subtitle">Política de Privacidad</div>
        </div>
        
        <div class="last-updated">
            <strong>Última actualización:</strong> 23 de mayo de 2025
        </div>

    <div class="section">
        <h2>1. Información General</h2>
        <p>Esta política de privacidad describe cómo Aloia ("nosotros", "nuestro" o "la aplicación") recopila, usa y protege la información personal que usted proporciona cuando utiliza nuestros servicios a través de Facebook Lead Ads.</p>
        
        <p><strong>Empresa:</strong> Aloia<br>
        <strong>Aplicación:</strong> Aloia - Automatización con IA<br>
        <strong>Sitio web:</strong> https://aloia.ai</p>
    </div>

    <div class="section">
        <h2>2. Información que Recopilamos</h2>
        <p>A través de nuestros formularios de Facebook Lead Ads, recopilamos la siguiente información:</p>
        <ul>
            <li><strong>Nombre completo:</strong> Para identificación y contacto personalizado.</li>
            <li><strong>Correo electrónico:</strong> Para comunicación comercial y seguimiento.</li>
            <li><strong>Número de teléfono:</strong> Para contacto directo y consultas.</li>
            <li><strong>Nombre de empresa:</strong> Para entender su contexto comercial.</li>
            <li><strong>Información adicional:</strong> Cualquier detalle que proporcione voluntariamente en el formulario.</li>
        </ul>
    </div>

    <div class="section">
        <h2>3. Cmo Usamos su Información</h2>
        <p>Utilizamos la información recopilada para:</p>
        <ul>
            <li>Contactarlo sobre nuestros servicios de automatización con IA.</li>
            <li>Proporcionar consultas personalizadas sobre soluciones tecnológicas.</li>
            <li>Enviar información relevante sobre nuestros productos y servicios.</li>
            <li>Mejorar nuestros servicios y experiencia del cliente.</li>
            <li>Cumplir con obligaciones legales y comerciales.</li>
        </ul>
    </div>

    <div class="section">
        <h2>4. Compartir Información</h2>
        <p><strong>No vendemos, alquilamos o compartimos</strong> su información personal con terceros para fines comerciales sin su consentimiento explícito, excepto en los siguientes casos:</p>
        <ul>
            <li>Cuando sea requerido por ley.</li>
            <li>Para proteger nuestros derechos legales.</li>
            <li>Con proveedores de servicios que nos ayudan a operar nuestro negocio (bajo acuerdos de confidencialidad).</li>
        </ul>
    </div>

    <div class="section">
        <h2>5. Seguridad de Datos</h2>
        <p>Implementamos medidas de seguridad técnicas y organizativas apropiadas para proteger su información personal contra:</p>
        <ul>
            <li>Acceso no autorizado.</li>
            <li>Alteración, divulgación o destrucción.</li>
            <li>Pérdida accidental.</li>
        </ul>
        <p>Sus datos se almacenan en servidores seguros con cifrado y acceso restringido.</p>
    </div>

    <div class="section">
        <h2>6. Retención de Datos</h2>
        <p>Conservamos su información personal durante el tiempo necesario para:</p>
        <ul>
            <li>Cumplir con los fines para los cuales fue recopilada.</li>
            <li>Cumplir con requisitos legales y regulatorios.</li>
            <li>Resolver disputas y hacer cumplir nuestros acuerdos.</li>
        </ul>
        <p>Generalmente, conservamos los datos de leads por un período de 3 años, a menos que solicite su eliminación antes.</p>
    </div>

    <div class="section">
        <h2>7. Sus Derechos</h2>
        <p>Usted tiene derecho a:</p>
        <ul>
            <li><strong>Acceso:</strong> Solicitar una copia de la información personal que tenemos sobre usted.</li>
            <li><strong>Rectificación:</strong> Solicitar la corrección de información inexacta.</li>
            <li><strong>Eliminación:</strong> Solicitar la eliminación de su informacin personal.</li>
            <li><strong>Restricción:</strong> Solicitar la limitación del procesamiento de sus datos.</li>
            <li><strong>Oposición:</strong> Oponerse al procesamiento de sus datos personales.</li>
            <li><strong>Portabilidad:</strong> Solicitar la transferencia de sus datos a otro proveedor.</li>
        </ul>
    </div>

    <div class="section">
        <h2>8. Cookies y Tecnologías Similares</h2>
        <p>Nuestro sitio web puede utilizar cookies y tecnologías similares para:</p>
        <ul>
            <li>Mejorar la experiencia del usuario.</li>
            <li>Analizar el tráfico del sitio web.</li>
            <li>Personalizar contenido y anuncios.</li>
        </ul>
        <p>Puede configurar su navegador para rechazar cookies, aunque esto puede afectar la funcionalidad del sitio.</p>
    </div>

    <div class="section">
        <h2>9. Menores de Edad</h2>
        <p>Nuestros servicios est&aacute;n dirigidos a empresas y profesionales mayores de 18 años. No recopilamos intencionalmente información personal de menores de 18 años.</p>
    </div>

    <div class="section">
        <h2>10. Cambios a esta Política</h2>
        <p>Podemos actualizar esta política de privacidad ocasionalmente. Los cambios importantes serán notificados a trav&eacute;s de:</p>
        <ul>
            <li>Actualización de la fecha de "última actualización".</li>
            <li>Notificacin en nuestro sitio web.</li>
            <li>Comunicación directa si es legalmente requerido.</li>
        </ul>
    </div>

    <div class="section">
        <h2>11. Base Legal para el Procesamiento</h2>
        <p>Procesamos su información personal basándose en:</p>
        <ul>
            <li><strong>Consentimiento:</strong> Cuando proporciona su información voluntariamente.</li>
            <li><strong>Interés legítimo:</strong> Para fines comerciales legítimos.</li>
            <li><strong>Cumplimiento legal:</strong> Cuando es requerido por ley.</li>
        </ul>
    </div>

    <div class="contact-info">
        <h2>12. Contacto</h2>
        <p>Para ejercer sus derechos, hacer preguntas sobre esta política o presentar quejas, puede contactarnos:</p>
        
        <p><strong>Responsable del Tratamiento:</strong> Aloia<br>
        <strong>Email:</strong> ivan@aloia.ai<br>
        <strong>Sitio web:</strong> https://aloia.ai<br>
        <strong>Dirección:</strong> Pachuca, Hidalgo, México</p>
        
        <p><strong>Para solicitudes relacionadas con Facebook:</strong><br>
        También puede utilizar las herramientas de privacidad de Facebook para gestionar sus datos compartidos a través de Facebook Lead Ads.</p>
    </div>

    <div class="section">
        <p><em>Esta política de privacidad cumple con las regulaciones de protección de datos aplicables, incluyendo GDPR (Reglamento General de Protección de Datos) y la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP) de Mxico.</em></p>
    </div>
</body>
</html>
<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>