<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Detección de Incendios y Seguridad - INGFRAMEX</title>
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/incendios.webp');
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
      <h1>DETECCIÓN TEMPRANA DE INCENDIOS Y SEGURIDAD</h1>
      <p>Soluciones avanzadas de detección térmica para prevenir incendios y garantizar la seguridad en entornos industriales</p>
    </div>
  </section>
  
  <section class="applications-section">
    <div class="container">
      <div class="section-header">
        <h2>Aplicaciones en Detección de Incendios y Seguridad</h2>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-fire"></i>
              Detección temprana de incendios
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Detectar incendios a tiempo en entornos industriales y de almacenamiento es difícil debido a las áreas extensas, el polvo y la dispersión retardada del humo o el calor. Los detectores tradicionales de humo, calor y gas suelen activarse demasiado tarde o generar falsas alarmas, especialmente en espacios sucios, abiertos o complejos, como plantas de reciclaje y grandes almacenes.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detecta riesgos de incendio antes de los signos visibles, minimizando los daños potenciales</li>
                <li>Trabaja de forma autónoma las 24 horas del día sin necesidad de supervisión humana constante</li>
                <li>Se integra fácilmente en las infraestructuras de seguridad y extinción de incendios existentes</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI 640i CM</span>
                <span class="equipment-tag">PI 410 LT ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La termografía infrarroja permite la detección temprana de incendios al detectar las señales de calor ascendentes antes de que aparezcan humo o llamas visibles. Al integrar cámaras infrarrojas en sistemas autónomos con algoritmos de análisis inteligentes, los incendios se pueden detectar con rapidez y precisión incluso en entornos exigentes.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-train"></i>
              Túneles ferroviarios
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Las pruebas de incendio en líneas aéreas y aisladores implican medir con precisión los gradientes de temperatura y las dilataciones térmicas a pesar del humo denso, el calor intenso y la falta de valores de referencia establecidos. Garantizar la visibilidad, la precisión de las mediciones y la fiabilidad de los sensores durante un periodo de exposición de 40 a 50 minutos en condiciones extremas de incendio presenta importantes desafíos prácticos.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Medición de temperatura continua y confiable a pesar del humo denso, lo que permite una evaluación precisa de la resistencia al calor</li>
                <li>La identificación temprana de puntos de falla de los componentes mejora las medidas de seguridad preventivas</li>
                <li>La evaluación rápida y precisa de la integridad de las líneas aéreas facilita la optimización eficiente de la infraestructura</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">PI 640i</span>
                <span class="equipment-tag">PI1M</span>
                <span class="equipment-tag">PI 640i CM</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Cámaras infrarrojas estratégicamente ubicadas a diferentes distancias y alturas monitorizan con precisión la distribución de la temperatura en líneas aéreas y aisladores durante todo el incendio.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-industry"></i>
              Prevención de incendios en trituradoras de residuos
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Las trituradoras industriales no tripuladas generan calor por fricción, lo que supone un riesgo de incendio debido a los materiales combustibles y a la limitada intervención humana. Los incendios se propagan sin ser detectados, especialmente en zonas remotas, poniendo en peligro al personal y la maquinaria. Por ello, se requiere una monitorización continua, respuestas automatizadas inmediatas y sistemas de detección fiables para mitigar daños significativos y mantener la seguridad operativa.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>La detección temprana de incendios minimiza el tiempo de inactividad del equipo y evita grandes pérdidas de producción</li>
                <li>Las respuestas automáticas de emergencia aumentan la seguridad operativa al mitigar rápidamente los riesgos de incendio sin demoras</li>
                <li>La monitorización continua reduce la dependencia de la vigilancia humana, disminuyendo significativamente los costes de personal</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 80 LT ETH</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Las cámaras infrarrojas proporcionan monitoreo autónomo de temperatura, lo que permite la detección temprana de incendios en trituradoras industriales. Al detectar temperaturas elevadas, el sistema activa de forma independiente acciones preventivas automáticas, como el apagado de la maquinaria o la activación de los sistemas de extinción, garantizando así una protección fiable y continua, y una integración perfecta con las estructuras de gestión de seguridad existentes.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-recycle"></i>
              Procesos de reciclaje de residuos
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Los búnkeres de basura son propensos a incendios espontáneos debido a los desechos combustibles y las condiciones confinadas, lo que hace que la detección temprana sea vital para evitar daños a las instalaciones, humo tóxico y costosos esfuerzos de extinción de incendios con agua.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Previene incendios a gran escala mediante la detección temprana de anomalías térmicas</li>
                <li>Permite una respuesta específica, reduciendo el uso innecesario de agua</li>
                <li>Minimiza el tiempo de inactividad de las instalaciones y las interrupciones operativas</li>
                <li>Mejora la seguridad de los trabajadores al evitar la exposición al humo tóxico</li>
                <li>Reduce el impacto ambiental del agua de extinción contaminada</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 640 LT USB</span>
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> Un sistema de monitoreo térmico escanea continuamente las superficies de los búnkeres para detectar un aumento temprano de la temperatura, lo que permite la identificación rápida de riesgos de ignición y permite intervenciones localizadas oportunas antes de que los incendios se intensifiquen</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-file-text"></i>
              Fabricación de papel
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>Monitorear la temperatura en áreas confinadas y polvorientas de las máquinas de procesamiento de papel es difícil, lo que dificulta la detección de la peligrosa acumulación de calor antes del inicio de la combustión. Confiar únicamente en los detectores de humo genera alertas tardías, lo que resulta en interrupciones de la producción, daños en la maquinaria y mayores riesgos de seguridad.</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Detección temprana de riesgos de incendio antes de que se produzca humo o combustión</li>
                <li>Minimiza el tiempo de inactividad no planificado debido a paradas de la máquina relacionadas con incendios</li>
                <li>Protege la maquinaria contra daños por calor, lo que prolonga la vida útil del equipo</li>
                <li>Permite una operación segura sin necesidad de inspección manual constante</li>
                <li>Garantiza un flujo de proceso constante al evitar interrupciones provocadas por incendios</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">Xi 80 LT ETH</span>
                <span class="equipment-tag">Xi 410 LT ETH</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La termografía en tiempo real detecta con antelación el aumento de temperatura, incluso en zonas ocultas bajo las cintas transportadoras. La monitorización continua de la acumulación de calor permite a los operadores actuar antes de que se produzcan incendios, previniendo así los incendios sin interrumpir la producción y garantizando la seguridad del proceso en zonas de alto riesgo.</p>
              </div>
            </div>
          </div>
          
          <div class="application-card">
            <h3 class="application-title">
              <i class="fa fa-tree"></i>
              Procesamiento de madera
            </h3>
            <div class="application-content">
              <h4>Descripción:</h4>
              <p>El problema para Binderholz es el riesgo potencial de incendio y la reducción de la calidad debido al sobrecalentamiento de las piezas de las máquinas cepilladoras de madera modernas. Al procesar productos de madera, algunas piezas de la máquina, en particular las reglas de alimentación y las zapatas de presión, pueden calentarse mucho debido a la alta presión de contacto y la fricción asociada</p>
              
              <h4>Beneficios:</h4>
              <ul class="benefits-list">
                <li>Previene incendios al detectar puntos calientes antes de que se produzca la ignición</li>
                <li>Mantiene la calidad de la madera evitando defectos superficiales inducidos por el calor</li>
                <li>Permite la detección temprana de la acumulación de calor relacionada con el desgaste en las piezas de la máquina</li>
                <li>Admite una producción eficiente con monitoreo térmico continuo y manos libres</li>
              </ul>
              
              <h4>Equipos recomendados:</h4>
              <div class="equipment-tags">
                <span class="equipment-tag">Xi 400 LT USB</span>
                <span class="equipment-tag">PI 400i</span>
                <span class="equipment-tag">PI 640i</span>
              </div>
              
              <div class="note-box">
                <p><strong>Nota adicional:</strong> La monitorización continua de la temperatura por infrarrojos garantiza la detección temprana del sobrecalentamiento en zonas críticas de la máquina. La termografía en tiempo real permite la automatización de alarmas y la integración con los sistemas de control, lo que permite una intervención proactiva sin interrumpir la producción ni requerir un cableado complejo en un entorno polvoriento y con virutas.</p>
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