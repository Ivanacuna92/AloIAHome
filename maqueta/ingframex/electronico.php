<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria Electrónica - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/electronica.webp');
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
      <h1>INDUSTRIA ELECTRÓNICA</h1>
      <p>Soluciones avanzadas de termografía infrarroja para validación, desarrollo y detección de fallas en componentes electrónicos</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en Industria Electrónica</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-microchip"></i>
              Validación del diseño electrónico
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El sobrecalentamiento de los componentes de PCB dentro de un chasis cerrado provoca problemas de confiabilidad, mientras que los termopares de contacto distorsionan lecturas precisas en piezas pequeñas sensibles al calor debido a su masa térmica y sus efectos de conducción de calor.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta puntos calientes y áreas de enfriamiento ineficientes dentro del gabinete del equipo</li>
                <li>Mejora la identificación de fallas relacionadas con la temperatura durante el diseño y las pruebas</li>
                <li>Mejora la confiabilidad y la longevidad de los conjuntos electrónicos mediante un mejor análisis térmico</li>
                <li>Facilita la inspección sin contacto de componentes electrónicos compactos o inaccesibles</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi400 LT USB</span>
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> El Optris Xi 400 es pequeño y fácil de montar en un sistema de rieles, ubicado tanto por encima como por debajo del chasis del equipo, donde se ubican las ventanas infrarrojas. Su ángulo optimiza la línea de visión hacia los componentes importantes. El software PIX Connect facilita la configuración de puntos o áreas pequeñas para medir el píxel más caliente dentro de las áreas cerradas</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-desktop"></i>
              Desarrollo de PCB
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Gestionar el calor en PCB de alta densidad de potencia es difícil debido al espacio limitado, los grandes componentes que generan calor y el riesgo de picos térmicos debido a un diseño deficiente. Los métodos de contacto tradicionales no proporcionan datos térmicos completos, lo que dificulta la detección y el tratamiento eficaz de los puntos calientes durante la fase de diseño.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Mejora la confiabilidad al identificar puntos críticos antes de finalizar el diseño de la placa</li>
                <li>Reduce los riesgos de fallos y los costosos retiros del mercado mediante la optimización térmica temprana</li>
                <li>Acelera el desarrollo con iteraciones de pruebas térmicas eficientes en el laboratorio</li>
                <li>Reduce costos al eliminar configuraciones extensas de termopares y mano de obra</li>
                <li>Permite tomar decisiones de diseño informadas con datos térmicos completos y en tiempo real</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Las cámaras infrarrojas permiten la visualización térmica de toda la superficie de los prototipos de PCB alimentados, lo que permite a los ingenieros detectar y abordar puntos calientes con antelación. Este método sin contacto facilita un análisis preciso y ajustes de diseño, garantizando una distribución térmica óptima sin afectar el rendimiento de la placa ni requerir sensores físicos de gran tamaño.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-search"></i>
              Investigación sobre MEMS
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La electrónica miniaturizada y los MEMS se enfrentan cada vez más a un sobrecalentamiento localizado debido a la densidad de los circuitos y al encapsulado en capas, lo que dificulta la validación térmica. Detectar defectos microscópicos y puntos calientes de forma no invasiva en estructuras complejas es un desafío, especialmente cuando se requiere un análisis del subsuelo sin dañar componentes delicados.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Visualiza el comportamiento térmico de MEMS y microelectrónica con resolución espacial microscópica</li>
                <li>Identifica defectos térmicos y puntos calientes en forma temprana durante las etapas de diseño y validación</li>
                <li>Permite un análisis preciso de gradientes de temperatura en estructuras de circuitos integrados y paquetes complejos</li>
                <li>Mejora el rendimiento y la confiabilidad al evitar el sobrecalentamiento y las fallas del dispositivo relacionadas con la temperatura</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La microtermografía infrarroja permite el análisis térmico preciso y sin contacto de componentes microelectrónicos, visualizando las variaciones de temperatura superficial y subsuperficial en tiempo real. Esta técnica facilita el análisis de fallos y la localización de defectos con alta resolución espacial y térmica, incluso bajo excitación eléctrica, lo que garantiza la optimización térmica durante las etapas de diseño y validación de componentes miniaturizados.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-exclamation-triangle"></i>
              Detección de fallas en PCB
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Detectar cortocircuitos de alimentación a tierra en PCB multicapa es difícil sin causar daños. Los métodos de inspección tradicionales pueden fallar, especialmente con fallas en las capas internas, y la aplicación directa de corriente puede causar daños permanentes. Identificar cortocircuitos ocultos requiere experiencia especializada, equipos costosos y una inversión considerable de tiempo, lo que dificulta la localización oportuna de fallas.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta rápidamente cortocircuitos ocultos sin riesgo de dañar placas prototipo valiosas o únicas</li>
                <li>Reduce el tiempo de diagnóstico y elimina la necesidad de costosos equipos de pruebas electrónicas especializados</li>
                <li>Mejora la confiabilidad y la garantía de calidad desde las pruebas de prototipos hasta las fases de producción en serie</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La inspección termográfica infrarroja detecta eficazmente cortocircuitos ocultos en PCB mediante la visualización de patrones de calor anormales causados por sobretensiones de corriente a través de rutas no deseadas. Este método no destructivo localiza rápidamente las fallas, incluso en capas internas complejas, lo que permite una detección temprana antes de que se produzcan daños graves, mejorando significativamente la velocidad, la fiabilidad y la precisión del diagnóstico en ensambles electrónicos.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cogs"></i>
              Soldadura por reflujo
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Mantener una temperatura uniforme en las placas de circuito impreso (PCB) durante la soldadura por reflujo es difícil debido a la variación en el tamaño y los materiales de los componentes. Los componentes sensibles son propensos a la tensión térmica, y los métodos tradicionales de monitorización de temperatura no proporcionan datos directos y en tiempo real sobre las condiciones individuales de cada placa durante la producción continua de gran volumen.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Mejora la calidad de la unión de soldadura mediante el seguimiento continuo de las temperaturas reales de la PCB</li>
                <li>Reduce las interrupciones de producción al eliminar la necesidad de realizar perfiles frecuentes de las placas de prueba</li>
                <li>Permite el ajuste automático del horno para minimizar las desviaciones de temperatura de forma proactiva</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Cthot LT</span>
                <span class="equipment-tag">CT LT Láser</span>
                <span class="equipment-tag">CT LT</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Estos pirómetros proporcionan mediciones de temperatura precisas sin contacto, lo que garantiza un control preciso de las temperaturas de la PCB sin interferir físicamente con el proceso. Esta precisión ayuda a mantener una calidad de soldadura constante en múltiples placas, lo que reduce el riesgo de defectos causados por un calentamiento inadecuado.</p>
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