<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Serie CTratio - Pirómetros de Relación - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Serie CTratio Optris - Pirómetros de relación de dos colores para objetos pequeños, obscurecidos o en movimiento. Medición precisa con principio dual-color.">
  <meta name="keywords" content="CTratio, pirómetros relación, dos colores, Optris, medición temperatura, alta temperatura, metales">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/ctratio/ctratio-1m.webp');
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
      <h1>SERIE CTRATIO OPTRIS</h1>
      <p>Pirómetros de relación de dos colores para objetos pequeños, obscurecidos o en movimiento. Tecnología dual-color para mediciones precisas en condiciones desafiantes.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>CTratio para objetos pequeños, obscurecidos o en movimiento</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- CTratio 1M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctratio/ctratio-1m.webp');"></div>
              <div class="product-content">
                <h4>CTratio 1M</h4>
                <p class="product-tagline">Pirómetro industrial de relación 1M de dos piezas y dos colores de alto rendimiento</p>
                <p>El CTratio 1M es un pirómetro de relación robusto de fibra óptica para medición de temperatura sin contacto de 450 °C a 3000 °C. Utilizando un principio de pirómetro de doble color, garantiza lecturas confiables incluso con emisividad cambiante. Ideal para altas temperaturas de metales, el pirómetro de dos colores mide con precisión incluso objetivos más pequeños. La cabeza sensora pasiva y el cable de fibra óptica soportan temperaturas ambientales de hasta 315 °C.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>450 – 3000 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 100:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>1 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>0.8 – 1.1 μm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 200 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-lightbulb-o"></i>
                      <span>Láser</span>
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
          
          <!-- CTratio 2M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ctratio/ctratio-2m.webp');"></div>
              <div class="product-content">
                <h4>CTratio 2M</h4>
                <p class="product-tagline">Pirómetro industrial de relación 2M de dos piezas y dos colores de alto rendimiento</p>
                <p>El CTratio 2M es un termómetro de relación robusto de fibra óptica para mediciones precisas de temperatura sin contacto de 250 °C a 3000 °C. Disponible en diferentes modelos, utiliza un principio de pirómetro de doble color para lecturas confiables a pesar de cambios en la emisividad u obstrucciones. Ideal para altas temperaturas de metales, resiste polvo, vapor y ventanas sucias, con mediciones precisas de hasta 90% de suciedad en la ventana. El láser verde ayuda en la alineación.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>250 – 3000 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-search"></i>
                      <span>hasta 100:1</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-clock-o"></i>
                      <span>1 ms</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-eye"></i>
                      <span>1.45 – 1.75 μm</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>-20 – 200 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-lightbulb-o"></i>
                      <span>Láser</span>
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