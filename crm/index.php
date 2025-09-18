<?php
// Include config file first
include __DIR__ . '/../../includes/config.php';

// Set page title for CRM
$page_title = 'ALO-CRM - Sistema de Gestión de Leads con IA';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Aloia</title>
    <link rel="icon" type="image/x-icon" href="<?= IMG_PATH ?>icono.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  	<link 

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'space': ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        'aloia-orange': '#FD6144',
                        'aloia-red': '#FD3244',
                        'aloia-purple': '#AE3A8D',
                        'aloia-dark': '#161212',
                        'aloia-light-gray': '#CCB6B6',
                        'aloia-white': '#F9F9F9',
                    },
                    backgroundImage: {
                        'gradient-aloia': 'linear-gradient(90deg, #FD6144 0%, #FD3244 50%, #AE3A8D 100%)',
                    },
                    boxShadow: {
                        'parallel': '5px 5px 10px rgba(0, 0, 0, 0.3)',
                    }
                }
            }
        }
    </script>

    <!-- CRM specific styles -->
    <link rel="stylesheet" href="/crm/styles.css">
  <link rel="stylesheet" href="../assets/css/chatbot.css">
</head>

<body class="font-space bg-aloia-white text-aloia-dark">

    <?php include __DIR__ . '/../partials/layout/header.php'; ?>

    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <div class="container">
        <!-- HERO SECTION SIMPLIFICADA -->
        <section class="hero-section fade-in">
            <div class="hero-content">
                <h1 class="hero-headline">
                    Deja de Perder 73% de tus Leads por Responder Tarde
                </h1>

                <p class="hero-subheadline">
                    Convierte el Caos de WhatsApp y Anuncios en Ventas Predecibles con IA
                </p>

                <p class="hero-description">
                    ALO-CRM centraliza tus leads, automatiza respuestas 24/7 y multiplica tus ventas sin aumentar tu equipo
                </p>

                <div class="hero-cta-container">
                    <button class="cta-button primary-cta">
                        ACTIVA TU CRM GRATIS 5 DAS
                        <span class="cta-badge">Solo 20 lugares esta semana</span>
                    </button>
                </div>
            </div>

            <div class="hero-video">
                <div class="video-container-hero">
                    <video autoplay muted loop playsinline poster="video-thumbnail.jpg">
                        <source src="hero.mp4" type="video/mp4">
                        Tu navegador no soporta el video.
                    </video>
                    <button class="video-play-btn">
                        <i class="fas fa-play-circle"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="video-benefits-section fade-in-scroll">
            <div class="video-benefits-highlight">
                <div class="benefits-wrapper">
                    <div class="benefits-grid">
                        <div class="benefits-column">
                            <h3><i class="fas fa-eye"></i> MIENTRAS VES EL VIDEO, IMAGINA:</h3>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Cero leads perdidos</li>
                                <li><i class="fas fa-check-circle"></i> WhatsApp organizado</li>
                                <li><i class="fas fa-check-circle"></i> IA trabajando 24/7</li>
                                <li><i class="fas fa-check-circle"></i> Métricas en tiempo real</li>
                            </ul>
                        </div>
                        <div class="benefits-column">
                            <h3><i class="fas fa-rocket"></i> TU EQUIPO CON ALO-CRM:</h3>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> 89% más rápido respondiendo</li>
                                <li><i class="fas fa-check-circle"></i> 32% más ventas cerradas</li>
                                <li><i class="fas fa-check-circle"></i> 10 horas/semana ahorradas</li>
                                <li><i class="fas fa-check-circle"></i> ROI desde el día 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FUNCTIONALITIES SECTION -->
        <section class="functionalities-section fade-in-scroll">
            <div class="container"> <!-- AÑADIR ESTE CONTENEDOR -->
                <h2 class="section-headline">
                    Funcionalidades que Potencian tu Proceso de Ventas
                </h2>

                <div class="functionality-container">
                    <!-- Funcionalidad 1 -->
                    <div class="functionality-item">
                        <div class="functionality-number">01</div> <!-- SACARLO AQUÍ -->
                        <div class="functionality-content">
                            <h3>Metodología de Seguimiento Flexible</h3>
                            <p>Aprovecha nuestra metodología de seguimiento probada, o bien configura tus propias etapas y subetapas comerciales adaptadas a tu proceso único de ventas.</p>
                            <div class="functionality-features">
                                <span><i class="fas fa-check"></i> Pipelines personalizables</span>
                                <span><i class="fas fa-check"></i> Etapas predefinidas</span>
                                <span><i class="fas fa-check"></i> Métricas por etapa</span>
                            </div>
                        </div>
                        <div class="functionality-image">
                            <img src="1.png" alt="Metodología de seguimiento - 600x400px">
                        </div>
                    </div>

                    <!-- Funcionalidad 2 -->
                    <div class="functionality-item reverse">
                        <div class="functionality-content">
                            <div class="functionality-number">02</div>
                            <h3>WhatsApp Integrado</h3>
                            <p>Envía mensajes de WhatsApp desde Aloia CRM, no ms caos en tus mensajes. Centraliza todas tus conversaciones en un solo lugar.</p>
                            <div class="functionality-features">
                                <span><i class="fas fa-check"></i> Mensajes centralizados</span>
                                <span><i class="fas fa-check"></i> Historial completo</span>
                                <span><i class="fas fa-check"></i> Plantillas rápidas</span>
                            </div>
                        </div>
                        <div class="functionality-image">
                            <img src="2.png" alt="WhatsApp integrado - 600x400px">
                        </div>
                    </div>

                    <!-- Funcionalidad 3 -->
                    <div class="functionality-item">
                        <div class="functionality-content">
                            <div class="functionality-number">03</div>
                            <h3>Gestión de Equipos</h3>
                            <p>Administra tus equipos de venta con visibilidad total. Asigna leads, monitorea desempeño y optimiza la productividad de cada vendedor.</p>
                            <div class="functionality-features">
                                <span><i class="fas fa-check"></i> Asignacin inteligente</span>
                                <span><i class="fas fa-check"></i> KPIs individuales</span>
                                <span><i class="fas fa-check"></i> Reportes de equipo</span>
                            </div>
                        </div>
                        <div class="functionality-image">
                            <img src="3.svg" alt="Gestión de equipos - 600x400px">
                        </div>
                    </div>

                    <!-- Funcionalidad 4 -->
                    <div class="functionality-item reverse">
                        <div class="functionality-content">
                            <div class="functionality-number">04</div>
                            <h3>Voicebot con IA</h3>
                            <p>Realiza llamadas con nuestro voicebot inteligente. Automatiza llamadas de seguimiento y calificación de leads con voz natural.</p>
                            <div class="functionality-features">
                                <span><i class="fas fa-check"></i> Llamadas automáticas</span>
                                <span><i class="fas fa-check"></i> Transcripcin en vivo</span>
                                <span><i class="fas fa-check"></i> IA conversacional</span>
                            </div>
                        </div>
                        <div class="functionality-image">
                            <img src="4.png" alt="Voicebot IA - 600x400px">
                        </div>
                    </div>

                    <!-- Funcionalidad 5 -->
                    <div class="functionality-item">
                        <div class="functionality-content">
                            <div class="functionality-number">05</div>
                            <h3>100% Móvil</h3>
                            <p>Completamente responsivo y optimizado para uso desde tu móvil. Gestiona tu CRM desde cualquier lugar, en cualquier momento.</p>
                            <div class="functionality-features">
                                <span><i class="fas fa-check"></i> App nativa</span>
                                <span><i class="fas fa-check"></i> Notificaciones push</span>
                                <span><i class="fas fa-check"></i> Offline mode</span>
                            </div>
                        </div>
                        <div class="functionality-image">
                            <img src="5.png" alt="CRM móvil - 600x400px">
                        </div>
                    </div>
                </div>
            </div> <!-- CERRAR EL CONTENEDOR -->
        </section>


        <!-- FEATURES SECTION -->
        <section class="features-section fade-in-scroll">
            <div class="container">
                <h2 class="section-headline">
                    Características Potentes que Transforman tu Negocio
                </h2>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>IA Conversacional</h3>
                        <p>Chatbots inteligentes que califican y nutren leads 24/7 con respuestas naturales</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3>Automatizacin Total</h3>
                        <p>Flujos de trabajo automatizados que eliminan tareas repetitivas</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analytics Avanzado</h3>
                        <p>Dashboards en tiempo real con métricas que importan para tu negocio</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-plug"></i>
                        </div>
                        <h3>Integraciones Nativas</h3>
                        <p>Conecta WhatsApp, Facebook, Google y ms sin código</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Seguridad Enterprise</h3>
                        <p>Encriptación de grado bancario y cumplimiento GDPR</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Soporte Premium</h3>
                        <p>Equipo de xito del cliente dedicado a tu crecimiento</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TRUST SECTION (Nueva sección para elementos reubicados) -->
        <section class="trust-section fade-in-scroll">
            <div class="trust-wrapper">
                <div class="trust-signals">
                    <div class="trust-item">
                        <strong class="counter" data-target="500">0</strong>
                        <span>empresas confían en nosotros</span>
                    </div>
                    <div class="trust-item">
                        <strong class="counter" data-target="89">0%</strong>
                        <span>menos tiempo de respuesta</span>
                    </div>
                    <div class="trust-item">
                        <strong class="counter" data-target="32">0%</strong>
                        <span>incremento en ventas</span>
                    </div>
                </div>
                <div class="client-logos">
                    <img src="https://aloia.ai/assets/img//clients/user-ale.png" alt="Logo Cliente ALE - 80x40px">
                    <img src="https://aloia.ai/assets/img//clients/user-cmg.png" alt="Logo Cliente CMG - 80x40px">
                    <img src="https://aloia.ai/assets/img//clients/user-xm.png" alt="Logo Cliente XM - 80x40px">
                    <img src="https://aloia.ai/assets/img//clients/user-seton.png" alt="Logo Cliente Seton - 80x40px">
                    <img src="https://aloia.ai/assets/img//clients/user-muuk.png" alt="Logo Cliente Muuk - 80x40px">
                </div>
            </div>
        </section>

        <!-- PROBLEMA SECTION -->
        <section class="problem-section fade-in-scroll">
            <h2 class="section-headline">
                "Mientras Lees Esto, 3 Leads se Fueron con tu Competencia"
            </h2>

            <div class="problems-grid">
                <div class="problem-card">
                    <div class="problem-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>LEADS PERDIDOS</h3>
                    <ul>
                        <li>Respondes tarde a anuncios</li>
                        <li>Leads fros en 5 minutos</li>
                        <li>Competencia responde primero</li>
                    </ul>
                </div>

                <div class="problem-card">
                    <div class="problem-icon">
                        <i class="fas fa-users-slash"></i>
                    </div>
                    <h3>CAOS OPERATIVO</h3>
                    <ul>
                        <li>WhatsApp sin control</li>
                        <li>Información en 10 lugares</li>
                        <li>Seguimiento manual caótico</li>
                    </ul>
                </div>

                <div class="problem-card">
                    <div class="problem-icon">
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    <h3>SIN VISIBILIDAD</h3>
                    <ul>
                        <li>No sabes qué vende tu equipo</li>
                        <li>Sin métricas reales</li>
                        <li>Decisiones a ciegas</li>
                    </ul>
                </div>
            </div>

            <div class="calculator-section">
                <h3>Calculadora de Pérdidas</h3>
                <div class="calculator">
                    <div class="calc-input">
                        <label>Cuntos leads recibes al mes?</label>
                        <input type="number" id="leadsPerMonth" placeholder="100" value="100">
                    </div>
                    <div class="calc-input">
                        <label>¿Cuál es tu ticket promedio?</label>
                        <input type="number" id="avgTicket" placeholder="5000" value="5000">
                    </div>
                    <div class="calc-result">
                        <p>Estás perdiendo:</p>
                        <h3 class="loss-amount" id="lossAmount">$0 MXN</h3>
                        <span>mensuales</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- PAQUETES SECTION -->
        <section class="pricing-section fade-in-scroll">
            <h2 class="section-headline">Elige tu Nivel de Automatización</h2>

            <div class="pricing-table">
                <div class="pricing-card">
                    <h3>IMPULSO</h3>
                    <div class="price">$500 MXN/mes</div>
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> CRM + IA</li>
                        <li><i class="fas fa-check"></i> Leads ilimitados</li>
                        <li class="disabled"><i class="fas fa-times"></i> WhatsApp equipo</li>
                        <li class="disabled"><i class="fas fa-times"></i> Voicebot IA</li>
                        <li class="disabled"><i class="fas fa-times"></i> Prospectator</li>
                    </ul>
                    <div class="implementation">Implementacion: Inmediata</div>
                    <button class="cta-button secondary">EMPIEZA GRATIS</button>
                </div>

                <div class="pricing-card featured">
                    <div class="popular-badge">MÁS POPULAR</div>
                    <h3>ACELERA</h3>
                    <div class="price">$750 MXN/mes</div>
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> CRM + IA</li>
                        <li><i class="fas fa-check"></i> Leads ilimitados</li>
                        <li><i class="fas fa-check"></i> WhatsApp equipo</li>
                        <li class="disabled"><i class="fas fa-times"></i> Voicebot IA</li>
                        <li class="disabled"><i class="fas fa-times"></i> Prospectator</li>
                    </ul>
                    <div class="implementation">Implementación: 3 dias</div>
                    <button class="cta-button">MÁS POPULAR</button>
                </div>
                <div class="pricing-card">
                    <h3>DOMINA</h3>
                    <div class="price">Desde $750+</div>
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> CRM + IA</li>
                        <li><i class="fas fa-check"></i> Leads ilimitados</li>
                        <li><i class="fas fa-check"></i> WhatsApp equipo</li>
                        <li><i class="fas fa-check"></i> Voicebot IA</li>
                        <li><i class="fas fa-check"></i> Prospectator</li>
                    </ul>
                    <div class="implementation">Implementacin: 10 días</div>
                    <button class="cta-button secondary">MÁXIMO PODER</button>
                </div>
            </div>
        </section>

        <!-- TESTIMONIOS SECTION -->
        <section class="testimonials-section fade-in-scroll">
            <h2 class="section-headline">
                Empresas Como la Tuya Ya Venden Ms con Menos Esfuerzo
            </h2>

            <div class="testimonials-carousel" id="testimonialsCarousel">
                <div class="testimonial-card active">
                    <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; background: url('carlos.png') center/cover; background-position: center center; margin: 0 auto;">
                    </div>
                    <p class="testimonial-quote">"Duplicamos ventas sin contratar a nadie"</p>
                    <div class="testimonial-author">
                        <strong>Leonardo Assenato</strong>
                        <span>Director E5M</span>
                    </div>
                    <div class="testimonial-results">
                        <span>• De 15 a 31 ventas mensuales</span>
                        <span> ROI en 45 das</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; background: url('edgar.png') center/cover; background-position: center center; margin: 0 auto;">
                    </div>
                    <p class="testimonial-quote">"Por fin control total de WhatsApp"</p>
                    <div class="testimonial-author">
                        <strong>Edgar Acuña</strong>
                        <span>Chock Telco</span>
                    </div>
                    <div class="testimonial-results">
                        <span>• 0 leads perdidos desde día 1</span>
                        <span>• 10 horas/semana ahorradas</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; background: url('perla.png') center/cover; background-position: center center; margin: 0 auto;">
                    </div>
                    <p class="testimonial-quote">"La IA califica mejor que mi equipo"</p>
                    <div class="testimonial-author">
                        <strong>Perla Contreras</strong>
                        <span>Muuk</span>
                    </div>
                    <div class="testimonial-results">
                        <span>• 89% menos tiempo en qualifying</span>
                        <span>• 3x más demos agendadas</span>
                    </div>
                </div>
            </div>

            <div class="testimonials-nav">
                <button class="nav-dot active" data-slide="0"></button>
                <button class="nav-dot" data-slide="1"></button>
                <button class="nav-dot" data-slide="2"></button>
            </div>

            <div class="metrics-aggregate">
                <div class="metric-item">
                    <div class="metric-number counter" data-target="32">0%</div>
                    <p>aumento promedio en ventas</p>
                </div>
                <div class="metric-item">
                    <div class="metric-number counter" data-target="89">0%</div>
                    <p>reducción tiempo respuesta</p>
                </div>
                <div class="metric-item">
                    <div class="metric-number counter" data-target="420">0%</div>
                    <p>ROI en 6 meses</p>
                </div>
            </div>
        </section>

        <!-- INTEGRACIONES SECTION -->
        <section class="integrations-section fade-in-scroll">
            <h2 class="section-headline">
                Se Conecta con Todo lo que Ya Usas (Y lo que Necesitarás)
            </h2>

            <div class="integrations-diagram">
                <div class="integration-center">
                    <img src="https://aloia.ai/assets/img/aloia-color.png" alt="ALO-CRM Logo">
                </div>

                <div class="integration-items">
                    <div class="integration-item top-left">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </div>
                    <div class="integration-item top-center">
                        <i class="fab fa-facebook"></i>
                        <span>Facebook</span>
                    </div>
                    <div class="integration-item top-right">
                        <i class="fab fa-google"></i>
                        <span>Google Ads</span>
                    </div>
                    <div class="integration-item bottom-left">
                        <div class="integration-icon-box">
                            <img src="Aloia-task.jpg" alt="Task Flow" width="80" height="40" style="object-fit: contain;">
                        </div>
                        <span>Task Flow</span>
                    </div>
                    <div class="integration-item bottom-center">
                        <div class="integration-icon-box">
                            <img src="Aloia-crm.jpg" alt="CRM" width="80" height="40" style="object-fit: contain;">
                        </div>
                        <span>Voicebot IA</span>
                    </div>
                    <div class="integration-item bottom-right">
                        <div class="integration-icon-box">
                            <img src="Aloia-leads.jpg" alt="Prospectator" width="80" height="40" style="object-fit: contain;">
                        </div>
                        <span>Prospectator</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- GARANTÍAS SECTION -->
        <section class="guarantees-section fade-in-scroll">
            <h2 class="section-headline">Tu Éxito Est Garantizado</h2>

            <div class="guarantees-grid">
                <div class="guarantee-card">
                    <div class="guarantee-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Prueba gratis 5 días</h4>
                    <p>Sin tarjeta de crédito. Cancela cuando quieras.</p>
                </div>

                <div class="guarantee-card">
                    <div class="guarantee-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4>Implementación guiada</h4>
                    <p>Te tomamos de la mano en cada paso del proceso.</p>
                </div>

                <div class="guarantee-card">
                    <div class="guarantee-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Soporte prioritario</h4>
                    <p>Respuesta garantizada en menos de 2 horas.</p>
                </div>

                <div class="guarantee-card">
                    <div class="guarantee-icon">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <h4>Garantía satisfacción</h4>
                    <p>30 días o devolvemos tu dinero completo.</p>
                </div>
            </div>
        </section>


        <!-- FAQ SECTION -->
        <section class="faq-section fade-in-scroll">
            <div class="container">
                <h2 class="section-headline">
                    Preguntas Frecuentes sobre ALO-CRM
                </h2>

                <div class="faq-container">
                    <!-- FAQ 1 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Qué necesito para integrar WhatsApp?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Solo el número de teléfono de tus vendedores. En una sesión de 30 minutos dejamos lista la conexin.</p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Puedo conectar mis landings o anuncios de redes sociales?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Sí. La integracin de todas tus campañas tiene un costo de <strong>$8,400 MXN</strong> (50% al inicio y 50% al finalizar). El tiempo de implementacin es de <strong>1 semana</strong>.</p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Se puede integrar con Aloia Voicebot o Aloia Chatbot?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Claro. Conectamos directamente con nuestros bots de IA para que sean tu mejor vendedor y registren toda la informacin en Aloia CRM.</p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Incluye bsqueda de leads?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>No. Los paquetes base son exclusivamente para el uso del CRM. Puedes consultar nuestros paquetes de generacin de leads en <strong>aloia.ai/aloialeads</strong>.</p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Cómo funciona el Voicebot?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Programa tus seguimientos y nuestro bot realiza las llamadas automticamente. El costo por llamada es desde <strong>$5 MXN + IVA</strong>.</p>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Qu pasa si mi equipo de ventas es muy grande?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Ofrecemos paquetes para equipos de alto volumen. Ponte en contacto con uno de nuestros ejecutivos para una propuesta a tu medida.</p>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿El CRM tiene costos de mantenimiento o mensualidad?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Sí. El servicio funciona bajo modelo SaaS con una cuota mensual que depende del paquete contratado.</p>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Qu soporte recibo después de la implementacin?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Incluimos capacitación inicial, soporte técnico y acompañamiento postventa para asegurar que tu equipo aproveche al máximo el CRM.</p>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>¿Mis datos estarán seguros?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <p><br>Sí. Toda la informacin se almacena con cifrado, respaldos automáticos y siguiendo las mejores prácticas de seguridad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- Cierre del container -->

    <!-- Chatbot Widget -->
    <div class="fixed bottom-6 right-6 z-50">
        <button
            class="bg-aloia-red text-aloia-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-aloia-purple transition duration-300"
            aria-label="Chatbot Aloia" data-chatbot-trigger>
            <img src="aloia-ico.png" alt="Aloia Logo"
                class="h-16 w-16 rounded-full filter brightness-0 invert">
        </button>
    </div>
    <!-- Modal de formulario -->
    <div id="formModal" class="form-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h3>Activa ALOIA CRM Gratis</h3>
                <p>Comienza tu prueba de 30 das</p>
            </div>

            <form id="modalLeadForm" class="modal-form">
                <div class="form-group">
                    <input type="text" id="modalName" name="name" required placeholder="Nombre*">
                </div>

                <div class="form-group">
                    <input type="email" id="modalEmail" name="email" required placeholder="Email corporativo*">
                </div>

                <div class="form-group">
                    <input type="text" id="modalCompany" name="company" required placeholder="Empresa*">
                </div>

                <div class="form-group">
                    <select id="modalSalesTeam" name="salesTeam" required>
                        <option value="">¿Cuntos vendedores?</option>
                        <option value="1-5">1-5 vendedores</option>
                        <option value="6-10">6-10 vendedores</option>
                        <option value="11-20">11-20 vendedores</option>
                        <option value="20+">Ms de 20 vendedores</option>
                    </select>
                </div>

                <button type="submit" class="cta-button form-submit">
                    ACTIVAR MI PRUEBA GRATIS
                </button>
            </form>
        </div>
    </div>
    <?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
    <?php include __DIR__ . '/../partials/layout/footer.php'; ?>

    <!-- Scripts al final para asegurar que el DOM esté cargado -->
    <script src="/crm/script.js"></script>