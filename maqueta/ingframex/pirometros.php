<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Pirómetros - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
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
    
    .applications-section {
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
    
    .benefits-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .benefits-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
      color: #666;
      line-height: 1.6;
    }
    
    .benefits-list li:before {
      content: "✓";
      position: absolute;
      left: 0;
      color: #2563eb;
      font-weight: bold;
      font-size: 1.2rem;
    }
    
    .equipment-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }
    
    .equipment-tag {
      background: #e0e7ff;
      color: #2563eb;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 500;
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
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
    }
    
    /* Products Section */
    .products-section {
      background: #f8f9fa;
    }
    
    /* Product Table Styles */
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
    
    .product-table .dot-mark {
      color: #334155;
      font-size: 1.2rem;
      font-weight: bold;
    }
    
    .industry-header {
      writing-mode: vertical-lr;
      text-orientation: mixed;
      padding: 10px 5px;
      min-height: 100px;
      font-size: 0.8rem;
    }
    
    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
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
      .product-table-container {
        padding: 15px;
      }
      
      .product-table {
        font-size: 0.7rem;
      }
    }
    
    /* Image Slider Styles */
    .pyrometer-slider-section {
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
      max-height: 80%;
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
      padding: 10px 30px;
      border-radius: 25px;
      font-size: 1.2rem;
      font-weight: 500;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all 0.3s ease;
      border: 2px solid transparent;
      text-decoration: none;
      display: inline-block;
    }
    
    .slide-caption:hover {
      background: rgba(107, 58, 160, 1);
      transform: translateX(-50%) translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
      border: 2px solid white;
      color: white;
      text-decoration: none;
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
    }
    
    .dot.active {
      background: #6B3AA0;
      transform: scale(1.2);
    }
    
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
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
        padding: 8px 20px;
      }
    }
    
  </style>
</head>

<body>
 
  <section class="hero-section">
    <img src="images/pirometros.webp" 
         alt="Pirómetros Optris para medición remota de temperatura industrial" 
         class="hero-image"
         fetchpriority="high"
         loading="eager"
         decoding="async">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <h1>PIRÓMETROS OPTRIS</h1>
      <p>Termómetros infrarrojos y pirómetros para mediciones remotas de temperatura con precisión industrial</p>
    </div>
  </section>

  <!-- Image Slider Section -->
  <section class="pyrometer-slider-section">
    <div class="container">
      <div class="slider-container">
        <div class="slider-wrapper">
          <div class="slider-track">
            <!-- CS micro serie -->
            <div class="slide">
              <img src="images/pirometros/CS_micro_serie/CS_micro_serie.png" alt="CS micro serie">
              <a href="csmicro.php" class="slide-caption">Serie CS micro</a>
            </div>
            <!-- CSerie -->
            <div class="slide">
              <img src="images/pirometros/CSerie/CSserie.png" alt="CSerie">
              <a href="csseries.php" class="slide-caption">Serie CS</a>
            </div>
            <!-- CSlaser Series -->
            <div class="slide">
              <img src="images/pirometros/CSlaser_Series/CSlaser_Series.png" alt="CSlaser Series">
              <a href="cslaserseries.php" class="slide-caption">Serie CSlaser</a>
            </div>
            <!-- CSvideo Series -->
            <div class="slide">
              <img src="images/pirometros/CSvideo_Series/CSvideo_Series.png" alt="CSvideo Series">
              <a href="csvideoseries.php" class="slide-caption">Serie CSvideo</a>
            </div>
            <!-- CSvision Series -->
            <div class="slide">
              <img src="images/pirometros/CSvision_Series/CSvision_Series.png" alt="CSvision Series">
              <a href="csvisionseries.php" class="slide-caption">Serie CSvision</a>
            </div>
            <!-- CT series -->
            <div class="slide">
              <img src="images/pirometros/CT_series/CT_series.png" alt="CT series">
              <a href="ctseries.php" class="slide-caption">Serie CT</a>
            </div>
            <!-- CTlaser Series -->
            <div class="slide">
              <img src="images/pirometros/CTlaser_Series/CTlaser_Series.png" alt="CTlaser Series">
              <a href="ctlaserseries.php" class="slide-caption">Serie CTlaser</a>
            </div>
            <!-- CTratio Series -->
            <div class="slide">
              <img src="images/pirometros/CTratio_Series/CTratio_Series.png" alt="CTratio Series">
              <a href="ctratioseries.php" class="slide-caption">Serie CTratio</a>
            </div>
            <!-- CTvideo Series -->
            <div class="slide">
              <img src="images/pirometros/CTvideo_Series/CTvideo_Series.png" alt="CTvideo Series">
              <a href="ctvideoseries.php" class="slide-caption">Serie CTvideo</a>
            </div>
          </div>
        </div>
        <button class="slider-btn slider-btn-prev" onclick="moveSlide(-1)" aria-label="Ver pirómetro anterior" title="Navegar al pirómetro anterior">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <span class="sr-only">Anterior</span>
        </button>
        <button class="slider-btn slider-btn-next" onclick="moveSlide(1)" aria-label="Ver siguiente pirómetro" title="Navegar al siguiente pirómetro">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          <span class="sr-only">Siguiente</span>
        </button>
        <div class="slider-dots"></div>
      </div>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Línea de Pirómetros Optris</h2>
      </div>
      
      <div class="intro-text">
        <p>Los termómetros infrarrojos y pirómetros Optris para mediciones puntuales remotas son particularmente adecuados para el monitoreo preciso de temperatura de procesos de fabricación industrial, investigación y desarrollo, y verificaciones funcionales de una amplia gama de dispositivos y sistemas.</p>
        <p>En más de 20 años diseñando pirómetros infrarrojos, hemos desarrollado una variedad inigualable de tamaños, rangos de temperatura, respuestas espectrales y accesorios para abordar virtualmente cualquier requerimiento del cliente. La línea de productos incluye una amplia gama de opciones de respuesta espectral idealmente adaptadas para medir una gran variedad de materiales, incluyendo metales, plásticos, vidrio y muchos otros materiales.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-microchip"></i>
              Serie CS
            </h3>
            <div class="application-content">
              <h4>Pirómetro infrarrojo industrial compacto de una pieza</h4>
              <p>Comenzando desde 95 €, el CS LT marca el nivel de entrada para la pirometría infrarroja industrial. El amplio rango de medición de -50 °C a 1030 °C, combinado con una resolución de temperatura de 50 mK y una carcasa de acero inoxidable muy compacta, hace que este sensor sea ideal para uso OEM e instalaciones en maquinaria donde el tamaño pequeño es importante. El CS LT proporciona salidas analógicas y de alarma, un indicador LED inteligente y una interfaz USB para una fácil configuración e integración.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-compress"></i>
              Serie CSmicro
            </h3>
            <div class="application-content">
              <h4>Pirómetros infrarrojos industriales de tamaño micro de una pieza</h4>
              <p>Optris introduce nuevos estándares en tamaño de cabezal sensor y durabilidad para pirómetros industriales. Los cabezales sensores miniaturizados CS micro típicamente miden 14mm (ancho) x 28mm (longitud), haciéndolos perfectos para uso en ubicaciones de montaje pequeñas y estrechas. El tamaño pequeño y el precio asequible de los sensores infrarrojos de la Serie Compacta se utilizan a menudo como componentes en otros equipos que requieren información de temperatura para funcionar correctamente.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-thermometer-half"></i>
              Serie CT
            </h3>
            <div class="application-content">
              <h4>Pirómetros industriales robustos y asequibles para aplicaciones con altas temperaturas ambientales</h4>
              <p>Los pirómetros de dos piezas de la serie CT consisten en un cabezal sensor y una caja electrónica separada. Esta variante ofrece una configuración directa del dispositivo y muestra las lecturas de temperatura en un LED inteligente, pero también proporciona control del sensor y salidas adicionales a través de la caja electrónica. Esto incluye la capacidad de seleccionar entre varias interfaces como USB, RS232, RS485, Modbus RTU, Profibus DP y Ethernet.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-crosshairs"></i>
              Serie CSlaser
            </h3>
            <div class="application-content">
              <h4>Termómetros IR innovadores con mira láser doble y varias ópticas</h4>
              <p>Los pirómetros de la Serie de Alto Rendimiento CSlaser son ideales para entornos industriales hostiles. Diseñados con accesorios robustos de enfriamiento o purga de aire, aseguran la protección del sensor en condiciones difíciles. El CSlaser presenta una unidad de una pieza que incorpora láseres divergentes, simplificando la configuración al iluminar claramente el tamaño preciso y la ubicación del punto de medición.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-crosshairs"></i>
              Serie CTlaser
            </h3>
            <div class="application-content">
              <h4>Termómetros IR innovadores con mira láser doble y varias ópticas</h4>
              <p>Los pirómetros de la Serie de Alto Rendimiento CTlaser son perfectos para entornos industriales exigentes. Equipados con accesorios robustos de enfriamiento o purga de aire, proporcionan protección esencial para el sensor. El CTlaser separa el cabezal del sensor de una caja electrónica posicionada remotamente, que incluye una pantalla LED y controles de usuario. También se incluyen láseres divergentes, facilitando la localización exacta del tamaño y ubicación del punto de medición.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-video-camera"></i>
              Serie CSvideo
            </h3>
            <div class="application-content">
              <h4>Pirómetros de video con puntería láser para medición precisa de temperatura en áreas con acceso limitado</h4>
              <p>La alineación del sensor de nuestros dispositivos CSvideo se facilita mediante las características integradas de visualización de video y puntería láser cruzada. Además, la carcasa del sensor del cabezal CSvideo está construida en acero inoxidable (clasificación IP65/NEMA-4).</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-video-camera"></i>
              Serie CTvideo
            </h3>
            <div class="application-content">
              <h4>Pirómetros de video con puntería láser para medición precisa de temperatura en áreas con acceso limitado</h4>
              <p>La carcasa del sensor del cabezal CTvideo está fabricada en acero inoxidable con clasificación igual, mientras que la electrónica del sensor se encuentra en una caja separada de zinc fundido. CTvideo incluye una cámara a bordo que proporciona una imagen de video en tiempo real del objetivo y una superposición que muestra la ubicación precisa del punto de medición iluminado por láser, ambos visibles en el software Compact Connect o la aplicación IR Mobile.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-balance-scale"></i>
              Serie CTratio
            </h3>
            <div class="application-content">
              <h4>Pirómetros de fibra óptica (relación) para temperaturas extremadamente altas</h4>
              <p>Los pirómetros CTratio de Optris utilizan energía infrarroja medida con dos longitudes de onda para mejorar la precisión de medición de superficies metálicas de alta temperatura cuando el polvo en la trayectoria óptica o la acumulación de suciedad en las ventanas IR atenúan parcialmente la señal infrarroja. El cabezal sensor de fibra óptica soporta temperaturas de 200 °C y aumenta las opciones de montaje de la caja electrónica configurable separada con opciones de longitud de cable de hasta 15 metros.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-eye"></i>
              Serie CSvision
            </h3>
            <div class="application-content">
              <h4>Pirómetros de relación innovadores y alineación de video de alta calidad</h4>
              <p>La Serie CSvision combina una cámara visible y puntería láser con un sensor de relación capaz de medir objetivos metálicos de alta temperatura (hasta 3500 °C) a través de entornos polvorientos. La cámara a bordo y el innovador filtro de reducción de brillo (BRF) de dos pasos proporcionan imágenes perfectas incluso en objetos extremadamente brillantes. El enfoque motorizado admite mediciones desde una variedad de ubicaciones de montaje.</p>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cog"></i>
              Accesorios para termómetros infrarrojos y pirómetros
            </h3>
            <div class="application-content">
              <h4>Mejore sus termómetros IR con los accesorios de Optris para un rendimiento óptimo y funcionalidad extendida</h4>
              <p>Un sensor infrarrojo remoto debe soportar condiciones industriales hostiles, proporcionando mediciones precisas incluso en altas temperaturas o aire polvoriento. Los accesorios de enfriamiento y purga de aire ayudan a mantener el rendimiento. Las opciones de montaje versátiles, incluyendo soportes ajustables, montajes en paredes de hornos y tubos de observación, aseguran el posicionamiento adecuado y minimizan la interferencia ambiental, protegiendo la trayectoria óptica del sensor para una medición de temperatura confiable y precisa.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Pirómetros -->
  <section class="products-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product-table-container">
        <h3 class="product-category-title">PIRÓMETROS</h3>
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
              <!-- CS Series -->
              <tr class="product-series">
                <td colspan="3">CS Serie</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type"></td>
                <td class="product-model">CS LT</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="dot-mark">•</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              
              <!-- CSmicro Series -->
              <tr class="product-series">
                <td colspan="3">CSmicro Serie</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">Para aplicaciones generales</td>
                <td class="product-model">CSmicro LT</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CSmicro LTH</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CSmicro LT HS</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
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
              <tr>
                <td></td>
                <td class="product-type">Metales</td>
                <td class="product-model">CSmicro 2M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
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
                <td class="product-model">CSmicro 3M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- CT Series -->
              <tr class="product-series">
                <td colspan="3">CT Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CT para Bajas Temperaturas</td>
                <td class="product-model">CTi LThot</td>
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
                <td class="product-model">CTi LT</td>
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
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CT LT</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
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
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTex LT</td>
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
                <td class="product-model">CTfast LT</td>
                <td></td>
                <td></td>
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
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CThot LT</td>
                <td></td>
                <td></td>
                <td></td>
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
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CT para Metales</td>
                <td class="product-model">CT 1M</td>
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
                <td class="product-model">CT 2M</td>
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
                <td class="product-model">CT 3M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CT 4M</td>
                <td class="check-mark">✓</td>
                <td></td>
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
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CT para Vidrio</td>
                <td class="product-model">CT G5</td>
                <td></td>
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
                <td class="product-type">CT para Plásticos</td>
                <td class="product-model">CT P3</td>
                <td></td>
                <td></td>
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
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CT P7</td>
                <td></td>
                <td></td>
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
                <td></td>
              </tr>
              
              <!-- CTlaser Series -->
              <tr class="product-series">
                <td colspan="3">CTlaser Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTlaser para bajas temperaturas</td>
                <td class="product-model">CTlaser LT</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser Fast LT</td>
                <td></td>
                <td></td>
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
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTlaser para Metales</td>
                <td class="product-model">CTlaser 05M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser 1M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser 2M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser 3M</td>
                <td class="check-mark">✓</td>
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
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser 4M</td>
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
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTlaser para Llamas</td>
                <td class="product-model">CTlaser F2</td>
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
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser F6</td>
                <td class="check-mark">✓</td>
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
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser MT</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTlaser para Vidrio</td>
                <td class="product-model">CTlaser G5</td>
                <td></td>
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
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTlaser G7</td>
                <td></td>
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
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTlaser para Plásticos</td>
                <td class="product-model">CTlaser P7</td>
                <td></td>
                <td></td>
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
                <td></td>
              </tr>
              
              <!-- CSlaser Series -->
              <tr class="product-series">
                <td colspan="3">CSlaser Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CSlaser para bajas temperaturas</td>
                <td class="product-model">CSlaser LT</td>
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
                <td></td>
                <td class="check-mark">✓</td>
                <td class="check-mark">✓</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CSlaser hs LT</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CSlaser para Metales</td>
                <td class="product-model">CSlaser 2M</td>
                <td class="check-mark">✓</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- CSvideo Series -->
              <tr class="product-series">
                <td colspan="3">CSvideo Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CSvideo</td>
                <td class="product-model">CSvideo 2M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CSvideo 3M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- CTvideo Series -->
              <tr class="product-series">
                <td colspan="3">CTvideo Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTvideo</td>
                <td class="product-model">CTvideo 1M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTvideo 2M</td>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="product-model">CTvideo 3M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- CTratio Series -->
              <tr class="product-series">
                <td colspan="3">CTratio Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">CTratio para objetos pequeños, oscurecidos o en movimiento</td>
                <td class="product-model">CTratio 1M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
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
                <td class="product-model">CTratio 2M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              <!-- CSvision Series -->
              <tr class="product-series">
                <td colspan="3">CSvision Series</td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                <td></td>
                <td class="product-type">Pirómetros de relación innovadores con visor de video</td>
                <td class="product-model">CSvision R1M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
                <td></td>
                <td class="check-mark">✓</td>
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
                <td class="product-model">CSvision R2M</td>
                <td class="check-mark">✓</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="check-mark">✓</td>
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
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (i === 0) dot.classList.add('active');
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
        } else {
          dot.classList.remove('active');
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