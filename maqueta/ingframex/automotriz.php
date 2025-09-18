<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Industria Automotriz - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/automotriz.webp');
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
      <h1>INDUSTRIA AUTOMOTRIZ</h1>
      <p>Soluciones precisas de medición de temperatura para optimizar ensamblajes y controlar procesos térmicos en componentes clave como discos de freno, asegurando rendimiento y seguridad en la industria automotriz.</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en la Industria Automotriz</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-car"></i>
              Control de la calefacción de las ventanas del automóvil
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La lubricación insuficiente en las cajas de engranajes durante las pruebas de final de línea puede provocar un calentamiento desigual y daños mecánicos graves; sin embargo, es difícil de detectar manualmente o mediante sensores de contacto, lo que hace que los métodos de inspección tradicionales consuman mucho tiempo, sean poco confiables y no sean adecuados para entornos de producción automatizados.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Previene daños mecánicos al detectar fallas de lubricación antes del envío del producto</li>
                <li>Reduce el tiempo de inspección con un monitoreo de temperatura rápido y automatizado</li>
                <li>Mejora la precisión de las pruebas sin necesidad de contacto físico con el sensor</li>
                <li>Permite una respuesta inmediata a fallas mediante la activación automática de alarmas</li>
                <li>Se integra fácilmente en los sistemas de control de calidad y pruebas existentes</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Las imágenes térmicas automatizadas capturan los cambios de temperatura de la superficie en las carcasas de las cajas de engranajes selladas, lo que permite la detección en tiempo real de problemas de lubricación a través del análisis de la distribución del calor, lo que permite respuestas inmediatas y se integra perfectamente en los bancos de prueba de final de línea sin interferir con otros procesos paralelos.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-industry"></i>
              Estabilización del PAN
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El control preciso de la temperatura durante la oxidación del precursor de PAN es difícil en entornos de altas temperaturas, pero es crucial para producir fibra de carbono consistente y de alta calidad, minimizando al mismo tiempo el desperdicio y la repetición del trabajo.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza una estabilización constante del precursor para obtener una producción de fibra de carbono de alta calidad</li>
                <li>Previene el sobrecalentamiento y el subcalentamiento, reduciendo los defectos y la degradación del material</li>
                <li>Minimiza el desperdicio de producción y el retrabajo, mejorando la eficiencia operativa</li>
                <li>Admite el cumplimiento de estrictas demandas de calidad en fibra de carbono de grado automotriz</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Cthot LT</span>
                <span class="equipment-tag">CT LT</span>
                <span class="equipment-tag">Láser CT LT</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> El monitoreo continuo y sin contacto de la temperatura por infrarrojos permite el ajuste en tiempo real de los calentadores IR, manteniendo el proceso dentro del rango térmico óptimo sin interferir con los sistemas de calefacción.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cogs"></i>
              Control de calidad de la caja de cambios
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La lubricación insuficiente en las cajas de engranajes durante las pruebas de final de línea puede provocar un calentamiento desigual y daños mecánicos graves; sin embargo, es difícil de detectar manualmente o mediante sensores de contacto, lo que hace que los métodos de inspección tradicionales consuman mucho tiempo, sean poco confiables y no sean adecuados para entornos de producción automatizados.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Previene daños mecánicos al detectar fallas de lubricación antes del envío del producto</li>
                <li>Reduce el tiempo de inspección con un monitoreo de temperatura rápido y automatizado</li>
                <li>Mejora la precisión de las pruebas sin necesidad de contacto físico con el sensor</li>
                <li>Permite una respuesta inmediata a fallas mediante la activación automática de alarmas</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Las imágenes térmicas automatizadas capturan los cambios de temperatura de la superficie en las carcasas de las cajas de engranajes selladas, lo que permite la detección en tiempo real de problemas de lubricación a través del análisis de la distribución del calor, lo que permite respuestas inmediatas y se integra perfectamente en los bancos de prueba de final de línea sin interferir con otros procesos paralelos.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-fire"></i>
              Soldadura de tanques de combustible
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La soldadura de tanques de combustible de plástico en la industria automotriz exige un calentamiento uniforme en toda la superficie de unión. Un control inadecuado de la temperatura provoca soldaduras débiles, distorsiones, grietas y fugas, lo que pone en riesgo la seguridad y aumenta las tasas de reprocesamiento o desechos debido a la insuficiente resistencia de la unión y la inconsistencia del proceso.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Minimiza el riesgo de fugas al garantizar temperaturas de soldadura uniformes en toda el área de unión</li>
                <li>Mejora la calidad general del producto y la confiabilidad de la fabricación</li>
                <li>Permite un control de calidad más rápido y automatizado con controles manuales mínimos</li>
                <li>Se integra perfectamente en las líneas existentes con una interrupción operativa mínima</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 400i</span>
                <span class="equipment-tag">PI 450i</span>
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Al integrar la monitorización de temperatura por infrarrojos en la línea de soldadura, se observa toda el área de soldadura en tiempo real. Esto garantiza una distribución uniforme del calor durante la unión, lo que permite un control preciso del proceso y reduce la aparición de defectos causados por un calentamiento desigual o insuficiente.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-thermometer"></i>
              Prueba del calentador del asiento del automóvil
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La prueba manual de los calentadores de los asientos del automóvil requiere mucho tiempo y no es confiable, y existe el riesgo de que se produzcan fallas no detectadas en cables de calefacción frágiles o conexiones de cables que podrían generar sobrecalentamiento o peligro de incendio.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Permite la detección temprana de problemas de conexión de cables y daños en los cables</li>
                <li>Confirma que los sistemas de seguridad funcionan de manera confiable antes de que los asientos abandonen la estación</li>
                <li>Garantiza un aumento constante de la temperatura del asiento en todas las unidades probadas</li>
                <li>Admite un flujo de producción eficiente con señalización automatizada de aprobado/reprobado</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI 450i</span>
                <span class="equipment-tag">PI 400i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> El sistema de imágenes térmicas automatiza las pruebas visuales y funcionales de los calentadores de asientos, lo que permite una rápida verificación de la distribución del calor y los mecanismos de apagado de seguridad a través del monitoreo de la temperatura en tiempo real.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-circle-o"></i>
              Validación del diseño de discos de freno
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Analizar con precisión la distribución de temperatura en los discos de freno metálicos es difícil debido a la emisividad variable y las limitaciones de los métodos de medición de contacto basados en puntos durante las simulaciones en bancos de pruebas dinámicos.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Identifica puntos críticos de temperatura que pueden provocar estrés térmico o fallas</li>
                <li>Reduce el uso de materiales y los costos de producción mediante decisiones de diseño informadas</li>
                <li>Previene fallas prematuras al garantizar estrategias efectivas de disipación de calor</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI 450i</span>
                <span class="equipment-tag">PI 400i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La implementación de la cámara IR ha proporcionado a Knott GmbH importantes ventajas en sus procesos de prueba de discos de freno. Las imágenes térmicas de alta resolución han permitido identificar patrones de distribución de temperatura que antes eran indetectables con los métodos de medición tradicionales. Este análisis térmico detallado ha facilitado la optimización del diseño de los discos de freno.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-link"></i>
              Unión de piezas de carbono y plástico
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Lograr un calentamiento uniforme durante la unión de piezas de carbono y plástico es difícil, ya que las inconsistencias de temperatura pueden provocar una adhesión débil o daños en el material, comprometiendo la integridad estructural y la calidad del producto en aplicaciones automotrices.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza uniones fuertes y uniformes entre componentes de carbono y plástico</li>
                <li>Minimiza el desperdicio de material mediante un control preciso del calentamiento</li>
                <li>Mejora la eficiencia de la producción con ajustes de proceso en tiempo real</li>
                <li>Mejora la durabilidad del producto final y la satisfacción del cliente</li>
                <li>Se integra perfectamente en entornos de producción confinados para una automatización confiable</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Csmicro LT</span>
                <span class="equipment-tag">LTH de Csmicro</span>
                <span class="equipment-tag">Csmicro LT HS</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Los sensores térmicos sin contacto monitorizan la temperatura en tiempo real en las superficies de unión, lo que permite un control preciso durante el calentamiento. Su integración en la maquinaria permite ajustes inmediatos para garantizar una temperatura constante antes de la activación del adhesivo. El diseño compacto de los sensores CSmicro permite una fácil integración en las líneas de producción existentes, incluso en espacios reducidos.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-dot-circle-o"></i>
              Procesos de curado y vulcanizado de neumáticos
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La inconsistencia en la temperatura ambiente afecta la temperatura inicial de los neumáticos verdes, lo que resulta en productos sobrecurados o subcurados. Los tiempos de curado rígidos, sin considerar estas variaciones, comprometen la durabilidad, el rendimiento y la seguridad de los neumáticos, lo que aumenta las tasas de desecho y reduce la consistencia del producto.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza un curado uniforme a pesar de las fluctuaciones estacionales o diarias de la temperatura ambiente</li>
                <li>Reduce las tasas de desechos ocasionados por neumáticos demasiado cocidos o poco cocidos</li>
                <li>Aumenta el rendimiento general de los neumáticos al optimizar dinámicamente el tiempo de curado</li>
                <li>Mejora la calidad y la uniformidad del producto en todos los lotes de neumáticos</li>
                <li>Mejora la eficiencia energética al evitar un curado excesivo innecesario</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Laser CT LT</span>
                <span class="equipment-tag">CT LT</span>
                <span class="equipment-tag">Ctfast LT</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Los sensores infrarrojos miden la temperatura superficial de cada neumático crudo antes del curado, lo que permite ajustar el tiempo de curado en tiempo real mediante un PLC. Este enfoque dinámico garantiza una vulcanización óptima a pesar de las fluctuaciones en las condiciones ambientales, lo que mejora el control del proceso y reduce los problemas de calidad relacionados con la temperatura.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-cubes"></i>
              Termoplásticos reforzados con fibra
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>La fabricación de termoplásticos reforzados con fibra continua requiere un calentamiento altamente uniforme y rápido de láminas orgánicas para evitar defectos como deformaciones o propiedades mecánicas inconsistentes durante el proceso de termoformado y moldeo por inyección. El proceso comienza con productos semiacabados conocidos como láminas orgánicas, estas láminas se someten a una transformación de varias etapas, que incluye el calentamiento, el termoformado a la forma deseada y el moldeo por inyección posterior</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Garantiza una calidad del producto constantemente alta mediante una distribución uniforme de la temperatura</li>
                <li>Previene defectos causados por un calentamiento desigual durante el termoformado</li>
                <li>Admite una producción a gran escala confiable e ininterrumpida</li>
                <li>Permite la regulación del proceso en tiempo real y el control de calefacción adaptativo</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">CT LT</span>
                <span class="equipment-tag">Ctfast LT</span>
                <span class="equipment-tag">Laser CT LT</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La tecnología de calentamiento por infrarrojos está diseñada para calentar las láminas orgánicas de forma rápida y uniforme, un factor crucial en la producción a gran escala. Un solo fallo del pirómetro podría detener la producción por completo, por lo que la fiabilidad de cada componente es esencial. Para garantizar un rendimiento óptimo, los resultados se verifican continuamente mediante cámaras infrarrojas Optris.</p>
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