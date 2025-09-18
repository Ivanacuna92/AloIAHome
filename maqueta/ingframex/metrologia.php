<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Metrología - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/metrologia/Metrologia-Dimensional-1.webp');
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
      <h1>METROLOGÍA</h1>
      <p>Soluciones avanzadas de calibración y medición para garantizar la precisión y calidad en aplicaciones metrológicas</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Productos para Metrología</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metrologia/19pv2E0WNa66zxi1ifRHWhTGwdhuwMVLa7i3j2zv.jpg');"></div>
              <div class="product-content">
                <h2>Transmisores y medidores para Metrología.</h2>
                <p>Contamos con varios equipos como sensores, medidores y transmisores para ayudar a que los instrumentos de medición de humedad, punto de rocío, dióxido de carbono y temperatura permanezcan calibrados y en correcto funcionamiento. Los instrumentos portátiles para todos estos parámetros son útiles para la calibración de instrumentos de campo y la comprobación de los estándares. Son la herramienta ideal para aplicaciones de metrología.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metrologia/U0sNrGDJklh4u0dXIYCWV6hHjcW0Dc3Odx09lwAo.jpg');"></div>
              <div class="product-content">
                <h2>Equipos patrón de calibración</h2>
                <p>La calidad de la medición básica es el factor más importante en la metrología. La tecnología de nuestros equipos es la solución ideal para clientes con tareas de medición exigentes. Los rangos de medición de nuestros equipos pueden combinarse prácticamente con todas las señales de salida habituales en metrología por lo cual son altamente recomendados.</p>
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