<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "RPA - Automatización Robótica | Aloia";
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

<!-- Estilos personalizados para RPA -->
<link rel="stylesheet" href="<?= CSS_PATH ?>rpa.css">

<!-- Header específico para la página de RPA -->
<section class="bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-slide-up animate-delay-200">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4 border border-aloia-orange/30">
                    <i class="fas fa-robot mr-2"></i>
                    Automatización Robótica de Procesos
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    RPA
                    <span class="block text-gradient bg-gradient-aloia">Inteligente</span>
                </h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8 max-w-lg">
                    Automatización robótica de procesos para tu tranquilidad operativa las 24 horas del día
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- 
                    <button class="bg-gradient-aloia text-white px-8 py-4 rounded-full font-semibold hover:scale-105 transition-all duration-300 shadow-lg" data-rpa-demo>
                        <i class="fas fa-play mr-2"></i>
                        Ver Demo RPA
                    </button>-->
                   
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
                        <i class="fas fa-cogs text-white text-7xl animate-float"></i>
                    </div>
                    <div class="absolute -right-2 top-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            Activo 24/7
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
                    Automatiza tu 
                    <span class="text-gradient bg-gradient-aloia">Operación Completa</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Robots inteligentes que trabajan sin descanso para maximizar tu eficiencia operativa
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Automatización Total</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Robots que trabajan 24/7 sin errores, fatiga ni descansos. Operación continua garantizada.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Sin supervisión humana
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Operación nocturna
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Escalamiento instantáneo
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Máxima productividad sin límites
                    </div>
                </div>

                <div class="feature-card featured group">
                    <div class="feature-icon">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Precisión del 99.9%</h3>
                    <p class="leading-relaxed mb-6">
                        Eliminación total de errores humanos. Cada proceso ejecutado con precisión milimétrica.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm space-y-2 text-white">
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Validación automática
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Control de calidad integrado
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Trazabilidad completa
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Confiabilidad garantizada
                    </div>
                </div>

                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Velocidad 10x</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Procesos completados en fracción del tiempo manual. ROI inmediato y sostenible.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Procesamiento paralelo
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Optimización automática
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Resultados inmediatos
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → ROI en menos de 3 meses
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
                    Transforman
                </h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Mtricas reales de empresas que ya automatizaron sus procesos crticos
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-cogs text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="500">0</div>
                    <div class="text-white/90 text-lg font-medium">Procesos Automatizados</div>
                    <div class="mt-2 text-sm text-white/70">En operación continua</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="10000">0</span>
                    </div>
                    <div class="text-white/90 text-lg font-medium">Horas Ahorradas al Mes</div>
                    <div class="mt-2 text-sm text-white/70">Liberadas para valor agregado</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-check-circle text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="99.9">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">Precisión Garantizada</div>
                    <div class="mt-2 text-sm text-white/70">Sin errores humanos</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-chart-line text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="300">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">ROI Promedio</div>
                    <div class="mt-2 text-sm text-white/70">Retorno de inversión</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso de Implementación -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    🚀 Metodología
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Proceso de <span class="text-gradient bg-gradient-aloia">Implementación</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Metodología probada que garantiza el éxito de tu automatización en 5 pasos
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <!-- Timeline de implementación -->
                <div class="timeline-container relative">
                    <!-- Línea central -->
                    <div class="timeline-line absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-aloia opacity-30 h-full"></div>
                    
                    <!-- Paso 1 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">1. Anlisis de Procesos</h3>
                                <p class="text-gray-600 mb-6">Identificamos los procesos más repetitivos y que consumen más tiempo en tu operación.</p>
                                <ul class="text-left space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Mapeo de procesos actuales</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Identificación de cuellos de botella</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Análisis de viabilidad ROI</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Paso 2 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8"></div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">2. Diseño de la Solución</h3>
                                <p class="text-gray-600 mb-6">Diseñamos la arquitectura perfecta para tu automatización específica.</p>
                                <ul class="space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Diseño de flujos de trabajo</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Definición de reglas de negocio</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Planificación de recursos</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 3 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">3. Desarrollo del Robot</h3>
                                <p class="text-gray-600 mb-6">Programamos tu RPA con las mejores prácticas y tecnologías.</p>
                                <ul class="text-left space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Programación del robot</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Configuración de reglas</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Pruebas unitarias</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Paso 4 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8"></div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">4. Testing y QA</h3>
                                <p class="text-gray-600 mb-6">Pruebas exhaustivas para garantizar un funcionamiento perfecto.</p>
                                <ul class="space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Pruebas de integración</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Validación de escenarios</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Ajustes finales</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 5 -->
                    <div class="timeline-step flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">5. Implementación y Soporte</h3>
                                <p class="text-gray-600 mb-6">Puesta en marcha y acompañamiento continuo 24/7.</p>
                                <ul class="text-left space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Despliegue en producción</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Capacitación del equipo</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Soporte 24/7</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industrias que Atendemos -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    🏭 Sectores
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Industrias que <span class="text-gradient bg-gradient-aloia">Automatizamos</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Soluciones RPA especializadas para las necesidades específicas de cada sector
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Sector Financiero -->
                <div class="industry-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-university text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Sector Financiero</h3>
                    <div class="industry-details">
                        <h4 class="font-semibold text-gray-700 mb-3">Automatizamos:</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>Inventario farmacéutico</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Retail -->
                <div class="industry-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Retail</h3>
                    <div class="industry-details">
                        <h4 class="font-semibold text-gray-700 mb-3">Automatizamos:</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>Gestión de pedidos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>Control de inventario</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>Análisis de ventas</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>CRM y fidelización</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparación Manual vs RPA -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    ️ Comparación
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Manual vs RPA: <span class="text-gradient bg-gradient-aloia">La Diferencia es Clara</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Descubre por qué las empresas líderes están migrando a la automatización robótica
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
                <!-- Proceso Manual -->
                <div class="comparison-card manual bg-white rounded-2xl p-8 border-2 border-red-200 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-red-500 text-white px-4 py-1 text-sm font-bold">
                        Mtodo Tradicional
                    </div>
                    <div class="comparison-header text-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-clock text-red-500 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-600">Proceso Manual</h3>
                    </div>
                    
                    <div class="comparison-metrics space-y-6 mb-8">
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-clock text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">8-12</span>
                                <span class="metric-label text-gray-600 block">Horas de trabajo al día</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">10-15%</span>
                                <span class="metric-label text-gray-600 block">Tasa de error promedio</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-dollar-sign text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">100%</span>
                                <span class="metric-label text-gray-600 block">Costo operativo base</span>
                            </div>
                        </div>
                        <div class="metric-item flex items-center gap-4 p-4 bg-red-50 rounded-lg">
                            <i class="fas fa-speedometer text-red-500 text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold text-red-600">1x</span>
                                <span class="metric-label text-gray-600 block">Velocidad de proceso</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="comparison-details">
                        <h4 class="font-bold text-red-600 mb-4">Limitaciones:</h4>
                        <ul class="drawbacks-list space-y-3">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-times text-red-500 mt-1"></i>
                                <span class="text-gray-600">Requiere supervisión constante</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-times text-red-500 mt-1"></i>
                                <span class="text-gray-600">Susceptible a fatiga y errores</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-times text-red-500 mt-1"></i>
                                <span class="text-gray-600">Limitado a horario laboral</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-times text-red-500 mt-1"></i>
                                <span class="text-gray-600">Escalamiento costoso</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-times text-red-500 mt-1"></i>
                                <span class="text-gray-600">Tiempo de entrenamiento extenso</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Proceso RPA -->
                <div class="comparison-card rpa bg-gradient-to-br from-aloia-orange to-aloia-purple text-white rounded-2xl p-8 relative overflow-hidden shadow-xl">
                    <div class="absolute top-0 right-0 bg-green-500 text-white px-4 py-1 text-sm font-bold">
                        Solución Inteligente
                    </div>
                    <div class="comparison-header text-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-robot text-white text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Proceso RPA</h3>
                    </div>
                    
                    <div class="comparison-metrics space-y-6 mb-8">
                        <div class="metric-item highlight flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-clock text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">24/7</span>
                                <span class="metric-label text-white/80 block">Operación continua</span>
                            </div>
                        </div>
                        <div class="metric-item highlight flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-check-circle text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">>99%</span>
                                <span class="metric-label text-white/80 block">Precisión garantizada</span>
                            </div>
                        </div>
                        <div class="metric-item highlight flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-dollar-sign text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">-70%</span>
                                <span class="metric-label text-white/80 block">Reducción de costos</span>
                            </div>
                        </div>
                        <div class="metric-item highlight flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                            <i class="fas fa-speedometer text-white text-xl"></i>
                            <div>
                                <span class="metric-value text-2xl font-bold">10x</span>
                                <span class="metric-label text-white/80 block">Más rápido</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="comparison-details">
                        <h4 class="font-bold mb-4">Beneficios:</h4>
                        <ul class="benefits-list space-y-3">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-green-300 mt-1"></i>
                                <span>Operación autónoma 24/7</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-green-300 mt-1"></i>
                                <span>Precisión consistente</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-green-300 mt-1"></i>
                                <span>Escalabilidad instantánea</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-green-300 mt-1"></i>
                                <span>ROI inmediato</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-green-300 mt-1"></i>
                                <span>Implementación rápida</span>
                            </li>
                        </ul>
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
                    ❓ Dudas Frecuentes
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Preguntas <span class="text-gradient bg-gradient-aloia">Frecuentes</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Resolvemos todas tus dudas sobre automatizacin robótica de procesos
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
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">Qué es RPA y cómo funciona?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q1">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>RPA (Robotic Process Automation) es una tecnología que automatiza tareas repetitivas mediante robots de software. Estos robots imitan las acciones humanas para realizar procesos de manera automática, precisa y sin errores.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q2">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿El RPA reemplazará a mis empleados?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q2">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>No, RPA libera a tus empleados de tareas repetitivas para que puedan enfocarse en actividades de mayor valor que requieren creatividad, análisis y toma de decisiones estratégicas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q3">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué procesos puedo automatizar?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q3">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Cualquier proceso repetitivo y basado en reglas: procesamiento de facturas, gestin de datos, conciliaciones bancarias, reportes, entrada de datos, procesamiento de pedidos y mucho más.</p>
                        </div>
                    </div>
                </div>

                <!-- TÉCNICAS -->
                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q4">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cuánto tiempo toma implementar un RPA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q4">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>El tiempo de implementación varía según la complejidad del proceso, pero típicamente toma entre 2-8 semanas desde el análisis hasta la puesta en producción completa.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q5">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué infraestructura necesito?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q5">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Los requisitos son mínimos: una computadora o servidor con Windows/Linux y acceso a internet. Nos adaptamos a tu infraestructura existente, ya sea on-premise o en la nube.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q6">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué pasa si el proceso cambia?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q6">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Nuestros RPA son flexibles y adaptables. Podemos ajustar la automatizacin rápidamente para acomodar cambios en los procesos, nuevas reglas o requisitos adicionales.</p>
                        </div>
                    </div>
                </div>

                <!-- PRECIOS -->
                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q7">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cómo se calcula el ROI de un proyecto RPA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q7">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>El ROI se calcula considerando el tiempo ahorrado, reducción de errores, mejora en velocidad de procesos y reducción de costos operativos. Nuestros clientes típicamente ven un ROI positivo en 3-6 meses.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q8">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cómo se cobra el servicio de RPA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q8">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Ofrecemos planes flexibles basados en el número de procesos automatizados y volumen de transacciones. Incluyen implementación, soporte 24/7 y actualizaciones continuas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item precio" data-category="precio">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q9">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Hay período de prueba?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q9">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, ofrecemos un análisis gratuito de procesos y una prueba piloto sin costo para que compruebes la efectividad de la automatización en tu negocio.</p>
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
                tu Operación?
            </h2>
            <p class="text-xl opacity-90 mb-12 leading-relaxed">
                Únete a empresas que ya automatizaron más de 500 procesos críticos. 
                <br>Tu robot inteligente te est esperando.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
              <!--  <button class="bg-white text-aloia-red px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300 shadow-xl" data-rpa-demo>
                    <i class="fas fa-robot mr-3"></i>
                    Ver Demo RPA
                </button>-->
                <a class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-aloia-red transition-all duration-300" href="/contacto.php">
                    <i class="fas fa-phone mr-3"></i>
                    Hablar con Experto
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS para los elementos del RPA */
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

/* Timeline */
.timeline-container {
    min-height: 800px;
}

.timeline-line {
    height: calc(100% - 80px);
    top: 40px;
}

/* Comparación cards */
.comparison-card {
    transition: all 0.3s ease;
}

.comparison-card:hover {
    transform: translateY(-5px);
}

.comparison-card.rpa {
    position: relative;
}

.comparison-card.rpa::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(253, 97, 68, 0.1), rgba(139, 92, 246, 0.1));
    border-radius: inherit;
    z-index: -1;
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

/* Industry cards hover effect */
.industry-card {
    transition: all 0.3s ease;
}

.industry-card:hover {
    transform: translateY(-5px);
}

/* Timeline responsivo */
@media (max-width: 768px) {
    .timeline-step {
        flex-direction: column;
        text-align: center;
    }
    
    .timeline-step .w-1/2 {
        width: 100%;
        padding: 0;
        margin-bottom: 1rem;
    }
    
    .timeline-line {
        display: none;
    }
    
    .faq-item h3 {
        font-size: 1rem;
    }
}

/* Animaciones globales */
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





.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
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

    // Animacin de contadores
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
    
    if (timelineItems.length > 0) {
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        });

        timelineItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(50px)';
            item.style.transition = `all 0.6s ease ${index * 0.2}s`;
            timelineObserver.observe(item);
        });
    }

    // Industry cards hover effect
    const industryCards = document.querySelectorAll('.industry-card');
    
    industryCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
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