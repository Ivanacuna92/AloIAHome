<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Desarrollo a Medida | Aloia";
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

<!-- Estilos personalizados para desarrollo a medida -->
<link rel="stylesheet" href="<?= CSS_PATH ?>desarrollo-medida.css">

<!-- Header específico para la página de Desarrollo a Medida -->
<section class="bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-slide-up animate-delay-200">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4 border border-aloia-orange/30">
                    <i class="fas fa-code mr-2"></i>
                    Soluciones de Software Personalizadas
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Desarrollo
                    <span class="block text-gradient bg-gradient-aloia">a Medida</span>
                </h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8 max-w-lg">
                    Soluciones de software personalizadas para tus necesidades específicas con tecnología de vanguardia
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                 <!--   <button class="bg-gradient-aloia text-white px-8 py-4 rounded-full font-semibold hover:scale-105 transition-all duration-300 shadow-lg" data-desarrollo-demo>
                        <i class="fas fa-play mr-2"></i>
                        Ver Portfolio
                    </button> -->
                    <a class="border-2 border-aloia-orange text-aloia-orange px-8 py-4 rounded-full font-semibold hover:bg-aloia-orange hover:text-white transition-all duration-300" href="/contacto.php">
                        <i class="fas fa-calculator mr-2"></i>
                        Solicitar Cotización
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-slide-up animate-delay-400">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-aloia-orange/20 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-aloia-purple/20 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                    <div class="relative w-48 h-48 bg-gradient-aloia rounded-3xl rotate-3 hover:rotate-0 transition-all duration-500 flex items-center justify-center shadow-parallel">
                        <i class="fas fa-laptop-code text-white text-7xl animate-float"></i>
                    </div>
                    <div class="absolute -right-2 top-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            Desarrollando
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <!-- Nuestras Soluciones -->
    <section class="py-20">
        <div class="container mx-auto px-2">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Soluciones
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Creamos el 
                    <span class="text-gradient bg-gradient-aloia">Software Perfecto</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Desarrollamos soluciones tecnológicas únicas que se adaptan perfectamente a tu negocio
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Aplicaciones Web</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Desarrollo web responsivo y escalable con las últimas tecnologías para mximo rendimiento.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Progressive Web Apps (PWA)
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                API REST y GraphQL
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Microservicios escalables
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                         Soluciones web de vanguardia
                    </div>
                </div>

                <div class="feature-card featured group">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Apps Mviles</h3>
                    <p class="leading-relaxed mb-6">
                        Apps nativas y multiplataforma para iOS y Android con experiencia de usuario excepcional.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm space-y-2 text-white">
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                React Native & Flutter
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Desarrollo nativo iOS/Android
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Integración con APIs
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Apps que tus usuarios amarán
                    </div>
                </div>

                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Software Empresarial</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Sistemas a medida para optimizar tus procesos de negocio y aumentar la productividad.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                ERP personalizado
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                CRM a medida
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Sistemas de gestión
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Eficiencia operativa garantizada
                    </div>
                </div>
            </div>

            <!-- Stack Tecnológico -->
            <div class="tech-stack-section mt-20">
                <h3 class="text-3xl font-bold text-center mb-12 text-aloia-dark">Stack Tecnológico</h3>
                <div class="flex flex-wrap justify-center items-center gap-8">
                    <div class="tech-partner">
                        <img src="/assets/img/openai.png" alt="OpenAI" class="tech-logo">
                    </div>
                    <div class="tech-partner">
                        <img src="/assets/img/ElevenLabs_logo.png" alt="ElevenLabs" class="tech-logo">
                    </div>
                    <div class="tech-partner">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Anthropic_logo.svg/2560px-Anthropic_logo.svg.png" alt="Anthropic" class="tech-logo">
                    </div>
                    <div class="tech-partner">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Microsoft_Azure_Logo.svg/2560px-Microsoft_Azure_Logo.svg.png" alt="Azure" class="tech-logo">
                    </div>
                    <div class="tech-partner">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Amazon_Web_Services_Logo.svg/2560px-Amazon_Web_Services_Logo.svg.png" alt="AWS" class="tech-logo">
                    </div>
                    <div class="tech-partner">
                        <img src="https://logodownload.org/wp-content/uploads/2021/06/google-cloud-logo-1.png" alt="Google Cloud" class="tech-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestro Proceso -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Proceso
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Nuestro <span class="text-gradient bg-gradient-aloia">Proceso</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Metodología ágil probada que garantiza el éxito de tu proyecto
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="process-step bg-white rounded-xl p-6 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                        <h4 class="text-xl font-bold mb-3 text-aloia-dark">1. Análisis de Requerimientos</h4>
                        <p class="text-gray-600">Entendemos a fondo tus necesidades y objetivos de negocio.</p>
                    </div>
                    <div class="process-step bg-white rounded-xl p-6 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                        <h4 class="text-xl font-bold mb-3 text-aloia-dark">2. Diseño y Planificación</h4>
                        <p class="text-gray-600">Creamos la arquitectura y planificamos el desarrollo.</p>
                    </div>
                    <div class="process-step bg-white rounded-xl p-6 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                        <h4 class="text-xl font-bold mb-3 text-aloia-dark">3. Desarrollo Ágil</h4>
                        <p class="text-gray-600">Desarrollamos tu solución con metodologías ágiles.</p>
                    </div>
                    <div class="process-step bg-white rounded-xl p-6 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                        <h4 class="text-xl font-bold mb-3 text-aloia-dark">4. Testing y QA</h4>
                        <p class="text-gray-600">Aseguramos la calidad y funcionamiento óptimo.</p>
                    </div>
                    <div class="process-step bg-white rounded-xl p-6 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                        <h4 class="text-xl font-bold mb-3 text-aloia-dark">5. Implementación y Soporte</h4>
                        <p class="text-gray-600">Desplegamos tu solución y brindamos soporte continuo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- La Transformación Digital -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Transformación
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    La <span class="text-gradient bg-gradient-aloia">Transformación Digital</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    El impacto real de nuestro software en las operaciones de nuestros clientes
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
                <!-- Antes del Software -->
                <div class="comparison-card before bg-white rounded-2xl p-8 border-2 border-red-200">
                    <div class="comparison-header text-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-frown text-red-500 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-600">Antes del Software</h3>
                    </div>
                    
                    <div class="comparison-metrics space-y-4">
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-clock text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">40+</span>
                                <span class="metric-label text-gray-600 block">Horas en tareas manuales</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">25%</span>
                                <span class="metric-label text-gray-600 block">Error humano</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-dollar-sign text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">100%</span>
                                <span class="metric-label text-gray-600 block">Costos operativos</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Después del Software -->
                <div class="comparison-card after bg-gradient-to-br from-aloia-orange to-aloia-purple text-white rounded-2xl p-8">
                    <div class="comparison-header text-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-smile text-white text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Después del Software</h3>
                    </div>
                    
                    <div class="comparison-metrics space-y-4">
                        <div class="metric-item flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-clock text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">8</span>
                                <span class="metric-label text-white/80 block">Horas automatizadas</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-check-circle text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">99%</span>
                                <span class="metric-label text-white/80 block">Precisión</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-dollar-sign text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">-60%</span>
                                <span class="metric-label text-white/80 block">Reducción de costos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Preguntas Frecuentes
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Preguntas <span class="text-gradient bg-gradient-aloia">Frecuentes</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Resolvemos todas tus dudas sobre desarrollo de software a medida
                </p>
            </div>

            <!-- Buscador -->
            <div class="max-w-2xl mx-auto mb-12">
                <div class="relative">
                    <input 
                        type="text" 
                        id="searchFAQ"
                        class="w-full px-8 py-5 pr-16 text-lg border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-aloia-orange/20 focus:border-aloia-orange transition-all" 
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
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué incluye el desarrollo a medida?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q1">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Incluye análisis completo de requerimientos, diseo UX/UI, desarrollo full-stack, testing exhaustivo, implementación, capacitación y soporte continuo. Todo personalizado para tu negocio específico.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q2">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cuánto tiempo toma desarrollar un software a medida?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q2">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Depende de la complejidad. Proyectos simples: 2-4 meses. Sistemas medios: 4-8 meses. Plataformas complejas: 8-12 meses. Siempre con entregas incrementales cada 2-3 semanas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q3">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Puedo ver el progreso durante el desarrollo?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q3">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Absolutamente. Usamos metodología ágil con demos cada sprint, acceso a ambiente de desarrollo, reportes semanales y reuniones de seguimiento constantes.</p>
                        </div>
                    </div>
                </div>

                <!-- TÉCNICAS -->
                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q4">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué tecnologías utilizan?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q4">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Tecnologías modernas según tu proyecto: React/Vue.js frontend, Node.js/Python backend, bases de datos SQL/NoSQL, cloud AWS/Azure/GCP, mobile React Native/Flutter, e integraciones con IA.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q5">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿El software será escalable?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q5">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, diseñamos arquitecturas escalables desde el inicio. Microservicios, bases de datos distribuidas, cache inteligente e infraestructura cloud que crece con tu negocio sin reescribir código.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q6">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Integran con sistemas existentes?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q6">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Por supuesto. Especialistas en integración con ERPs, CRMs, sistemas contables, APIs de terceros, servicios bancarios y cualquier software que uses actualmente.</p>
                        </div>
                    </div>
                </div>

                <!-- PRECIOS -->
                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q7">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cómo calculan el precio?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q7">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Precio fijo basado en alcance definido tras análisis detallado. Incluye todo: desarrollo, testing, documentación, capacitación y 3 meses de soporte post-lanzamiento.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q8">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Ofrecen planes de pago?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q8">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, esquemas flexibles: 50% inicio, 30% entrega beta, 20% go-live. También ofrecemos financiamiento a 12-24 meses sin intereses para proyectos grandes.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q9">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué incluye el soporte post-lanzamiento?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q9">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>3 meses gratis de soporte 24/7, corrección de bugs, actualizaciones de seguridad, monitoreo de performance y capacitación adicional. Después, planes de mantenimiento opcionales.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- CTA Final -->
<section class="py-20 bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white relative overflow-hidden">
    <div class="absolute inset-0"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                ¿Listo para Digitalizar 
                tu Negocio?
            </h2>
            <p class="text-xl opacity-90 mb-12 leading-relaxed">
                Únete a empresas que ya transformaron su operación con software a medida. 
                <br>Tu solución perfecta te está esperando.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
               <!-- <button class="bg-white text-aloia-red px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300 shadow-xl" data-desarrollo-demo>
                    <i class="fas fa-eye mr-3"></i>
                    Ver Portfolio
                </button> -->
                <a class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-aloia-red transition-all duration-300" href="/contacto.php">
                    <i class="fas fa-calculator mr-3"></i>
                    Solicitar Cotización
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS para desarrollo a medida */
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
    transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    opacity: 0;
}

.faq-content.open {
    max-height: 200px;
    opacity: 1;
}

/* Tech stack */
.tech-stack-section {
    padding: 2rem 0;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-radius: 20px;
    margin-top: 3rem;
}

.tech-partner {
    transition: all 0.3s ease;
}

.tech-partner:hover {
    transform: scale(1.1);
}

.tech-logo {
    height: 60px;
    object-fit: contain;
    filter: grayscale(70%);
    transition: all 0.3s ease;
}

.tech-partner:hover .tech-logo {
    filter: grayscale(0%);
}

/* Process steps */
.process-step {
    transition: all 0.3s ease;
}

.process-step:hover {
    transform: translateX(10px);
    border-color: #FD6144;
}

/* Comparison cards */
.comparison-card {
    transition: all 0.3s ease;
}

.comparison-card:hover {
    transform: translateY(-5px);
}

/* Botones de filtro */
.filter-btn {
    padding: 12px 24px;
    border: 2px solid #E5E7EB;
    background: white;
    color: #6B7280;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    cursor: pointer;
}

.filter-btn:hover {
    border-color: #FD6144;
    color: #FD6144;
}

.filter-btn.active {
    background: linear-gradient(45deg, #FD6144, #8B5CF6);
    color: white;
    border-color: transparent;
}

/* Feature cards */
.feature-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid #F3F4F6;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: #FD6144;
}

.feature-card.featured {
    background: linear-gradient(45deg, #FD6144, #8B5CF6);
    color: white;
    border: none;
}

.feature-card.featured p {
    color: rgba(255,255,255,0.9);
}

.feature-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(45deg, #FD6144, #8B5CF6);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    color: white;
    transition: all 0.3s ease;
}

.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
}

/* Animaciones */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animate-slide-up {
    animation: slideUp 0.8s ease-out forwards;
}

.animate-delay-200 {
    animation-delay: 0.2s;
}

.animate-delay-400 {
    animation-delay: 0.4s;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* Responsive */
@media (max-width: 768px) {
    .faq-item h3 {
        font-size: 1rem;
    }
    
    .tech-logo {
        height: 40px;
    }
    
    .comparison-card {
        margin-bottom: 2rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Accordion de preguntas FAQ
    const faqItems = document.querySelectorAll('[data-faq]');
    
    faqItems.forEach(item => {
        item.addEventListener('click', function () {
            const faqId = this.getAttribute('data-faq');
            const content = document.getElementById(faqId);
            const icon = this.querySelector('.faq-icon i');
            const isOpen = content.classList.contains('open');

            // Cierra todos los FAQs
            document.querySelectorAll('.faq-content').forEach(c => {
                c.classList.remove('open');
                c.style.maxHeight = null;
            });
            document.querySelectorAll('.faq-icon i').forEach(i => {
                i.classList.remove('rotate-180');
            });

            // Abre el seleccionado si no estaba abierto
            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }
        });
    });

    // Buscador FAQ
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

    // Animación de aparición para process steps
    const processSteps = document.querySelectorAll('.process-step');
    
    if (processSteps.length > 0) {
        const processObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 200);
                }
            });
        }, {
            threshold: 0.1
        });

        processSteps.forEach(step => {
            step.style.opacity = '0';
            step.style.transform = 'translateY(30px)';
            step.style.transition = 'all 0.6s ease';
            processObserver.observe(step);
        });
    }

    // Hover effects para tech logos
    const techLogos = document.querySelectorAll('.tech-partner');
    
    techLogos.forEach(logo => {
        logo.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
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