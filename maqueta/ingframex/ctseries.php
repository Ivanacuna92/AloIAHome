<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CT - Pirómetros Infrarrojos de Dos Piezas - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CT Optris - Pirómetros infrarrojos industriales compactos de dos piezas para aplicaciones especializadas. Medición de temperatura precisa para bajas temperaturas, metales, vidrio y plásticos.">
  <meta name="keywords" content="CT, pirómetros, termómetros infrarrojos, Optris, dos piezas, industrial, medición temperatura, metales, vidrio, plásticos">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/pirometros/CT_Series/CT_Series.png');
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
      <h1>SERIE CT OPTRIS</h1>
      <p>Pirómetros infrarrojos industriales compactos de dos piezas para aplicaciones especializadas. Soluciones versátiles para medición de temperatura en bajas temperaturas, metales, vidrio y plásticos.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Línea Completa CT</h2>
      </div>
      
      <!-- Introducción -->
      <div class="intro-text">
        <h3><i class="fa fa-puzzle-piece" style="color: #2563eb; margin-right: 10px;"></i>Arquitectura de Dos Piezas</h3>
        <p>La serie CT utiliza una arquitectura innovadora de dos piezas que separa el sensor de medición de la electrónica de procesamiento, proporcionando flexibilidad de instalación y resistencia a condiciones ambientales extremas. Ideal para aplicaciones especializadas que requieren configuraciones específicas.</p>
      </div>
      
      <!-- CT para Bajas Temperaturas -->
      <div class="category-header">
        <h3>CT para Bajas Temperaturas</h3>
        <p>Pirómetros de dos piezas para aplicaciones generales de medición de temperatura con alta resistencia ambiental.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTi LThot -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/cti-lthot.webp');"></div>
              <div class="product-content">
                <h4>CTi LThot</h4>
                <p class="product-tagline">Pirómetro industrial compacto de dos piezas con alta resistencia a temperatura operativa</p>
                <p>El pirómetro optris CTi LThot ha sido desarrollado para las condiciones más extremas en áreas de alta temperatura y es reconocido por su resistencia especialmente alta a la temperatura. El empleo del termómetro infrarrojo en temperaturas ambientales de hasta 250°C sin enfriamiento adicional no presenta absolutamente ningún problema.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-40 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 10:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>100 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 250 °C</span>
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
          
          <!-- CTi LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/cti-lt.webp');"></div>
              <div class="product-content">
                <h4>CTi LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto de dos piezas</p>
                <p>El pirómetro optris CTi LT está equipado con uno de los sensores infrarrojos más pequeños del mundo con alta resolución óptica de 22:1. Además, ofrece alta variabilidad debido a salidas analógicas seleccionables así como varias interfaces digitales en la caja de electrónica y una interfaz USB integrada.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 1050 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 22:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>115 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 180 °C</span>
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
          
          <!-- CT LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-lt.webp');"></div>
              <div class="product-content">
                <h4>CT LT</h4>
                <p class="product-tagline">El pirómetro IR más pequeño con resolución óptica 22:1</p>
                <p>El pirómetro optris CT LT está equipado con uno de los sensores infrarrojos más pequeños del mundo con alta resolución óptica de 22:1. Además, ofrece alta variabilidad debido a salidas analógicas seleccionables así como varias interfaces digitales en la caja de electrónica.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 22:1</span>
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
                      <span>-20 – 180 °C</span>
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
          
          <!-- CTex LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ctex-lt.webp');"></div>
              <div class="product-content">
                <h4>CTex LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto de dos piezas para áreas peligrosas (ATEX)</p>
                <p>La seguridad es la máxima prioridad, y el pirómetro de la serie Optris CT aborda esto con su versión a prueba de explosiones, CTex. Aquí, el pirómetro está adicionalmente equipado con barreras dobles Zener para empleo en áreas propensas a explosiones (ATEX). Esta versión del sensor infrarrojo asegura operación segura en entornos peligrosos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 22:1</span>
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
                      <span>-20 – 180 °C</span>
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
          
          <!-- CTfast LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ctfast-lt.webp');"></div>
              <div class="product-content">
                <h4>CTfast LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto de dos piezas rápido</p>
                <p>El pirómetro Optris CTfast LT está diseñado para mediciones rápidas de temperatura sin contacto. Con un tiempo de respuesta excepcionalmente corto de 6 ms, es particularmente adecuado para escenarios de medición de ritmo rápido. Operando dentro de un rango de temperatura de -50°C hasta 975°C, este sensor infrarrojo permite monitoreo continuo de temperatura con precisión.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 25:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>6 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 120 °C</span>
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
          
          <!-- CThot LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/cthot-lt.webp');"></div>
              <div class="product-content">
                <h4>CThot LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo con alta resistencia a temperatura operativa</p>
                <p>El pirómetro optris CThot LT ha sido desarrollado para las condiciones más extremas en áreas de alta temperatura y es reconocido por su resistencia especialmente alta a la temperatura. El empleo del termómetro infrarrojo en temperaturas ambientales de hasta 250°C sin enfriamiento adicional no presenta absolutamente ningún problema.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-40 – 975 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 10:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>100 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 250 °C</span>
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
      
      <!-- CT para Metales -->
      <div class="category-header">
        <h3>CT para Metales</h3>
        <p>Pirómetros especializados con rangos espectrales optimizados para medición precisa de temperaturas en metales.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CT 1M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-1m.webp');"></div>
              <div class="product-content">
                <h4>CT 1M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial 1M para aplicaciones de metales a muy alta temperatura</p>
                <p>El pirómetro Optris CT 1M mide con precisión temperaturas de 485°C a 2200°C en diferentes variantes. Con un rango espectral especializado, tamaño compacto y tiempo de respuesta rápido, es adecuado para aplicaciones de metales calientes. La serie ofrece adaptabilidad con varias versiones y salidas. Diseñado para durabilidad y precisión, la serie CT 1M es adecuada para procesos industriales críticos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>485 – 2200 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 75:1</span>
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
                      <span>-20 – 100 °C</span>
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
          
          <!-- CT 2M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-2m.webp');"></div>
              <div class="product-content">
                <h4>CT 2M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial 2M para aplicaciones de metales a alta temperatura</p>
                <p>Debido a su longitud de onda de medición corta y el rango de alta temperatura de hasta 2000°C, los pirómetros optris CT 2M son idealmente adecuados para empleo en mediciones de alta temperatura de metales, óxidos metálicos y cerámicas. El pequeño cabezal sensor permite fácil instalación en espacios limitados y estrechos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>250 – 2000 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 75:1</span>
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
                      <span>-20 – 125 °C</span>
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
          
          <!-- CT 3M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-3m.webp');"></div>
              <div class="product-content">
                <h4>CT 3M</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial 3M para aplicaciones de metales a baja temperatura</p>
                <p>El pirómetro Optris CT 3M, con sus características espectrales de longitud de onda corta/media y un rango de temperatura comenzando desde 50°C, es adecuado para mediciones de baja temperatura de metales y materiales compuestos. Su tiempo de respuesta rápido de solo 1 ms asegura operación suave incluso en procesos rápidos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>50 – 1800 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 75:1</span>
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
                      <span>-20 – 125 °C</span>
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
          
          <!-- CT 4M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-4m.webp');"></div>
              <div class="product-content">
                <h4>CT 4M</h4>
                <p class="product-tagline">Pirómetro de alta velocidad para bajas temperaturas</p>
                <p>El tiempo de exposición rápido del termómetro IR de alta velocidad CT 4M de solo 90 μs lo convierte en el sensor perfecto para medir procesos rápidos. Debido a su longitud de onda de medición corta y rango de temperatura de 0°C a 500°C, el pirómetro optris CT 4M es adecuado para medir metales, óxidos metálicos, cerámicas o materiales con emisividad desconocida o cambiante.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>0 – 500 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>10:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>90 µs</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>2.2 – 6.0 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>0 – 70 °C</span>
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
                    <span class="material-tag">Metales Reflectivos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- CT para Vidrio -->
      <div class="category-header">
        <h3>CT para Vidrio</h3>
        <p>Pirómetros especializados con rangos espectrales optimizados para aplicaciones de medición de temperatura en vidrio.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CT G5 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-g5.webp');"></div>
              <div class="product-content">
                <h4>CT G5</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial G5 para aplicaciones de vidrio</p>
                <p>Debido a su rango espectral especial de 5.0 µm, el pirómetro optris CT G5 es perfectamente adecuado para la medición de temperaturas de vidrio, por ejemplo durante la producción de vidrio de contenedor, producción de vidrio vehicular o producción de células solares. El cabezal de medición de acero inoxidable del termómetro IR es extremadamente pequeño.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>100 – 1650 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 20:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>80 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>5.0 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 85 °C</span>
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
      
      <!-- CT para Plásticos -->
      <div class="category-header">
        <h3>CT para Plásticos</h3>
        <p>Pirómetros especializados con rangos espectrales optimizados para medición de temperatura en películas plásticas delgadas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CT P3 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-p3.webp');"></div>
              <div class="product-content">
                <h4>CT P3</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial P3 para película plástica delgada</p>
                <p>El pirómetro Optris CT P3 mide con precisión la temperatura de películas plásticas delgadas de 50°C a 400°C usando un rango espectral de 3.43 µm. Mientras que los plásticos más gruesos se miden en IR de longitud de onda larga, las películas delgadas necesitan sensores IR de banda estrecha específicos que coincidan con las bandas de absorción del material.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>50 – 400 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>15:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>100 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>3.43 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>0 – 75 °C</span>
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
          
          <!-- CT P7 -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctseries/ct-p7.webp');"></div>
              <div class="product-content">
                <h4>CT P7</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial P7 para láminas plásticas delgadas</p>
                <p>Debido a su región espectral especial de 7.9 µm, el pirómetro innovador optris CT P7 es perfectamente adecuado para mediciones de temperatura de materiales plásticos delgados. El termómetro IR de banda estrecha especial mide temperaturas con precisión de 0°C hasta 710°C, y su cabezal de medición ofrece resistencia a temperatura de hasta 85°C.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>0 – 710 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>10:1</span>
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