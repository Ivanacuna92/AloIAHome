<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Descubre nuestra IA | Aloia</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/icono.png" type="image/x-icon">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
        
        footer {
            flex: 0 0 auto;
            height: 40px;
            background-color: var(--aloia-light-accent);
            display: flex;
            align-items: center;
            z-index: 10;
            border-top: 1px solid rgba(253, 97, 68, 0.1);
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
        
        .chatbot-wrapper {
            width: 100%;
            height: 100%;
            max-width: 550px;
            max-height: 100%;
            transition: all 0.3s ease;
        }
        
        .chatbot-container {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background: white;
            width: 100%;
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .chatbot-iframe {
            width: 100%;
            height: 100%;
            border: none;
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
            padding: 0.5rem 1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.2);
            font-size: 0.875rem;
            white-space: nowrap;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(253, 50, 68, 0.3);
        }
        
        .logo-image {
            height: 28px;
            width: auto;
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
        
        .mini-stats {
            display: flex;
            margin-bottom: 0.75rem;
        }
        
        .mini-stat {
            margin-right: 1rem;
            display: flex;
            align-items: center;
        }
        
        .mini-stat-number {
            font-weight: 700;
            color: var(--aloia-red);
            margin-right: 0.25rem;
        }
        
        .mini-stat-label {
            font-size: 0.75rem;
            color: #6b7280;
        }
        
        .mini-steps {
            margin-bottom: 0.75rem;
        }
        
        .mini-step {
            display: flex;
            align-items: center;
            margin-bottom: 0.4rem;
            font-size: 0.8rem;
        }
        
        .mini-step-icon {
            color: var(--aloia-red);
            margin-right: 0.5rem;
            flex-shrink: 0;
        }
        
        .mini-quote {
            font-style: italic;
            font-size: 0.8rem;
            color: #4b5563;
            margin-bottom: 0.75rem;
            padding-left: 0.5rem;
            border-left: 2px solid var(--aloia-orange);
        }
        
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
            opacity: 0.3;
        }
        
        .blob-1 {
            width: 300px;
            height: 300px;
            background: rgba(253, 97, 68, 0.15);
            top: -150px;
            left: -150px;
        }
        
        .blob-2 {
            width: 250px;
            height: 250px;
            background: rgba(174, 58, 141, 0.15);
            bottom: -100px;
            right: -100px;
        }
        
        /* Estilos para el nuevo contenido */
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
        
        .trial-text {
            font-size: 0.7rem;
            font-weight: 500;
            color: #4b5563;
            margin-bottom: 0.75rem;
            background: rgba(253, 97, 68, 0.05);
            padding: 0.5rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--aloia-red);
            font-size: 0.8rem;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 20;
        }
        
        .left-column:hover .scroll-indicator {
            opacity: 1;
        }
        
        /* Personalización del scrollbar */
        .left-column::-webkit-scrollbar {
            width: 4px;
        }
        
        .left-column::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }
        
        .left-column::-webkit-scrollbar-thumb {
            background: rgba(253, 97, 68, 0.3);
            border-radius: 10px;
        }
        
        .left-column::-webkit-scrollbar-thumb:hover {
            background: rgba(253, 97, 68, 0.5);
        }
        
        /* Media queries mejorados para dispositivos móviles */
        @media (max-width: 1023px) {
            .main-container {
                flex-direction: column;
            }
            
            .left-column, .right-column {
                width: 100%;
                padding: 0.75rem;
            }
            
            .left-column {
                height: 45%;
                min-height: 250px;
                overflow-y: auto;
                border-radius: 0;
            }
            
            .right-column {
                height: 55%;
                min-height: 300px;
                padding: 0.5rem;
            }
            
            .chatbot-wrapper {
                max-width: 90%;
                height: 100%;
            }
            
            h1 {
                font-size: 1.4rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .mini-step, .mini-quote {
                font-size: 0.7rem;
            }
            
            .content-section h2 {
                font-size: 0.85rem;
                margin-bottom: 0.3rem;
            }
            
            .content-section p {
                font-size: 0.7rem;
                margin-bottom: 0.3rem;
            }
            
            .process-step {
                margin-bottom: 0.3rem;
            }
            
            .step-title {
                font-size: 0.7rem;
            }
            
            .step-description {
                font-size: 0.65rem;
            }
            
            .trial-text {
                font-size: 0.65rem;
                margin-bottom: 0.5rem;
            }
            
            .btn-primary {
                padding: 0.4rem 0.8rem;
                font-size: 0.75rem;
            }
            
            .mini-stats {
                margin-bottom: 0.5rem;
            }
            
            .content-section {
                margin-bottom: 0.5rem;
            }
        }
        
        /* Estilos específicos para móviles en vertical */
        @media (max-width: 767px) and (orientation: portrait) {
            /* Permitir scroll en móviles */
            html, body {
                height: auto;
                position: static;
                overflow: auto !important;
            }
            
            .page-wrapper {
                min-height: 100vh;
                height: auto;
                overflow: visible;
            }
            
            main {
                height: auto;
                overflow: visible;
            }
            
            .main-container {
                flex-direction: column;
                height: auto;
            }
            
            .left-column {
                height: auto;
                overflow: visible;
                padding: 1rem;
                background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.85) 100%);
                margin-bottom: 1rem;
            }
            
            /* Chatbot mucho más alto en móviles */
            .right-column {
                height: 90vh; /* Casi toda la pantalla */
                padding: 1rem;
                margin-bottom: 1rem;
                position: relative;
                background: linear-gradient(135deg, rgba(253, 97, 68, 0.03) 0%, rgba(174, 58, 141, 0.03) 100%);
            }
            
            .chatbot-wrapper {
                max-width: 100%;
                height: 100%;
            }
            
            .scroll-indicator {
                display: none; /* Ocultar indicador de scroll en móviles */
            }
            
            /* Ajustes de espaciado para móviles */
            h1 {
                font-size: 1.5rem !important;
                margin-bottom: 0.75rem !important;
            }
            
            .content-section {
                margin-bottom: 1rem;
                background: rgba(255, 255, 255, 0.7);
            }
            
            .content-section h2 {
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }
            
            .content-section p {
                font-size: 0.85rem;
                margin-bottom: 0.5rem;
            }
            
            .process-step {
                margin-bottom: 0.75rem;
            }
            
            .step-title {
                font-size: 0.85rem;
            }
            
            .step-description {
                font-size: 0.75rem;
            }
            
            .trial-text {
                font-size: 0.85rem;
                margin-bottom: 1rem;
                background: rgba(253, 97, 68, 0.08);
            }
            
            .btn-primary {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }
            
            /* Añadir un botón para expandir/colapsar el chatbot */
            .chatbot-toggle {
                position: absolute;
                top: -15px;
                left: 50%;
                transform: translateX(-50%);
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background: var(--aloia-gradient);
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                z-index: 30;
                cursor: pointer;
                font-size: 0.8rem;
            }
            
            /* Añadir un borde decorativo al chatbot */
            .chatbot-container {
                border: 1px solid rgba(253, 97, 68, 0.2);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            /* Mejorar el fondo en móviles */
            body {
                background-image: 
                    radial-gradient(circle at 10% 10%, rgba(253, 97, 68, 0.05) 0%, transparent 70%),
                    radial-gradient(circle at 90% 90%, rgba(174, 58, 141, 0.05) 0%, transparent 70%);
            }
        }
        
        /* Ajustes específicos para teléfonos pequeños */
        @media (max-width: 480px) {
            .right-column {
                height: 80vh; /* Un poco menos alto para teléfonos pequeños */
            }
        }
        
        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.4s ease-out forwards;
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        
        /* Animación para el botón de expandir/colapsar */
        @keyframes pulse {
            0% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.1); }
            100% { transform: translateX(-50%) scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <!-- Blobs decorativos -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        
        <!-- Header -->
        <header>
            <div class="container">
                <div class="flex justify-between items-center">
                    <div>
                        <img src="assets/img/aloia-color.png" alt="Aloia" class="logo-image">
                    </div>
                    <a href="contacto.php" class="btn-primary text-xs">
                        <i class="fas fa-calendar-check mr-1"></i> Agenda demo
                    </a>
                </div>
            </div>
        </header>
        
        <!-- Contenido principal -->
        <main>
            <div class="container h-full">
                <div class="main-container">
                    <!-- Columna izquierda - Contenido -->
                    <div class="left-column relative z-10">
                        <div class="badge animate-fadeIn opacity-0">
                            <i class="fas fa-robot mr-1"></i> IA para tu negocio
                        </div>
                        
                        <h1 class="text-2xl md:text-3xl font-bold mb-2 animate-fadeIn opacity-0 delay-100">
                            <span class="gradient-text">Potencia tu negocio</span> con IA
                        </h1>
                        
                        <p class="text-sm mb-3 text-gray-700 animate-fadeIn opacity-0 delay-100">
                            Respuestas automáticas 24/7. Más ventas, menos costos.
                        </p>
                        
                        <div class="mini-stats animate-fadeIn opacity-0 delay-200">
                            <div class="mini-stat">
                                <span class="mini-stat-number">+60%</span>
                                <span class="mini-stat-label">conversiones</span>
                            </div>
                            <div class="mini-stat">
                                <span class="mini-stat-number">-40%</span>
                                <span class="mini-stat-label">costos</span>
                            </div>
                        </div>
                        
                        <!-- Nuevo contenido -->
                        <div class="content-section animate-fadeIn opacity-0 delay-200">
                            <h2>¡Estás perdiendo oportunidades sin saberlo!</h2>
                            <p>Hoy, tus clientes comparan opciones y deciden en segundos. Tu negocio está listo para responder en tiempo real?</p>
                            <p>Nuestra IA ya responde a miles de usuarios cada mes, optimizando ventas, soporte y captación de clientes.</p>
                        </div>
                        
                        <div class="content-section animate-fadeIn opacity-0 delay-200">
                            <h2>En menos de 1 semana estará funcionando:</h2>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <div class="step-title">Agenda una demo</div>
                                        <div class="step-description">Conoce cómo funciona nuestra IA en una sesin personalizada.</div>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <div class="step-title">Cuéntanos cómo operas</div>
                                        <div class="step-description">Adaptamos la IA a tus procesos y necesidades específicas.</div>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <div class="step-title">Relájate, nosotros lo activamos</div>
                                        <div class="step-description">Nos encargamos de todo el proceso técnico de implementación.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="trial-text animate-fadeIn opacity-0 delay-300">
                            Pruébalo gratis por 30 días. Sin contratos. Solo resultados.
                        </div>
                        
                        <div class="animate-fadeIn opacity-0 delay-300">
                            <a href="contacto.php" class="btn-primary">
                                <i class="fas fa-rocket mr-1"></i> Comenzar ahora
                            </a>
                        </div>
                        
                        <!-- Indicador de scroll (solo visible en desktop) -->
                        <div class="scroll-indicator">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    
                    <!-- Columna derecha - Chatbot -->
                    <div class="right-column relative z-10 animate-fadeIn opacity-0 delay-200">
                        <!-- Botón para expandir/colapsar (solo en móviles) -->
                        <div class="chatbot-toggle pulse" id="chatbot-toggle" style="display: none;">
                            <i class="fas fa-arrows-alt-v"></i>
                        </div>
                        
                        <div class="chatbot-wrapper">
                            <div class="chatbot-container">
                                <iframe src="https://fin-ai.aloia.dev/" allow="microphone; clipboard-write" frameborder="0" class="chatbot-iframe" id="chatbot-iframe" title="Aloia AI Chatbot"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="flex justify-between items-center">
                    <div class="text-xs text-gray-500">
                        &copy; 2024 Aloia
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Activar animaciones
            const animatedElements = document.querySelectorAll('.animate-fadeIn');
            animatedElements.forEach(element => {
                element.classList.remove('opacity-0');
            });
            
            // Detectar si estamos en móvil en orientación vertical
            function isMobilePortrait() {
                return window.matchMedia("(max-width: 767px) and (orientation: portrait)").matches;
            }
            
            // Aplicar comportamiento según el dispositivo
            function applyDeviceBehavior() {
                if (isMobilePortrait()) {
                    // En móviles permitimos scroll
                    document.documentElement.style.overflow = 'auto';
                    document.body.style.overflow = 'auto';
                    document.body.style.position = 'static';
                    
                    // Eliminar listeners de prevención de scroll
                    document.removeEventListener('touchmove', preventScroll);
                    
                    // Eliminar alturas fijas
                    document.querySelector('.left-column').style.height = 'auto';
                    
                    // Ajustar altura del chatbot según el tamao del dispositivo
                    const rightColumn = document.querySelector('.right-column');
                    if (window.innerWidth <= 480) {
                        rightColumn.style.height = '80vh';
                    } else {
                        rightColumn.style.height = '90vh';
                    }
                    
                    document.querySelector('main').style.height = 'auto';
                    
                    // Mostrar botón de toggle
                    document.getElementById('chatbot-toggle').style.display = 'flex';
                } else {
                    // En desktop mantenemos el comportamiento sin scroll
                    document.documentElement.style.overflow = 'hidden';
                    document.body.style.overflow = 'hidden';
                    document.body.style.position = 'fixed';
                    
                    // Añadir listener para prevenir scroll
                    document.addEventListener('touchmove', preventScroll, { passive: false });
                    
                    // Ajustar tamaños
                    adjustSizes();
                    
                    // Ocultar botn de toggle
                    document.getElementById('chatbot-toggle').style.display = 'none';
                }
                
                // Actualizar indicador de scroll
                updateScrollIndicator();
            }
            
            // Función para prevenir scroll
            function preventScroll(e) {
                if (e.target.closest('.left-column') === null) {
                    e.preventDefault();
                }
            }
            
            // Mostrar/ocultar indicador de scroll
            const leftColumn = document.querySelector('.left-column');
            const scrollIndicator = document.querySelector('.scroll-indicator');
            
            function updateScrollIndicator() {
                if (isMobilePortrait()) {
                    scrollIndicator.style.display = 'none';
                    return;
                }
                
                if (leftColumn.scrollHeight > leftColumn.clientHeight) {
                    if (leftColumn.scrollTop + leftColumn.clientHeight >= leftColumn.scrollHeight - 10) {
                        scrollIndicator.style.opacity = '0';
                    } else {
                        scrollIndicator.style.opacity = '1';
                    }
                } else {
                    scrollIndicator.style.opacity = '0';
                }
            }
            
            leftColumn.addEventListener('scroll', updateScrollIndicator);
            
            // Ajustar tamaños en caso de resize (solo para desktop)
            function adjustSizes() {
                if (isMobilePortrait()) return;
                
                const windowHeight = window.innerHeight;
                const headerHeight = document.querySelector('header').offsetHeight;
                const footerHeight = document.querySelector('footer').offsetHeight;
                const mainHeight = windowHeight - headerHeight - footerHeight;
                
                document.querySelector('main').style.height = mainHeight + 'px';
                
                if (window.innerWidth <= 1023 && !isMobilePortrait()) {
                    const leftColumn = document.querySelector('.left-column');
                    const rightColumn = document.querySelector('.right-column');
                    
                    leftColumn.style.height = (mainHeight * 0.45) + 'px';
                    rightColumn.style.height = (mainHeight * 0.55) + 'px';
                }
            }
            
            // Función para expandir/colapsar el chatbot en móviles
            const chatbotToggle = document.getElementById('chatbot-toggle');
            const rightColumn = document.querySelector('.right-column');
            let isExpanded = true; // Inicialmente expandido
            
            chatbotToggle.addEventListener('click', function() {
                if (isExpanded) {
                    // Colapsar
                    rightColumn.style.height = '50vh';
                    chatbotToggle.innerHTML = '<i class="fas fa-expand-alt"></i>';
                } else {
                    // Expandir
                    rightColumn.style.height = window.innerWidth <= 480 ? '80vh' : '90vh';
                    chatbotToggle.innerHTML = '<i class="fas fa-compress-alt"></i>';
                }
                isExpanded = !isExpanded;
            });
            
            // Ejecutar ajuste inicial y en cada resize
            applyDeviceBehavior();
            window.addEventListener('resize', applyDeviceBehavior);
            
            // Añadir indicador de carga para el iframe
            const chatbotIframe = document.getElementById('chatbot-iframe');
            const chatbotContainer = document.querySelector('.chatbot-container');
            
            // Crear el loader
            const loader = document.createElement('div');
            loader.className = 'iframe-loader';
            loader.innerHTML = '<div class="spinner"></div>';
            loader.style.position = 'absolute';
            loader.style.top = '0';
            loader.style.left = '0';
            loader.style.width = '100%';
            loader.style.height = '100%';
            loader.style.display = 'flex';
            loader.style.alignItems = 'center';
            loader.style.justifyContent = 'center';
            loader.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
            loader.style.zIndex = '5';
            
            // Crear el spinner
            const spinner = loader.querySelector('.spinner');
            spinner.style.width = '40px';
            spinner.style.height = '40px';
            spinner.style.border = '4px solid rgba(253, 97, 68, 0.1)';
            spinner.style.borderRadius = '50%';
            spinner.style.borderTop = '4px solid var(--aloia-red)';
            spinner.style.animation = 'spin 1s linear infinite';
            
            // Añadir keyframes para la animación del spinner
            const style = document.createElement('style');
            style.innerHTML = `
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            `;
            document.head.appendChild(style);
            
            // Añadir el loader al contenedor del chatbot
            chatbotContainer.style.position = 'relative';
            chatbotContainer.appendChild(loader);
            
            // Ocultar el loader cuando el iframe se cargue
            chatbotIframe.onload = function() {
                loader.style.display = 'none';
            };
            
            // Hacer scroll al chatbot cuando se hace clic en el botón de comenzar
            document.querySelector('.btn-primary').addEventListener('click', function(e) {
                if (isMobilePortrait()) {
                    e.preventDefault();
                    const rightColumnOffset = rightColumn.offsetTop;
                    window.scrollTo({
                        top: rightColumnOffset - 20,
                        behavior: 'smooth'
                    });
                    
                    // Destacar el chatbot
                    rightColumn.style.animation = 'none';
                    setTimeout(() => {
                        rightColumn.style.animation = 'pulse 1s';
                    }, 10);
                }
            });
        });
    </script>
</body>
</html>