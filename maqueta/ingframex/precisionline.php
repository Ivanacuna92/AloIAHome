<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Línea Precisión - Cámaras Infrarrojas - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Línea Precisión Optris - Cámaras infrarrojas de alta resolución para aplicaciones industriales, investigación y control de procesos. Longitud de onda larga, corta y banda estrecha.">
  <meta name="keywords" content="PI 400i, PI 450i, PI 640i, PI 05M, PI 08M, PI 1M, cámaras infrarrojas, Optris, termografía, precisión">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/camaras/pl-640i.webp');
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
      <h1>LÍNEA PRECISIÓN OPTRIS</h1>
      <p>Cámaras infrarrojas de alta resolución para aplicaciones exigentes. Tecnología de precisión para investigación, control de calidad y monitoreo de procesos industriales.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Cámaras Infrarrojas de Precisión</h2>
      </div>
      
      <!-- Long wavelength IR cameras -->
      <div class="category-header">
        <h3>Cámaras IR de longitud de onda larga</h3>
        <p>Cámaras infrarrojas de alta precisión para medición de temperatura en una amplia gama de materiales y aplicaciones industriales.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- PI 400i -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-400i.webp');"></div>
              <div class="product-content">
                <h4>PI 400i</h4>
                <p class="product-tagline">Cámara infrarroja confiable de precisión</p>
                <p>La cámara infrarroja PI 400i mide temperaturas superficiales con un amplio rango de temperatura desde -20°C hasta 1500°C. Utilizando tecnología de detector no enfriado, ofrece alta confiabilidad y una rápida frecuencia de cuadro de 80 Hz para imágenes sin desenfoque de movimiento. Su paso de píxel de 17 µm permite mediciones precisas, complementadas con ópticas de lentes intercambiables. Construida robustamente, resiste condiciones adversas con facilidad, lo que la hace ideal para aplicaciones críticas donde la confiabilidad importa.</p>
                
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
          
          <!-- PI 450i -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-450i.webp');"></div>
              <div class="product-content">
                <h4>PI 450i</h4>
                <p class="product-tagline">Cámara IR rápida de precisión con alta sensibilidad y clasificación de alta temperatura ambiente</p>
                <p>La PI 450i es una cámara infrarroja que permite imágenes térmicas con una resolución de 382 x 288. Una rápida frecuencia de cuadro de 80 Hz garantiza la detección precisa de temperatura incluso en procesos de producción rápidos sin desenfoque de movimiento o distorsión de imagen. La PI 450i ofrece alta sensibilidad (hasta 40 mK) y un amplio rango de temperatura ambiente (hasta 80°C), lo que la hace adecuada para uso industrial en condiciones ambientales adversas.</p>
                
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
          
          <!-- PI 640i -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-640i.webp');"></div>
              <div class="product-content">
                <h4>PI 640i</h4>
                <p class="product-tagline">Cámara infrarroja VGA de alta resolución de precisión</p>
                <p>La PI 640i es una cámara infrarroja de alto rendimiento diseñada para satisfacer las necesidades tanto de investigadores exigentes como de ingenieros de procesos. La cámara térmica optris PI 640i es una cámara infrarroja pequeña, capaz y precisa con resolución VGA, que ofrece una calidad de imagen infrarroja superior. Con una resolución óptica de 640 x 480 píxeles, la PI 640i ofrece imágenes y videos radiométricos nítidos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 1500 °C</span>
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
          
        </div>
      </div>
      
      <!-- Short wavelength IR cameras -->
      <div class="category-header">
        <h3>Cámaras IR de longitud de onda corta</h3>
        <p>Cámaras especializadas para medición de alta temperatura en metales, cerámicas y aplicaciones de manufactura aditiva.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- PI 05M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-05m.webp');"></div>
              <div class="product-content">
                <h4>PI 05M</h4>
                <p class="product-tagline">Cámara infrarroja de ultra-corta longitud de onda de precisión para materiales supercalientes</p>
                <p>La Optris PI 05M es una cámara infrarroja de ultra-corta longitud de onda diseñada para medición precisa de temperatura sin contacto de objetivos supercalientes. Operando dentro del rango infrarrojo de longitud de onda corta (05M: 0.50 – 0.54 μm) y con un rango de temperatura de 900°C a 2450 °C, está diseñada para análisis preciso de temperatura de metales fundidos y procesos de manufactura aditiva que involucran láseres NIR y CO2.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>900 – 2450 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>764 × 480 px</span>
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
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- PI 08M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-08m.webp');"></div>
              <div class="product-content">
                <h4>PI 08M</h4>
                <p class="product-tagline">Cámara IR de longitud de onda corta para impresión 3D, procesamiento láser y manufactura aditiva</p>
                <p>La cámara térmica Optris PI 08M está diseñada para disminuir los errores de medición en aplicaciones de procesamiento láser NIR y CO2. Esta cámara infrarroja compacta se adapta perfectamente a estas aplicaciones específicas de manufactura aditiva con un rango de medición continuo de 575°C a 1900°C. Exhibe una emisividad distintivamente mayor en la longitud de onda de medición corta de 0.8 μm y es insensible a la mayoría de los láseres.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>575 – 1900 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>764 × 480 px</span>
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
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- PI 1M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-1m.webp');"></div>
              <div class="product-content">
                <h4>PI 1M</h4>
                <p class="product-tagline">Cámara IR de longitud de onda corta de precisión para industria de metales, acero, cerámicas, semiconductores</p>
                <p>La cámara térmica optris PI 1M está especialmente adaptada para mediciones de temperatura de metales, ya que estos exhiben una emisividad distintivamente mayor en la longitud de onda de medición corta de 1 μm que en las mediciones en el rango de longitud de onda infrarroja larga convencional. En paralelo con la visualización de un proceso térmico, la electrónica rápida del sensor permite un tiempo de reacción corto de hasta 1 ms.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>450 – 1800 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>764 × 480 px</span>
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
      
      <!-- Narrowband IR cameras -->
      <div class="category-header">
        <h3>Cámaras IR de banda estrecha</h3>
        <p>Cámaras especializadas para aplicaciones específicas como la industria del vidrio y medición de películas delgadas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- PI 450i G7 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-450i-g7.webp');"></div>
              <div class="product-content">
                <h4>PI 450i G7</h4>
                <p class="product-tagline">Cámara infrarroja de precisión y escáner lineal para la industria del vidrio</p>
                <p>Las cámaras infrarrojas Optris PI 450i G7, parte de la serie PI, están diseñadas para la industria del vidrio, operando en la banda espectral de 7.9 µm. Adaptadas para la fabricación de vidrio, soportan temperaturas de hasta 80°C en entornos industriales difíciles. El modo de escáner lineal ofrece imágenes infrarrojas precisas de productos de vidrio, asegurando una medición radiométrica superior. Equipada con lentes intercambiables y accesorios industriales, viene con software gratuito.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>150 – 1500 °C</span>
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
                    <span class="material-tag">Vidrio</span>
                    <span class="material-tag">Plásticos de Película Delgada</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- PI 640i G7 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/camaras/pl-640i-gt.webp');"></div>
              <div class="product-content">
                <h4>PI 640i G7</h4>
                <p class="product-tagline">Cámara infrarroja de alta resolución de precisión y escáner lineal para la industria del vidrio</p>
                <p>Las cámaras infrarrojas optris PI 640i G7 son las cámaras de imagen térmica específicas para la industria del vidrio en la serie PI. Miden en el rango espectral G7 y están diseñadas específicamente para la industria del vidrio. La alta resolución óptica (640 x 480 píxeles), las capacidades rápidas de muestreo de imágenes de hasta 125 Hz y el modo de escáner lineal ofrecen imágenes infrarrojas innovadoras, detalladas y precisas de láminas o productos de vidrio.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>150 – 3000 °C</span>
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
                    <span class="material-tag">Vidrio</span>
                    <span class="material-tag">Plásticos de Película Delgada</span>
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