<?php
require_once __DIR__ . '/includes/config.php';
$page_title = "Sobre Nosotros | Aloia";
$activePage = 'nosotros';
?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<!-- Estilos personalizados para la página sobre nosotros -->
<link rel="stylesheet" href="<?= CSS_PATH ?>about-us.css">

<!-- Hero Section Rediseñado -->
<section class="hero-redesigned bg-aloia-dark text-aloia-white">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class=""></div>
    <div class=""></div>
    <div class="hero-circle hero-circle-1"></div>
    <div class="hero-circle hero-circle-2"></div>
    <div class="hero-circle hero-circle-3"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="hero-content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div
                    class="opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                    <div class="hero-badge">
                        <i class="fas fa-rocket mr-2"></i> Innovando desde 2023
                    </div>

                    <h1 class="hero-title">Transformamos empresas con IA</h1>

                    <p class="hero-subtitle">Soluciones tecnológicas que optimizan procesos, aumentan la eficiencia y
                        potencian el crecimiento de tu negocio</p>

                    <div class="hero-buttons">
                        <a href="contacto.php" class="btn-primary">
                            <i class="fas fa-arrow-right mr-2"></i> Solicitar demo
                        </a>
                        <a href="#about" class="btn-secondary">
                            Conoce más
                        </a>
                    </div>

                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="hero-stat-number">300+</div>
                            <div class="hero-stat-label">Proyectos exitosos</div>
                        </div>

                        <div class="hero-stat">
                            <div class="hero-stat-number">50+</div>
                            <div class="hero-stat-label">Clientes satisfechos</div>
                        </div>

                        <div class="hero-stat">
                            <div class="hero-stat-number">24/7</div>
                            <div class="hero-stat-label">Soporte garantizado</div>
                        </div>
                    </div>
                </div>

                <div class="hero-image-container opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                    <img src="<?= IMG_PATH ?>aloia-color.png" alt="Inteligencia Artificial" class="hero-image"
                        onerror="this.src='https://cdn-icons-png.flaticon.com/512/8637/8637114.png'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section py-20">
    <div class="about-pattern"></div>
    <div class="container mx-auto px-4">
        <div class="about-card opacity-0 animate-[fadeIn_1s_ease-in-out_0.8s_forwards]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                <div class="about-content">
                    <div class="section-heading">
                        <h2>Nuestra Misión</h2>
                        <p>Transformar la manera en que las empresas operan a través de soluciones de inteligencia
                            artificial innovadoras y accesibles.</p>
                    </div>
                    <p class="text-gray-600 mb-8">En Aloia, nos dedicamos a hacer que la tecnología avanzada sea
                        accesible para empresas de todos los tamaños. Nuestro objetivo es simplificar los procesos
                        empresariales y mejorar la eficiencia operativa.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="about-feature">
                            <div class="about-feature-icon bg-aloia-orange/10">
                                <i class="fas fa-rocket text-aloia-orange"></i>
                            </div>
                            <div class="about-feature-text">Innovación constante</div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon bg-aloia-red/10">
                                <i class="fas fa-cogs text-aloia-red"></i>
                            </div>
                            <div class="about-feature-text">Soluciones personalizadas</div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon bg-aloia-purple/10">
                                <i class="fas fa-chart-line text-aloia-purple"></i>
                            </div>
                            <div class="about-feature-text">Resultados medibles</div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon bg-green-100">
                                <i class="fas fa-shield-alt text-green-600"></i>
                            </div>
                            <div class="about-feature-text">Seguridad garantizada</div>
                        </div>
                    </div>

                    <a href="<?php echo BASE_URL ?>contacto.php"
                        class="inline-block bg-gradient-to-r from-aloia-orange to-aloia-red text-white font-bold py-3 px-8 rounded-full shadow-lg hover:transform hover:scale-105 transition-all">
                        Contáctanos
                    </a>
                </div>
                <div class="about-video">
                    <img src="<?= IMG_PATH ?>apreton-mano.jpg" alt="Imagen sobre nosotros" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section py-20">
    <div class="team-pattern"></div>
    <div class="container mx-auto px-4">
        <div class="section-heading centered mb-16">
            <h2>Nuestro Equipo Directivo</h2>
            <p>Profesionales apasionados por la innovación y comprometidos con el éxito de nuestros clientes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 opacity-0 animate-[fadeIn_1s_ease-in-out_1s_forwards]">
            <div class="team-card">
                <div class="team-header">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="team-name">Iván Acuña</h3>
                    <p class="team-role">CEO / Arquitecto de IA</p>
                </div>
                <div class="team-body">
                    <p class="team-bio">Experto en implementación de IA con +10 años de experiencia en tecnología.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <div class="team-header">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="team-name">Luis Martínez</h3>
                    <p class="team-role">CTO / Especialista en RPA</p>
                </div>
                <div class="team-body">
                    <p class="team-bio">Master en automatización y especialista en integración de sistemas
                        empresariales.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <div class="team-header">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="team-name">Ana García</h3>
                    <p class="team-role">Lead Developer</p>
                </div>
                <div class="team-body">
                    <p class="team-bio">Experta en desarrollo de soluciones de IA y machine learning.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-section py-20">
    <div class="why-pattern"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="section-heading centered mb-16">
            <h2>¿Por Qué Elegirnos?</h2>
            <p>Beneficios tangibles que marcan la diferencia en tu negocio</p>
        </div>

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 opacity-0 animate-[fadeIn_1s_ease-in-out_1.2s_forwards]">
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="why-title">Implementación Express</h3>
                <div class="why-metric">2 <span>semanas</span></div>
                <p class="text-gray-600">Del concepto al deployment en tiempo récord</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="why-title">ROI Garantizado</h3>
                <div class="why-metric">300<span>%</span></div>
                <p class="text-gray-600">Retorno promedio de inversión</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="why-title">Datos Seguros</h3>
                <div class="why-metric">ISO <span>27001</span></div>
                <p class="text-gray-600">Certificación en seguridad</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="why-title">Soporte 24/7</h3>
                <div class="why-metric">15 <span>min</span></div>
                <p class="text-gray-600">Tiempo de respuesta promedio</p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section py-20">
    <div class="container mx-auto px-4">
        <div class="section-heading centered mb-16">
            <h2>Nuestra Trayectoria</h2>
            <p>Un viaje de innovación y crecimiento constante</p>
        </div>

        <div class="timeline-container opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
            <div class="timeline-item">
                <div class="timeline-content timeline-left">
                    <div class="timeline-year">2023</div>
                    <p class="timeline-text">Lanzamiento de nuestros servicios de IA con tecnología de punta</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content timeline-right">
                    <div class="timeline-year">2024</div>
                    <p class="timeline-text">Expansión de servicios y más de 300 implementaciones exitosas</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content timeline-left">
                    <div class="timeline-year">2025</div>
                    <p class="timeline-text">Innovando con soluciones personalizadas para cada industria</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="methodology-section py-20">
    <div class="container mx-auto px-4">
        <div class="section-heading centered mb-16">
            <h2>Nuestra Metodología</h2>
            <p>Un enfoque estructurado para garantizar resultados excepcionales</p>
        </div>

        <div class="methodology-container opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
            <div class="methodology-step">
                <div class="methodology-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="methodology-title">Diagnóstico</h3>
                <p class="methodology-text">Análisis profundo de necesidades y oportunidades</p>
            </div>

            <div class="methodology-step">
                <div class="methodology-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="methodology-title">Planeación</h3>
                <p class="methodology-text">Diseño de solución y roadmap detallado</p>
            </div>

            <div class="methodology-step">
                <div class="methodology-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="methodology-title">Desarrollo</h3>
                <p class="methodology-text">Implementación ágil y pruebas continuas</p>
            </div>

            <div class="methodology-step">
                <div class="methodology-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="methodology-title">Deploy</h3>
                <p class="methodology-text">Lanzamiento y acompañamiento post-implementación</p>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners-section py-20">
    <div class="container mx-auto px-4">
        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
            <div>
                <div class="section-heading mb-12">
                    <h2>Certificaciones</h2>
                    <p>Respaldados por los más altos estándares de la industria</p>
                </div>

                <div class="cert-container">
                    <div class="cert-item">
                        <img src="<?= IMG_PATH ?>ISO.png" alt="ISO 27001" class="cert-logo">
                        <div class="cert-info">
                            <h4>ISO 27001:2022</h4>
                            <p>Gestión de seguridad de la información</p>
                        </div>
                    </div>

                    <div class="cert-item">
                        <img src="https://www.celopay.com/wp-content/uploads/2019/12/PCI-Level-1-Service-Provider.png"
                            alt="PCI DSS" class="cert-logo">
                        <div class="cert-info">
                            <h4>PCI DSS Level 1</h4>
                            <p>Estándar de seguridad de datos para pagos</p>
                        </div>
                    </div>

                    <div class="cert-item">
                        <img src="https://i.pinimg.com/originals/2a/f4/23/2af423fe15fac55d8ea58655a577cbe7.png"
                            alt="CMMI" class="cert-logo">
                        <div class="cert-info">
                            <h4>CMMI Level 5</h4>
                            <p>Modelo de madurez de capacidades integrado</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="section-heading mb-12">
                    <h2>Partners Estratégicos</h2>
                    <p>Colaboramos con los líderes tecnológicos globales</p>
                </div>

                <div class="partners-grid">
                    <div class="partner-item">
                        <img src="<?= IMG_PATH ?>openai.png"
                            alt="OpenAI">
                    </div>
                    <div class="partner-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/ElevenLabs_logo.png"
                            alt="ElevenLabs">
                    </div>
                    <div class="partner-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Anthropic_logo.svg/2560px-Anthropic_logo.svg.png"
                            alt="Anthropic">
                    </div>
                    <div class="partner-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Microsoft_Azure_Logo.svg/2560px-Microsoft_Azure_Logo.svg.png"
                            alt="Azure">
                    </div>
                    <div class="partner-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Amazon_Web_Services_Logo.svg/2560px-Amazon_Web_Services_Logo.svg.png"
                            alt="AWS">
                    </div>
                    <div class="partner-item">
                        <img src="https://logodownload.org/wp-content/uploads/2021/06/google-cloud-logo-1.png"
                            alt="Google Cloud">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="industries-section py-20">
    <div class="container mx-auto px-4">
        <div class="section-heading centered mb-16">
            <h2>Industrias que Potenciamos</h2>
            <p>Soluciones adaptadas a las necesidades específicas de cada sector</p>
        </div>

        <div class="industries-grid opacity-0 animate-[fadeIn_1s_ease-in-out_2s_forwards]">
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-university"></i>
                </div>
                <h3 class="industry-title">Banca y Finanzas</h3>
                <p class="industry-text">Soluciones de IA para detección de fraude y análisis crediticio</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="industry-title">Salud</h3>
                <p class="industry-text">Sistemas inteligentes para agenda m&eacute;dica y telemedicina</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="industry-title">Retail</h3>
                <p class="industry-text">Automatización de recomendaciones y gestión de inventario</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="industry-title">Aseguradoras</h3>
                <p class="industry-text">Automatización de claims y evaluación de riesgos</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3 class="industry-title">Logística</h3>
                <p class="industry-text">Optimización de rutas y gestión inteligente de flotillas</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="industry-title">Real Estate</h3>
                <p class="industry-text">Tours virtuales y valuación automatizada con IA</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="industry-title">Educación</h3>
                <p class="industry-text">Sistemas LMS inteligentes y tutoría virtual personalizada</p>
            </div>

            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <h3 class="industry-title">Manufactura</h3>
                <p class="industry-text">Control de calidad y mantenimiento predictivo</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-20">
    <div class="cta-bg"></div>
    <div class="cta-pattern"></div>
    <div class="container mx-auto px-4">
        <div class="cta-content">
            <h2 class="cta-title">¿Listo para transformar tu negocio?</h2>
            <p class="cta-text">Descubre cómo nuestras soluciones de inteligencia artificial pueden impulsar tu empresa
                al siguiente nivel.</p>
            <div class="cta-buttons">
                <a href="<?php echo BASE_URL ?>contacto.php" class="btn-white">
                    Solicita una demostración
                </a>
                <a href="herramientas/" class="btn-outline">
                    Explora nuestras herramientas
                </a>
            </div>
        </div>
    </div>
</section>


<script src="<?= JS_PATH ?>about-us.js"></script>
<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    if (document.getElementById('particles-canvas')) {
        initParticlesCanvas();
    }
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>