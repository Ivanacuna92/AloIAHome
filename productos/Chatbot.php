<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title = "Chatbot | Aloia";
$activePage = 'productos';

// Obtener información básica del usuario
$user_ip = $_SERVER['REMOTE_ADDR']; 
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'No disponible';
$user_referer = $_SERVER['HTTP_REFERER'] ?? 'Acceso directo';
$server_port = $_SERVER['SERVER_PORT'] ?? '80';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para el localizador IP -->
<link rel="stylesheet" href="<?= CSS_PATH ?>get-ip.css">

<!-- Header específico para la página de Chatbot -->
<section class="bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-slide-up animate-delay-200">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4 border border-aloia-orange/30">
                    <i class="fas fa-robot mr-2"></i>
                    Inteligencia Artificial Avanzada
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Chatbot IA
                    <span class="block text-gradient bg-gradient-aloia">Inteligente</span>
                </h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8 max-w-lg">
                    Automatiza tu atención al cliente con inteligencia artificial avanzada 24/7
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-gradient-aloia text-white px-8 py-4 rounded-full font-semibold hover:scale-105 transition-all duration-300 shadow-lg" data-chatbot-trigger>
                        <i class="fas fa-play mr-2"></i>
                        Probar chatbot
                    </button>
                    <a class="border-2 border-aloia-orange text-aloia-orange px-8 py-4 rounded-full font-semibold hover:bg-aloia-orange hover:text-white transition-all duration-300" href="/contacto.php">
                        <i class="fas fa-calendar mr-2"></i>
                        Agendar Demo
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-slide-up animate-delay-400">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-aloia-orange/20 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-aloia-purple/20 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                    <div class="relative w-48 h-48 bg-gradient-aloia rounded-3xl rotate-3 hover:rotate-0 transition-all duration-500 flex items-center justify-center shadow-parallel">
                        <i class="fas fa-robot text-white text-7xl animate-float"></i>
                    </div>
                    <div class="absolute -right-2 top-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            Online
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <!-- Características Principales -->
    <section class="py-20">
        <div class="container mx-auto px-2">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Características
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Potencia tu 
                    <span class="text-gradient bg-gradient-aloia">Atención al Cliente</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Descubre las funcionalidades que harán de tu chatbot la mejor herramienta de atención al cliente del mercado
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Disponibilidad 24/7</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Atención continua sin interrupciones ni tiempos de espera. Tu chatbot nunca duerme, nunca se cansa.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Respuestas instantáneas
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Sin das festivos
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Escalado automático
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Siempre disponible para tus clientes
                    </div>
                </div>

                <div class="feature-card featured group">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">IA Avanzada GPT-4</h3>
                    <p class=" leading-relaxed mb-6">
                        Respuestas precisas y naturales gracias a la tecnología de inteligencia artificial más avanzada del mercado.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm space-y-2 text-white">
                            <li class="flex items-center text-white">
                                <i class="fas fa-check "></i>
                                Multiidioma nativo
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check "></i>
                                Multiidioma nativo
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check "></i>
                                Aprendizaje continuo
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Conversaciones 100% humanas
                    </div>
                </div>

                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Analítica Detallada</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Métricas completas y reportes en tiempo real para optimizar continuamente tu atención al cliente.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Dashboard en tiempo real
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Reportes automáticos
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                KPIs personalizados
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                         Insights accionables al instante
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas -->
    <section class="py-20 bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white relative overflow-hidden">
        <div class="absolute inset-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Resultados que 
                    Impactan
                </h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Números reales de empresas que han transformado su atención al cliente
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-comments text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="7995">0</div>
                    <div class="text-white/90 text-lg font-medium">Chats Diarios</div>
                    <div class="mt-2 text-sm text-white/70">Conversaciones procesadas exitosamente</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="24">0</div>
                    <div class="text-white/90 text-lg font-medium">Horas Activo</div>
                    <div class="mt-2 text-sm text-white/70">Disponibilidad garantizada</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="150">0</div>
                    <div class="text-white/90 text-lg font-medium">Empresas Activas</div>
                    <div class="mt-2 text-sm text-white/70">Confiando en nuestra tecnología</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-bolt text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="0.3">0</span>s
                    </div>
                    <div class="text-white/90 text-lg font-medium">Tiempo de Respuesta</div>
                    <div class="mt-2 text-sm text-white/70">Velocidad promedio garantizada</div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-20 text-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
                <div>
                    <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full font-medium mb-4">
                        💬 Demo Interactivo
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 ">
                        Experiencia de Chat 
                       Natural
                    </h2>
                    <p class="text-xl mb-8 leading-relaxed">
                        Conversaciones fluidas que tus clientes amarán. Nuestro chatbot entiende el contexto, recuerda información y responde como un experto humano.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <i class="fas fa-brain text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold ">Comprensión Contextual</h4>
                                <p class=" text-sm">Entiende el hilo completo de la conversación</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <i class="fas fa-language text-2xl"></i>
                            </div>
                            
                            <div>
                                <h4 class="font-semibold ">Multiidioma</h4>
                                <p class="text-sm">Español, inglés, portugués y más</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <i class="fas fa-magic text-2xl"></i>
                            </div>

                            <div>
                                <h4 class="font-semibold ">Personalidad Adaptable</h4>
                                <p class=" text-sm">Se ajusta al tono de tu marca</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white rounded-3xl p-8 shadow-parallel border border-gray-100 relative overflow-hidden">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-aloia rounded-full flex items-center justify-center">
                                    <i class="fas fa-robot text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-aloia-dark">Asistente Aloia</h4>
                                    <div class="flex items-center gap-2 text-sm text-green-600">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        En línea
                                    </div>
                                </div>
                            </div>
                            <div class="typing-animation">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        
                        <div class="space-y-6 max-h-80 overflow-y-auto">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 rounded-full bg-gradient-aloia flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-robot text-white text-xs"></i>
                                </div>
                                <div class="bg-gray-100 rounded-2xl rounded-tl-md px-6 py-4 max-w-xs">
                                    <p class="text-gray-800">¡Hola!  Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?</p>
                                    <div class="mt-2 text-xs text-gray-500">Ahora</div>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4 justify-end">
                                <div class="bg-gradient-aloia text-white rounded-2xl rounded-tr-md px-6 py-4 max-w-xs">
                                    <p>¿Cuáles son sus horarios de atención?</p>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-user text-gray-600 text-xs"></i>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 rounded-full bg-gradient-aloia flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-robot text-white text-xs"></i>
                                </div>
                                <div class="bg-gray-100 rounded-2xl rounded-tl-md px-6 py-4 max-w-xs">
                                    <p class="text-gray-800">¡Excelente pregunta! 🕐 Estamos disponibles <strong>24/7</strong> los 365 das del año. Nunca cerramos, siempre listos para ayudarte.</p>
                                    <div class="mt-3 flex items-center gap-2 text-xs text-green-600">
                                        <i class="fas fa-check-double"></i>
                                        <span>Respondido en 0.3s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

<!-- FAQ -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                 Dudas Frecuentes
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                Preguntas <span class="text-gradient bg-gradient-aloia">Frecuentes</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Resolvemos todas tus dudas sobre nuestro chatbot inteligente
            </p>
        </div>

        <!-- Buscador -->
        <div class="max-w-2xl mx-auto mb-12">
            <div class="relative">
                <input 
                    type="text" 
                    id="searchFAQ"
                    class="w-full px-8 py-5 pr-16 text-lg border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-aloia-orange/20 focus:border-aloia-orange transition-all font-space" 
                    placeholder="Busca tu pregunta aquí..."
                >
                <div class="absolute right-6 top-1/2 transform -translate-y-1/2">
                    <i class="fas fa-search text-gray-400 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Filtros -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button class="filter-btn active" data-filter="todas">
                <i class="fas fa-list mr-2"></i>Todas
            </button>
            <button class="filter-btn" data-filter="general">
                <i class="fas fa-info-circle mr-2"></i>Generales
            </button>
            <button class="filter-btn" data-filter="tecnica">
                <i class="fas fa-cog mr-2"></i>Técnicas
            </button>
            <button class="filter-btn" data-filter="precio">
                <i class="fas fa-dollar-sign mr-2"></i>Precios
            </button>
        </div>

        <!-- Preguntas -->
        <div class="max-w-4xl mx-auto space-y-4" id="faqContainer">

            <!-- GENERALES -->
            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q1">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué es un Chatbot y cómo funciona?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q1">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Un Chatbot es un asistente virtual basado en IA que interactúa con tus clientes a travs de texto. Usa GPT-4 para entender y responder preguntas, procesar solicitudes y mantener conversaciones naturales 24/7.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q2">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cuánto tiempo toma implementar el chatbot?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q2">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>La implementacin toma entre 2-3 semanas. Incluye setup inicial, entrenamiento con tu info, pruebas y ajustes.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q3">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Necesito tener un equipo técnico?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q3">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>No, nosotros nos encargamos de toda la parte técnica. Solo necesitas conocer tu negocio y procesos.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q4">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿El chatbot puede trabajar 24/7?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q4">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Sí, el chatbot está disponible 24/7 sin interrupciones y sin costos adicionales por horario extendido.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q15">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué capacitación recibe mi equipo?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q15">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Incluimos capacitación completa para tu equipo en el uso del panel de control y gestión del chatbot.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item general" data-category="general">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q16">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿En qué idiomas funciona?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q16">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Soporta múltiples idiomas incluyendo español, inglés, portugués y francés.</p>
                    </div>
                </div>
            </div>

            <!-- TÉCNICAS -->
            <div class="faq-item question-item tecnica" data-category="tecnica">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q5">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Con qué sistemas se puede integrar?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q5">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Se integra con WhatsApp Business, sitios web, CRM (Salesforce, HubSpot), sistemas de tickets y más mediante APIs.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item tecnica" data-category="tecnica">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q6">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué pasa si el chatbot no puede resolver algo?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q6">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Escala automáticamente a un agente humano cuando detecta que no puede resolver la consulta.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item tecnica" data-category="tecnica">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q7">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Es seguro para mis datos?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q7">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Sí, usamos cifrado end-to-end y cumplimos normas de protección de datos. La información nunca sale de tus servidores.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item tecnica" data-category="tecnica">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q8">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Puedo personalizar el chatbot?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q8">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Sí, puedes personalizar respuestas, tono de voz, flujos de conversación y apariencia visual para que coincida con tu marca.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item tecnica" data-category="tecnica">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q13">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qu métricas proporciona?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q13">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Dashboard con métricas de uso, tasa de resolución, tiempo de respuesta, satisfacción y más.</p>
                    </div>
                </div>
            </div>

            <!-- PRECIOS -->
            <div class="faq-item question-item precio" data-category="precio">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q9">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cómo se cobra el servicio?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q9">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Ofrecemos planes mensuales basados en el volumen de conversaciones y features necesarios.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item precio" data-category="precio">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q10">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Hay período de prueba?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q10">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Sí, ofrecemos un demo gratuito para que pruebes todas las funcionalidades antes de contratar.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item precio" data-category="precio">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q11">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Incluye soporte técnico?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q11">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>Sí, todos los planes incluyen soporte técnico y mantenimiento continuo sin costo extra.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item question-item precio" data-category="precio">
                <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q12">
                    <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Hay contratos a largo plazo?</h3>
                    <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                </div>
                <div class="faq-content" id="q12">
                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                        <p>No, el servicio es mes a mes. Puedes cancelar o cambiar de plan cuando quieras.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    </main>
<!-- CTA Final -->
    <section class="py-20 bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white relative overflow-hidden">
        <div class="absolute inset-0 "></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    ¿Listo para
                    Comenzar?
                </h2>
                <p class="text-xl opacity-90 mb-12 leading-relaxed">
                    Únete a más de 150 empresas que ya transformaron su atención al cliente. 
                    <br>Tu chatbot inteligente te est esperando.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                    <button class="bg-white text-aloia-red px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300 shadow-xl" data-chatbot-trigger>
                        <i class="fas fa-rocket mr-3"></i>
                        Probar chatbot
                    </button>
                    <a class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-aloia-red transition-all duration-300" href="/contacto.php">
                        <i class="fas fa-phone mr-3"></i>
                        Hablar con Experto
                    </a>
                </div>
                
                
            </div>
        </div>
    </section>

<style>
/* CSS minimalista para los acordeones FAQ */
.faq-item {
    background: white;
    border-radius: 12px;
    border: 1px solid #F3F4F6;
    transition: all 0.2s ease;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.faq-item:hover {
    border-color: #FD6144;
    box-shadow: 0 2px 8px rgba(253, 97, 68, 0.1);
}

.faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
}

.faq-content.open {
    max-height: 200px;
    opacity: 1;
}

.faq-icon-minimal {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.faq-icon-minimal:hover {
    transform: scale(1.1);
}

/* Typing animation para el chat */
.typing-animation {
    display: flex;
    align-items: center;
    gap: 4px;
}

.typing-animation .dot {
    width: 6px;
    height: 6px;
    background: #FD6144;
    border-radius: 50%;
    animation: typing 1.5s infinite ease-in-out;
}

.typing-animation .dot:nth-child(2) { 
    animation-delay: 0.2s; 
}

.typing-animation .dot:nth-child(3) { 
    animation-delay: 0.4s; 
}

@keyframes typing {
    0%, 100% { 
        opacity: 0.3; 
        transform: scale(0.8); 
    }
    50% { 
        opacity: 1; 
        transform: scale(1.2); 
    }
}

/* Stats cards hover effect */
.stats-card {
    transition: all 0.3s ease;
    cursor: pointer;
}

.stats-card:hover {
    transform: scale(1.05);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .faq-item h3 {
        font-size: 1rem;
    }
    
    .faq-icon-minimal {
        width: 20px;
        height: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Accordion de preguntas
    const faqItems = document.querySelectorAll('[data-faq]');
    
    faqItems.forEach(item => {
        item.addEventListener('click', function () {
            const faqId = this.getAttribute('data-faq');
            const content = document.getElementById(faqId);
            const icon = this.querySelector('.faq-icon i');
            const isOpen = content.classList.contains('open');

            // Cierra todos
            document.querySelectorAll('.faq-content').forEach(c => {
                c.classList.remove('open');
                c.style.maxHeight = null;
            });
            document.querySelectorAll('.faq-icon i').forEach(i => {
                i.classList.remove('rotate-180');
            });

            // Abre el seleccionado
            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }
        });
    });

    
    // Animación de contadores
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-count'));
            const increment = target / 100;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                
                if (target % 1 !== 0) {
                    counter.textContent = current.toFixed(1);
                } else {
                    counter.textContent = Math.floor(current);
                }
            }, 20);
        });
    }

    // Ejecutar animación de contadores cuando sea visible
    const statsSection = document.querySelector('.py-20.bg-gradient-to-r');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(statsSection);
    }

    // Timeline scroll animation
    const timelineItems = document.querySelectorAll('.timeline-step');
    

    // Buscador
    const searchInput = document.getElementById('searchFAQ');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const term = this.value.toLowerCase().trim();
            const questions = document.querySelectorAll('.question-item');

            questions.forEach(question => {
                const questionText = question.querySelector('h3').textContent.toLowerCase();
                const answerText = question.querySelector('.faq-content')?.textContent.toLowerCase() || '';
                const matches = questionText.includes(term) || answerText.includes(term);

                question.style.display = matches ? 'block' : 'none';
            });
        });
    }

    // Filtros por categoría
    const filterButtons = document.querySelectorAll('.filter-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const questions = document.querySelectorAll('.question-item');
            questions.forEach(item => {
                const category = item.dataset.category;

                if (filter === 'todas' || category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Limpia la búsqueda
            if (searchInput) {
                searchInput.value = '';
            }
        });
    });

    // Estilo para íconos rotar
    const style = document.createElement('style');
    style.textContent = `
        .rotate-180 {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }
    `;
    document.head.appendChild(style);
});
</script>

<!-- Script para las partículas -->
<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof initParticlesCanvas === 'function') {
            initParticlesCanvas(); // Solo si hay <canvas id="particles-canvas">
        }
    });
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
<?php include __DIR__ . '/../partials/layout/footer.php'; ?>