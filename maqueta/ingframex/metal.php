<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria de Acería - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/metal/metal.jpg');
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
      <h1>INDUSTRIA DE METAL</h1>
      <p>Soluciones avanzadas de medición de temperatura para optimizar procesos térmicos y garantizar la calidad en la transformación y manufactura del metal.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Productos para la Industria de Metal</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metal/jDGY1Pp0QncQC1luHhHyBxRMlFWzZDhzWLKpbaQC.jpg');"></div>
              <div class="product-content">
                <h2>Medidores y transmisores para tratamiento térmico en industria de metal.</h2>
                <p>Contamos con una amplia gama de medidores de punto de rocío y variables ambientales que ofrecen una medición precisa y rápida para aplicaciones industriales. Son ideales para medición en hornos de tratamiento térmico en metales.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metal/JSwZSyrWA2ym5dexiH39NzD9zKlDoPrvNVONJpBa.jpg');"></div>
              <div class="product-content">
                <h2>Termómetros y pirómetros para medición de metales a altas temperaturas.</h2>
                <p>Nuestros termómetros infrarrojos pueden medir altas temperaturas en superficies metálicas de modo preciso y rápido. Su longitud de onda corta permite medir con exactitud las temperaturas de metales, así como de óxidos metálicos y cerámica. Nuestros pirómetros son, en gran medida insensible a polvo, vapor e impurezas en mirillas. Es decir, que las mediciones permanecen precisas incluso cuando el grado de suciedad de la mirilla es superior al 90 %.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metal/j42j7F7O7WfQeenJ198UyJQuaVBzGScav3I4lXcQ.jpg');"></div>
              <div class="product-content">
                <h2>Cámaras térmicas de ultra alto rendimiento para industria de metal.</h2>
                <p>Nuestras cámaras de ultra alto rendimiento cuentan con un rango de medición de hasta 2200 °C (3992 °F) ideales para manejar aplicaciones de hornos industriales, refractarios y herramientas/accesorios de inspección en la fundición de metales a temperaturas extremas.</p>
              </div>
            </div>
          </div>
          
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/metal/6YZm288z33vCExPQPnxAd1z1wkFCH4f20GmVcnX6.jpg');"></div>
              <div class="product-content">
                <h2>Termómetros y manómetros para la industria de metal.</h2>
                <p>Conoce nuestros instrumentos de medición de alto rendimiento que se adaptan a las tareas de medición de las plantas. Tiene alta resistencia a ambientes agresivos, lo cual los hace ideales para la medición industrial en industria de metal. Nuestros termómetros y manómetros permiten una calibración comparativa en hornos. Su amplio rango de temperatura y su uso flexible los hace una herramienta ideal para mediciones en condiciones extremas.</p>
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