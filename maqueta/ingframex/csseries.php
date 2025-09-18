<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CS LT - Pirómetros Infrarrojos para OEM - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CS LT Optris - Pirómetros infrarrojos industriales compactos de una pieza para aplicaciones OEM. La solución más económica para medición de temperatura sin contacto.">
  <meta name="keywords" content="CS LT, pirómetros, termómetros infrarrojos, Optris, OEM, industrial, medición temperatura">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/pirometros/CSerie/CSserie.png');
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
      <h1>SERIE CS LT OPTRIS</h1>
      <p>Pirómetros infrarrojos industriales compactos de una pieza más económicos para aplicaciones OEM. Medición de temperatura precisa y confiable en entornos industriales exigentes.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>CS LT para Aplicaciones OEM</h2>
      </div>
      
      <!-- Introducción -->
      <div class="intro-text">
        <h3>Solución Más Económica para Medición Infrarroja</h3>
        <p>La serie CS LT representa la opción más rentable para integración OEM, ofreciendo medición de temperatura precisa desde -50°C hasta 1030°C. Diseñados específicamente para integración en serie en equipos de maquinaria y entornos de manufactura industrial, estos pirómetros combinan robustez, precisión y un precio competitivo.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CS LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csseries/CSlt.webp');"></div>
              <div class="product-content">
                <h4>CS LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto de una pieza más económico</p>
                <p>El pirómetro infrarrojo optris CS LT es perfectamente adecuado para medición de temperatura en ambientes pequeños y estrechos. Los cabezales de medición robustos han sido desarrollados para medición sin contacto de temperatura desde -50°C hasta 1,030°C y pueden emplearse en temperaturas ambientales de hasta 80°C sin enfriamiento adicional. Los pirómetros económicos están diseñados para integración en serie en equipos de maquinaria y entornos de manufactura industrial.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 1030 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>15:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>25 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>8 – 14 µm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 80 °C</span>
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
      
      <!-- Características destacadas -->
      <div class="row mt-5">
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-dollar" style="color: #2563eb; margin-right: 10px;"></i>Económico</h3>
            <p>La solución más rentable para aplicaciones OEM que requieren medición de temperatura precisa sin comprometer la calidad.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-cog" style="color: #2563eb; margin-right: 10px;"></i>Integración OEM</h3>
            <p>Diseñado específicamente para integración en serie en equipos de maquinaria y sistemas industriales automatizados.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="intro-text">
            <h3><i class="fa fa-shield" style="color: #2563eb; margin-right: 10px;"></i>Robusto</h3>
            <p>Construcción robusta que soporta condiciones industriales exigentes sin necesidad de enfriamiento adicional hasta 80°C.</p>
          </div>
        </div>
      </div>
      
      <!-- Aplicaciones -->
      <div class="intro-text">
        <h3>Aplicaciones Principales</h3>
        <div class="row text-left mt-4">
          <div class="col-md-6">
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Integración en maquinaria industrial</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Sistemas de manufactura automatizada</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Control de procesos en tiempo real</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Monitoreo de temperatura en líneas de producción</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Aplicaciones OEM con limitaciones de espacio</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Control de calidad en manufactura</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Sistemas de seguridad térmica</li>
              <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #2563eb; margin-right: 10px;"></i>Automatización industrial</li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  
  </body>
</html>

<?php include('footer.php') ?>