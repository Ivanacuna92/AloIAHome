<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria del Vidrio - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/vidrio.webp');
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
      <h1>INDUSTRIA DEL VIDRIO</h1>
      <p>Soluciones avanzadas de control térmico para optimizar la calidad, eficiencia y seguridad en todos los procesos de fabricación de vidrio</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en la Industria del Vidrio</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-layer-group"></i>
              Producción de vidrio
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>En el proceso de producción de vidrio laminado de seguridad, se suelen unir dos o tres paneles de vidrio mediante una película de PVB bajo calor y presión. El objetivo de este proceso es crear una capa que garantice la adhesión de los fragmentos en caso de rotura, evitando así lesiones.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Permite un calentamiento uniforme, lo que garantiza una unión de PVB fuerte y consistente entre las capas de vidrio</li>
                <li>Minimiza los defectos del producto al identificar desviaciones de temperatura en tiempo real</li>
                <li>Reduce el desperdicio de material y la repetición del trabajo mediante la detección temprana de problemas de laminación</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Una ventaja principal es la capacidad de lograr un control de temperatura preciso y constante, esencial para garantizar la alta calidad del vidrio laminado. Al mantener un calentamiento uniforme en toda la superficie del vidrio, estos dispositivos ayudan a prevenir problemas comunes de producción, como la adhesión desigual o la delaminación.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-fire"></i>
              Templado de vidrio
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El templado térmico se emplea en áreas como el acabado, la construcción, el vidrio de seguridad y el diseño de vidrio, todo el proceso depende en gran medida de que la temperatura del panel de vidrio se mantenga uniformemente por encima del punto de transformación al iniciar el enfriamiento.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza un calentamiento y enfriamiento uniformes para una mayor calidad del vidrio templado</li>
                <li>Reduce los defectos de producción causados por una distribución desigual de la temperatura</li>
                <li>Permite el control del proceso en tiempo real para realizar ajustes inmediatos del horno</li>
                <li>Se instala fácilmente en líneas de templado existentes, lo que minimiza el tiempo de inactividad y los costos</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">GIS 640i G7</span>
                <span class="equipment-tag">PI 640i G7</span>
                <span class="equipment-tag">PI 450i G7</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Garantiza un calentamiento y enfriamiento uniformes. Reduce los defectos de producción causados por una distribución desigual de la temperatura. Permite el control del proceso en tiempo real para realizar ajustes inmediatos del horno. Se instala fácilmente en líneas de templado existentes.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-vial"></i>
              Procesamiento de tubos de vidrio
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El proceso de conformado de vidrio exige un control preciso de la temperatura para evitar defectos estructurales, como espesores de pared desiguales o roturas debido a temperaturas excesivamente altas o bajas. Los pirómetros infrarrojos miden con precisión la temperatura del vidrio en tiempo real, garantizando un control óptimo de la temperatura durante la formación del tubo de vidrio.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Reduce los defectos al garantizar una temperatura uniforme del tubo de vidrio, mejorando la resistencia mecánica y la durabilidad</li>
                <li>Minimiza el tiempo de inactividad mediante un monitoreo preciso en tiempo real y ajustes inmediatos durante la producción</li>
                <li>Reduce los costos de mantenimiento y operación al evitar daños relacionados con el sobrecalentamiento e interrupciones del proceso</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Ctlaser G5</span>
                <span class="equipment-tag">Ctlaser G7</span>
                <span class="equipment-tag">CT G5</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La serie CTLaser G5 cuenta con marcas de puntería láser dobles, lo que proporciona un soporte de puntería preciso y minimiza los errores de alineación. La selección de la longitud de onda es crucial para medir la superficie y las capas más profundas del vidrio, con recomendaciones específicas basadas en los niveles de temperatura y las propiedades del material.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-paint-brush"></i>
              Fabricación de esmalte
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>En la producción de esmalte, los controles esporádicos de temperatura durante el vertido del material provocaron variaciones de calidad debido a fluctuaciones no detectadas en el rango de 1000 a 1500 °C, lo que hace que el monitoreo constante sea esencial para mantener los estándares del producto. Se instala una cámara térmica fija para monitorear continuamente la temperatura del esmalte fundido durante el vertido, lo que permite la detección en tiempo real de fluctuaciones y la integración en el sistema de control automatizado de la planta para obtener una producción constante y de alta calidad.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>La monitorización continua elimina la pérdida de calidad causada por desviaciones de temperatura no detectadas</li>
                <li>La retroalimentación del proceso en tiempo real permite tomar acciones correctivas rápidas y una producción estable</li>
                <li>Reducción de los requisitos de mano de obra</li>
                <li>Mayor eficiencia mediante la integración con sistemas de control y flujo de datos automatizado</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 1M</span>
                <span class="equipment-tag">PI 640i G7</span>
                <span class="equipment-tag">Ctlaser G7</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Mediante la monitorización continua de la temperatura, se pueden identificar fluctuaciones significativas de temperatura al inicio, a la mitad y al final del vertido. Esta información permitió realizar ajustes precisos en los parámetros del proceso, lo que resultó en una calidad constante del producto. La capacidad de detectar desviaciones de temperatura de inmediato significa que el proceso de producción ahora es mucho más eficiente y está más controlado.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-window-maximize"></i>
              Procesamiento de vidrio de un solo plano
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Lograr un calentamiento uniforme durante el templado del vidrio es difícil, especialmente en el caso del vidrio de baja emisividad con recubrimientos reflectantes. Los métodos convencionales no miden las temperaturas superficiales reales, lo que genera problemas de calidad. La instalación de sistemas de imagen térmica infrarroja ascendente permite la monitorización en tiempo real de las temperaturas reales de la superficie del vidrio. La medición desde la cara sin recubrimiento del vidrio garantiza un perfil térmico preciso.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza un calentamiento y enfriamiento homogéneos para vidrio templado de alta calidad</li>
                <li>Reduce el desperdicio de material al prevenir defectos relacionados con el estrés térmico</li>
                <li>Permite la detección rápida de fracturas y una respuesta protectora inmediata</li>
                <li>Mejora la eficiencia del proceso con un control térmico preciso en tiempo real</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 450i G7</span>
                <span class="equipment-tag">PI 640i G7</span>
                <span class="equipment-tag">GIS 640i G7</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> El PI 450i G7 o el PI 640i G7 se colocan debajo del vidrio, lo que les permite capturar imágenes térmicas precisas de la cara sin recubrimiento del vidrio de baja emisividad, evitando así los problemas relacionados con los recubrimientos de baja emisividad.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-tint"></i>
              Producción de gotas de vidrio
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Una vez que la masa de vidrio alcanza la consistencia adecuada, se dirige a un alimentador, que forma el vidrio en porciones con forma de gota llamadas gotas. Estas gotas, precursoras de los envases de vidrio finales, se cortan a intervalos y se transfieren a la máquina formadora. El procesamiento se ve afectado por temperaturas y posicionamientos inconsistentes durante el transporte, lo que provoca deformaciones, tensiones o defectos en el producto final.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Previene la deformación de la gota al garantizar una temperatura constante durante el transporte</li>
                <li>Reduce la tensión y los defectos del vidrio mediante un control óptimo del enfriamiento de la gota</li>
                <li>Permite la colocación precisa de gotas para mejorar la precisión y simetría del formado</li>
                <li>Admite la detección temprana de anomalías del proceso para tomar medidas correctivas rápidas</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 1M</span>
                <span class="equipment-tag">Xi 1M ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Al monitorear continuamente la temperatura y la posición con cámaras infrarrojas, los operadores obtienen información en tiempo real sobre cada gota. Esto permite la detección temprana y la corrección de anomalías, reduce los ajustes manuales y facilita la automatización del transporte y el conformado de las gotas, mejorando la fiabilidad y la consistencia del proceso en toda la línea de producción.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-shield-alt"></i>
              Producción de vidrio de seguridad
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>En el proceso de producción de vidrio laminado de seguridad, se suelen unir dos o tres paneles de vidrio mediante una película de butiral de polivinilo (PVB) bajo calor y presión. El objetivo de este proceso es crear una capa que garantice la adhesión de los fragmentos en caso de rotura, evitando así lesiones. Medir con precisión la temperatura en la producción de vidrio laminado de seguridad es difícil debido a la baja emisividad infrarroja del vidrio, los recubrimientos reflectantes y el acceso restringido a los equipos de laminación.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Permite un calentamiento uniforme, lo que garantiza una unión de PVB fuerte y consistente entre las capas de vidrio</li>
                <li>Reduce el desperdicio de material y la repetición del trabajo mediante la detección temprana de problemas de laminación</li>
                <li>Permite un monitoreo preciso incluso en espacios de equipos reducidos u obstruidos</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Mediante el uso de sensores infrarrojos capaces de medir con precisión la temperatura superficial a través de estrechas ranuras de visualización, el proceso de laminación se supervisa y controla con precisión. Las cámaras infrarrojas de barrido lineal y los pirómetros compactos garantizan información térmica en tiempo real.</p>
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