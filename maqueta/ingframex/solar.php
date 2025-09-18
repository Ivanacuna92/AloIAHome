<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria Solar - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/solar.webp');
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
      <h1>INDUSTRIA SOLAR</h1>
      <p>Soluciones avanzadas de termografía para optimizar la eficiencia, calidad y confiabilidad en la producción y mantenimiento de sistemas solares</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en la Industria Solar</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-bolt"></i>
              Prueba de flash de células solares
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Durante las pruebas de destello solar, incluso desviaciones mínimas de temperatura afectan la precisión de la curva IV, lo que resulta en evaluaciones incorrectas de la eficiencia de las células solares. La medición precisa de la temperatura superficial es esencial, ya que el aumento de la temperatura de la célula reduce la tensión de salida y compromete la fiabilidad de la certificación de rendimiento y el cumplimiento de las normas internacionales.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza una certificación confiable de la eficiencia de las células solares a la temperatura de prueba real</li>
                <li>Minimiza la incertidumbre de la medición al capturar la temperatura precisa en el momento del destello</li>
                <li>Admite una calidad de producción constante al permitir una validación precisa del rendimiento al final de la línea</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Cslaser LT</span>
                <span class="equipment-tag">Cslaser hs LT</span>
                <span class="equipment-tag">Cslaser 2M</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Dado que la temperatura influye en la tensión de circuito abierto y el punto de máxima potencia, mantener un control y una medición precisos de la temperatura permite una evaluación fiable y consistente del rendimiento de las células solares. Esta precisión es esencial para optimizar los procesos de producción, garantizar la calidad del producto y predecir el rendimiento y la fiabilidad de los módulos solares.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-link"></i>
              Soldadura y pestañas
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Identificar defectos de soldadura en módulos solares es un desafío, ya que las comprobaciones tradicionales de resistencia eléctrica no pueden determinar la ubicación exacta de las fallas. El uso de papel térmico requiere mucha mano de obra y no permite una localización precisa de fallas, lo que dificulta un control de calidad eficaz en los delicados procesos de soldadura, encordado y encordado de células fotovoltaicas.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Identificación inmediata de fallas de soldadura, minimizando el tiempo de parada de producción y los retrasos en las reparaciones</li>
                <li>Mayor confiabilidad al garantizar que solo las células fotovoltaicas correctamente conectadas avancen a la producción</li>
                <li>Análisis de calidad detallado a largo plazo utilizando instantáneas térmicas integrales para el refinamiento continuo del proceso</li>
                <li>Reducción de módulos solares defectuosos, lo que resulta en una mayor eficiencia y menores costos de producción</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI 450i</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> la precisión térmica, la resolución y el campo de visión de medición (MFOV) son cruciales para detectar pequeños problemas de soldadura en módulos solares. Una alta precisión térmica garantiza la detección incluso de las más mínimas variaciones de temperatura, indicativas de posibles fallos. La alta resolución espacial permite obtener imágenes detalladas, lo que permite identificar pequeñas imperfecciones en el proceso de soldadura que, de otro modo, podrían pasar desapercibidas.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-check-circle"></i>
              Prueba de calidad de módulos solares
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Los módulos solares defectuosos pueden pasar desapercibidos durante la producción y la operación, lo que conlleva una pérdida de rendimiento, riesgos de seguridad y una reducción de la vida útil. Los métodos de detección tradicionales son lentos, intrusivos e ineficientes para inspecciones a gran escala, lo que dificulta la identificación en tiempo real de defectos ocultos como microfisuras, delaminación o desajustes de celdas.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Mejora la detección temprana de defectos antes de que se produzca una degradación grave del rendimiento</li>
                <li>Permite un control de calidad no intrusivo y en tiempo real durante la producción y las inspecciones de campo</li>
                <li>Admite mantenimiento predictivo y extiende la vida útil operativa del módulo</li>
                <li>Reduce los riesgos de seguridad al identificar puntos críticos y fallas eléctricas de forma temprana</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 80 LT ETH</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 410 LE ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Cada tipo de anomalía, como puntos calientes, desajustes de celdas y fallos de diodos de derivación, tiene una firma térmica distintiva que puede detectarse mediante cámaras infrarrojas, se recomienda el uso de una cámara infrarroja radiométrica. Solo las cámaras infrarrojas radiométricas capturan y almacenan datos térmicos precisos en cada píxel, lo que permite identificar y cuantificar con precisión las anomalías de temperatura.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-search"></i>
              Identificación de derivación débil
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Las derivaciones en las células solares de silicio, causadas por defectos de proceso o irregularidades del material, generan calor local y reducen la eficiencia. Estos fallos suelen ser invisibles y difíciles de detectar con la termografía convencional de estado estacionario, lo que dificulta constantemente su identificación fiable en las líneas de producción.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta incluso derivaciones débiles que la termografía de estado estable a menudo pasa por alto</li>
                <li>Mejora la eficiencia de las células solares al evitar que las unidades defectuosas lleguen a los módulos</li>
                <li>Reduce la degradación del módulo a largo plazo mediante la identificación temprana de defectos</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Su capacidad para detectar fuentes de calor débiles y realizar evaluaciones cuantitativas la convierte en una herramienta invaluable para mejorar las células solares, localizando incluso derivaciones muy débiles. Dependiendo de la gravedad y el tipo de derivación, los fabricantes podrían intentar reparar la celda afectada.</p>
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