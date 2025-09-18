<?php include('header2.php') ?>
    <style>
        .hero-slider {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        .slider-item {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        
        .slider-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
        
        .slider-item.active {
            opacity: 1;
        }
        
        .slider-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 2;
        }
        
        .hero-content {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        
        .hero-text {
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .hero-text h1 {
            color: white;
            font-size: 4rem;
            font-weight: 300;
            letter-spacing: 3px;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-text p {
            color: white;
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.3s;
            animation-fill-mode: both;
        }
        
        .hero-cta {
            animation: fadeInUp 1s ease-out 0.6s;
            animation-fill-mode: both;
        }
        
        .hero-cta a {
            display: inline-block;
            padding: 12px 30px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid #2563eb;
        }
        
        .hero-cta a:hover {
            background: transparent;
            color: white;
        }
        
        .slider-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        .site-navbar .navbar-nav .nav-link {
            color: #6B3AA0;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
            background: white;
        }
        
        .about-content {
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 2rem;
            font-weight: 300;
        }
        
        .about-text p:last-child {
            margin-bottom: 0;
        }
        
        /* Partners Section */
        .partners-section {
            margin: 0 auto;
            width: 90%;
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .section-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .partner-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            padding: 0;
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .partner-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2);
            border-color: #2563eb;
        }
        
        .partner-header {
            position: relative;
            padding: 30px 30px 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .partner-logo {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .partner-logo img {
            max-height: 100%;
            max-width: 180px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        .partner-card:hover .partner-logo img {
            transform: scale(1.1);
        }
        
        .partner-badge {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        
        .badge-premium,
        .badge-certified,
        .badge-authorized {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-premium {
            background: linear-gradient(135deg, #ffd700, #ffed4a);
            color: #8b5a00;
        }
        
        .badge-certified {
            background: linear-gradient(135deg, #10b981, #34d399);
            color: white;
        }
        
        .badge-authorized {
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            color: white;
        }
        
        .partner-content {
            padding: 0 30px 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .partner-content h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        .partner-tagline {
            font-size: 0.95rem;
            color: #2563eb;
            font-weight: 500;
            margin-bottom: 15px;
            font-style: italic;
        }
        
        .partner-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .partner-specialties {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .specialty-tag {
            background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
            color: #2563eb;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(37, 99, 235, 0.2);
        }
        
        .partner-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0 30px 30px;
        }
        
        /* Ensure cards are equal height in one line with proper spacing */
        .partners-section .row {
            display: flex;
            align-items: stretch;
            margin: 0 -15px;
        }
        
        .partners-section .col-12 {
            display: flex;
            padding: 0 15px;
            margin-bottom: 30px;
        }
        
        .partner-card {
            width: 100%;
        }
        
        .btn-modern {
            display: inline-block;
            padding: 10px 25px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .btn-primary-modern {
            background: #2563eb;
            color: white;
            border: 2px solid #2563eb;
        }
        
        .btn-primary-modern:hover {
            background: transparent;
            color: #2563eb;
        }
        
        .btn-outline-modern {
            background: transparent;
            color: #333;
            border: 2px solid #e0e0e0;
        }
        
        .btn-outline-modern:hover {
            border-color: #2563eb;
            color: #2563eb;
        }
        
        /* Solutions Section */
        .solutions-section {
            margin: 0 auto;
            width: 90%;
            padding: 80px 0;
            background: white;
        }
        
        .solutions-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .solutions-header h2 {
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .solutions-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .solution-card {
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .solution-icon {
            width: 60px;
            height: 60px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }
        
        .solution-icon i {
            font-size: 24px;
            color: white;
        }
        
        .solution-card:hover .solution-icon {
            background: #1d4ed8;
            transform: scale(1.1);
        }
        
        .solution-card h3 {
            font-size: 1.4rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 1rem;
            flex-shrink: 0;
            min-height: 2rem;
            display: flex;
            align-items: center;
        }
        
        .solution-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
        }
        
        .solution-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            color: #666;
            line-height: 1.8;
            text-align: left;
        }
        
        .solution-list li:before {
            content: "→";
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: bold;
        }
        
        /* Ensure solution cards are equal height in one line */
        .solutions-section .row {
            display: flex;
            align-items: stretch;
            justify-content: center;
            margin: 0 -15px;
        }
        
        .solutions-section .col-12 {
            display: flex;
            padding: 0 15px;
            margin-bottom: 30px;
        }
        
        .solution-card {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        /* Satisfaction Section */
        .satisfaction-section {
            margin: 0 auto;
            width: 90%;
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .satisfaction-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .satisfaction-header h2 {
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .satisfaction-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .satisfaction-metrics {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }
        
        .metric-item {
            text-align: center;
            padding: 20px;
            flex: 1;
            min-width: 200px;
        }
        
        .metric-value {
            font-size: 3.5rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 10px;
        }
        
        .metric-label {
            font-size: 1.1rem;
            color: #666;
            font-weight: 300;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            position: relative;
        }
        
        .testimonial-quote {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .testimonial-quote:before {
            content: """;
            font-size: 3rem;
            color: #2563eb;
            position: absolute;
            top: 10px;
            left: 20px;
            opacity: 0.3;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .author-avatar {
            width: 3rem;
            height: 3rem;
            border-radius: 40%;
            background: #e0e0e0;
            display: flex;
            flex-basis: 4rem;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 20px;
        }
        
        .author-info h4 {
            margin: 0;
            font-size: 1rem;
            color: #333;
            font-weight: 600;
        }
        
        .author-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
        }
        
        .rating-stars {
            color: #ffc107;
            margin-bottom: 15px;
        }
        
        .cta-satisfaction {
            text-align: center;
            margin-top: 40px;
        }
        
        .cta-satisfaction a {
            display: inline-block;
            padding: 15px 40px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: 2px solid #2563eb;
        }
        
        .cta-satisfaction a:hover {
            background: transparent;
            color: #2563eb;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .hero-text p {
                font-size: 1.1rem;
            }
            
            .about-section {
                padding: 60px 0;
            }
            
            .about-text p {
                font-size: 1rem;
            }
            
            .partners-section, .solutions-section, .satisfaction-section {
                padding: 60px 0;
            }
            
            .solution-card {
                margin-bottom: 40px;
            }
            
            .partner-card {
                margin-bottom: 30px;
            }
            
            .partner-header {
                padding: 20px 20px 15px;
            }
            
            .partner-content {
                padding: 0 20px 15px;
            }
            
            .partner-actions {
                padding: 0 20px 20px;
            }
            
            .specialty-tag {
                font-size: 0.7rem;
                padding: 3px 8px;
            }
            
            .satisfaction-metrics {
                flex-direction: column;
            }
            
            .metric-value {
                font-size: 2.5rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
    
    <section class="hero-slider">
        <div class="slider-item active">
            <img src="images/banner-2.webp" 
                 alt="Soluciones industriales de medición térmica INGFRAMEX" 
                 class="slider-image"
                 fetchpriority="high"
                 loading="eager"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="images/hero-1.webp" 
                 alt="Equipos de termografía industrial de precisión" 
                 class="slider-image"
                 fetchpriority="high"
                 loading="eager"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="images/hero-2.webp" 
                 alt="Tecnología avanzada para medición de temperatura" 
                 class="slider-image"
                 loading="lazy"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="images/hero-3.webp" 
                 alt="Instrumentos de medición para industria" 
                 class="slider-image"
                 loading="lazy"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="images/img_4.jpg" 
                 alt="Productos Optris - Cámaras infrarrojas y pirómetros" 
                 class="slider-image"
                 loading="lazy"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="images/banner-telea.webp" 
                 alt="Equipos Telea para análisis de combustión" 
                 class="slider-image"
                 loading="lazy"
                 decoding="async">
            <div class="slider-overlay"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text">
                <p>Tecnología, ingeniería y soluciones para la mejora de tu empresa</p>
                <div class="hero-cta">
                    <a href="#solutions">Descubre Nuestras Soluciones</a>
                </div>
            </div>
        </div>
        
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
    </section>
    
    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slider-item');
        const dots = document.querySelectorAll('.dot');
        
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }
        
        function nextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex);
        }
        
        function currentSlide(n) {
            currentSlideIndex = n - 1;
            showSlide(currentSlideIndex);
        }
        
        // Auto-advance slides
        setInterval(nextSlide, 5000);
    </script>
    
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                        <div class="section-header">
                            <h2>INGFRAMEX</h2>
                            <p>Líderes en soluciones industriales para medición y control</p>
                        </div>
                        
                        <div class="about-text">
                            <p>Somos una compañía comprometida en brindar soluciones a las necesidades de la industria en México. Mejoramos, controlamos y eficientamos tus procesos de producción para que logres una alta calidad en tus productos, un ahorro de costos y energía.</p>
                            
                            <p>Contribuimos a la mejora de los procesos de nuestros clientes mediante el suministro de tecnología, ingeniería y soluciones que sean de alta calidad y accesibles en medida de sus necesidades.</p>
                            
                            <p>Somos una de las empresas líderes en México para el desarrollo de soluciones para la eficiencia de procesos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="partners-section">
      <div class="container">
        <div class="section-header">
            <h2>Nuestros Socios</h2>
            <p>Trabajamos con las mejores marcas para ofrecerte soluciones de calidad</p>
        </div>
        
        <div class="row g-4">
          <div class="col-12 col-lg-4">
            <div class="partner-card">
              <div class="partner-header">
                <div class="partner-logo">
                  <img src="images/optris.svg" alt="Optris">  
                </div>
                <div class="partner-badge">
                </div>
              </div>
              <div class="partner-content">
                <h3>Optris</h3>
                <p class="partner-tagline">Tecnología infrarroja de precisión</p>
                <p>La mejor tecnología para la medición de temperatura sin contacto, cámaras y sensores fijos o portátiles. Líder mundial en termografía industrial.</p>
                <div class="partner-specialties">
                  <span class="specialty-tag">Cámaras Infrarrojas</span>
                  <span class="specialty-tag">Pirómetros</span>
                  <span class="specialty-tag">Termografía</span>
                </div>
              </div>
              <div class="partner-actions">
                <a href="https://www.optris.com/" target="_blank" class="btn-modern btn-outline-modern">Sitio Web</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <div class="partner-card">
              <div class="partner-header">
                <div class="partner-logo">
                  <img src="images/telea.png" alt="Telea">
                </div>
                <div class="partner-badge">
                </div>
              </div>
              <div class="partner-content">
                <h3>Telea</h3>
                <p class="partner-tagline">Sistemas de seguridad industrial</p>
                <p>Sistemas de seguridad y circuito cerrado para el monitoreo de tus procesos industriales. Soluciones avanzadas de videovigilancia y control.</p>
                <div class="partner-specialties">
                  <span class="specialty-tag">Videovigilancia</span>
                  <span class="specialty-tag">Seguridad Industrial</span>
                  <span class="specialty-tag">Monitoreo</span>
                </div>
              </div>
              <div class="partner-actions">
                <a href="http://www.telea.com/en/" target="_blank" class="btn-modern btn-outline-modern">Sitio Web</a>
              </div>
            </div> 
          </div>

          <div class="col-12 col-lg-4">
            <div class="partner-card">
              <div class="partner-header">
                <div class="partner-logo">
                  <img src="images/siemens.png" alt="Siemens">
                </div>
                <div class="partner-badge">
                </div>
              </div>
              <div class="partner-content">
                <h3>Siemens</h3>
                <p class="partner-tagline">Automatización y control industrial</p>
                <p>Innovación, velocidad, y flexibilidad, que ayudan a hacerte más competitivo y estar al frente de la evolución de la demanda del mercado.</p>
                <div class="partner-specialties">
                  <span class="specialty-tag">Instrumentación</span>
                  <span class="specialty-tag">Automatización</span>
                  <span class="specialty-tag">Control de Procesos</span>
                </div>
              </div>
              <div class="partner-actions">
                <a href="https://new.siemens.com/global/en/products/automation/process-instrumentation.html" target="_blank" class="btn-modern btn-outline-modern">Sitio Web</a>
              </div>
            </div> 
          </div>
        </div>

      </div>
    </section>
    
    <section class="solutions-section" id="solutions">
        <div class="container">
            <div class="solutions-header">
                <h2>Somos la solución para tu problema de medición</h2>
                <p>Ofrecemos tecnología de punta para optimizar tus procesos industriales</p>
            </div>
            
            <div class="row g-4">
                <div class="col-12 col-lg-3">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fa fa-thermometer"></i>
                        </div>
                        <h3>Temperatura</h3>
                        <ul class="solution-list">
                            <li>Medición de temperatura sin contacto tecnología infrarroja</li>
                            <li>Medición de temperatura de contacto</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fa fa-tint"></i>
                        </div>
                        <h3>Flujo</h3>
                        <ul class="solution-list">
                            <li>Transferencia de custodia</li>
                            <li>Dosificación</li>
                            <li>Descarga de agua</li>
                            <li>Control de combustión</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fa fa-level-up"></i>
                        </div>
                        <h3>Nivel</h3>
                        <ul class="solution-list">
                            <li>Control de inventarios</li>
                            <li>Procesos de producción</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <h3>Presión</h3>
                        <ul class="solution-list">
                            <li>Monitoreo de procesos</li>
                            <li>Seguridad de proceso</li>
                            <li>Control de calidad</li>
                            <li>Transferencias de custodia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="satisfaction-section">
        <div class="container">
            <div class="satisfaction-header">
                <h2>Satisfacción del Cliente</h2>
                <p>La confianza de nuestros clientes es nuestro mayor logro</p>
            </div>
            
            <div class="satisfaction-metrics">
                <div class="metric-item">
                    <div class="metric-value">98%</div>
                    <div class="metric-label">Clientes Satisfechos</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">15+</div>
                    <div class="metric-label">Años de Experiencia</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">500+</div>
                    <div class="metric-label">Proyectos Completados</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">24/7</div>
                    <div class="metric-label">Soporte Técnico</div>
                </div>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-quote">
                        "La implementación de las cámaras termográficas de Optris transformó completamente nuestro control de calidad. El equipo de INGFRAMEX nos brindó un soporte excepcional durante todo el proceso."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Juan Martínez</h4>
                            <p>Director de Producción - Industria Alimentaria</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-quote">
                        "Los sistemas de medición de flujo de Siemens nos permitieron optimizar nuestros procesos y reducir costos significativamente. La asesoría técnica fue fundamental para el éxito del proyecto."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>María González</h4>
                            <p>Gerente de Planta - Industria Química</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-quote">
                        "El sistema de videovigilancia industrial de Telea superó nuestras expectativas. Ahora tenemos un monitoreo completo de nuestras líneas de producción con la máxima calidad de imagen."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Roberto Sánchez</h4>
                            <p>Jefe de Mantenimiento - Industria Automotriz</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="cta-satisfaction">
                <a href="#contact">Únete a Nuestros Clientes Satisfechos</a>
            </div>
        </div>
    </section>

<?php include('footer.php') ?>
