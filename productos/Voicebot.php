<?php
require_once __DIR__ . '/../includes/config.php';
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
<link rel="stylesheet" href="<?= v(CSS_PATH . 'get-ip.css') ?>">


<!-- Header específico para la página de Voicebot -->
<section class="bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-slide-up animate-delay-200">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4 border border-aloia-orange/30">
                    <i class="fas fa-microphone mr-2"></i>
                    Asistente de Voz Inteligente
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Voicebot IA
                    <span class="block text-gradient bg-gradient-aloia">Conversacional</span>
                </h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8 max-w-lg">
                    Llamadas automatizadas con voz natural y comprensión avanzada las 24 horas del día
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-gradient-aloia text-white px-8 py-4 rounded-full font-semibold hover:scale-105 transition-all duration-300 shadow-lg" data-voicebot-demo>
                        <i class="fas fa-play mr-2"></i>
                        Escuchar Demo
                    </button>
                    <a class="border-2 border-aloia-orange text-aloia-orange px-8 py-4 rounded-full font-semibold hover:bg-aloia-orange hover:text-white transition-all duration-300" href="/contacto.php">
                        <i class="fas fa-calendar mr-2"></i>
                        Solicitar Demo
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-slide-up animate-delay-400">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-aloia-orange/20 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-aloia-purple/20 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                    <div class="relative w-48 h-48 bg-gradient-aloia rounded-3xl rotate-3 hover:rotate-0 transition-all duration-500 flex items-center justify-center shadow-parallel">
                        <i class="fas fa-microphone text-white text-7xl animate-float"></i>
                    </div>
                    <div class="absolute -right-2 top-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            Llamando
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
                    Revoluciona tus 
                    <span class="text-gradient bg-gradient-aloia">Llamadas Automatizadas</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Tecnología de voz avanzada que transforma la manera en que tu empresa se comunica con los clientes
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Voz Ultra Natural</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Tecnología ElevenLabs para conversaciones que suenan 100% humanas con entonación y emociones naturales.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Voces masculinas y femeninas
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Personalización de tono
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Emociones contextuales
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Conversaciones indistinguibles de humanos
                    </div>
                </div>

                <div class="feature-card featured group">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Multiidioma Nativo</h3>
                    <p class="leading-relaxed mb-6">
                        Soporte completo para español, inglés, portugués y más idiomas con pronunciación nativa perfecta.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm space-y-2 text-white">
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Detección automática de idioma
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Acentos regionales
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Cambio dinámico de idioma
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Comunicación global sin barreras
                    </div>
                </div>

                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Integración PBX Total</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Compatible con cualquier central telefónica existente. Implementación rápida sin cambiar infraestructura.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                APIs universales
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                SIP compatible
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Zero downtime
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Implementación en 24 horas
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
                    Impresionan
                </h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Métricas reales de empresas que ya automatizaron sus llamadas
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-phone-volume text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="15000">0</div>
                    <div class="text-white/90 text-lg font-medium">Llamadas Diarias</div>
                    <div class="mt-2 text-sm text-white/70">Procesadas automáticamente</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="2.5">0</span>min
                    </div>
                    <div class="text-white/90 text-lg font-medium">Duración Promedio</div>
                    <div class="mt-2 text-sm text-white/70">Conversaciones efectivas</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-chart-line text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="95">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">Tasa de Éxito</div>
                    <div class="mt-2 text-sm text-white/70">Objetivos completados</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-piggy-bank text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="60">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">Ahorro en Costos</div>
                    <div class="mt-2 text-sm text-white/70">Vs. call center tradicional</div>
                </div>
            </div>
        </div>
    </section>




    <!-- Demo de Llamadas -->
<!-- Voicebot Section -->
<section class="py-16 bg-aloia-white animate-fade-in" id="voicebot-demo">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white p-6 rounded-xl shadow-parallel">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-4 md:mb-0 flex justify-center">
                    <img src="<?= IMG_PATH ?>alex.png" alt="Alex Voicebot"
                        class="h-32 w-32 object-cover rounded-full border-2 border-white">
                </div>
                <div class="md:w-2/3 md:pl-6 text-center md:text-left">
                    <h3 class="text-xl font-medium mb-2">Habla con nuestro Voicebot</h3>
                    <p class="-mb-10">
                        ¿Prefieres usar tu voz? Llama a nuestro <strong>aloia Voicebot</strong> y descubre, en menos de 60 segundos, cómo podemos ayudarte. 
                        <em>(Disponible 24/7).</em>
                    </p>
                                        <!-- Contenedor para el widget de ElevenLabs -->
                    <div class="elevenlabs-container flex justify-center md:justify-start">
                        <elevenlabs-convai
                            agent-id="PgQNwj5EwcVKfRIhTqk9"
                            class="custom-voicebot"
                        ></elevenlabs-convai>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script del widget -->
<script src="https://elevenlabs.io/convai-widget/index.js" async type="text/javascript"></script>

<style>
/* Estilos para el contenedor del widget */
.elevenlabs-container {
    display: flex;
    margin-top: 0.5rem;
}

/* Estilos para el widget de ElevenLabs */
elevenlabs-convai {
    position: relative !important;
    display: block !important;
    bottom: auto !important;
    right: auto !important;
}

/* Ocultar el botón flotante original de ElevenLabs */
elevenlabs-convai.elevenlabs-widget-fab {
    display: none !important;
}

/* Asegurarse de que el widget no tenga posición fija */
elevenlabs-convai::part(fab) {
    position: relative !important;
}

/* Sombra paralela para la tarjeta */
.shadow-parallel {
    box-shadow: 6px 6px 0 rgba(0, 0, 0, 0.1);
}

/* Animación de entrada */
.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 768px) {
    .shadow-parallel {
        box-shadow: 4px 4px 0 rgba(0, 0, 0, 0.1);
    }
}
</style>


    <!-- Casos de Uso -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    Casos de Uso
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Soluciones para <span class="text-gradient bg-gradient-aloia">Cada Industria</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Nuestro Voicebot se adapta a las necesidades específicas de tu sector
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Sector Financiero -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-university text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Sector Financiero</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Recordatorios de pagos automatizados</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Ofertas de productos financieros</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Verificación de datos de clientes</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Incrementa cobranza hasta 40%
                    </div>
                </div>

                <!-- Salud -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Sector Salud</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Recordatorios de citas médicas</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Seguimiento post-consulta</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Encuestas de satisfacción</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Reduce ausencias de citas 50%
                    </div>
                </div>

                <!-- Retail -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-shopping-bag text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Retail & E-commerce</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Seguimiento de pedidos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Promociones personalizadas</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Confirmación de entregas</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Aumenta ventas repetidas 30%
                    </div>
                </div>

                <!-- Seguros -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Seguros</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Renovación de pólizas</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Seguimiento de siniestros</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Evaluación de riesgos</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Mejora retención de clientes 45%
                    </div>
                </div>

                <!-- Inmobiliaria -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Inmobiliaria</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Calificación de prospectos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Agendado de visitas</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Seguimiento post-venta</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Incrementa conversión 35%
                    </div>
                </div>

                <!-- Educación -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Educación</h3>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Recordatorios de pagos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Seguimiento académico</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Promoción de cursos</span>
                        </li>
                    </ul>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                         Reduce deserción estudiantil 25%
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
                    💬 Dudas Frecuentes
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Preguntas <span class="text-gradient bg-gradient-aloia">Frecuentes</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Resolvemos todas tus dudas sobre nuestro voicebot inteligente
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
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué es un Voicebot y cómo funciona?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q1">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Un Voicebot es un asistente virtual que interactúa por voz telefónica. Usa IA avanzada para mantener conversaciones naturales, procesar solicitudes y completar tareas específicas como ventas, cobranza o encuestas de manera completamente automatizada.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q2">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cuánto tiempo toma implementar el voicebot?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q2">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>La implementación completa toma entre 24-48 horas. Incluye configuración de voz, integración con tu PBX, entrenamiento específico para tu negocio y pruebas de calidad antes del lanzamiento.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q3">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué tan natural suena la voz?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q3">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Usamos tecnología ElevenLabs que genera voces 99% indistinguibles de humanos. Incluye entonación natural, pausas contextuales y emociones apropiadas para cada situación.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q4">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Puede manejar múltiples llamadas simultáneas?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q4">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, nuestro voicebot puede manejar cientos de llamadas simultáneas sin degradación en la calidad. Escalamiento automático según demanda sin costos adicionales.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q15">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿En qué horarios puede hacer llamadas?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q15">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Configuramos horarios personalizados respetando regulaciones locales. Típicamente de 9 AM a 8 PM, pero es completamente personalizable según tus necesidades.</p>
                        </div>
                    </div>
                </div>

                <!-- TÉCNICAS -->
                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q5">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Con qué sistemas telefónicos es compatible?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q5">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Compatible con cualquier PBX moderna: Asterisk, FreePBX, 3CX, Avaya, Cisco, y servicios en la nube como Twilio, Amazon Connect y Google Voice. Integración vía SIP o APIs.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q6">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué pasa si no entiende al cliente?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q6">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>El voicebot repite amablemente la pregunta, ofrece opciones claras o transfiere automáticamente a un agente humano cuando detecta confusión o solicitudes complejas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q7">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cumple con regulaciones de privacidad?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q7">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, cumplimos GDPR, LGPD y regulaciones locales. Las llamadas incluyen avisos de grabación cuando es requerido y manejo seguro de datos personales.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q8">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Puedo personalizar los guiones de llamada?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q8">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Completamente personalizable. Ajustamos tono, vocabulario, flujos de conversación y respuestas específicas para que coincida perfectamente con tu marca y objetivos.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q13">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué métricas y reportes proporciona?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q13">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Dashboard completo con llamadas realizadas, tasa de conexión, duración promedio, objetivos completados, transcripciones y análisis de sentimientos en tiempo real.</p>
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
                            <p>Planes mensuales basados en volumen de llamadas. Incluye setup, mantenimiento y soporte. Sin costos ocultos ni penalidades por cancelación.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q10">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Ofrecen período de prueba?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q10">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, demo gratuito con llamadas reales a tu base de datos para que compruebes la efectividad antes de contratar el servicio completo.</p>
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
                            <p>Soporte técnico 24/7 incluido en todos los planes. Monitoreo proactivo, ajustes en tiempo real y respuesta inmediata ante cualquier incidencia.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q12">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Hay contratos de permanencia?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q12">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>No, nuestro servicio es mes a mes. Puedes escalar, reducir o cancelar el servicio cuando quieras sin penalizaciones.</p>
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
                ¿Listo para Automatizar 
                tus Llamadas?
            </h2>
            <p class="text-xl opacity-90 mb-12 leading-relaxed">
                Únete a empresas que ya automatizaron más de 15,000 llamadas diarias. 
                <br>Tu voicebot inteligente te está esperando.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <a href="#voicebot-demo" class="bg-white text-aloia-red px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300 shadow-xl" data-voicebot-demo>
                    <i class="fas fa-microphone mr-3"></i>
                    Escuchar Demo
</a>
                <a href="/contacto.php" class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-aloia-red transition-all duration-300">
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
<script src="<?= v(JS_PATH . 'particles.js') ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof initParticlesCanvas === 'function') {
            initParticlesCanvas(); // Solo si hay <canvas id="particles-canvas">
        }
    });
</script>
<script>
  document.querySelector('[data-voicebot-demo]').addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector('#voicebot-demo');
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
</script>
<script src="<?= v(JS_PATH . 'main.js') ?>"></script>
<?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
<?php include __DIR__ . '/../partials/layout/footer.php'; ?>