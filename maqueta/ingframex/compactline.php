<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Línea Compacta - Cámaras Infrarrojas - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Línea Compacta Optris - Cámaras infrarrojas industriales compactas con capacidades autónomas, interfaces Ethernet y USB para aplicaciones OEM e industriales.">
  <meta name="keywords" content="Xi 80, Xi 400, Xi 410, Xi 640, Xi 05M, Xi 1M, cámaras infrarrojas, Optris, termografía, industrial">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/camaras/x1400-lt-usb.webp');
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f8f9fa;
      padding: 120px 0 80px;
      color: white;
      text-align: center;
    }
    
    .hero-section h1 {
      color: white;
      font-size: 3rem;
      font-weight: 300;
      letter-spacing: 2px;
      margin-bottom: 1rem;
      animation: fadeInUp 1s ease-out;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }
    
    .hero-section p {
      font-size: 1.2rem;
      font-weight: 300;
      max-width: 700px;
      margin: 0 auto;
      animation: fadeInUp 1s ease-out 0.3s;
      animation-fill-mode: both;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
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
    
    .products-section {
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
    
    .category-header {
      text-align: left;
      margin-bottom: 40px;
      margin-top: 60px;
    }
    
    .category-header:first-of-type {
      margin-top: 0;
    }
    
    .category-header h3 {
      font-size: 2rem;
      font-weight: 400;
      color: #2563eb;
      margin-bottom: 0.5rem;
      border-bottom: 3px solid #2563eb;
      padding-bottom: 10px;
      display: inline-block;
    }
    
    .category-header p {
      color: #666;
      font-size: 1.1rem;
      margin-top: 15px;
    }
    
    .product-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      margin-bottom: 40px;
      overflow: hidden;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    
    .product-image {
      width: 40%;
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f8f9fa;
      min-height: 300px;
    }
    
    .product-content {
      width: 60%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .product-content h4 {
      font-size: 1.6rem;
      font-weight: 600;
      color: #2563eb;
      margin-bottom: 8px;
      line-height: 1.3;
    }
    
    .product-tagline {
      font-size: 1rem;
      font-style: italic;
      color: #666;
      margin-bottom: 15px;
      font-weight: 400;
    }
    
    .product-content p {
      color: #555;
      line-height: 1.7;
      margin-bottom: 20px;
      font-size: 0.95rem;
    }
    
    .specifications {
      background: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .specifications h5 {
      font-size: 1rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 10px;
    }
    
    .spec-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 8px;
    }
    
    .spec-item {
      display: flex;
      align-items: center;
      font-size: 0.85rem;
      color: #666;
    }
    
    .spec-item i {
      color: #2563eb;
      width: 16px;
      margin-right: 8px;
    }
    
    .materials {
      margin-top: 15px;
    }
    
    .materials h5 {
      font-size: 0.9rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 8px;
    }
    
    .material-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
    }
    
    .material-tag {
      background: #e0e7ff;
      color: #2563eb;
      padding: 4px 10px;
      border-radius: 12px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .product-row {
      display: flex;
      align-items: stretch;
      min-height: 300px;
    }
    
    .new-badge {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #ef4444;
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.85rem;
      text-transform: uppercase;
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2.2rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
      
      .product-row {
        flex-direction: column;
      }
      
      .product-image {
        width: 100%;
        height: 200px;
      }
      
      .product-content {
        width: 100%;
        padding: 20px;
      }
      
      .spec-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
 
  <section class="hero-section">
    <div class="container">
      <h1>LÍNEA COMPACTA OPTRIS</h1>
      <p>Cámaras infrarrojas industriales compactas con capacidades autónomas avanzadas. Diseño robusto y resistente para integración OEM y aplicaciones industriales exigentes.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Cámaras Infrarrojas Línea Compacta</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- Xi 80 LT ETH -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/xi80-lt-eth.webp');"></div>
              <div class="product-content">
                <h4>Xi 80 LT ETH</h4>
                <p class="product-tagline">Cámara infrarroja autónoma compacta industrial para búsqueda de puntos calientes</p>
                <p>La industrial Optris Xi 80 combina los beneficios de las cámaras infrarrojas y los pirómetros. Sus capacidades de auto-apuntado y su superior relación distancia-tamaño de punto facilitan el posicionamiento y monitoreo de puntos calientes en movimiento. El modo autónomo integrado procesa y comunica automáticamente las temperaturas sin necesidad de una computadora externa adicional. El precio accesible de esta unidad la convierte en una opción óptima para aplicaciones OEM.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 900 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>80 × 80 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>50 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>Ethernet</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-microchip"></i>
                      <span>Autónoma</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Metales Reflectivos</span>
                    <span class="material-tag">Semiconductores</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Xi 400 LT USB -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/x1400-lt-usb.webp');"></div>
              <div class="product-content">
                <h4>Xi 400 LT USB</h4>
                <p class="product-tagline">Cámara infrarroja USB industrial compacta</p>
                <p>La compacta industrial Optris Xi 400 es una cámara IR avanzada basada en USB. La alta frecuencia de cuadro de 80 Hz permite el monitoreo de procesos térmicos rápidos. La cámara infrarroja tiene una resolución óptica de 382 x 288 píxeles y una alta relación distancia-tamaño de punto de hasta 390:1. Debido a su diseño compacto y precio accesible, la Optris Xi400 es idealmente adecuada para aplicaciones OEM.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 1500 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>382 × 288 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>80 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>USB</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Metales Reflectivos</span>
                    <span class="material-tag">Semiconductores</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Xi 410 LT ETH -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/xi410-lt-eth.webp');"></div>
              <div class="product-content">
                <h4>Xi 410 LT ETH</h4>
                <p class="product-tagline">Cámara infrarroja Ethernet autónoma industrial compacta</p>
                <p>La Optris Xi 410 es una cámara infrarroja Ethernet diseñada para imágenes térmicas precisas sin contacto en entornos industriales, que puede alimentarse a través de PoE. Cuenta con una función de enfoque motorizado, amplios rangos de temperatura y compatibilidad con sistemas de comunicación industrial. Gracias al modo autónomo independiente, la Xi410 establece un nuevo estándar para imágenes infrarrojas de instalación fija. El acceso a funcionalidades de software avanzadas y accesorios la hace ideal para control de calidad, monitoreo de condiciones y actividades de investigación.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 1500 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>384 × 240 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>25 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>Ethernet</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-microchip"></i>
                      <span>Autónoma</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Plásticos</span>
                    <span class="material-tag">Polímeros</span>
                    <span class="material-tag">Materiales Compuestos</span>
                    <span class="material-tag">Materiales Orgánicos</span>
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Xi 640 LT USB -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/xi640-lt-usb.webp');"></div>
              <div class="product-content">
                <h4>Xi 640 LT USB</h4>
                <p class="product-tagline">Cámara infrarroja VGA USB industrial compacta de alta resolución</p>
                <p>La compacta industrial Optris Xi 640 es una cámara IR avanzada basada en USB y tiene una resolución óptica de 640 x 480 píxeles. La Optris Xi 640 se conecta a computadoras a una frecuencia de cuadro de 32 Hz. Esta cámara de vanguardia está diseñada para capturar datos de medición para análisis precisos de temperatura superficial en entornos industriales. La cámara térmica Xi 640 incorpora un diseño compacto, impermeable y robusto, ideal para entornos industriales exigentes.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 900 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>640 × 480 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>32 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>USB</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Plásticos</span>
                    <span class="material-tag">Polímeros</span>
                    <span class="material-tag">Materiales Compuestos</span>
                    <span class="material-tag">Materiales Orgánicos</span>
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Xi 05M ETH -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/xi05m-eth.webp');"></div>
              <div class="product-content">
                <h4>Xi 05M ETH</h4>
                <p class="product-tagline">Cámara infrarroja industrial compacta de longitud de onda corta para metales fundidos, acero, cerámicas</p>
                <p>La Optris Xi 05M MeltScope, una cámara infrarroja de longitud de onda corta, sobresale en imágenes térmicas sin contacto de objetos desafiantes. Mide con precisión las temperaturas superficiales de metales calientes o cerámicas. Con una capacidad de medición térmica autónoma y enfoque motorizado, ofrece confiabilidad y facilidad en entornos industriales sin hardware adicional. Con interfaces Ethernet, USB e interfaces de proceso analógicas y digitales, permite una integración perfecta en sistemas de control y maquinaria.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>950 – 2450 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>396 × 300 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>20 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>Ethernet</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-microchip"></i>
                      <span>Autónoma</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="new-badge">Nuevo</div>
          </div>
          
          <!-- Xi 1M ETH -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/xi1m-eth.webp');"></div>
              <div class="product-content">
                <h4>Xi 1M ETH</h4>
                <p class="product-tagline">Cámara infrarroja de longitud de onda corta para industria de metales, acero, cerámicas, semiconductores</p>
                <p>La Optris Xi 1M, una cámara infrarroja de longitud de onda corta, sobresale en imágenes térmicas sin contacto de objetos desafiantes. Mide con precisión las temperaturas superficiales de metales calientes, cerámicas y semiconductores. Con una capacidad de medición térmica autónoma y enfoque motorizado, ofrece confiabilidad y facilidad en entornos industriales sin hardware adicional. Con interfaces Ethernet, USB e interfaces de proceso analógicas y digitales, permite una integración perfecta en sistemas de control y maquinaria.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>450 – 1800 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>396 × 300 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>20 Hz</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-plug"></i>
                      <span>Ethernet</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-microchip"></i>
                      <span>Autónoma</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  </body>
</html>

<?php include('footer.php') ?>