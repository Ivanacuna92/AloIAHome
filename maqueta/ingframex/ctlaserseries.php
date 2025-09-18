<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CTlaser - Pirómetros de Dos Piezas con Mira Láser - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CTlaser Optris - Pirómetros infrarrojos industriales de dos piezas con mira láser doble para medición precisa de temperatura. Aplicaciones especializadas para bajas temperaturas, metales, llamas, vidrio y plásticos.">
  <meta name="keywords" content="CTlaser, pirómetros, termómetros infrarrojos, Optris, dos piezas, mira láser, industrial, medición temperatura">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/pirometros/CTlaser_Series/CTlaser_Series.png');
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
      min-height: 300px;
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
      <h1>SERIE CTLASER OPTRIS</h1>
      <p>Pirómetros infrarrojos industriales de dos piezas con mira láser doble innovadora para medición precisa de temperatura. Marcado exacto del punto de medición en aplicaciones especializadas.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Línea Completa CTlaser</h2>
      </div>
      
      <!-- Introducción -->
      <div class="intro-text">
        <h3><i class="fa fa-crosshairs" style="color: #2563eb; margin-right: 10px;"></i>Tecnología de Mira Láser Doble</h3>
        <p>La serie CTlaser combina la flexibilidad de la arquitectura de dos piezas con un innovador sistema de mira láser doble que marca exactamente el área de medición, eliminando errores de apuntado y mejorando la precisión en aplicaciones especializadas industriales.</p>
      </div>
      
      <!-- CTlaser para Bajas Temperaturas -->
      <div class="category-header">
        <h3>CTlaser para Bajas Temperaturas</h3>
        <p>Pirómetros de dos piezas con mira láser para aplicaciones generales de medición de temperatura con alta precisión.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTlaser LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-lt.webp');"></div>
              <div class="product-content">
                <h4>CTlaser LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas de alto rendimiento con mira láser</p>
                <p>La serie Optris CTlaser LT establece un punto de referencia en medición de temperatura sin contacto, presentando precisión y un amplio rango de temperatura. Con un diseño de dos piezas integrando un sensor infrarrojo con resolución óptica de 75:1, sobresale en manufactura de ritmo rápido. El apuntado láser doble asegura alineación precisa, crucial para montaje a distancia.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Mira Láser Doble + Dos Piezas</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>75:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>120 ms</span>
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
          
          <!-- CTlaser Fast LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-fast-lt.webp');"></div>
              <div class="product-content">
                <h4>CTlaser Fast LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas rápido de alto rendimiento con mira láser</p>
                <p>El termómetro IR Optris CTlaser fast LT es perfectamente adecuado para monitorear procesos de trabajo rápidos debido a su tiempo de configuración corto de solo 9 ms. Este modelo de pirómetro rápido ofrece un amplio rango de temperatura, alcanzando bajas temperaturas. Además, viene con un cabezal de medición robusto de acero inoxidable de alta calidad con mira láser doble innovadora.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-tachometer"></i>
                  <h4>Ultra Rápido + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>50:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>9 ms</span>
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
      
      <!-- CTlaser para Metales -->
      <div class="category-header">
        <h3>CTlaser para Metales</h3>
        <p>Pirómetros especializados con mira láser para medición precisa de superficies metálicas a altas temperaturas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTlaser 05M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-05m.webp');"></div>
              <div class="product-content">
                <h4>CTlaser 05M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas 05M de alto rendimiento con mira láser</p>
                <p>El termómetro IR Optris CTlaser 05M permite medición precisa y rápida de altas temperaturas de superficies metálicas. Las longitudes de onda de medición cortas no solo son capaces de medir temperaturas de metales sino que también permiten la medición de óxidos metálicos y cerámicas. El pirómetro CTlaser ofrece adicionalmente el marcado exacto de puntos de medición a toda distancia.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Metales + Mira Láser 0.525µm</h4>
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
                      <span>150:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>1 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>0.525 µm</span>
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
          
          <!-- CTlaser 1M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-1m.webp');"></div>
              <div class="product-content">
                <h4>CTlaser 1M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas 1M de alto rendimiento con mira láser</p>
                <p>El termómetro IR Optris CTlaser 1M permite medición precisa y rápida de altas temperaturas de superficies metálicas. Las longitudes de onda de medición cortas no solo son capaces de medir temperaturas de metales sino que también permiten la medición de óxidos metálicos y cerámicas. El pirómetro CTlaser ofrece adicionalmente el marcado exacto de puntos de medición a toda distancia.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Alta Resolución + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>485 – 2200 °C</span>
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
                      <span>1.0 µm</span>
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
          
          <!-- CTlaser 2M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-2m.webp');"></div>
              <div class="product-content">
                <h4>CTlaser 2M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas 2M de alto rendimiento con mira láser</p>
                <p>La serie CTlaser 2M ofrece mediciones precisas de temperatura sin contacto para metales, procesamiento secundario de metales y cerámicas, desde 250°C hasta 2000°C. Los modelos incluyen 2ML (250°C a 800°C), 2MH (385°C a 1600°C) y 2MH1 (490°C a 2000°C), con resoluciones ópticas de 150:1 o 300:1. Presenta marcas de apuntado láser doble para mayor precisión.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Múltiples Variantes + Láser</h4>
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
          
          <!-- CTlaser 3M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-3m.webp');"></div>
              <div class="product-content">
                <h4>CTlaser 3M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas 3M de alto rendimiento para aplicaciones de metales y compuestos a baja temperatura con mira láser</p>
                <p>El termómetro infrarrojo Optris CTlaser 3M proporciona mediciones precisas de temperatura para temperaturas bajas de metales y materiales compuestos. Su rango de temperatura abarca de 50°C a 1800°C, ofreciendo versatilidad en varias aplicaciones industriales. Con un tiempo de respuesta rápido de 1 milisegundo y la capacidad de medir campos tan pequeños como 0.7 mm.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-crosshairs"></i>
                  <h4>Baja Temperatura + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>0 – 1800 °C</span>
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
                      <span>2.3 µm</span>
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
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- CTlaser 4M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-4m.webp');"></div>
              <div class="product-content">
                <h4>CTlaser 4M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas 4M de alto rendimiento para aplicaciones de baja temperatura y alta velocidad con mira láser</p>
                <p>El ultra rápido Optris CT 4M presenta un tiempo de respuesta de solo 300 µs y es así idealmente adecuado para producción rápida de alto volumen y procesos de empaquetado (por ejemplo, monitoreo de temperatura de preforma PET) y aplicaciones de seguridad de tráfico de alta velocidad como detección de cajas de ejes calientes en ferrocarriles.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-bolt"></i>
                  <h4>Ultra Rápido 300µs + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>0 – 500 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>30:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>300 µs</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>2.2 – 6.0 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 70 °C</span>
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
                    <span class="material-tag">Metales Reflectivos</span>
                    <span class="material-tag">Vidrio</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- CTlaser para Llamas -->
      <div class="category-header">
        <h3>CTlaser para Llamas</h3>
        <p>Pirómetros especializados para medición de temperatura de gases de combustión y a través de llamas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTlaser F2 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-f2.webp');"></div>
              <div class="product-content">
                <h4>CTlaser F2</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas F2 de alto rendimiento para medición de temperatura de gas con mira láser</p>
                <p>El termómetro infrarrojo Optris CTlaser F2 mide la temperatura del gas de llama CO2. Ofrece una longitud de onda de medición especial, haciéndolo óptimo para procesos de combustión, incineración de basura o procesos de reactores químicos. El rango de temperatura del termómetro IR cubre de 200°C hasta 1650°C.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-fire"></i>
                  <h4>Gases CO2 + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>200 – 1650 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>45:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>10 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>4.24 µm</span>
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
                    <span class="material-tag">Gases de Combustión</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- CTlaser F6 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-f6.webp');"></div>
              <div class="product-content">
                <h4>CTlaser F6</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas F6 de alto rendimiento para medición de temperatura de gas con mira láser</p>
                <p>El CTlaser F6 permite medición precisa de temperatura sin contacto de gases de llama de monóxido de carbono, alcanzando hasta 1650°C, crucial para procesos de combustión y reactores químicos. Los filtros en termómetros infrarrojos seleccionan longitudes de onda basadas en bandas de absorción de gas, con monóxido de carbono mostrando una banda de absorción de 4.66 µm.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-fire"></i>
                  <h4>Gases CO + Mira Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>200 – 1650 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>45:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>10 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>4.64 µm</span>
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
                    <span class="material-tag">Gases de Combustión</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- CTlaser MT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-mt.webp');"></div>
              <div class="product-content">
                <h4>CTlaser MT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas de alto rendimiento para medición de temperatura sin contacto a través de llamas</p>
                <p>El CTlaser MT ofrece medición de temperatura sin contacto a través de llamas, abarcando de 200°C a 1650°C, ideal para aplicaciones de endurecimiento por llama. Con un tamaño de punto comenzando desde 1.6 mm y una relación distancia-tamaño de punto de 45:1, su rango espectral de 3.9 μm. Las marcas de apuntado láser doble mejoran el apuntado.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-fire"></i>
                  <h4>A Través de Llamas + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>200 – 1650 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>45:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>10 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>3.9 µm</span>
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
                    <span class="material-tag">A Través de Llamas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- CTlaser para Vidrio -->
      <div class="category-header">
        <h3>CTlaser para Vidrio</h3>
        <p>Pirómetros especializados para aplicaciones de medición de temperatura en vidrio con mira láser de alta precisión.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTlaser G5 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-g5.webp');"></div>
              <div class="product-content">
                <h4>CTlaser G5</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas G5 de alto rendimiento para aplicaciones de vidrio con mira láser</p>
                <p>El termómetro infrarrojo Optris CTlaser G5 ha sido específicamente diseñado para la medición de temperaturas de vidrio, especialmente para vidrio de contenedor, producción de bombillas, producción de vidrio vehicular, así como en la manufactura de células solares. Con el termómetro IR Optris CTlaser G5, la temperatura de los objetos más pequeños, tan pequeños como 1 mm, desde una distancia segura de 70 mm, puede ser medida.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-square-o"></i>
                  <h4>Vidrio Especializado + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>100 – 1650 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 70:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>10 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>5.0 µm</span>
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
                    <span class="material-tag">Vidrio</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- CTlaser G7 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-g7.webp');"></div>
              <div class="product-content">
                <h4>CTlaser G7</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas G7 de alto rendimiento para aplicaciones de vidrio ultra delgado con mira láser</p>
                <p>El CTlaser G7 proporciona mediciones precisas de temperatura sin contacto para láminas de vidrio ultra delgadas de 100°C a 1200°C, ideal para pantallas táctiles en teléfonos inteligentes y tabletas. Asegura alineación perfecta con apuntado láser doble y opciones ópticas versátiles. Con un diseño de dos piezas y ofrece varias opciones de comunicación.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-square-o"></i>
                  <h4>Vidrio Ultra Delgado + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>100 – 1200 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>45:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>150 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>7.9 µm</span>
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
                    <span class="material-tag">Vidrio</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- CTlaser para Plásticos -->
      <div class="category-header">
        <h3>CTlaser para Plásticos</h3>
        <p>Pirómetros especializados para medición de temperatura en películas plásticas delgadas con mira láser precisa.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTlaser P7 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctlaser/ctlaser-p7.webp');"></div>
              <div class="product-content">
                <h4>CTlaser P7</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial de dos piezas P7 de alto rendimiento para película plástica delgada con mira láser</p>
                <p>El pirómetro Optris CTlaser P7 se especializa en medición precisa de temperatura de materiales plásticos delgados de 0°C a 710°C usando su región espectral de 7.9 µm. Aborda desafíos de emisividad aprovechando bandas de absorción específicas del material y mejorando el control en procesos de termoformado de plásticos y otra producción de láminas plásticas delgadas.</p>
                
                <div class="laser-highlight">
                  <i class="fa fa-film"></i>
                  <h4>Película Plástica + Láser</h4>
                </div>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>0 – 710 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>45:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>150 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>7.9 µm</span>
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
                    <span class="material-tag">Películas Plásticas Delgadas</span>
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