<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Descubre nuestra IA | Aloia</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
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
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            display: flex;
            flex-direction: column;
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
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            z-index: 10;
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
        }
        
        .right-column {
            width: 55%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .chatbot-wrapper {
            width: 100%;
            height: 100%;
            max-width: 550px;
            max-height: 100%;
        }
        
        .chatbot-container {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background: white;
            width: 100%;
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
            width: 200px;
            height: 200px;
            background: rgba(253, 97, 68, 0.2);
            top: -100px;
            left: -100px;
        }
        
        .blob-2 {
            width: 150px;
            height: 150px;
            background: rgba(174, 58, 141, 0.2);
            bottom: -50px;
            right: -50px;
        }
        
        /* Estilos para el nuevo contenido */
        .content-section {
            margin-bottom: 0.75rem;
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
            width: 20px;
            height: 20px;
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
        }
        
        /* Indicador de scroll */
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
        
        /* Media queries mejorados */
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
        
        @media (max-width: 640px) {
            header {
                height: 45px;
            }
            
            footer {
                height: 35px;
            }
            
            .left-column {
                height: 50%;
                padding: 0.5rem 0.75rem;
            }
            
            .right-column {
                height: 50%;
                padding: 0.5rem;
            }
            
            .chatbot-wrapper {
                max-width: 85%;
            }
            
            h1 {
                font-size: 1.2rem !important;
            }
            
            .badge {
                font-size: 0.6rem;
                padding: 0.15rem 0.4rem;
            }
            
            .mini-stat-number {
                font-size: 0.8rem;
            }
            
            .mini-stat-label {
                font-size: 0.65rem;
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
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/aloia-color-2UiJoAf894U8y4HmrS1Teu5hpVu5o3.png" alt="Aloia" class="logo-image">
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
                            <p>Hoy, tus clientes comparan opciones y deciden en segundos. ¿Tu negocio está listo para responder en tiempo real?</p>
                            <p>Nuestra IA ya responde a miles de usuarios cada mes, optimizando ventas, soporte y captación de clientes.</p>
                        </div>
                        
                        <div class="content-section animate-fadeIn opacity-0 delay-200">
                            <h2>En menos de 1 semana estará funcionando:</h2>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <div class="step-title">Agenda una demo</div>
                                        <div class="step-description">Conoce cómo funciona nuestra IA en una sesión personalizada.</div>
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
                        
                        <!-- Indicador de scroll -->
                        <div class="scroll-indicator">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    
                    <!-- Columna derecha - Chatbot -->
                    <div class="right-column relative z-10 animate-fadeIn opacity-0 delay-200">
                        <div class="chatbot-wrapper">
                            <div class="chatbot-container">
                                <iframe src="https://fin-ai.apifinai.com/" allow="microphone; clipboard-write" frameborder="0" class="chatbot-iframe" id="chatbot-iframe" title="Aloia AI Chatbot"></iframe>
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
            
            // Forzar que no haya scroll
            document.documentElement.style.overflow = 'hidden';
            document.body.style.overflow = 'hidden';
            
            // Prevenir scroll en dispositivos táctiles para el body
            document.addEventListener('touchmove', function(e) {
                if (e.target.closest('.left-column') === null) {
                    e.preventDefault();
                }
            }, { passive: false });
            
            // Mostrar/ocultar indicador de scroll
            const leftColumn = document.querySelector('.left-column');
            const scrollIndicator = document.querySelector('.scroll-indicator');
            
            function updateScrollIndicator() {
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
            
            // Ajustar tamaños en caso de resize
            function adjustSizes() {
                const windowHeight = window.innerHeight;
                const headerHeight = document.querySelector('header').offsetHeight;
                const footerHeight = document.querySelector('footer').offsetHeight;
                const mainHeight = windowHeight - headerHeight - footerHeight;
                
                document.querySelector('main').style.height = mainHeight + 'px';
                
                if (window.innerWidth <= 1023) {
                    const leftColumn = document.querySelector('.left-column');
                    const rightColumn = document.querySelector('.right-column');
                    
                    // Ajustar proporción en móviles (más espacio para el texto)
                    if (window.innerWidth <= 640) {
                        leftColumn.style.height = (mainHeight * 0.5) + 'px';
                        rightColumn.style.height = (mainHeight * 0.5) + 'px';
                    } else {
                        leftColumn.style.height = (mainHeight * 0.45) + 'px';
                        rightColumn.style.height = (mainHeight * 0.55) + 'px';
                    }
                }
                
                updateScrollIndicator();
            }
            
            // Ejecutar ajuste inicial y en cada resize
            adjustSizes();
            window.addEventListener('resize', adjustSizes);
        });
    </script>
</body>
</html>