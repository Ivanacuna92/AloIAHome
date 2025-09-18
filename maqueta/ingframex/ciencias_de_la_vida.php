<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Ciencias de la Vida - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/ciencias/waehrkfvvqmd28f65mmlcrdccxyu064n2kdvnpfs.webp');
      background-size: cover;
      background-position: center;
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
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    
    .product-content {
      width: 60%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .product-content h2 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #565b7a;
      margin-bottom: 15px;
      line-height: 1.3;
    }
    
    .product-content p {
      color: #666;
      line-height: 1.6;
      margin-bottom: 20px;
      font-size: 0.95rem;
    }
    
    .product-link {
      color: #6B3AA0;
      text-decoration: none;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      transition: color 0.3s ease;
    }
    
    .product-link:hover {
      color: #4A2970;
      text-decoration: none;
    }
    
    .product-link i {
      margin-right: 8px;
      font-size: 1.1rem;
    }
    
    .product-row {
      display: flex;
      align-items: stretch;
      min-height: 190px;
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
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
      }
    }
  </style>
</head>

<body>
 
  <section class="hero-section">
    <div class="container">
      <h1>CIENCIAS DE LA VIDA</h1>
      <p>Soluciones avanzadas de medición y monitoreo para laboratorios e industria de ciencias de la vida</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Productos para Ciencias de la Vida</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ciencias/jq1gte00y0cxvhhzq9qhtx2axfiwmq9dxrqmzhna.webp');"></div>
              <div class="product-content">
                <h2>Cámaras y pirómetros infrarrojos para uso en ciencias de la vida.</h2>
                <p>Nuestras cámaras y pirómetros infrarrojos son ideales para realizar mediciones muy rápidas gracias a su tiempo de respuesta extremadamente rápido de tan sólo 6 ms. Cuenta con un sensor para medir temperaturas sin contacto que van desde -50ºC hasta 975ºC. Son la herramienta ideal para su uso en industria de ciencias de la vida.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ciencias/dsqwotdhf5krfng1mw1lx5dhopvuq85dsdnpv87f.webp ');"></div>
              <div class="product-content">
                <h2>Sistemas de monitoreo para ciencias de la vida.</h2>
                <p>Nuestros sistemas son ideales para monitorear la temperatura, humedad relativa, CO2, presión diferencial, nivel, interruptores de las puertas y más. Por lo que son más que adecuados para el trabajo en laboratorios.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/ciencias/3CZcsXQbdKetOOZfSfiu0fg9HHH00I1M5giK6DiM.jpg');"></div>
              <div class="product-content">
                <h2>Cámaras portátiles termográficas para uso en industria de ciencias de la vida.</h2>
                <p>Nuestras cámaras termográficas son adecuadas para detectar anomalías de temperatura antes de causar un incendio. Pueden encontrar fácilmente los puntos calientes y defectos invisibles en maquinaria o sistemas que podrían representar riesgos potenciales así como medir en lugares de difícil acceso. Su uso en laboratorios y lugares de difícil acceso las vuelve ideales para industria de ciencias de la vida.</p>
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