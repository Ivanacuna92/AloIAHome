<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria del Plástico - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/plastico.webp');
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
      <h1>INDUSTRIA DEL PLÁSTICO</h1>
      <p>Soluciones avanzadas de monitoreo térmico para optimizar procesos de fabricación, mejorar la calidad y reducir desperdicios en la industria del plástico</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en la Industria del Plástico</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cogs"></i>
              Moldeo por inyección
            </h3>
            <div class="application-content">
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta inconsistencias térmicas de forma temprana para evitar que las piezas defectuosas continúen en la cadena de suministro</li>
                <li>Admite el mantenimiento predictivo al señalar problemas en desarrollo, como canales de enfriamiento bloqueados</li>
                <li>Minimiza los desechos y el desperdicio de material mediante un control preciso del proceso térmico</li>
                <li>Permite una calidad de pieza consistente</li>
              </ul>
              
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-sticky-note"></i>
              Control de calidad de adhesivos
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Mantener una aplicación uniforme del adhesivo en láminas de plástico acanaladas es difícil debido al alto rendimiento, la variación de temperatura y la necesidad de un control de calidad cuantitativo y rastreable sin inspección manual.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta la aplicación inconsistente de adhesivo instantáneamente durante la producción</li>
                <li>Reduce los desechos y el retrabajo al garantizar la correcta colocación del cordón</li>
                <li>Permite un control de calidad trazable para industrias críticas para la seguridad</li>
                <li>Acelera la integración en los sistemas de automatización existentes</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Una cámara térmica fija monitorea la zona adhesiva en un momento preciso después de la expulsión, utilizando mediciones de temperatura promedio para evaluar la consistencia del cordón y activar alarmas si ocurren desviaciones.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-thermometer-half"></i>
              Proceso de termoformado
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El termoformado de películas plásticas delgadas exige un control preciso de la temperatura cerca de calentadores infrarrojos, donde la interferencia espectral y la transparencia del material complican la medición precisa y sin contacto de la temperatura.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza un calentamiento uniforme de las láminas de plástico para una calidad constante del producto</li>
                <li>Minimiza el desperdicio de material causado por sobrecalentamiento o subcalentamiento</li>
                <li>Permite el control de procesos en tiempo real mediante la integración con sistemas PLC</li>
                <li>Reduce el consumo de energía al optimizar la salida del calentador</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">TC P3</span>
                <span class="equipment-tag">TC P7</span>
                <span class="equipment-tag">CT LT</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> El uso de pirómetros infrarrojos con sensibilidad espectral adaptada a las bandas de absorción de plástico garantiza lecturas de temperatura precisas, evitando interferencias de calentadores infrarrojos y abordando los desafíos de transparencia específicos del material.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-paint-brush"></i>
              Aplicación de adhesivo
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La aplicación de adhesivo en láminas de plástico acanaladas es irregular, lo que genera problemas de calidad en las piezas de plástico tipo sándwich. Las comprobaciones infrarrojas manuales son demasiado lentas y poco fiables para una monitorización constante en una producción de ritmo rápido.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza una aplicación uniforme del adhesivo controlando la temperatura en etapas de producción precisas</li>
                <li>Permite la documentación de fallas para la trazabilidad en los sectores aeroespacial y de defensa</li>
                <li>Se adapta a diferentes tamaños y formas de piezas con óptica flexible y ajustes de distancia</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI 450i</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Una cámara infrarroja fija monitorea las zonas adhesivas inmediatamente después de la expulsión de la pieza, utilizando el análisis de temperatura promedio para verificar la calidad de la aplicación y activar alarmas cuando el tamaño del cordón es insuficiente, todo sin programación personalizada.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-sync-alt"></i>
              Fabricación por rotomoldeo
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La distribución inconsistente de la temperatura en las complejas piezas de plástico rotomoldeadas dificulta la sincronización precisa de la inserción de los componentes, ya que los sensores de punto único no logran capturar el perfil térmico completo necesario para garantizar una calidad constante durante las transiciones de enfriamiento y moldeo.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>La aplicación de adhesivo en láminas de plástico acanaladas es irregular, lo que genera problemas de calidad en las piezas de plástico tipo sándwich. Las comprobaciones infrarrojas manuales son demasiado lentas y poco fiables para una monitorización constante en una producción de ritmo rápido</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Una cámara infrarroja captura imágenes térmicas completas de todo el casco del kayak, lo que permite una identificación precisa de las zonas de temperatura y un tiempo optimizado para insertar accesorios o liberar la pieza del molde.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-link"></i>
              Soldadura de plástico
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El fabricante necesita mediciones de temperatura precisas y rápidas durante el proceso de calentamiento rápido de las piezas de plástico para garantizar una soldadura precisa y prevenir fugas. Es fundamental detectar las desviaciones de temperatura para evitar la producción de filtros defectuosos.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>El control automatizado de la temperatura mejora la precisión de la soldadura y minimiza el riesgo de fugas</li>
                <li>El rechazo confiable de filtros defectuosos agiliza el proceso de producción</li>
                <li>La integración en el sistema de control permite una automatización de procesos sin esfuerzo</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Una cámara infrarroja monitoriza la temperatura en tiempo real, lo que permite detectar rápidamente las desviaciones de temperatura. Garantiza una soldadura precisa y automatiza la clasificación de rechazos integrándose a la perfección con el proceso de producción.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-tachometer-alt"></i>
              Moldeo rápido de plástico
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>En el moldeo por inyección, estirado y soplado de alta velocidad, el calentamiento preciso de las preformas es crucial. Las desviaciones de temperatura pueden provocar defectos estructurales, espesores de pared irregulares o fallos del producto, lo que pone en riesgo la calidad y aumenta el desperdicio en entornos de producción en masa.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Tasas de desechos reducidas causadas por sobrecalentamiento o ablandamiento insuficiente</li>
                <li>Mayor estabilidad de producción a altas velocidades de funcionamiento</li>
                <li>Los sensores compactos se adaptan perfectamente a los equipos de moldeo existentes</li>
              </ul>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Los pirómetros infrarrojos y las cámaras térmicas permiten la monitorización precisa y en línea de la temperatura de las preformas durante el calentamiento. Su integración en las máquinas de moldeo permite la detección y corrección instantánea de desviaciones, garantizando así las condiciones óptimas para la formación uniforme de botellas, incluso a altas velocidades de producción, gracias a la tecnología de termómetros sin contacto.</p>
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