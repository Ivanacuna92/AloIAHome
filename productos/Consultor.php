<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title = "Consultor IA | Aloia";
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

<!-- Estilos personalizados para consultor IA -->
<link rel="stylesheet" href="<?= CSS_PATH ?>consultor-ia.css">

<!-- Header específico para la página de Consultor IA -->
<section class="bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-slide-up animate-delay-200">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4 border border-aloia-orange/30">
                    <i class="fas fa-brain mr-2"></i>
                    Inteligencia Artificial Estratégica
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Consultor
                    <span class="block text-gradient bg-gradient-aloia">IA</span>
                </h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8 max-w-lg">
                    Tu asesor estratégico potenciado con inteligencia artificial para decisiones empresariales inteligentes
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                   <!-- <button class="bg-gradient-aloia text-white px-8 py-4 rounded-full font-semibold hover:scale-105 transition-all duration-300 shadow-lg" data-ia-demo>
                        <i class="fas fa-play mr-2"></i>
                        Ver Demo IA
                    </button> -->
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
                        <i class="fas fa-brain text-white text-7xl animate-float"></i>
                    </div>
                    <div class="absolute -right-2 top-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            Analizando
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
                    Inteligencia Artificial 
                    <span class="text-gradient bg-gradient-aloia">Estratégica</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Potencia tus decisiones empresariales con análisis predictivo y recomendaciones inteligentes
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Análisis Predictivo</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Predicciones basadas en datos históricos y tendencias del mercado con precisión del 95%.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Forecasting de ventas
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Análisis de tendencias
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Detección de anomalías
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Predicciones precisas para el futuro
                    </div>
                </div>

                <div class="feature-card featured group">
                    <div class="feature-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Optimización de Procesos</h3>
                    <p class="leading-relaxed mb-6">
                        Identificacin y mejora de cuellos de botella operativos con IA avanzada.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm space-y-2 text-white">
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Mapeo automático de procesos
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Identificacin de ineficiencias
                            </li>
                            <li class="flex items-center text-white">
                                <i class="fas fa-check mr-2"></i>
                                Recomendaciones de mejora
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-white font-medium group-hover:text-white transition-colors">
                        → Eficiencia operativa maximizada
                    </div>
                </div>

                <div class="feature-card group">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Decisiones Ágiles</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Recomendaciones estratégicas en tiempo real basadas en análisis de big data.
                    </p>
                    <div class="service-details">
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Dashboards inteligentes
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Alertas automticas
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Insights accionables
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-sm text-aloia-red font-medium group-hover:text-aloia-purple transition-colors">
                        → Decisiones informadas al instante
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Casos de Uso IA -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    🚀 Casos de Uso
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    IA Aplicada a <span class="text-gradient bg-gradient-aloia">tu Negocio</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Descubre cómo la inteligencia artificial puede transformar cada área de tu empresa
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Caso 1: Finanzas -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-coins text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Finanzas Inteligentes</h3>
                    <p class="text-gray-600 mb-6">Optimización de flujo de caja, predicción de ingresos y detección de fraudes con IA.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">95%</div>
                            <div class="text-sm text-gray-500">Precisión en forecasting</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Predicción</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Automatización</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Análisis</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Finanzas predictivas y seguras
                    </div>
                </div>

                <!-- Caso 2: Marketing -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Marketing Personalizado</h3>
                    <p class="text-gray-600 mb-6">Segmentación inteligente, campañas optimizadas y predicción de comportamiento del cliente.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">300%</div>
                            <div class="text-sm text-gray-500">Mejora en conversión</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Segmentación</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Personalización</span>
                        <span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded">Optimización</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                         Campañas que realmente convierten
                    </div>
                </div>

                <!-- Caso 3: Operaciones -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Operaciones Autónomas</h3>
                    <p class="text-gray-600 mb-6">Optimización de inventarios, mantenimiento predictivo y gestión inteligente de recursos.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">70%</div>
                            <div class="text-sm text-gray-500">Reducción de costos</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Predictivo</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Eficiencia</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Automatización</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Operaciones que se optimizan solas
                    </div>
                </div>

                <!-- Caso 4: Recursos Humanos -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">RH Inteligente</h3>
                    <p class="text-gray-600 mb-6">Reclutamiento automatizado, análisis de performance y predicción de rotación.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">85%</div>
                            <div class="text-sm text-gray-500">Mejora en contrataciones</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Screening</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Performance</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Retención</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                         Talento humano optimizado
                    </div>
                </div>

                <!-- Caso 5: Ventas -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-chart-bar text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Ventas Predictivas</h3>
                    <p class="text-gray-600 mb-6">Lead scoring automático, predicción de cierre y optimización de pipelines.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">400%</div>
                            <div class="text-sm text-gray-500">Incremento en leads calificados</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Scoring</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Pipeline</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Conversión</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                        → Ventas que se cierran solas
                    </div>
                </div>

                <!-- Caso 6: Atencin al Cliente -->
                <div class="use-case-card group bg-white rounded-2xl p-8 border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-16 h-16 rounded-full bg-gradient-aloia flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-aloia-dark">Soporte Inteligente</h3>
                    <p class="text-gray-600 mb-6">Chatbots avanzados, análisis de sentimientos y resolución automática de tickets.</p>
                    <div class="use-case-benefits mb-6">
                        <div class="benefit-metric text-center">
                            <div class="text-2xl font-bold text-aloia-red">90%</div>
                            <div class="text-sm text-gray-500">Satisfacción del cliente</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Chatbots</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Sentimientos</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Automatización</span>
                    </div>
                    <div class="text-aloia-red font-medium group-hover:text-aloia-orange transition-colors">
                         Soporte 24/7 que resuelve todo
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestra Metodologa -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-gradient-aloia/10 rounded-full text-aloia-red font-medium mb-4">
                    📋 Metodología
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-aloia-dark">
                    Nuestra <span class="text-gradient bg-gradient-aloia">Metodologa</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Proceso estructurado que garantiza el éxito de tu transformación con IA
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <!-- Timeline de metodología -->
                <div class="timeline-container relative">
                    <!-- Línea central -->
                    <div class="timeline-line absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-aloia opacity-30 h-full"></div>
                    
                    <!-- Fase 1 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">1. Diagnóstico Inicial</h3>
                                <p class="text-gray-600 mb-6">Analizamos tu situación actual y definimos objetivos claros con IA.</p>
                                <ul class="text-left space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Evaluación de procesos actuales</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Identificación de oportunidades IA</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Definicin de KPIs inteligentes</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Fase 2 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8"></div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-bezier-curve"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">2. Diseño de Estrategia IA</h3>
                                <p class="text-gray-600 mb-6">Creamos el plan de acción personalizado con tecnologías IA específicas.</p>
                                <ul class="space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Roadmap de implementacin IA</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Selección de modelos ML</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Plan de datos y recursos</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Fase 3 -->
                    <div class="timeline-step flex items-center mb-16">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">3. Implementación IA</h3>
                                <p class="text-gray-600 mb-6">Ejecutamos la estrategia paso a paso con monitoreo continuo.</p>
                                <ul class="text-left space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Setup de herramientas IA</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Entrenamiento de modelos</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Capacitación del equipo</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Fase 4 -->
                    <div class="timeline-step flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="timeline-icon w-20 h-20 rounded-full bg-gradient-aloia flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="timeline-content bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:border-aloia-orange/30 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-aloia-dark">4. Medición y Optimización</h3>
                                <p class="text-gray-600 mb-6">Monitoreamos y mejoramos continuamente el rendimiento de la IA.</p>
                                <ul class="space-y-2 text-gray-500">
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Análisis de resultados IA</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Ajustes de modelos ML</li>
                                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Reportes predictivos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas de Impacto -->
    <section class="py-20 bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white relative overflow-hidden">
        <div class="absolute inset-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Impacto Real de la 
                    IA Estratgica
                </h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Métricas reales de empresas que implementaron consultoría IA con nosotros
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-brain text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3 counter" data-count="150">0</div>
                    <div class="text-white/90 text-lg font-medium">Proyectos IA Exitosos</div>
                    <div class="mt-2 text-sm text-white/70">Implementados con éxito</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-percentage text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="95">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">Precisión Predictiva</div>
                    <div class="mt-2 text-sm text-white/70">En análisis y forecasting</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-arrow-up text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="250">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">Incremento en Eficiencia</div>
                    <div class="mt-2 text-sm text-white/70">Promedio en procesos</div>
                </div>

                <div class="stats-card text-center group">
                    <div class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-dollar-sign text-3xl"></i>
                    </div>
                    <div class="text-5xl font-bold mb-3">
                        <span class="counter" data-count="500">0</span>%
                    </div>
                    <div class="text-white/90 text-lg font-medium">ROI Promedio</div>
                    <div class="mt-2 text-sm text-white/70">Retorno de inversión IA</div>
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
                    Resolvemos todas tus dudas sobre consultoría en inteligencia artificial
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
                <button class="filter-btn" data-filter="implementacion">
                    <i class="fas fa-rocket mr-2"></i>Implementación
                </button>
            </div>

            <!-- Preguntas -->
            <div class="max-w-4xl mx-auto space-y-4" id="faqContainer">

                <!-- GENERALES -->
                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q1">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué es un Consultor IA y cómo puede ayudar a mi empresa?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q1">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Un Consultor IA es un especialista que identifica oportunidades para implementar inteligencia artificial en tu negocio, diseña estrategias personalizadas y guía la implementación para maximizar el ROI y la eficiencia operativa.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q2">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Mi empresa está lista para implementar IA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q2">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Si tienes datos históricos, procesos repetitivos o necesitas tomar decisiones basadas en información, tu empresa está lista. Realizamos un diagnóstico gratuito para evaluar tu nivel de preparación y oportunidades específicas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item general" data-category="general">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q3">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué tipos de IA pueden aplicarse en mi negocio?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q3">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Dependiendo de tu industria: análisis predictivo, chatbots inteligentes, automatización de procesos, reconocimiento de patrones, optimización de precios, detección de fraudes, y personalización de experiencias de cliente.</p>
                        </div>
                    </div>
                </div>

                <!-- TÉCNICAS -->
                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q4">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué datos necesito para implementar IA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q4">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>La cantidad y tipo de datos depende del proyecto. Generalmente necesitas datos históricos de 6-12 meses. Podemos trabajar con datos de ventas, clientes, operaciones, finanzas o cualquier información estructurada que generes.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q5">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué tan precisa es la IA en las predicciones?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q5">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Nuestros modelos alcanzan precisiones del 85-95% dependiendo del caso de uso. Para forecasting financiero típicamente 90-95%, para detección de patrones 85-92%, y para análisis de comportamiento 88-94%.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item tecnica" data-category="tecnica">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q6">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿La IA se integra con mis sistemas actuales?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q6">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Sí, diseñamos soluciones que se integran perfectamente con tus sistemas existentes (ERP, CRM, bases de datos) a través de APIs y conectores, sin necesidad de cambiar tu infraestructura actual.</p>
                        </div>
                    </div>
                </div>

                <!-- IMPLEMENTACIÓN -->
                <div class="faq-item question-item implementacion" data-category="implementacion">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q7">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Cuánto tiempo toma implementar una solución de IA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q7">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Proyectos simples: 4-8 semanas. Soluciones medias: 2-4 meses. Transformaciones complejas: 4-8 meses. Siempre con entregables incrementales y valor desde las primeras semanas.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item implementacion" data-category="implementacion">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q8">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Qué ROI puedo esperar de la IA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q8">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>Nuestros clientes ven ROI promedio de 300-500% en el primer año. Los beneficios incluyen: reducción de costos (20-60%), aumento de ingresos (15-40%), y mejora en eficiencia (50-250%).</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item question-item implementacion" data-category="implementacion">
                    <div class="flex justify-between items-center cursor-pointer p-6" data-faq="q9">
                        <h3 class="text-xl font-bold text-aloia-dark flex-1 pr-4">¿Necesito contratar personal especializado en IA?</h3>
                        <div class="faq-icon"><i class="fas fa-chevron-down text-white transform transition-transform duration-300"></i></div>
                    </div>
                    <div class="faq-content" id="q9">
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            <p>No necesariamente. Capacitamos a tu equipo actual y podemos manejar el mantenimiento técnico. Para proyectos grandes, recomendamos tener al menos una persona dedicada que capacitamos completamente.</p>
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
                ¿Listo para Potenciar 
                tu Negocio con IA?
            </h2>
            <p class="text-xl opacity-90 mb-12 leading-relaxed">
                Únete a empresas que ya están usando inteligencia artificial para tomar decisiones más inteligentes. 
                <br>Tu consultor IA te está esperando.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
              <!--  <button class="bg-white text-aloia-red px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-all duration-300 shadow-xl" data-ia-demo>
                    <i class="fas fa-brain mr-3"></i>
                    Ver Demo IA
                </button> -->
                <a class="border-2 border-white text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-aloia-red transition-all duration-300" href="/contacto.php">
                    <i class="fas fa-calendar mr-3"></i>
                    Solicitar Demo
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS para consultor IA */
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
    min-height: 600px;
}

.timeline-line {
    height: calc(100% - 80px);
    top: 40px;
}

/* Use case cards */
.use-case-card {
    transition: all 0.3s ease;
}

.use-case-card:hover {
    transform: translateY(-8px) scale(1.02);
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
    
    .use-case-card {
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

            // Limpia la bsqueda
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
                
                counter.textContent = Math.floor(current);
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

    // Use case cards hover effect
    const useCaseCards = document.querySelectorAll('.use-case-card');
    
    useCaseCards.forEach(card => {
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