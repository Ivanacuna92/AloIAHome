<?php include('header2.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Accesorios - Cámaras Infrarrojas - INGFRAMEX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Accesorios Optris para cámaras infrarrojas - Protección mecánica, ópticas, interfaces, cables y certificación para aplicaciones industriales.">
  <meta name="keywords" content="accesorios, cámaras infrarrojas, Optris, protección, ópticas, interfaces, cables, calibración">

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
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/accesorios/shutterxi.webp');
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f8f9fa;
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
      text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }
    
    .hero-section p {
      font-size: 1.2rem;
      font-weight: 300;
      max-width: 700px;
      margin: 0 auto;
      animation: fadeInUp 1s ease-out 0.3s;
      animation-fill-mode: both;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
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
    
    .category-header {
      text-align: left;
      margin-bottom: 40px;
      margin-top: 60px;
    }
    
    .category-header:first-of-type {
      margin-top: 0;
    }
    
    .category-header h3 {
      font-size: 2rem;
      font-weight: 400;
      color: #2563eb;
      margin-bottom: 0.5rem;
      border-bottom: 3px solid #2563eb;
      padding-bottom: 10px;
      display: inline-block;
    }
    
    .category-header p {
      color: #666;
      font-size: 1.1rem;
      margin-top: 15px;
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
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f8f9fa;
      min-height: 300px;
    }
    
    .product-content {
      width: 60%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .product-content h4 {
      font-size: 1.6rem;
      font-weight: 600;
      color: #2563eb;
      margin-bottom: 8px;
      line-height: 1.3;
    }
    
    .product-tagline {
      font-size: 1rem;
      font-style: italic;
      color: #666;
      margin-bottom: 15px;
      font-weight: 400;
    }
    
    .product-content p {
      color: #555;
      line-height: 1.7;
      margin-bottom: 20px;
      font-size: 0.95rem;
    }
    
    .specifications {
      background: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .specifications h5 {
      font-size: 1rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 10px;
    }
    
    .spec-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 8px;
    }
    
    .spec-item {
      display: flex;
      align-items: center;
      font-size: 0.85rem;
      color: #666;
    }
    
    .spec-item i {
      color: #2563eb;
      width: 16px;
      margin-right: 8px;
    }
    
    .materials {
      margin-top: 15px;
    }
    
    .materials h5 {
      font-size: 0.9rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 8px;
    }
    
    .material-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
    }
    
    .material-tag {
      background: #e0e7ff;
      color: #2563eb;
      padding: 4px 10px;
      border-radius: 12px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .product-row {
      display: flex;
      align-items: stretch;
      min-height: 300px;
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2.2rem;
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
        padding: 20px;
      }
      
      .spec-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
 
  <section class="hero-section" id="accesorios">
    <div class="container">
      <h1>ACCESORIOS OPTRIS</h1>
      <p>Soluciones completas de protección, montaje e interfaces para maximizar el rendimiento de sus cámaras infrarrojas en aplicaciones industriales.</p>
    </div>
  </section>
  
  <section class="products-section">
    <div class="container">
      <div class="section-header">
        <h2>Accesorios para Cámaras Infrarrojas</h2>
      </div>
      
      <!-- Mechanical Accessories -->
      <div class="category-header">
        <h3>Mecánicos</h3>
        <p>Soluciones de protección y montaje para ambientes industriales exigentes.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- Outdoor Protective Housing -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ACXIOPH24_front-1-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Carcasa Protectora para Exteriores Serie PI y Xi</h4>
                <p class="product-tagline">Carcasa protectora robusta y resistente para exteriores para cámaras infrarrojas serie PI y Xi</p>
                <p>La carcasa protectora para exteriores para cámaras infrarrojas Optris ofrece protección robusta en ambientes hostiles. Es compatible con todas las cámaras infrarrojas Optris y protege contra suciedad, polvo y humedad. Las características incluyen sistema de calefacción integrado, construcción de aluminio duradero, clasificación IP66, ventana protectora y collar de purga de aire. Puede albergar un servidor USB adicional e integración PIF industrial, y asegura una operación eficiente y vida útil extendida para sus cámaras.</p>
              </div>
            </div>
          </div>
          
          <!-- Wall Mount -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/wall-mount.webp');"></div>
              <div class="product-content">
                <h4>Soporte de Pared</h4>
                <p class="product-tagline">Diseñado para carcasa protectora de exteriores de cámaras infrarrojas</p>
                <p>El soporte de pared fija de forma segura la carcasa protectora para exteriores de las cámaras infrarrojas Optris a las paredes, asegurando estabilidad en entornos industriales y exteriores. Hecho de aluminio, la carcasa resiste ambientes hostiles y temperaturas extremas, protegiendo las cámaras. Equipado con ventilador de enfriamiento y calentador, mantiene condiciones óptimas. El soporte de pared asegura una instalación fácil y fijación segura, ideal para aplicaciones de monitoreo de condiciones.</p>
              </div>
            </div>
          </div>
          
          <!-- Camisa de Enfriamiento Avanzada -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/cooling-jacket.webp');"></div>
              <div class="product-content">
                <h4>Camisa de Enfriamiento Avanzada para Cámaras PI y Pirómetros</h4>
                <p class="product-tagline">Solución avanzada de protección, purga de aire y enfriamiento para aplicaciones de alta temperatura</p>
                <p>La Camisa de Enfriamiento Avanzada de Optris protege termómetros infrarrojos y cámaras en ambientes de alta temperatura hasta 315°C. Los pirómetros pueden soportar 250°C. Cuenta con enfriamiento por agua, ventanas protectoras opcionales y diseño modular para fácil integración de dispositivos y ópticas. El chasis de liberación rápida ayuda al mantenimiento, y la versión extendida soporta componentes como el PI NetBox. Construida con material V2A duradero, ofrece clasificación IP65 y purga de aire.</p>
              </div>
            </div>
          </div>
          
          <!-- Air Purge Laminar -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/air-purge.webp');"></div>
              <div class="product-content">
                <h4>Purga de Aire Laminar para Camisa de Enfriamiento Avanzada</h4>
                <p class="product-tagline">Asegurando ópticas limpias y mediciones infrarrojas precisas</p>
                <p>La purga de aire laminar para la Camisa de Enfriamiento Avanzada protege la lente del sensor infrarrojo en ambientes industriales robustos, asegurando trayectorias ópticas claras. Protege del polvo, humo y vapores, crucial para mediciones precisas de temperatura. Hecha de aluminio anodizado, incluye una ventana protectora adaptada a la sensibilidad espectral del sensor IR. Su flujo de aire laminar único previene la acumulación de polvo, asegurando confiabilidad en las mediciones infrarrojas.</p>
              </div>
            </div>
          </div>
          
          <!-- Mounting Flange -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/mounting-flange.webp');"></div>
              <div class="product-content">
                <h4>Brida de Montaje para Camisa de Enfriamiento Avanzada</h4>
                <p class="product-tagline">Fijación de cámara infrarroja PI en Camisas de Enfriamiento Avanzadas a paredes y hornos</p>
                <p>La brida de montaje en la Camisa de Enfriamiento Avanzada es para el montaje frontal de la carcasa de enfriamiento de forma segura en varias superficies, incluyendo tuberías y paredes de hornos. Asegura el posicionamiento correcto y la fijación firme. La brida incluye tornillos de montaje y arandelas necesarios, mejorando la versatilidad y adaptabilidad de la Camisa de Enfriamiento Avanzada para diferentes instalaciones.</p>
              </div>
            </div>
          </div>
          
          <!-- Pipe Flange -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/pipe-flange.webp');"></div>
              <div class="product-content">
                <h4>Brida de Tubería para Camisa de Enfriamiento Avanzada</h4>
                <p class="product-tagline">Fijación de cámara infrarroja en Camisas de Enfriamiento Avanzadas a tuberías</p>
                <p>La brida de tubería en la Camisa de Enfriamiento Avanzada está diseñada para el montaje frontal de la carcasa de enfriamiento. Proporciona una conexión segura para la instalación en varias superficies, incluyendo tuberías, y se ajusta a tubos de observación con rosca M48x1.5. Esta brida asegura que la carcasa de enfriamiento esté correctamente posicionada y firmemente sujeta. Incluye tornillos de montaje y arandelas necesarios, mejorando la versatilidad y adaptabilidad de la Camisa de Enfriamiento Avanzada.</p>
              </div>
            </div>
          </div>
          
          <!-- Shutter for PI Series -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/shutter.webp');"></div>
              <div class="product-content">
                <h4>Obturador para Serie PI</h4>
                <p class="product-tagline">Protección adicional para cámaras infrarrojas de la serie PI</p>
                <p>El accesorio de obturador para cámaras infrarrojas serie PI protege las ópticas con un mecanismo operado por servomotor, cerrándose en 100 milisegundos para proteger contra escombros. Incluye una caja de control para integración del sistema y puede combinarse con la interfaz de proceso para control automatizado. Cables opcionales de alta temperatura y accesorios de enfriamiento por agua están disponibles para protección mejorada.</p>
              </div>
            </div>
          </div>
          
          <!-- Shutter for Xi Series -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/shutterxi.webp');"></div>
              <div class="product-content">
                <h4>Obturador para Serie Xi</h4>
                <p class="product-tagline">Protección adicional para cámaras infrarrojas de la serie Xi</p>
                <p>El accesorio de obturador de la serie Xi protege las ópticas de la cámara con un mecanismo operado por servomotor que se abre y cierra rápidamente en 100 milisegundos, sellando completamente para prevenir suciedad y contaminantes. Incluye una caja de control para integración con otros sistemas y puede combinarse con la interfaz de proceso para control automatizado. Opcional en combinación con cables de alta temperatura y accesorios de enfriamiento por agua, es adecuado para temperaturas ambientales hasta 250°C.</p>
              </div>
            </div>
          </div>
          
          <!-- Xi Series Laminar Air Purge -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/xi-series-laminar.webp');"></div>
              <div class="product-content">
                <h4>Purga de Aire Laminar Serie Xi</h4>
                <p class="product-tagline">Asegurando ópticas limpias y mediciones infrarrojas precisas</p>
                <p>La purga de aire laminar de la serie Xi mantiene una trayectoria óptica clara de la cámara infrarroja en ambientes hostiles. Es efectiva contra polvo, humo y vapores para mediciones precisas de temperatura infrarroja. Se suministra con una ventana protectora adaptada para la sensibilidad espectral de las cámaras IR. A diferencia de otras purgas de aire para instrumentación de medición óptica, asegura que no se acumule polvo en los bordes de la lente debido al flujo de aire uniforme y constante, y el diseño único de flujo de aire laminar. Compatible con carcasa enfriada por agua y obturadores, mejora el monitoreo confiable de temperatura infrarroja.</p>
              </div>
            </div>
          </div>
          
          <!-- Water Cooled Housing Xi -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/water-cooled-housing.webp');"></div>
              <div class="product-content">
                <h4>Carcasa Enfriada por Agua para Serie Xi</h4>
                <p class="product-tagline">Enfriamiento activo para cámaras infrarrojas serie Xi en ambientes hostiles y calientes</p>
                <p>La carcasa enfriada por agua de la serie Xi asegura el rendimiento óptimo de las cámaras infrarrojas Xi en ambientes industriales de alta temperatura hasta 250°C. Está hecha de acero inoxidable duradero e incluye un soporte de montaje para posicionamiento preciso. Con una tasa de flujo de agua recomendada de 1-5 litros por minuto por debajo de 30°C, previene el sobrecalentamiento. Compatible con accesorios de obturador y purga de aire, protege la lente de la cámara de contaminantes para mediciones precisas de temperatura.</p>
              </div>
            </div>
          </div>
          
          <!-- Assembly Kit Xi Water Cooled -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/assembling-kits-for-xi.webp');"></div>
              <div class="product-content">
                <h4>Kit de Ensamblaje para Accesorio de Enfriamiento por Agua Xi</h4>
                <p class="product-tagline">Diseñado para cámaras infrarrojas Xi</p>
                <p>Estos kits de montaje son esenciales al usar la carcasa enfriada por agua con cámaras infrarrojas Optris. Al ordenar una cámara infrarroja Xi con carcasa enfriada por agua, el equipo de fabricación de Optris instalará y probará la cámara dentro de la carcasa. Estos kits de accesorios incluyen consumibles y el servicio para montar la cámara en la carcasa enfriada por agua y permiten la personalización, incluyendo el uso opcional del obturador Xi y el sistema de purga de aire laminar Xi.</p>
              </div>
            </div>
          </div>
          
          <!-- Protective Housing PI -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/protective-housing-for-pi.webp');"></div>
              <div class="product-content">
                <h4>Carcasa Protectora para Serie PI</h4>
                <p class="product-tagline">Diseñada para la serie PI</p>
                <p>Este accesorio es una carcasa protectora muy asequible para las cámaras infrarrojas de la serie PI de Optris. Esta carcasa de acero inoxidable incluye una base de montaje y un parasol para proteger la cámara en ambientes hostiles. El soporte de montaje cuenta con ajustabilidad en dos ejes, permitiendo el posicionamiento preciso y flexible de la cámara infrarroja. Esta ajustabilidad asegura que la cámara pueda alinearse perfectamente para un rendimiento óptimo en varias aplicaciones industriales y científicas.</p>
              </div>
            </div>
          </div>
          
          <!-- PI 640i Microscope Kit -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/pl-640-microscope.webp');"></div>
              <div class="product-content">
                <h4>Kit de Accesorio Microscopio PI 640i</h4>
                <p class="product-tagline">Kit de accesorio microscopio infrarrojo para cámara infrarroja Pi 640i</p>
                <p>La óptica de microscopio Optris es un accesorio para clientes con la cámara infrarroja PI 640i y otra óptica intercambiable. Esta óptica de microscopio mejora la capacidad de la PI 640i para analizar térmicamente placas de circuitos completas y tomas macro detalladas de componentes individuales. Su resolución térmica y geométrica de alta calidad asegura pruebas funcionales efectivas y precisas de productos electrónicos.</p>
                
                <div class="specifications">
                  <h5>Especificaciones Técnicas</h5>
                  <div class="spec-grid">
                    <div class="spec-item">
                      <i class="fa fa-search-plus"></i>
                      <span>28 µm tamaño mínimo</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-th"></i>
                      <span>640 × 480 px</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-thermometer-half"></i>
                      <span>-20 – 1500 °C</span>
                    </div>
                    <div class="spec-item">
                      <i class="fa fa-cog"></i>
                      <span>hasta 50 °C</span>
                    </div>
                  </div>
                </div>
                
                <div class="materials">
                  <h5>Materiales Compatibles</h5>
                  <div class="material-tags">
                    <span class="material-tag">Plásticos</span>
                    <span class="material-tag">Polímeros</span>
                    <span class="material-tag">Materiales Compuestos</span>
                    <span class="material-tag">Materiales Orgánicos</span>
                    <span class="material-tag">Metales No Reflectivos</span>
                    <span class="material-tag">Cerámicas</span>
                    <span class="material-tag">Semiconductores</span>
                    <span class="material-tag">Vidrio</span>
                    <span class="material-tag">Objetos Microscópicos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- PI 640i Microscope MO2X Kit -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/pl-640i-microscope.webp');"></div>
              <div class="product-content">
                <h4>Kit de Accesorio Microscopio PI 640i MO2X</h4>
                <p class="product-tagline">Kit de accesorio microscopio infrarrojo con magnificación 2X para cámara infrarroja Pi 640i</p>
                <p>El kit de óptica de microscopio para la cámara infrarroja PI 640i ofrece magnificación 2X y datos precisos de temperatura para dispositivos electrónicos pequeños y MEMS, esencial para aplicaciones de semiconductores. Visualiza variaciones térmicas y mide objetivos diminutos, aprovechando la resolución del detector de la cámara. La óptica puede detectar cambios de temperatura de estructuras extremadamente pequeñas hasta tamaño de 8 µm dentro de un campo de visión de 5.4 mm x 4.0 mm, asegurando mediciones precisas con un MFOV de 4 x 4 píxeles.</p>
              </div>
            </div>
          </div>
          
          <!-- Table Tripod -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/table-tripod.webp');"></div>
              <div class="product-content">
                <h4>Trípode de Mesa</h4>
                <p class="product-tagline">Montaje estable temporal para todas las cámaras infrarrojas Optris</p>
                <p>El trípode de mesa compacto asegura la alineación precisa de las cámaras infrarrojas PI y Xi de Optris en laboratorios, I+D, pruebas de campo y mediciones industriales. Compatible con todos los modelos PI y soportes de montaje Xi, ofrece una configuración segura. Su diseño ajustable permite el posicionamiento óptimo para la recolección precisa de datos térmicos. Duradero y confiable, es esencial para mediciones precisas e imágenes estables en varias aplicaciones.</p>
              </div>
            </div>
          </div>
          
          <!-- Mounting Base PI -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/mounting-base-pi.webp');"></div>
              <div class="product-content">
                <h4>Base de Montaje, Ajustable en Dos Ejes</h4>
                <p class="product-tagline">Diseñada para la serie de cámaras infrarrojas PI</p>
                <p>Este accesorio es una base de montaje de alta calidad diseñada explícitamente para cámaras infrarrojas Optris PI. Construida con acero inoxidable robusto, asegura durabilidad y longevidad incluso en ambientes hostiles. El soporte de montaje cuenta con ajustabilidad en dos ejes, permitiendo el posicionamiento preciso y flexible de la cámara infrarroja. Esta ajustabilidad asegura que la cámara infrarroja pueda alinearse perfectamente para un rendimiento óptimo en varias aplicaciones industriales y científicas.</p>
              </div>
            </div>
          </div>
          
          <!-- Two-Axes Mounting Xi -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/two-axes-mounting-bracket.webp');"></div>
              <div class="product-content">
                <h4>Soporte de Montaje de Dos Ejes para Cámaras Xi</h4>
                <p class="product-tagline">Diseñado para la serie de cámaras infrarrojas Xi</p>
                <p>Construido con acero inoxidable duradero, este soporte de montaje sostiene todas las cámaras infrarrojas Xi y ofrece ajuste en dos ejes. Esencial para asegurar la purga de aire laminar y el obturador, soporta temperaturas ambientales de 0°C a 250°C. Fácil de instalar y ajustar, asegura un ajuste seguro y alineación de las cámaras infrarrojas Xi, opcionalmente con la ventana protectora y el sistema de purga de aire.</p>
              </div>
            </div>
          </div>
          
          <!-- Standard Mounting Xi -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/standard-mounting-bracket.webp');"></div>
              <div class="product-content">
                <h4>Soporte de Montaje Estándar para Cámaras Xi</h4>
                <p class="product-tagline">Diseñado para la serie de cámaras infrarrojas Xi</p>
                <p>El soporte de montaje para las cámaras de la serie Xi es una pieza metálica simple para instalar las cámaras infrarrojas Xi para uso estacionario. Es ajustable en un eje y está hecho de acero inoxidable. El soporte también tiene una rosca de trípode estándar, proporcionando compatibilidad con varias opciones de montaje.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Optical Accessories -->
      <div class="category-header">
        <h3>Ópticos</h3>
        <p>Lentes intercambiables y ventanas protectoras para optimizar las mediciones infrarrojas.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- Unidad de Enfoque Camisa de Enfriamiento -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/focusing-unit.webp');"></div>
              <div class="product-content">
                <h4>Unidad de Enfoque Camisa de Enfriamiento Avanzada para Cámara PI</h4>
                <p class="product-tagline">Unidad de montaje frontal para cámara infrarroja PI dentro de la Camisa de Enfriamiento Avanzada</p>
                <p>La unidad de enfoque en la Camisa de Enfriamiento Avanzada alinea y estabiliza la cámara infrarroja PI, asegurando que esté correctamente posicionada y enfocada en el objetivo. Asegura la cámara dentro de la Camisa de Enfriamiento, previniendo el movimiento. Acomodando varias ópticas, permite una fácil instalación, ajuste y reemplazo. Consistiendo en partes externas e internas, mantiene la posición óptima de la cámara, asegurando un rendimiento consistente en condiciones adversas.</p>
              </div>
            </div>
          </div>
          
          <!-- Lens Protective Grid -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/cooling-jacket-advanced-lens.webp');"></div>
              <div class="product-content">
                <h4>Rejilla Protectora de Lente Camisa de Enfriamiento Avanzada</h4>
                <p class="product-tagline">Protege la óptica del sensor infrarrojo Optris de escombros</p>
                <p>La rejilla protectora para la Camisa de Enfriamiento Avanzada salvaguarda las ópticas del sensor infrarrojo previniendo que escombros y partículas dañen la lente. Hecha de materiales duraderos, asegura operación continua y eficiente en ambientes hostiles. La malla es fácil de reemplazar y permite mantenimiento y limpieza convenientes. Este accesorio es valioso en entornos con alto contenido de partículas, proporcionando defensa contra contaminación y daño mecánico de la lente del sensor infrarrojo. Se entrega preensamblada con la unidad de enfoque.</p>
              </div>
            </div>
          </div>
          
          <!-- Protective Windows -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/protective-windows.webp');"></div>
              <div class="product-content">
                <h4>Ventanas Protectoras</h4>
                <p class="product-tagline">Nivel extra de protección para ópticas de cámaras infrarrojas dentro de la Camisa de Enfriamiento Avanzada</p>
                <p>La ventana protectora para la Camisa de Enfriamiento Avanzada o carcasa protectora para exteriores protege las ópticas de cámaras infrarrojas y pirómetros del polvo y suciedad. Los tamaños disponibles son 50.8 mm x 3 mm para carcasa de exteriores y 67 mm x 3 mm para sistemas de purga de aire laminar. Las opciones de material incluyen Germanio, Sulfuro de Zinc, Silicio, Borofloat y Zafiro, compatibles con varios anchos de banda incluyendo LT, G7, P7, 4M, 05M, 08M, 1M, 2M, 3M, MT, F2, F6 y G5.</p>
              </div>
            </div>
          </div>
          
          <!-- Protective Window Xi Air Purge -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/protective-window-for-laminar.webp');"></div>
              <div class="product-content">
                <h4>Ventana Protectora para Purga de Aire Laminar Xi</h4>
                <p class="product-tagline">Protección esencial de lente de cámara infrarroja para ambientes hostiles y polvorientos</p>
                <p>La ventana protectora para la purga de aire laminar Xi mantiene una línea de visión clara en ambientes industriales hostiles. Cada tipo de cámara infrarroja en la serie Xi tiene diferentes sensibilidades espectrales, por lo que seleccionar la ventana protectora apropiada es esencial. El sistema de purga de aire laminar asegura alta transmisión y mantiene la lente limpia de polvo, humo y contaminantes, asegurando mediciones precisas de temperatura.</p>
              </div>
            </div>
          </div>
          
          <!-- Exchangeable Lens PI400i/450i -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/exchangable-lens-for-pl400i.webp');"></div>
              <div class="product-content">
                <h4>Lente Intercambiable para PI400i/450i y PI450i G7</h4>
                <p class="product-tagline">Diseñada para la serie PI400i/450i con rendimiento óptico superior</p>
                <p>Las PI400i/450i y PI450i G7 son cámaras infrarrojas para investigadores e ingenieros de procesos con un amplio rango de temperatura de -20°C a 900°C (extensible a 1500°C). Su gama de lentes intercambiables, de 18° a 80° de campo de visión, permite una personalización precisa. La serie PI ofrece excelente calidad óptica con un pequeño campo de visión mínimo (MFOV), asegurando alta precisión y claridad en las mediciones de temperatura.</p>
              </div>
            </div>
          </div>
          
          <!-- Exchangeable Lens PI640i -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/exchangable-lens-for-pl640i.webp');"></div>
              <div class="product-content">
                <h4>Lente Intercambiable para PI640i y PI640i G7</h4>
                <p class="product-tagline">Diseñada para la serie PI640i con rendimiento óptico superior</p>
                <p>Las cámaras térmicas de alto rendimiento optris PI 640i y PI 640i G7 son cámaras infrarrojas pequeñas, capaces y precisas con resolución VGA, que ofrecen calidad de imagen infrarroja superior. Su gama de lentes intercambiables, de 15° a 90° de campo de visión, permite una personalización precisa. La serie PI ofrece excelente calidad óptica con un pequeño campo de visión mínimo (MFOV), asegurando alta precisión y claridad en las mediciones de temperatura hasta 1500 °C.</p>
              </div>
            </div>
          </div>
          
          <!-- Exchangeable Lens PI 1M -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/exchangable-lens-for-pl1m.webp');"></div>
              <div class="product-content">
                <h4>Lente Intercambiable para PI 1M</h4>
                <p class="product-tagline">Opciones de lentes intercambiables para PI 1M con rendimiento óptico superior</p>
                <p>La Optris PI1M es una cámara infrarroja de longitud de onda corta ideal para aplicaciones industriales, especialmente en la industria de metales. Su gama de lentes intercambiables, de 9° a 41° de campo de visión, permite una personalización precisa. La serie PI ofrece excelente calidad óptica con un pequeño campo de visión mínimo (MFOV), asegurando alta precisión y claridad en las mediciones de temperatura hasta 1800 °C.</p>
              </div>
            </div>
          </div>
          
          <!-- Emissivity Labels -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/emissitivy-labels.webp');"></div>
              <div class="product-content">
                <h4>Etiquetas de Emisividad</h4>
                <p class="product-tagline">Pegatinas de alta emisividad para medir superficies reflectivas y determinar la emisividad</p>
                <p>Una pegatina de emisividad mejora la precisión de los termómetros infrarrojos y las cámaras de imagen térmica proporcionando un valor de emisividad conocido de 0.95. Diferentes materiales emiten radiación térmica con eficiencia variable, afectando las lecturas de temperatura. Al aplicar la pegatina a una superficie, el sensor infrarrojo lee la temperatura de la emisividad consistente de la pegatina, eliminando las desviaciones de medición de superficies reflectivas o de baja emisividad, y asegurando mediciones precisas y confiables.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Interface Accessories -->
      <div class="category-header">
        <h3>Interfaces</h3>
        <p>Soluciones de conectividad y comunicación para integración industrial.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- Industrial Process Interface USB -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/interface-usbnative.webp');"></div>
              <div class="product-content">
                <h4>Interfaz de Proceso Industrial para Cámaras USB Optris</h4>
                <p class="product-tagline">Funcionalidad mejorada con interfaz de proceso para salidas analógicas y digitales</p>
                <p>La interfaz de proceso industrial (PIF) mejora la funcionalidad con voltaje de aislamiento de 500 VAC para seguridad. Soporta tres salidas analógicas/alarma, dos entradas analógicas y una entrada digital para control y monitoreo diversos. Los mecanismos a prueba de fallas activan alarmas para problemas como interrupciones de cable. Las entradas analógicas manejan parámetros como emisividad, mientras que las salidas gestionan estados como sincronización de cuadros y alarmas. Con clasificación IP65, es ideal para ambientes hostiles.</p>
              </div>
            </div>
          </div>
          
          <!-- Industrial Process Interface Ethernet -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/interface-ethernet.webp');"></div>
              <div class="product-content">
                <h4>Interfaz de Proceso Industrial para Cámaras Ethernet</h4>
                <p class="product-tagline">Funcionalidad mejorada con interfaz de proceso apilable con salidas analógicas y digitales</p>
                <p>La interfaz de proceso apilable para la serie Xi basada en Ethernet mejora la funcionalidad en entornos industriales. Soporta hasta tres salidas analógicas y de alarma, dos entradas analógicas y una entrada digital, permitiendo control y monitoreo versátiles. La cascada de hasta tres interfaces expande las salidas a nueve. Los mecanismos integrados a prueba de fallas monitorean las condiciones y activan alarmas según sea necesario.</p>
              </div>
            </div>
          </div>
          
          <!-- PoE Injector -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/poe-ijector.webp');"></div>
              <div class="product-content">
                <h4>Inyector PoE para PI NetBox o Servidor USB</h4>
                <p class="product-tagline">Para instalaciones sin tomas de corriente</p>
                <p>El inyector PoE de alta potencia permite instalaciones de cámaras infrarrojas habilitadas para Ethernet sin tomas de corriente, actualizando interruptores no PoE y evitando costos de nuevos interruptores. Soporta estándares IEEE802.3af (15.4W) e IEEE802.3at (30W). Con conectores RJ-45 de entrada y salida, conecta dispositivos hasta 100 metros de distancia. El diseño compacto y robusto de metal permite instalación oculta, con fuente de alimentación integrada. La configuración sin necesidad de ajustes simplifica agregar soporte PoE.</p>
              </div>
            </div>
          </div>
          
          <!-- EtherNet/IP Interface Kit -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ip-interface-kit.webp');"></div>
              <div class="product-content">
                <h4>Kit de Interfaz EtherNet/IP</h4>
                <p class="product-tagline">EtherNet/IP para pirómetro CSVision Optris y cámaras infrarrojas</p>
                <p>El kit de interfaz EtherNet/IP para cámaras infrarrojas serie Xi Optris y pirómetros CSvision integra sensores Optris con sistemas PLC Allen Bradley. Como protocolo industrial líder en EE.UU., EtherNet/IP soporta automatización de fábrica, híbrida y de procesos. Este kit permite transmisión robusta de datos, facilitando comunicación de alta velocidad entre sensores, controladores y sistemas de adquisición de datos. Mejora la flexibilidad del monitoreo de temperatura, asegurando control preciso, eficiencia operativa e integración optimizada para procesos complejos.</p>
              </div>
            </div>
          </div>
          
          <!-- Ethernet TCP/IP Modbus Kit -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/modbus-tcp.webp');"></div>
              <div class="product-content">
                <h4>Kit de Interfaz Ethernet TCP/IP y Modbus TCP Xi y CSVision</h4>
                <p class="product-tagline">Kit de interfaz Ethernet TCP/IP y Modbus TCP para CSVision y cámaras infrarrojas</p>
                <p>La interfaz Ethernet TCP/IP / Modbus TCP de Optris integra cámaras infrarrojas autónomas serie Xi Optris y pirómetros CSVision en sistemas de automatización industrial. Permite transmisión de datos sobre redes Ethernet usando TCP/IP y soporta Modbus TCP para comunicación entre dispositivos como controladores y sistemas de adquisición de datos. Esta interfaz mejora la flexibilidad del monitoreo de temperatura, facilitando adquisición, análisis e integración de datos en tiempo real, asegurando control preciso de temperatura y eficiencia operativa.</p>
              </div>
            </div>
          </div>
          
          <!-- Standard Process Interface Cable PI -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/standard-process-interface-for-pi-xi-400-1.webp');"></div>
              <div class="product-content">
                <h4>Interfaz de Proceso Estándar para series PI, Xi 400 y Xi 640</h4>
                <p class="product-tagline">Cable de conexión de interfaz de proceso de entrada/salida para cámaras infrarrojas USB nativas</p>
                <p>Este cable de interfaz de proceso estándar (PIF) es crucial para aplicaciones industriales avanzadas con cámaras infrarrojas USB nativas. Se integra con sistemas de control de procesos, proporcionando capacidades analógicas y digitales de E/S. Programable a través del software PIX Connect, soporta 0-10 V para entradas y salidas analógicas. El cable de 1m incluye electrónica integrada y un bloque terminal para control y monitoreo precisos.</p>
              </div>
            </div>
          </div>
          
          <!-- PI NetBox -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/pi-netbox-mini-pc-optpinbw732g-1-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Pi NetBox</h4>
                <p class="product-tagline">Computadora industrial para la serie PI con GigE y PoE</p>
                <p>El NetBox Mini-PC, una computadora Windows industrial robusta, diseñada para aplicaciones remotas que necesitan potencia computacional adicional para el software PIX Connect. Opera como un sistema independiente con Ethernet GigE y soporte PoE. Con watchdogs integrados de hardware y software, asegura confiabilidad en aplicaciones críticas. Además, puede integrarse con la Camisa de Enfriamiento Avanzada para enfriamiento mejorado para temperaturas hasta 315 °C.</p>
              </div>
            </div>
          </div>
          
          <!-- USB Server Gigabit -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/usb-server-gigabit-acpiusbsgb-1-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Servidor USB Gigabit 2.0</h4>
                <p class="product-tagline">Para cámaras infrarrojas y pirómetros basados en USB con velocidad Gigabit</p>
                <p>El adaptador USB Server Gigabit 2.0 controla remotamente cámaras infrarrojas y pirómetros vía USB-a-Ethernet. Soporta USB 2.0, con tasas de datos hasta 480 Mbit/s, y conexiones hasta 120 metros. Ofrece TCP/IP completo a velocidades Gigabit hasta 1000 Mbit/s, dos puertos USB y aislamiento galvánico de 500 VRMS. Configurable vía gestión basada en web, se alimenta a través de PoE o fuente de alimentación DC de 24-48 V.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Cables -->
      <div class="category-header">
        <h3>Cables</h3>
        <p>Cables de conexión y comunicación para todas las aplicaciones.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- USB Connection Cable -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/USB-Kabel20m-1000-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable de Conexión USB</h4>
                <p class="product-tagline">Para cámaras infrarrojas Optris</p>
                <p>Optris ofrece cables USB para sus cámaras infrarrojas, con conectores de 4 pines u 8 pines para conexión segura de la cámara y USB-A para conectividad con computadora. Las longitudes disponibles incluyen 1m, 3m, 5m, 10m y 20m, con conector de ángulo recto opcional. Para ambientes exigentes, una versión de alta temperatura soporta hasta 250°C.</p>
              </div>
            </div>
          </div>
          
          <!-- Process Interface Cable Xi -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/standard-process-interface-cable-for-xi-80-xi-410-xi-410-mt-xi-1m-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable de Interfaz de Proceso Estándar para Xi 80 / Xi 410 / Xi 1M</h4>
                <p class="product-tagline">Cable de conexión de entrada/salida e interfaz RS485 para cámaras IR Xi basadas en Ethernet</p>
                <p>El cable de interfaz de proceso estándar es esencial para aplicaciones industriales avanzadas con modelos Xi basados en Ethernet. Se integra con sistemas de control de procesos, ofreciendo capacidades robustas de E/S analógicas (0-10 V entrada, 0/4-20 mA salida) y digitales. Programable vía software PIX Connect, soporta comunicación RS485 para transmisión confiable de datos hasta 500 metros. Con electrónica integrada y bloque terminal, las versiones opcionales soportan temperaturas hasta 250°C.</p>
              </div>
            </div>
          </div>
          
          <!-- Ethernet Cable Xi -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ethernet-cable-for-xi-series-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable Ethernet para Serie Xi</h4>
                <p class="product-tagline">Conexión Ethernet con adaptador PoE para Xi 80 / Xi 410 / Xi 410 MT / Xi 1M</p>
                <p>El cable Ethernet es esencial para comunicación a larga distancia con la cámara infrarroja. Opcionalmente soporta Power over Ethernet con una caja electrónica, que ofrece transmisión simultánea de datos y energía para cámaras serie Xi. Ethernet soporta comunicación de alta velocidad y entrega confiable de energía, reduciendo la necesidad de cables separados. Una conexión Ethernet con una cámara infrarroja Xi puede alcanzar hasta 20m. Versiones especiales de alta temperatura hasta 250 °C están disponibles.</p>
              </div>
            </div>
          </div>
          
          <!-- High-Temperature Ethernet Cable -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/High-temperature-Ethernet-Cable-for-Cooling-Jackets_CAT-600BK-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable Ethernet de Alta Temperatura para Camisas de Enfriamiento</h4>
                <p class="product-tagline">Cable de conexión Ethernet de alta temperatura para Camisa de Enfriamiento Avanzada</p>
                <p>Para conexión confiable de datos al servidor USB o PI Netbox dentro de una Camisa de Enfriamiento Avanzada, Optris recomienda cables Ethernet Cat-6 de alta temperatura, disponibles en variantes de 180°C y 250°C. El cable viene con una prensaestopa M25 preensamblada para instalación con una Camisa de Enfriamiento. Estos cables aseguran transmisión robusta de datos para detección infrarroja, crucial en ambientes industriales extremos. Su escalabilidad y compatibilidad los hacen ideales para integrar dispositivos y expandir la infraestructura de red, soportando aplicaciones de monitoreo y control de temperatura en tiempo real.</p>
              </div>
            </div>
          </div>
          
          <!-- High-Temperature 7-pin Cable -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/High-temperature-7-pin-cable-1-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable E/S de 7 pines de Alta Temperatura para Camisas de Enfriamiento</h4>
                <p class="product-tagline">Cable E/S de alta temperatura para Camisa de Enfriamiento</p>
                <p>El cable de 7 pines de alta temperatura, con extremos abiertos en ambos lados, está diseñado para salidas y entradas PIF industriales. Ofrece excelente resistencia química, a solventes y a temperatura, manteniendo el rendimiento en condiciones extremas. Disponible en dos versiones (180°C y 250°C) y longitudes estándar de 5m, 10m y 20m, este cable proporciona excelente aislamiento eléctrico, convirtiéndolo en una opción confiable para aplicaciones industriales.</p>
              </div>
            </div>
          </div>
          
          <!-- Cable Cooling System -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/Cable-cooling-for-CJA-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Sistema de Enfriamiento de Cables para Camisa de Enfriamiento Avanzada</h4>
                <p class="product-tagline">Asegura el enrutamiento de cables a través de ambientes calientes</p>
                <p>Optris proporciona soluciones de cableado para temperaturas hasta 250°C. Para ambientes hasta 315°C, el sistema de enfriamiento de cables para la Camisa de Enfriamiento Avanzada usa cables enfriados por aire y protegidos contra temperatura. El sistema incluye un kit de ensamblaje completo. Un tubo flexible de alta temperatura con malla de acero inoxidable está disponible en longitudes de 3m, 5m y 8m, asegurando rendimiento confiable y durabilidad en condiciones exigentes.</p>
              </div>
            </div>
          </div>
          
          <!-- RS485 USB Adapter -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ACCTRS485USBKV2-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Kit Adaptador RS485 / RS422 a USB</h4>
                <p class="product-tagline">Adaptador de interfaz para RS485</p>
                <p>Este convertidor USB a serial le permite conectar cualquier dispositivo RS485 o RS422 directamente al puerto USB de su computadora. RS485, un estándar para comunicación serial, es ampliamente utilizado en automatización industrial debido a su robustez, capacidad de larga distancia (hasta 1200m) y transmisión de datos de alta velocidad. Utiliza señalización diferencial para asegurar comunicación confiable en ambientes ruidosos.</p>
              </div>
            </div>
          </div>
          
          <!-- IR App Connector -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ACCSMIAC_CSmicro-IR-app-connector_USB-adapter-500-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Cable Conector IR App para Cámaras Infrarrojas Optris</h4>
                <p class="product-tagline">Para conexión a smartphone o tablet con la aplicación Android IRmobile</p>
                <p>El cable conector IRmobile App conecta cámaras infrarrojas Optris a dispositivos Android vía puertos micro-USB o USB-C. Permite transferencia directa de datos y suministro de energía, facilitando monitoreo y análisis en tiempo real a través de la aplicación IRmobile. Ideal para aplicaciones de campo, permite a los usuarios acceder y gestionar configuraciones, mejorando la eficiencia. Esencial para ingenieros que necesitan acceso rápido a datos de cámaras infrarrojas desde sus smartphones o tablets.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Calibration & Certificates -->
      <div class="category-header">
        <h3>Calibración y Certificados</h3>
        <p>Servicios de calibración y certificación para mantener la precisión de las mediciones.</p>
      </div>
      
      <div class="row">
        <div class="col-12">
          
          <!-- Calibration Source BR 20AR -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/ambient-temperature-reference-source-acpibr20ar-1-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Fuente de Calibración BR 20AR</h4>
                <p class="product-tagline">Fuente de referencia de temperatura ambiente de alta precisión para actualización de precisión</p>
                <p>El BR 20AR es una fuente de referencia de temperatura ambiente para mejorar la precisión de las cámaras infrarrojas PI y Xi de Optris. Operando de 18°C a 33°C, presenta un radiador de alta emisividad y un sensor de temperatura digital de 16 bits con precisión de ±0.1°C. Compacto con 200 x 200 x 82 mm y 2.5 kg, se monta en techos o paredes y se conecta vía interfaz de proceso de 5 pines, reduciendo la incertidumbre de la cámara a ±0.5°C.</p>
              </div>
            </div>
          </div>
          
          <!-- Certificate of Calibration -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/kalibrierschein-ptb-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Certificado de Calibración</h4>
                <p class="product-tagline">Para cámaras infrarrojas Optris</p>
                <p>Un certificado de calibración es un documento oficial que verifica la precisión y el rendimiento de un instrumento contra estándares reconocidos. Incluye detalles como modelo, número de serie, fecha de calibración, mediciones, tolerancias y credenciales del técnico. Asegura el cumplimiento con los estándares de la industria, proporcionando trazabilidad a los estándares europeos PTB o NIST. La calibración regular, documentada por dichos certificados, mantiene la precisión de medición, el cumplimiento regulatorio y apoya el control de calidad en varias industrias.</p>
              </div>
            </div>
          </div>
          
          <!-- Adjustment Service -->
          <div class="product-card">
            <div class="product-row">
              <div class="product-image" style="background-image: url('images/accesorios/cali-Daten-220x0-c-default.webp');"></div>
              <div class="product-content">
                <h4>Ajuste para Cámara Infrarroja Optris</h4>
                <p class="product-tagline">Configuración de cámaras infrarrojas Optris para la máxima precisión y exactitud</p>
                <p>La calibración de cámaras infrarrojas en Optris asegura la precisión comparando las lecturas de la cámara con estándares de temperatura conocidos. La cámara se expone a fuentes de cuerpo negro calibradas en un ambiente controlado, con ajustes realizados para múltiples puntos de temperatura a través del rango operacional y para cada píxel. El proceso se documenta, incluyendo condiciones ambientales, equipo utilizado y credenciales del técnico, verificando el rendimiento contra estándares PTB o NIST.</p>
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