<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CSlaser - Pirómetros con Mira Láser - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CSlaser Optris - Pirómetros infrarrojos industriales de alto rendimiento con mira láser doble para medición precisa de temperatura. Marcado exacto del punto de medición.">
  <meta name="keywords" content="CSlaser, pirómetros, termómetros infrarrojos, Optris, mira láser, industrial, medición temperatura, alto rendimiento">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/pirometros/CSlaser_Series/CSlaser_Series.png');
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
      min-height: 350px;
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
    
    .spec-item.laser {
      color: #2563eb;
      font-weight: 600;
    }
    
    .spec-item.laser i {
      color: #2563eb;
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
      min-height: 350px;
    }
    
    .intro-text {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      margin-bottom: 50px;
      text-align: center;
    }
    
    .intro-text h3 {
      font-size: 1.8rem;
      font-weight: 400;
      color: #2563eb;
      margin-bottom: 20px;
    }
    
    .intro-text p {
      color: #666;
      line-height: 1.8;
      font-size: 1rem;
      margin: 0;
    }
    
    .laser-highlight {
      background: linear-gradient(45deg, #2563eb, #3b82f6);
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin: 20px 0;
      text-align: center;
    }
    
    .laser-highlight h4 {
      color: white;
      margin: 0;
      font-size: 1.2rem;
      font-weight: 600;
    }
    
    .laser-highlight i {
      font-size: 2rem;
      margin-bottom: 10px;
      display: block;
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
      <h1>SERIE CSLASER OPTRIS</h1>
      <p>Pirómetros infrarrojos industriales de alto rendimiento con mira láser doble innovadora para medición precisa de temperatura. Marcado exacto del punto de medición incluso en los objetos más pequeños.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Línea Completa CSlaser</h2>
      </div>
      
      <!-- Introducción -->
      <div class="intro-text">
        <h3><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Tecnología de Mira Láser Innovadora</h3>
        <p>La serie CSlaser incorpora un innovador sistema de mira láser doble que marca exactamente el área de medición, eliminando errores de apuntado y mejorando la precisión. Ideal para entornos industriales hostiles con accesorios robustos de enfriamiento o purga de aire.</p>
      </div>
      
      <!-- CSlaser para Bajas Temperaturas -->
      <div class="category-header">
        <h3>CSlaser para Bajas Temperaturas</h3>
        <p>Pirómetros de alto rendimiento con mira láser para aplicaciones de temperatura general y alta sensibilidad.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CSlaser LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/cslaser/Cslaser-lt.webp');"></div>
              <div class="product-content">
                <h4>CSlaser LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de alto rendimiento de una pieza con mira láser</p>
                <p>El termómetro infrarrojo optris CSlaser LT consiste en un sensor robusto de acero inoxidable con electrónica integrada, permitiendo una fácil integración en su sistema. Su innovadora mira láser doble permite un marcado exacto de los puntos de medición, incluso en los objetos más pequeños. Una variedad de ópticas permite la adaptación para una amplia gama de diferentes aplicaciones.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Mira Láser Doble Innovadora</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-30 – 1000 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>50:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>150 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 85 °C</span>
                    </div>
                    <div class="spec-item laser">
                      <i class="fa fa-crosshairs"></i>
                      <span>Mira Láser</span>
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
                    <span class="material-tag">Vidrio</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- CSlaser hs LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/cslaser/cslaser-hs-lt.webp');"></div>
              <div class="product-content">
                <h4>CSlaser hs LT</h4>
                <p class="product-tagline">Pirómetro IR industrial de alto rendimiento con alta sensibilidad y mira láser</p>
                <p>El termómetro infrarrojo optris CSlaser hs LT permite medir las más mínimas diferencias de temperatura desde 0.025°C. Operando dentro de -20°C a 150°C. Las opciones de salida de 0-5V o 4-20mA se adaptan a varias aplicaciones. Además, su mira láser doble asegura el marcado exacto de los campos de medición, y su variedad de alcances ofrece alta adaptabilidad con diversas aplicaciones.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Alta Sensibilidad + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 150 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>50:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>150 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 85 °C</span>
                    </div>
                    <div class="spec-item laser">
                      <i class="fa fa-crosshairs"></i>
                      <span>Mira Láser</span>
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
                    <span class="material-tag">Vidrio</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- CSlaser para Metales -->
      <div class="category-header">
        <h3>CSlaser para Metales</h3>
        <p>Pirómetros especializados con mira láser para medición precisa de superficies metálicas a altas temperaturas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CSlaser 2M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/cslaser/cslaser-2m.webp');"></div>
              <div class="product-content">
                <h4>CSlaser 2M</h4>
                <p class="product-tagline">Pirómetro infrarrojo 2M industrial de alto rendimiento de una pieza con mira láser</p>
                <p>El termómetro infrarrojo optris CSlaser 2M ha sido diseñado específicamente para la medición exacta de temperatura de superficies metálicas. Su longitud de onda de medición corta permite la medición precisa de temperaturas de metales, óxidos metálicos y cerámicas. El termómetro IR tiene una innovadora mira láser doble para marcar con precisión el punto de medición. Una variedad de alcances asegura alta adaptabilidad con varias aplicaciones.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Especializado para Metales + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>250 – 2200 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 300:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>1 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>1.6 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 85 °C</span>
                    </div>
                    <div class="spec-item laser">
                      <i class="fa fa-crosshairs"></i>
                      <span>Mira Láser</span>
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
      
      <!-- Características destacadas -->
      <div class="row mt-5">
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Mira Láser Doble</h3>
            <p>Sistema innovador de mira láser doble que marca exactamente el área de medición, eliminando errores de apuntado incluso en objetos pequeños.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-tachometer" style="color: #2563eb; margin-right: 10px;"></i>Alto Rendimiento</h3>
            <p>Precisión superior con tiempos de respuesta ultrarrápidos y múltiples opciones de ópticas para diferentes aplicaciones industriales.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-cogs" style="color: #2563eb; margin-right: 10px;"></i>Versatilidad</h3>
            <p>Variedad de ópticas y configuraciones que permiten adaptación para una amplia gama de aplicaciones industriales exigentes.</p>
          </div>
        </div>
      </div>
      
      <!-- Aplicaciones -->
      <div class="intro-text">
        <h3>Aplicaciones Principales</h3>
        <div class="row text-left mt-4">
          <div class="col-md-6">
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Medición precisa en objetos pequeños</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Entornos industriales hostiles</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Procesamiento de metales a alta temperatura</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Control de calidad industrial</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Sistemas automatizados</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Aplicaciones que requieren confirmación visual</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Medición en espacios confinados</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Monitoreo de procesos críticos</li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  
  </body>
</html>

<?php include('footer.php') ?>