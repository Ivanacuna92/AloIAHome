<?php
require_once __DIR__ . '/includes/config.php';
$activePage = 'home';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aloia - Tu equipo de ventas digital que nunca duerme</title>
    <link rel="icon" type="image/x-icon" href="<?= IMG_PATH ?>icono.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4372361492978841');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=4372361492978841&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <link rel="stylesheet" href="./assets/css/chatbot.css">
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
    <style>
        :root {
            --primary: #F04E59;
            --dark: #0A0A0A;
            --gray-900: #111111;
            --gray-800: #1F1F1F;
            --gray-700: #2D2D2D;
            --gray-600: #4D4D4D;
            --gray-500: #6D6D6D;
            --gray-400: #8D8D8D;
            --gray-300: #ADADAD;
            --gray-200: #CDCDCD;
            --gray-100: #E5E5E5;
            --gray-50: #F5F5F5;
            --white: #FFFFFF;
            --success: #10B981;
            --danger: #EF4444;
            --glow-color: #ae3a8d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--white);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--gray-100);
            z-index: 1000;
            padding: 20px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 32px;
        }

        .nav-cta {
            background: var(--dark);
            color: var(--white);
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .nav-cta:hover {
            background: var(--gray-900);
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero {
            padding: 140px 0 80px;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.2rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }

        .hero-content .highlight {
            color: var(--primary);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--gray-600);
            margin-bottom: 48px;
            font-weight: 400;
        }

        .hero-cta {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: #E03E49;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: var(--gray-50);
            color: var(--dark);
            border: 1px solid var(--gray-200);
        }

        .btn-secondary:hover {
            background: var(--gray-100);
            border-color: var(--gray-300);
        }

        .hero-video {
            position: relative;
            background: var(--gray-100);
            border-radius: 20px;
            aspect-ratio: 16/9;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .hero-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .video-placeholder i {
            font-size: 4rem;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        /* Problem Section */
        .problem-section {
            padding: 100px 0;
            background: #fd3244;
        }

        .section-header {
            text-align: center;
            margin-bottom: 64px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }

        .section-header p {
            font-size: 1.125rem;
            color: var(--gray-600);
            max-width: 600px;
            margin: 0 auto;
        }

        .problem-section .section-header h2,
        .problem-section .section-header p {
            color: var(--white);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .stat-card {
            background: var(--white);
            border-radius: 16px;
            padding: 32px;
            border: 1px solid var(--gray-100);
            transition: all 0.2s ease;
            box-shadow: 0 0 30px rgba(174, 58, 141, 0.3);
        }

        .stat-card:hover {
            border-color: var(--gray-200);
            transform: translateY(-4px);
            box-shadow: 0 0 40px rgba(174, 58, 141, 0.5);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            background: var(--gray-50);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .stat-value {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1;
        }

        .stat-label {
            color: var(--gray-600);
            font-size: 1rem;
            margin-bottom: 12px;
        }

        .stat-detail {
            font-size: 0.875rem;
            color: var(--gray-500);
        }

        /* Calculator Section */
        .calculator-section {
            padding: 100px 0;
            background: var(--white);
        }

        .calculator-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .calc-form {
            background: var(--gray-50);
            border-radius: 24px;
            padding: 48px;
            margin-bottom: 48px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        .calc-group {
            margin-bottom: 0;
        }

        .calc-group.full-width {
            grid-column: 1 / -1;
        }

        .calc-label {
            display: block;
            margin-bottom: 12px;
            font-weight: 500;
            color: var(--gray-900);
        }

        .calc-input {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid var(--gray-200);
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 500;
            background: var(--white);
            transition: all 0.2s ease;
        }

        .calc-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(240, 78, 89, 0.1);
        }

        .range-container {
            position: relative;
        }

        .range-value {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: 600;
            color: var(--primary);
        }

        input[type="range"] {
            width: 100%;
            height: 8px;
            background: var(--gray-200);
            border-radius: 4px;
            outline: none;
            -webkit-appearance: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            cursor: pointer;
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .result-card {
            text-align: center;
            padding: 24px;
            background: var(--white);
            border-radius: 16px;
            border: 1px solid var(--gray-100);
        }

        .result-card.highlight {
            border-color: var(--danger);
            background: #FEF2F2;
        }

        .result-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            margin-bottom: 8px;
        }

        .result-value {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark);
        }

        .result-card.highlight .result-value {
            color: var(--danger);
        }

        .daily-loss {
            background: var(--dark);
            color: var(--white);
            padding: 24px;
            border-radius: 16px;
            text-align: center;
            margin-bottom: 32px;
        }

        .daily-loss-text {
            font-size: 1.125rem;
        }

        .daily-loss-amount {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
        }

        /* Modules Section */
        .modules-section {
            padding: 100px 0;
            background: var(--gray-50);
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 24px;
            margin-top: 64px;
        }

        .module-card {
            background: var(--white);
            border-radius: 20px;
            padding: 32px 24px;
            text-align: center;
            border: 1px solid var(--gray-100);
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .module-card:hover {
            border-color: var(--primary);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .module-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .module-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .module-name {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--dark);
        }

        .module-description {
            font-size: 0.875rem;
            color: var(--gray-600);
            line-height: 1.5;
        }

        /* Cases Section */
        .cases-section {
            padding: 100px 0;
            background: var(--white);
        }

        .case-card {
            background: var(--gray-50);
            border-radius: 24px;
            padding: 48px;
            max-width: 800px;
            margin: 0 auto;
        }

        .case-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .case-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .case-subtitle {
            color: var(--gray-600);
        }

        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-bottom: 48px;
        }

        .metric-item {
            text-align: center;
        }

        .metric-label {
            font-size: 0.875rem;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 16px;
        }

        .metric-change {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .metric-before {
            color: var(--gray-600);
            font-size: 1.25rem;
        }

        .metric-arrow {
            color: var(--primary);
        }

        .metric-after {
            color: var(--success);
            font-size: 1.25rem;
            font-weight: 600;
        }

        .case-result {
            background: var(--dark);
            color: var(--white);
            padding: 32px;
            border-radius: 16px;
            text-align: center;
        }

        .case-result-label {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 8px;
        }

        .case-result-value {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
        }

        /* Investment Section */
        .investment-section {
            padding: 100px 0;
            background: var(--gray-50);
        }

        .investment-comparison {
            max-width: 800px;
            margin: 64px auto;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 48px;
            align-items: center;
        }

        .comparison-card {
            text-align: center;
            padding: 48px 32px;
            border-radius: 24px;
            background: var(--white);
            border: 2px solid var(--gray-100);
        }

        .comparison-card.loss {
            border-color: #FCA5A5;
            background: #FEF2F2;
        }

        .comparison-card.investment {
            border-color: #86EFAC;
            background: #F0FDF4;
        }

        .comparison-label {
            font-size: 1rem;
            color: var(--gray-600);
            margin-bottom: 16px;
        }

        .comparison-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .comparison-card.loss .comparison-value {
            color: var(--danger);
        }

        .comparison-card.investment .comparison-value {
            color: var(--success);
        }

        .comparison-detail {
            font-size: 0.875rem;
            color: var(--gray-500);
        }

        .vs-divider {
            font-size: 1.5rem;
            color: var(--gray-400);
            font-weight: 500;
        }

        .roi-message {
            text-align: center;
            font-size: 1.25rem;
            color: var(--gray-700);
        }

        .roi-message strong {
            color: var(--primary);
            font-weight: 600;
        }

        /* Pilot Section */
        .pilot-section {
            padding: 100px 0;
            background: var(--dark);
            color: var(--white);
        }

        .pilot-section .section-header h2 {
            color: var(--white);
        }

        .pilot-section .section-header p {
            color: var(--gray-400);
        }

        .pilot-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 48px;
            margin: 64px 0;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .pilot-feature {
            text-align: center;
        }

        .pilot-icon {
            width: 64px;
            height: 64px;
            background: rgba(240, 78, 89, 0.1);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--primary);
            font-size: 1.75rem;
        }

        .pilot-feature h4 {
            font-size: 1.25rem;
            margin-bottom: 8px;
        }

        .pilot-feature p {
            color: var(--gray-400);
        }

        .guarantee {
            background: rgba(240, 78, 89, 0.1);
            border: 1px solid rgba(240, 78, 89, 0.3);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            max-width: 600px;
            margin: 64px auto 0;
        }

        .guarantee h3 {
            color: var(--primary);
            margin-bottom: 16px;
            font-size: 1.5rem;
        }

        .guarantee p {
            color: var(--gray-300);
            line-height: 1.7;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: var(--white);
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }

        .cta-section p {
            font-size: 1.25rem;
            color: var(--gray-600);
            margin-bottom: 48px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .urgency {
            margin-top: 32px;
            color: var(--primary);
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: var(--gray-900);
            color: var(--gray-400);
            padding: 48px 0;
            text-align: center;
        }

        .footer-logo {
            height: 32px;
            margin-bottom: 24px;
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .modules-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 48px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-video {
                aspect-ratio: 16/9;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .modules-grid {
                grid-template-columns: 1fr;
            }

            .module-card {
                padding: 24px;
            }

            .module-icon {
                width: 100px;
                height: 100px;
                margin-bottom: 20px;
            }

            .calc-form {
                grid-template-columns: 1fr;
                padding: 32px 24px;
                gap: 24px;
            }

            .results-grid,
            .metrics-grid,
            .pilot-features {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .investment-comparison {
                grid-template-columns: 1fr;
            }

            .vs-divider {
                transform: rotate(90deg);
                margin: 24px 0;
                display: none;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .section-header p {
                font-size: 1rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .hero-cta {
                flex-direction: column;
                gap: 12px;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .nav-cta {
                font-size: 0.875rem;
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 1.75rem;
            }

            .stat-card {
                padding: 24px;
            }

            .stat-value {
                font-size: 2rem;
            }

            .comparison-value {
                font-size: 2rem;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="nav-container">
                <div class="logo">
                    <img src="https://aloia.ai/assets/img/aloia-color.png" alt="Aloia">
                </div>
                <a href="#diagnostico" class="nav-cta">Agenda tu diagnóstico</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1>Tu equipo de ventas pierde <span class="highlight">70% de leads</span> por responder tarde</h1>
                    <p class="hero-subtitle">
                        Cada día sin Aloia es dinero que se va directo a tu competencia.
                    </p>

                    <div class="hero-cta">
                        <a href="#calculadora" class="btn btn-primary">
                            <i class="fas fa-calculator"></i>
                            Calcula tu pérdida real
                        </a>
                        <a href="#solucion" class="btn btn-secondary">
                            Ver cómo funciona
                        </a>
                    </div>
                </div>

                <div class="hero-video">
                    <video controls autoplay muted loop>
                        <source src="videoframework.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento video.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>El problema que no puedes seguir ignorando</h2>
                <p>Mientras lees esto, tus leads están comprando con quien responde primero</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <p class="stat-value">78%</p>
                    <p class="stat-label">compran al primero que responde</p>
                    <p class="stat-detail">InsideSales Research</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-hourglass-half"></i>
                    </div>
                    <p class="stat-value">2-4 hrs</p>
                    <p class="stat-label">Tiempo promedio de respuesta</p>
                    <p class="stat-detail">En México</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <p class="stat-value">35-50%</p>
                    <p class="stat-label">Leads fuera de horario</p>
                    <p class="stat-detail">Noches y fines de semana</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-user-slash"></i>
                    </div>
                    <p class="stat-value">20 leads</p>
                    <p class="stat-label">Máximo por vendedor al día</p>
                    <p class="stat-detail">Capacidad humana limitada</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section id="calculadora" class="calculator-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>¿Cuánto ests perdiendo realmente?</h2>
                <p>Diagnóstico personalizado en 30 segundos</p>
            </div>

            <div class="calculator-container">
                <div class="calc-form">
                    <div class="calc-group">
                        <label class="calc-label">¿Cuántos leads recibes al mes?</label>
                        <input type="number" id="leads" class="calc-input" value="100" min="10" max="10000">
                    </div>

                    <div class="calc-group">
                        <label class="calc-label">¿Cuál es tu ticket promedio?</label>
                        <input type="number" id="ticket" class="calc-input" value="15000" min="1000" max="1000000">
                    </div>

                    <div class="calc-group full-width">
                        <label class="calc-label">Qué porcentaje logras atender?</label>
                        <div class="range-container">
                            <input type="range" id="attended" value="30" min="10" max="90" step="5">
                            <span class="range-value" id="attendedValue">30%</span>
                        </div>
                    </div>
                </div>

                <div class="results-grid">
                    <div class="result-card">
                        <p class="result-label">Leads perdidos</p>
                        <p class="result-value" id="lostLeads">70</p>
                    </div>

                    <div class="result-card">
                        <p class="result-label">Ventas perdidas</p>
                        <p class="result-value" id="lostSales">14</p>
                    </div>

                    <div class="result-card highlight">
                        <p class="result-label">Pérdida mensual</p>
                        <p class="result-value" id="monthlyLoss">$210,000</p>
                    </div>
                </div>

                <div class="daily-loss">
                    <p class="daily-loss-text">
                        Cada día sin solución pierdes
                        <span class="daily-loss-amount" id="dailyLoss">$7,000 MXN</span>
                    </p>
                </div>

                <div style="text-align: center;">
                    <a href="#diagnostico" class="btn btn-primary">
                        Quiero recuperar ese dinero
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modules Section -->
    <section id="solucion" class="modules-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>Tu equipo de ventas digital completo</h2>
                <p>5 módulos que trabajan 24/7 para que no pierdas ni un lead más</p>
            </div>

            <div class="modules-grid">
                <div class="module-card">
                    <div class="module-icon">
                        <img src="assets/img/1.png" alt="Conexión con Anuncios">
                    </div>
                    <h3 class="module-name">Conexión con Anuncios</h3>
                    <p class="module-description">
                        Captura automtica desde Facebook, Instagram y Google. 0% de leads perdidos.
                    </p>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <img src="assets/img/crm.png" alt="Aloia CRM">
                    </div>
                    <h3 class="module-name">Aloia CRM</h3>
                    <p class="module-description">
                        Pipeline visual que organiza y prioriza tus oportunidades automáticamente.
                    </p>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <img src="assets/img/leads.png" alt="Aloia Leads">
                    </div>
                    <h3 class="module-name">Aloia Leads</h3>
                    <p class="module-description">
                        Califica y distribuye leads en segundos. Solo hablas con los que valen la pena.
                    </p>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <img src="assets/img/chatbot.png" alt="Aloia Chatbot">
                    </div>
                    <h3 class="module-name">Aloia Chatbot</h3>
                    <p class="module-description">
                        Responde en WhatsApp y Web en <30 segundos. Agenda citas sin intervención humana.
                            </p>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <img src="assets/img/voicebot.png" alt="Aloia Voicebot">
                    </div>
                    <h3 class="module-name">Aloia Voicebot</h3>
                    <p class="module-description">
                        Llamadas de seguimiento automáticas. Tu vendedor telefónico que nunca descansa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cases Section -->
    <section class="cases-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>Resultados que hablan por sí solos</h2>
                <p>Casos reales de empresas mexicanas como la tuya</p>
            </div>

            <div class="case-card">
                <div class="case-header">
                    <h3 class="case-title">Empresa B2B - Servicios</h3>
                    <p class="case-subtitle">100 leads mensuales • Ticket $15,000 MXN</p>
                </div>

                <div class="metrics-grid">
                    <div class="metric-item">
                        <p class="metric-label">Leads atendidos</p>
                        <div class="metric-change">
                            <span class="metric-before">40</span>
                            <span class="metric-arrow">→</span>
                            <span class="metric-after">85</span>
                        </div>
                    </div>

                    <div class="metric-item">
                        <p class="metric-label">Conversión a venta</p>
                        <div class="metric-change">
                            <span class="metric-before">8</span>
                            <span class="metric-arrow">→</span>
                            <span class="metric-after">17</span>
                        </div>
                    </div>

                    <div class="metric-item">
                        <p class="metric-label">Tiempo respuesta</p>
                        <div class="metric-change">
                            <span class="metric-before">2-4h</span>
                            <span class="metric-arrow">→</span>
                            <span class="metric-after">
                                <1min< /span>
                        </div>
                    </div>
                </div>

                <div class="case-result">
                    <p class="case-result-label">Incremento en ventas</p>
                    <p class="case-result-value">+112%</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Section -->
    <section class="investment-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>¿Es caro? Hagamos nmeros</h2>
                <p>La pregunta no es si puedes pagarlo, sino si puedes seguir perdiendo</p>
            </div>

            <div class="investment-comparison">
                <div class="comparison-card loss">
                    <p class="comparison-label">Tu prdida mensual</p>
                    <p class="comparison-value" id="monthlyLossComparison">$210,000</p>
                    <p class="comparison-detail">En leads no atendidos</p>
                </div>

                <div class="vs-divider">vs</div>

                <div class="comparison-card investment">
                    <p class="comparison-label">Inversin en Aloia</p>
                    <p class="comparison-value">$9,998</p>
                    <p class="comparison-detail">Todo incluido</p>
                </div>
            </div>

            <p class="roi-message">
                Recuperas <strong id="roiAmount">$200,002 MXN</strong> desde el primer mes
            </p>
        </div>
    </section>

    <!-- Pilot Section -->
    <section class="pilot-section fade-in">
        <div class="container">
            <div class="section-header">
                <h2>Prueba sin riesgo por 30 días</h2>
                <p>Implementamos, medimos y si no funciona, te devolvemos todo</p>
            </div>

            <div class="pilot-features">
                <div class="pilot-feature">
                    <div class="pilot-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4>5-10 días</h4>
                    <p>Implementación completa</p>
                </div>

                <div class="pilot-feature">
                    <div class="pilot-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Leads reales</h4>
                    <p>Prueba con tu operación actual</p>
                </div>

                <div class="pilot-feature">
                    <div class="pilot-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Garantía 100%</h4>
                    <p>Si no cumple, devolvemos todo</p>
                </div>
            </div>

            <div class="guarantee">
                <h3>Nuestra garanta</h3>
                <p>
                    Si en 30 días no reduces tu tiempo de respuesta al menos 50%
                    y no aumentas tus leads calificados, te devolvemos cada peso.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="diagnostico" class="cta-section fade-in">
        <div class="container">
            <h2>El momento es ahora</h2>
            <p>Cada día que pasa es dinero que no volver</p>

            <div class="cta-buttons">
                <a href="https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GxALmH86udlyR4JeKPAYW5M7x21pRm4vWF0xk5TaB_81ZhD6Wo8xgTYrJ5riKppAVA8Z2P87t" class="btn btn-primary" style="font-size: 1.1rem; padding: 16px 32px;">
                    <i class="fas fa-calendar"></i>
                    Agenda tu diagnstico gratuito
                </a>
                <a href="https://api.whatsapp.com/send?phone=+525532220893&text=Luis%2C%20quiero%20platicar%20contigo%20sobre%20Aloia%20Framework." class="btn btn-secondary" style="font-size: 1.1rem; padding: 16px 32px;">
                    <i class="fab fa-whatsapp"></i>
                    Mensaje directo
                </a>
            </div>

            <p class="urgency">Solo 5 espacios disponibles cada mes.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <img src="https://aloia.ai/assets/img/aloia.png" alt="Aloia" class="footer-logo">
            <p>© 2024 Aloia. Todos los derechos reservados.</p>
        </div>
    </footer>


    <script>
        // Calculator
        function updateCalculations() {
            const leads = parseInt(document.getElementById('leads').value);
            const ticket = parseInt(document.getElementById('ticket').value);
            const attended = parseInt(document.getElementById('attended').value);

            document.getElementById('attendedValue').textContent = attended + '%';

            const lostLeads = Math.round(leads * (1 - attended / 100));
            const lostSales = Math.round(lostLeads * 0.20);
            const monthlyLoss = lostSales * ticket;
            const dailyLoss = Math.round(monthlyLoss / 30);

            document.getElementById('lostLeads').textContent = lostLeads;
            document.getElementById('lostSales').textContent = lostSales;
            document.getElementById('monthlyLoss').textContent = '$' + monthlyLoss.toLocaleString('es-MX');
            document.getElementById('dailyLoss').textContent = '$' + dailyLoss.toLocaleString('es-MX') + ' MXN';

            // Update investment comparison section
            document.getElementById('monthlyLossComparison').textContent = '$' + monthlyLoss.toLocaleString('es-MX');
            const roiAmount = monthlyLoss - 9998;
            document.getElementById('roiAmount').textContent = '$' + roiAmount.toLocaleString('es-MX') + ' MXN';
        }

        document.getElementById('leads').addEventListener('input', updateCalculations);
        document.getElementById('ticket').addEventListener('input', updateCalculations);
        document.getElementById('attended').addEventListener('input', updateCalculations);

        updateCalculations();

        // Scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    <script src="./crm/script.js"></script>
    <?php include __DIR__ . '/partials/layout/chatwidget.php'; ?>
</body>

</html>