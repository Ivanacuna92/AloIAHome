<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CSmicro - Pirómetros Infrarrojos - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CSmicro Optris - Pirómetros infrarrojos ultracompactos para aplicaciones industriales y OEM. Medición de temperatura sin contacto con alta precisión.">
  <meta name="keywords" content="CSmicro, pirómetros, termómetros infrarrojos, Optris, medición temperatura, OEM, industrial">


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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/pirometros/CS_micro_serie/CS_micro_serie.png');
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
      <h1>SERIE CSMICRO OPTRIS</h1>
      <p>Pirómetros infrarrojos ultracompactos de tamaño micro para aplicaciones industriales y OEM. Medición de temperatura sin contacto con máxima precisión en espacios reducidos.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Línea Completa CSmicro</h2>
      </div>
      
      <!-- CSmicro LT for General Applications -->
      <div class="category-header">
        <h3>CSmicro LT para Aplicaciones Generales</h3>
        <p>Pirómetros ultracompactos de una pieza para medición precisa de temperatura en aplicaciones industriales generales.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CSmicro LT -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csmicro/csmicro-lt.webp');"></div>
              <div class="product-content">
                <h4>CSmicro LT</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto robusto de una pieza y tamaño micro</p>
                <p>El pirómetro CSmicro LT ofrece lecturas precisas de temperatura infrarroja de 8-14µm para objetivos de alta emisividad en entornos industriales. Con múltiples versiones, ópticas y salidas analógicas, cuenta con una relación distancia-tamaño de punto de 15:1 y rango de temperatura de -50°C a 1030°C. Compacto, robusto y resistente hasta 120°C, es una solución ideal para diversas aplicaciones industriales.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 1030 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 15:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>14 ms</span>
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
          
          <!-- CSmicro LTH -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csmicro/csmicro-lth.webp');"></div>
              <div class="product-content">
                <h4>CSmicro LTH</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial robusto con parámetros de alto rendimiento</p>
                <p>El pirómetro CSmicro LTH destaca en mediciones industriales de temperatura. Su detector termopila especial ofrece detección precisa sin contacto de 8-14µm, ideal para objetivos de alta emisividad de -50°C a 1030°C. A diferencia del CSmicro LT, cuenta con una relación distancia-tamaño de punto de 22:1 y opera hasta 180°C sin enfriamiento. Su diseño robusto y miniaturizado asegura resistencia, siendo esencial en termoformado, procesamiento de plásticos y manufactura.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-50 – 1030 °C</span>
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
          
          <!-- CSmicro LT HS -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csmicro/csmicro-lt-hs.webp');"></div>
              <div class="product-content">
                <h4>CSmicro LT HS</h4>
                <p class="product-tagline">Pirómetro infrarrojo industrial compacto robusto de una pieza con alta sensibilidad</p>
                <p>El pirómetro CSmicro LT HS logra una resolución de temperatura excepcional, detectando variaciones tan sutiles como 0.025°C, especialmente con objetivos de alta emisividad, a través del espectro infrarrojo de 8-14µm. Operando dentro de -20°C a 150°C. Las opciones de salida de 0-5V o 4-20mA se adaptan a varias aplicaciones. Esto hace que el sensor IR sea crucial para entradas de bucles de control en industrias como monitoreo de asfalto, procesamiento de plásticos, aplicaciones médicas, control de calidad y manufactura.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 150 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>15:1</span>
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
                      <span>-20 – 75 °C</span>
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
      
      <!-- CSmicro for Metals -->
      <div class="category-header">
        <h3>CSmicro para Metales</h3>
        <p>Pirómetros especializados para medición precisa de temperatura en superficies metálicas con rangos espectrales optimizados.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CSmicro 2M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csmicro/csmicro-2m.webp');"></div>
              <div class="product-content">
                <h4>CSmicro 2M</h4>
                <p class="product-tagline">Pirómetro infrarrojo 2M industrial compacto robusto de una pieza y tamaño micro</p>
                <p>El pirómetro Optris CSmicro 2M está diseñado para temperaturas de 250°C a 1600°C, destacando en la medición precisa de temperaturas de metales con un rango espectral especializado alrededor de 1.6µm. El pirómetro compacto y robusto permite una fácil instalación en espacios estrechos, siendo ideal para integración en maquinaria, midiendo metales calientes como acero, tungsteno y hierro.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>250 – 1600 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 75:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>8 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>1.6 μm</span>
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
          
          <!-- CSmicro 3M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/csmicro/csmicro-3m.webp');"></div>
              <div class="product-content">
                <h4>CSmicro 3M</h4>
                <p class="product-tagline">Pirómetro infrarrojo 3M compacto de una pieza para aplicaciones de metales a baja temperatura</p>
                <p>El pirómetro optris CSmicro 3M ha sido diseñado para un rango de temperatura de 50°C a 600°C. Su rango espectral especial de 2.3µm lo convierte en el pirómetro IR ideal para medición de temperatura de superficies metálicas desde 50°C y permite mediciones a través de vidrio.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>50 – 600 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 31:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>8 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>2.3 μm</span>
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
                    <span class="material-tag">Materiales Compuestoss</span>
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
    </div>
  </section>
  
  </body>
</html>

<?php include('footer.php') ?>