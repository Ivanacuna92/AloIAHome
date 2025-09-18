<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Monitoreo de Batería - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/bateria.webp');
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
    
    .applications-section {
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
    
    .application-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      padding: 40px;
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    
    .application-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    
    .application-title {
      font-size: 1.5rem;
      font-weight: 500;
      color: #2563eb;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
    }
    
    .application-title i {
      margin-right: 15px;
      font-size: 1.8rem;
    }
    
    .application-content {
      margin-bottom: 20px;
    }
    
    .application-content h4 {
      font-size: 1.1rem;
      font-weight: 600;
      color: #333;
      margin-top: 20px;
      margin-bottom: 10px;
    }
    
    .application-content p {
      color: #666;
      line-height: 1.8;
      margin-bottom: 15px;
    }
    
    .benefits-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .benefits-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
      color: #666;
      line-height: 1.6;
    }
    
    .benefits-list li:before {
      content: "✓";
      position: absolute;
      left: 0;
      color: #2563eb;
      font-weight: bold;
      font-size: 1.2rem;
    }
    
    .equipment-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }
    
    .equipment-tag {
      background: #1e40af;
      color: #ffffff;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #1e40af;
      transition: all 0.3s ease;
    }
    
    .equipment-tag:hover {
      background: #1d4ed8;
      border-color: #1d4ed8;
      transform: translateY(-1px);
    }
    
    .note-box {
      background: #f0f7ff;
      border-left: 4px solid #2563eb;
      padding: 15px 20px;
      margin-top: 20px;
      border-radius: 5px;
    }
    
    .note-box p {
      margin: 0;
      color: #555;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
 
  <section class="hero-section">
    <div class="container">
      <h1>MONITOREO DE BATERÍA</h1>
      <p>Soluciones avanzadas de monitoreo térmico para optimizar la producción y seguridad en sistemas de baterías</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en Monitoreo de Batería</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-battery-full"></i>
              Monitoreo de lodos y películas de electrodos
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Mantener la viscosidad de la suspensión durante el recubrimiento de electrodos es difícil debido a los estrictos requisitos de temperatura, la baja emisividad del material y el espacio reducido alrededor de la boquilla de recubrimiento, todo lo cual complica el monitoreo preciso y constante de la temperatura en línea.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza una viscosidad constante de la suspensión para una aplicación óptima del recubrimiento</li>
                <li>Permite condiciones de proceso estables durante la producción de alta velocidad y gran volumen</li>
                <li>Mejora la uniformidad de la lámina de electrodos y el rendimiento eléctrico</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">TC3M</span>
                <span class="equipment-tag">Laser CT 3M</span>
                <span class="equipment-tag">CS micro 3M</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Al integrar un sensor infrarrojo de longitud de onda corta capaz de realizar mediciones precisas a baja temperatura, es posible realizar un monitoreo continuo en línea de la lámina y la suspensión cerca del punto de recubrimiento, incluso dentro de espacios de instalación limitados.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-shield"></i>
              Sellado de celdas de la bolsa de la batería
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Garantizar un sellado confiable en celdas de bolsa de iones de litio es difícil, especialmente alrededor de las banderas de los conectores, donde microfugas no detectadas pueden comprometer la seguridad y el rendimiento de la batería durante las pruebas de carga.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta microfugas de forma temprana, reduciendo el riesgo de células defectuosas en los productos finales</li>
                <li>Mejora la seguridad y la longevidad de las células de la bolsa a través de un mejor control de calidad</li>
                <li>Permite la inspección no destructiva y sin contacto en tiempo real durante la fabricación</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 80 LT ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Para la fabricación de celdas de baterías tipo bolsa, la resolución VGA y una baja NETD son cruciales para detectar fugas. La resolución VGA, que proporciona una alta claridad óptica de 640×480 píxeles, permite una visualización detallada de la superficie de la celda. Esta alta resolución es esencial para identificar pequeños defectos que, si no se detectan, podrían causar problemas importantes</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-fire"></i>
              Detección temprana de incendios
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Las baterías de iones de litio presentan un alto riesgo de incendio debido a la fuga térmica, especialmente en entornos de almacenamiento y fabricación de alta densidad. Los métodos tradicionales de detección de incendios son reactivos y solo detectan los peligros tras el inicio de la descomposición, lo que dificulta la intervención temprana y aumenta el riesgo de fallos catastróficos.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Permite una intervención temprana antes de que las baterías alcancen etapas críticas de descontrol térmico</li>
                <li>Reduce el riesgo de incendio durante los procesos de almacenamiento, producción y reciclaje</li>
                <li>Permite una monitorización segura en entornos de alto voltaje sin contacto físico</li>
                <li>Mejora la seguridad de las instalaciones con sistemas automáticos de detección de puntos de acceso y alarmas</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 80 LT ETH</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
                <span class="equipment-tag">Xi 410 LE ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Las cámaras infrarrojas de la serie Xi , como la cámara térmica independiente Xi 410 , ofrecen detección automática de puntos calientes con alarma, lo que garantiza una respuesta inmediata. La función de Localizador de Puntos Calientes permite la detección temprana de puntos calientes para prevenir el riesgo de incendios o explosiones, evitando así los riesgos para la salud, los costosos tiempos de inactividad y la pérdida de recursos.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-thermometer-full"></i>
              Batería térmica SOC
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Las baterías térmicas almacenan calor a temperaturas extremadamente altas, lo que dificulta la monitorización precisa de la temperatura debido a interferencias en el cableado, problemas de aislamiento, deriva del sensor y variaciones significativas en la emisividad de los materiales calentados. Los métodos tradicionales de medición por contacto resultan inadecuados en estas condiciones de temperatura extremas y fluctuantes, lo que pone de manifiesto la necesidad de soluciones fiables sin contacto.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Las mediciones precisas de temperatura reducen los riesgos asociados al sobrecalentamiento y garantizan operaciones seguras</li>
                <li>Mantenimiento y tiempo de inactividad reducidos debido a la eliminación de problemas de interferencia del cableado y de desviación del sensor</li>
                <li>Las mediciones precisas y sin contacto garantizan un suministro de energía constante para procesos de fabricación industrial críticos</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Ctratio 1M</span>
                <span class="equipment-tag">Ctratio 2M</span>
                <span class="equipment-tag">Csvision R1M</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Para medir temperaturas superiores a 1200 °C. Estos dispositivos ofrecen mediciones precisas sin contacto, cruciales para la monitorización del grafito sobrecalentado en su sistema de almacenamiento térmico. La alta resolución óptica y el diseño robusto de los pirómetros Optris garantizan lecturas precisas de temperatura incluso en las condiciones adversas de una cámara cerrada.</p>
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