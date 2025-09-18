<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Productos Optris - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
    .site-navbar {
      background: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 1rem 0;
    }
    
    .site-navbar .navbar-brand img {
      height: 50px;
      width: auto;
    }
    
    .site-navbar .navbar-nav .nav-link {
      color: #6B3AA0;
      font-weight: 500;
      padding: 0.5rem 1.5rem;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
    }
    
    .site-navbar .navbar-nav .nav-link:hover {
      color: #4A2970;
    }
    
    .site-navbar .dropdown-menu {
      border: none;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      border-radius: 5px;
      padding: 0.5rem 0;
      margin-top: 0.5rem;
    }
    
    .site-navbar .dropdown-item {
      padding: 0.5rem 1.5rem;
      font-size: 0.9rem;
      color: #666;
      transition: all 0.3s ease;
    }
    
    .site-navbar .dropdown-item:hover {
      background: #f8f9fa;
      color: #6B3AA0;
      padding-left: 2rem;
    }
    
    .site-navbar .navbar-toggler {
      border: none;
      padding: 0.25rem 0.5rem;
    }
    
    .site-navbar .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    @media (max-width: 768px) {
      .site-navbar .navbar-nav {
        text-align: center;
        padding-top: 1rem;
      }
      
      .site-navbar .dropdown-menu {
        text-align: center;
        box-shadow: none;
        border-top: 1px solid #eee;
      }
    }
    
    .hero-section {
      position: relative;
      overflow: hidden;
      padding: 120px 0 80px;
      color: white;
      text-align: center;
    }
    
    .hero-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -2;
    }
    
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
    }
    
    .hero-section h1 {
      color: white;
      font-size: 3rem;
      font-weight: 300;
      letter-spacing: 2px;
      margin-bottom: 1rem;
      animation: fadeInUp 1s ease-out;
    }
    
    .hero-section p {
      font-size: 1.2rem;
      font-weight: 300;
      max-width: 600px;
      margin: 0 auto;
      animation: fadeInUp 1s ease-out 0.3s;
      animation-fill-mode: both;
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
    
    /* Image Slider Styles */
    .camera-slider-section {
      padding: 60px 0;
      background: #fff;
    }
    
    .slider-container {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
    }
    
    .slider-wrapper {
      position: relative;
      height: 400px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .slider-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
      height: 100%;
    }
    
    .slide {
      min-width: 100%;
      height: 100%;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8f9fa;
    }
    
    .slide img {
      max-width: 90%;
      max-height: 65%;
      object-fit: contain;
      border-radius: 5px;
    }
    
    .slide-caption {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(107, 58, 160, 0.9);
      color: white;
      padding: 12px 35px;
      border-radius: 25px;
      font-size: 1.2rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
      cursor: pointer;
    }
    
    .slide-caption:hover {
      background: rgba(74, 41, 112, 0.95);
      transform: translateX(-50%) translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      color: white;
      text-decoration: none;
      letter-spacing: 1px;
    }
    
    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(107, 58, 160, 0.8);
      color: white;
      border: none;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      font-size: 1.6rem;
      cursor: pointer;
      transition: all 0.3s ease;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    
    .slider-btn:hover {
      background: rgba(107, 58, 160, 1);
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
    
    .slider-btn-prev {
      left: 40px;
    }
    
    .slider-btn-next {
      right: 40px;
    }
    
    /* Screen reader only text */
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0,0,0,0);
      white-space: nowrap;
      border: 0;
    }
    
    .slider-dots {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
      margin-bottom: 10px;
    }
    
    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ddd;
      cursor: pointer;
      transition: all 0.3s ease;
      border: none;
      padding: 0;
      margin: 0;
    }
    
    .dot.active {
      background: #6B3AA0;
      transform: scale(1.2);
    }
    
    @media (max-width: 768px) {
      .slider-wrapper {
        height: 300px;
      }
      
      .slider-btn {
        width: 55px;
        height: 55px;
        font-size: 1.3rem;
      }
      
      .slider-btn-prev {
        left: 20px;
      }
      
      .slider-btn-next {
        right: 20px;
      }
      
      .slide-caption {
        font-size: 1rem;
        padding: 10px 25px;
      }
    }
    
    .products-section {
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
    
    .product-table-container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      padding: 30px;
      margin-bottom: 40px;
      overflow-x: auto;
    }
    
    .product-category-title {
      font-size: 1.8rem;
      font-weight: 600;
      color: #2563eb;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 3px solid #2563eb;
    }
    
    .product-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.9rem;
    }
    
    .product-table thead {
      background: #1e293b;
    }
    
    .product-table th {
      padding: 15px 10px;
      text-align: center;
      font-weight: 600;
      color: #ffffff;
      border: 1px solid #334155;
      font-size: 0.85rem;
      vertical-align: middle;
    }
    
    .product-table th:first-child,
    .product-table th:nth-child(2),
    .product-table th:nth-child(3) {
      text-align: left;
      background: #1e40af;
    }
    
    .product-table td {
      padding: 12px 10px;
      border: 1px solid #e2e8f0;
      text-align: center;
      vertical-align: middle;
    }
    
    .product-table td:first-child,
    .product-table td:nth-child(2),
    .product-table td:nth-child(3) {
      text-align: left;
      font-weight: 500;
    }
    
    .product-table .product-series {
      font-weight: 700;
      color: #1e293b;
      background: #e0e7ff;
    }
    
    .product-table .product-type {
      font-style: italic;
      color: #1e293b;
      padding-left: 20px;
      font-weight: 500;
    }
    
    .product-table .product-model {
      padding-left: 40px;
      color: #1e293b;
      font-weight: 500;
    }
    
    .product-table .check-mark {
      color: #059669;
      font-weight: bold;
      font-size: 1.1rem;
    }
    
    .industry-header {
      writing-mode: vertical-lr;
      text-orientation: mixed;
      padding: 10px 5px;
      min-height: 100px;
      font-size: 0.8rem;
    }
    
    @media (max-width: 1200px) {
      .product-table {
        font-size: 0.8rem;
      }
      
      .product-table th,
      .product-table td {
        padding: 8px 5px;
      }
      
      .industry-header {
        font-size: 0.7rem;
      }
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
      
      .product-table-container {
        padding: 15px;
      }
      
      .product-table {
        font-size: 0.7rem;
      }
    }
    
    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    
    .applications-section {
      padding: 80px 0;
      background: #f8f9fa;
    }
    
    .application-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      padding: 40px;
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    
    .application-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    
    .application-title {
      font-size: 1.5rem;
      font-weight: 500;
      color: #2563eb;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
    }
    
    .application-title i {
      margin-right: 15px;
      font-size: 1.8rem;
    }
    
    .application-content {
      margin-bottom: 20px;
    }
    
    .application-content h4 {
      font-size: 1.1rem;
      font-weight: 600;
      color: #333;
      margin-top: 20px;
      margin-bottom: 10px;
    }
    
    .application-content p {
      color: #666;
      line-height: 1.8;
      margin-bottom: 15px;
    }
    
    .equipment-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }
    
    .equipment-tag {
      background: #1e40af;
      color: #ffffff;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #1e40af;
      transition: all 0.3s ease;
    }
    
    .equipment-tag:hover {
      background: #1d4ed8;
      border-color: #1d4ed8;
      transform: translateY(-1px);
    }
    
    .note-box {
      background: #f0f7ff;
      border-left: 4px solid #2563eb;
      padding: 15px 20px;
      margin-top: 20px;
      border-radius: 5px;
    }
    
    .note-box p {
      margin: 0;
      color: #555;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    .intro-text {
      max-width: 1000px;
      margin: 0 auto 50px;
      text-align: center;
      color: #666;
      line-height: 1.8;
      font-size: 1.1rem;
    }
  </style>
</head>

<body>
 
  <section class="hero-section">
    <img src="images/camaras-optris.png" 
         alt="Cámaras infrarrojas Optris para medición térmica industrial" 
         class="hero-image"
         fetchpriority="high"
         loading="eager"
         decoding="async">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <h1>CAMARAS INFRAROJAS OPTRIS</h1>
      <p>Matriz completa de productos y aplicaciones industriales para soluciones de medición térmica de precisión</p>
    </div>
  </section>
  
  <!-- Image Slider Section -->
  <section class="camera-slider-section">
    <div class="container">
      <div class="slider-container">
        <div class="slider-wrapper">
          <div class="slider-track">
            <!-- Slide 1 -->
            <div class="slide" id="slide-0" role="tabpanel" aria-label="Imagen 1: Línea Compacta">
              <img src="images/camaras_infrarojas/OPTXI-mounted-frontview.webp" alt="Línea Compacta">
              <a href="compactline.php" class="slide-caption">Línea Compacta</a>
            </div>
            <!-- Slide 2 -->
            <div class="slide" id="slide-1" role="tabpanel" aria-label="Imagen 2: Línea Precisión">
              <img src="images/camaras_infrarojas/OPTPI640i_MO27T180_left-edit.webp" alt="Línea Precisión">
              <a href="precisionline.php" class="slide-caption">Línea Precisión</a>
            </div>
            <!-- Slide 3 -->
            <div class="slide" id="slide-2" role="tabpanel" aria-label="Imagen 3: Accesorios">
              <img src="images/camaras_infrarojas/ACPI4XXCJAEN-CoolingJacket-Advanced-frontview.webp" alt="Accesorios">
              <a href="accesorios.php" class="slide-caption">Accesorios</a>
            </div>
          </div>
        </div>
        <nav class="slider-navigation" aria-label="Navegación del carrusel de cámaras infrarrojas">
          <button class="slider-btn slider-btn-prev" 
                  onclick="moveSlide(-1)" 
                  aria-label="Ver imagen anterior de cámara infrarroja"
                  title="Imagen anterior - Cámaras infrarrojas Optris">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <span class="sr-only">Anterior</span>
          </button>
          <button class="slider-btn slider-btn-next" 
                  onclick="moveSlide(1)" 
                  aria-label="Ver siguiente imagen de cámara infrarroja"
                  title="Siguiente imagen - Cámaras infrarrojas Optris">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <span class="sr-only">Siguiente</span>
          </button>
        </nav>
        <nav class="slider-dots" role="tablist" aria-label="Indicadores de posición del carrusel"></nav>
      </div>
    </div>
  </section>
  
  <!-- Solution Overview Section -->
  <section class="applications-section">
    <div class="container">      
      <div class="row">
        <div class="col-12">
          
          <!-- Main Solution Overview -->
          
            <div class="section-header">
              <h2>Linea de Camaras Infrarojas Optris</h2>
            </div>
            <div class="intro-text">
              <p>Optris se especializa en cámaras infrarrojas de instalación fija para monitoreo de procesos industriales y aplicaciones de medición de temperatura en investigación y desarrollo. Las características de diseño optimizan las cámaras para medición precisa de temperatura y los procesos de calibración con instrumentos de precisión trazable proporcionan mediciones precisas en una variedad de entornos de temperatura ambiente. Al igual que con los pirómetros, un tamaño o respuesta espectral no sirve para todas las aplicaciones. La línea de cámaras IR incluye una amplia variedad de opciones de longitud de onda que brindan las mejores mediciones en una gama de materiales que incluyen vidrio, metal, plástico y fibra de carbono.</p>
              <p>Todas las cámaras Optris producen imágenes térmicas cuando se conectan a PC equipadas con nuestro software PIX Connect libre de licencia, que incluye una amplia variedad de funciones de medición, todas con capacidad de alarma para control de procesos. Algunas cámaras IR de la Serie XI están diseñadas para soportar operación autónoma (sin conexión a PC) admitiendo detección de puntos calientes y alarmas cuando no se requiere imagen térmica.</p>
              <p>La Línea de Precisión (Serie PI) puede calibrarse con una amplia variedad de ópticas desde microscópicas hasta teleobjetivo que pueden cambiarse en campo. La Serie Xi más asequible está disponible en una amplia variedad de opciones ópticas que se fijan en el punto de fabricación.</p>
              <p>Todas las cámaras IR Optris están respaldadas con una amplia variedad de accesorios que incluyen purga de aire, enfriamiento por agua y gabinetes para exteriores que las equipan para operar en una amplia gama de entornos desafiantes.</p>
            </div>
          
          
          <!-- Product Category Cards -->
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-microchip"></i>
              Línea Compacta
            </h3>
            <div class="application-content">
              <h4>Cámaras IR de búsqueda de puntos para aplicaciones OEM</h4>
              <p>¿Pirómetro o cámara IR? La serie Xi es una fusión de un pirómetro compacto y robusto con una cámara IR moderna. Gracias a las salidas analógicas y digitales, así como a la opción de procesar hasta nueve áreas de medición libremente definibles mediante una interfaz de proceso externa, la cámara Xi es perfectamente adecuada para OEM y una amplia variedad de aplicaciones de control de procesos y detección temprana de incendios.</p>
              <div class="equipment-tags">
                <span class="equipment-tag">Serie Xi</span>
                <span class="equipment-tag">Control de Procesos</span>
                <span class="equipment-tag">Detección de Incendios</span>
                <span class="equipment-tag">Aplicaciones OEM</span>
              </div>
              <div class="note-box">
                <p>Ideal para integración en sistemas industriales con opciones de salida analógica y digital</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-crosshairs"></i>
              Línea de Precisión
            </h3>
            <div class="application-content">
              <h4>Imágenes Térmicas de Alta Resolución para Aplicaciones Industriales y de Investigación Avanzadas</h4>
              <p>Para mediciones de temperatura de metales a alta temperatura, Optris ofrece tres cámaras IR "Serie M" que miden temperatura en longitudes de onda IR cortas y algunas que protegerán la cámara del uso con láseres. Para aplicaciones de vidrio, Optris ofrece cámaras "Serie G" con detectores filtrados optimizados para medición precisa de vidrio. Para microelectrónica, Optris ofrece un paquete de microscopio infrarrojo capaz de obtener imágenes de cambios de temperatura en un tamaño de punto de 8 µm.</p>
              <div class="equipment-tags">
                <span class="equipment-tag">Serie M - Metales</span>
                <span class="equipment-tag">Serie G - Vidrio</span>
                <span class="equipment-tag">Microscopio IR</span>
                <span class="equipment-tag">Alta Resolución</span>
              </div>
              <div class="note-box">
                <p>Ópticas intercambiables en campo para máxima flexibilidad en diferentes aplicaciones</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cog"></i>
              Accesorios para Cámaras IR
            </h3>
            <div class="application-content">
              <h4>Mejore su Cámara Térmica</h4>
              <p>Nuestra amplia gama de accesorios incluye carcasas protectoras, varios soportes de montaje y sistemas de enfriamiento avanzados, todos diseñados para garantizar un rendimiento robusto en condiciones ambientales peligrosas. Optimice sus capacidades de imagen térmica y proteja su equipo para mantener la confiabilidad y precisión en entornos industriales hostiles.</p>
              <div class="equipment-tags">
                <span class="equipment-tag">Carcasas Protectoras</span>
                <span class="equipment-tag">Soportes de Montaje</span>
                <span class="equipment-tag">Sistemas de Enfriamiento</span>
                <span class="equipment-tag">Protección Industrial</span>
              </div>
              <div class="note-box">
                <p>Accesorios diseñados para extender la vida útil de su equipo en ambientes industriales exigentes</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">      
      <div class="row">
        <div class="col-12">
          
          <!-- Cámaras Infrarrojas -->
          <div class="product-table-container">
        <h3 class="product-category-title">CÁMARAS INFRARROJAS</h3>
        <div class="table-responsive">
          <table class="product-table">
            <thead>
              <tr>
                <th width="15%">Serie</th>
                <th width="20%">Tipo</th>
                <th width="15%">Modelo</th>
                <th class="industry-header">Metal</th>
                <th class="industry-header">Vidrio</th>
                <th class="industry-header">Plásticos</th>
                <th class="industry-header">Automotriz</th>
                <th class="industry-header">Electrónicos</th>
                <th class="industry-header">Semiconductores</th>
                <th class="industry-header">Solar</th>
                <th class="industry-header">Monitoreo de Baterías</th>
                <th class="industry-header">Detección Temprana de Incendios y Seguridad</th>
                <th class="industry-header">Monitoreo de Condiciones</th>
                <th class="industry-header">Impresión 3D y Manufactura Aditiva</th>
                <th class="industry-header">Manufactura General</th>
                <th class="industry-header">Farmacéutica y Médica</th>
                <th class="industry-header">Alimentos</th>
              </tr>
            </thead>
            <tbody>
              <!-- Xi Series -->
              <tr class="product-series">
                <td colspan="3">Xi Series Compact Line</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type"></td>
                <td class="product-model">Xi 80 LT ETH</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 400 LT USB</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 410 LT ETH</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 640 LT USB</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 05M ETH</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 1M ETH</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- PI Series -->
              <tr class="product-series">
                <td colspan="3">PI Series Precision Line</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">Cámaras IR de longitud de onda larga</td>
                <td class="product-model">PI 400i</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 450i</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 640i</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">Cámaras IR de longitud de onda corta</td>
                <td class="product-model">PI 05M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 08M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 1M</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">Cámaras IR de banda estrecha</td>
                <td class="product-model">PI 450i G7</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 640i G7</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 640i Microscope optics</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">PI 640i Microscope optics with 2X Magnification</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">Xi 400 Microscope optics</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

          
        </div>
      </div>
    </div>
  </section>
  
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const sliderTrack = document.querySelector('.slider-track');
    const dotsContainer = document.querySelector('.slider-dots');
    
    // Create dots
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement('button');
      dot.classList.add('dot');
      dot.setAttribute('role', 'tab');
      dot.setAttribute('aria-label', `Ir a imagen ${i + 1} de ${totalSlides}`);
      dot.setAttribute('title', `Ver imagen ${i + 1} - Cámaras infrarrojas Optris`);
      dot.setAttribute('aria-controls', `slide-${i}`);
      if (i === 0) {
        dot.classList.add('active');
        dot.setAttribute('aria-selected', 'true');
      } else {
        dot.setAttribute('aria-selected', 'false');
      }
      dot.addEventListener('click', () => goToSlide(i));
      dotsContainer.appendChild(dot);
    }
    
    const dots = document.querySelectorAll('.dot');
    
    function updateSlider() {
      sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
      
      // Update dots
      dots.forEach((dot, index) => {
        if (index === currentSlide) {
          dot.classList.add('active');
          dot.setAttribute('aria-selected', 'true');
        } else {
          dot.classList.remove('active');
          dot.setAttribute('aria-selected', 'false');
        }
      });
    }
    
    function moveSlide(direction) {
      currentSlide += direction;
      
      if (currentSlide >= totalSlides) {
        currentSlide = 0;
      } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
      }
      
      updateSlider();
    }
    
    function goToSlide(slideIndex) {
      currentSlide = slideIndex;
      updateSlider();
    }
    
    // Auto-play slider
    let autoPlayInterval = setInterval(() => {
      moveSlide(1);
    }, 5000);
    
    // Pause auto-play on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
      clearInterval(autoPlayInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
      autoPlayInterval = setInterval(() => {
        moveSlide(1);
      }, 5000);
    });
    
    // Touch support for mobile
    let touchStartX = null;
    let touchEndX = null;
    
    sliderContainer.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });
    
    sliderContainer.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });
    
    function handleSwipe() {
      if (!touchStartX || !touchEndX) return;
      
      const swipeThreshold = 50;
      const diff = touchStartX - touchEndX;
      
      if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
          moveSlide(1); // Swipe left, go to next slide
        } else {
          moveSlide(-1); // Swipe right, go to previous slide
        }
      }
      
      touchStartX = null;
      touchEndX = null;
    }
  </script>
  
  </body>
</html>

<?php include('footer.php') ?>