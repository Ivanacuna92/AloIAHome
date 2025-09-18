<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="INGFRAMEX - Especialistas en pirómetros y cámaras infrarrojas Optris para medición de temperatura industrial de precisión">
  <meta name="keywords" content="pirómetros, cámaras infrarrojas, Optris, medición temperatura, termometría industrial, instrumentos medición">
  <meta name="author" content="INGFRAMEX">
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="INGFRAMEX - Pirómetros y Cámaras Infrarrojas Optris">
  <meta property="og:description" content="Especialistas en pirómetros y cámaras infrarrojas Optris para medición de temperatura industrial de precisión">
  <meta property="og:type" content="website">
  <meta property="og:image" content="images/logo-ingframex.png">

  <!-- Preconnect to external domains -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://stackpath.bootstrapcdn.com">
  <title>INGFRAMEX</title>
  <!-- Preload critical resources -->
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" as="style">
  
  <!-- Load critical CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap">
  
  <!-- Defer non-critical CSS -->
  <link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

  
  <!-- Conditional CSS loading script -->

  
  <!-- Noscript fallback -->
  <noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </noscript>
  

  <style>
    /* Reset y estilos base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      font-size: 1rem;
      line-height: 1.5;
      color: #212529;
      background-color: #f8f9fa;
    }
    
    /* Header y navbar */
    header {
      background: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1050;
    }
    
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem;
      max-width: 1140px;
      margin: 0 auto;
    }
    
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: 700;
      color: #6B3AA0;
      text-decoration: none;
    }

    .navbar-brand img {
      height: 40px;
      line-height:0;
    }
    
    .navbar-nav {
      display: flex;
      list-style: none;
      gap: 2rem;
    }
    
    /* Dropdown styles */
    .dropdown {
      position: relative;
    }
    
    .dropdown-toggle {
      cursor: pointer;
      padding: 0.5rem 1.5rem;
      color: #6B3AA0;
      font-weight: 500;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
      background: none;
      border: none;
      text-decoration: none;
      display: block;
      transition: color 0.15s ease-in-out;
    }
    
    .dropdown-toggle:hover {
      color: #4A2970;
    }
    
    .dropdown-toggle::after {
      content: " ▼";
      font-size: 0.7em;
      margin-left: 0.3em;
    }
    
    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: white;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      border-radius: 5px;
      padding: 0.5rem 0;
      margin-top: 0.5rem;
      min-width: 200px;
      z-index: 1050;
    }
    
    .dropdown.active .dropdown-menu {
      display: block;
      animation: dropdownFadeIn 0.15s ease-out;
    }
    
    @keyframes dropdownFadeIn {
      from {
        opacity: 0;
        transform: translateY(-5px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .dropdown-item {
      padding: 0.5rem 1.5rem;
      color: #666;
      text-decoration: none;
      display: block;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }
    
    .dropdown-item:hover {
      background: #f8f9fa;
      color: #6B3AA0;
      padding-left: 2rem;
    }
    
    /* Main content */
    main {
      margin-top: 100px;
      padding: 2rem;
      max-width: 1140px;
      margin-left: auto;
      margin-right: auto;
    }
    
    h1 {
      color: #333;
      margin-bottom: 1rem;
    }
    
    p {
      color: #666;
      line-height: 1.8;
    }
  </style>
</head>
<body>

<header>
  <nav class="navbar">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo-ingframex.png" alt="INGFRAMEX">
    </a>
    
    <ul class="navbar-nav">
      <li class="dropdown">
        <button class="dropdown-toggle">Productos</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="camaras_infrarojas.php">Cámaras Infrarojas</a>
          <a class="dropdown-item" href="pirometros.php">Pirómetros</a> 
        </div>
      </li>
      
      <li class="dropdown">
        <button class="dropdown-toggle">Aplicaciones</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="automotriz.php">Automotriz</a>
          <a class="dropdown-item" href="deteccion_incendios.php">Detección de Incendios</a>
          <a class="dropdown-item" href="electronico.php">Electrónica</a>
          <a class="dropdown-item" href="monitoreo_bateria.php">Monitoreo de Batería</a>
          <a class="dropdown-item" href="plasticos.php">Plástico</a>
          <a class="dropdown-item" href="solar.php">Solar</a>
          <a class="dropdown-item" href="vidrio.php">Vidrio</a>
        </div>
      </li>
      
      <li class="dropdown">
        <button class="dropdown-toggle">Industria</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="aceria.php">Acería</a>
          <a class="dropdown-item" href="alimentos_y_bebidas.php">Alimentos y Bebidas</a>
          <a class="dropdown-item" href="ciencias_de_la_vida.php">Ciencias de la Vida</a>
          <a class="dropdown-item" href="hvac.php">HVAC</a>
          <a class="dropdown-item" href="industria_primaria.php">Industria Primaria</a>
          <a class="dropdown-item" href="instrumentos_de_medicion.php">Instrumentos de Medición</a>
          <a class="dropdown-item" href="mantenimiento_industrial.php">Mantenimiento Industrial</a>
          <a class="dropdown-item" href="metal.php">Metal</a>
          <a class="dropdown-item" href="metrologia.php">Metrología</a>
        </div>
      </li>
    </ul>
  </nav>
</header>

<script>
  // Obtener todos los dropdowns
  const dropdowns = document.querySelectorAll('.dropdown');
  
  // Función para cerrar todos los dropdowns
  function closeAllDropdowns() {
    dropdowns.forEach(dropdown => {
      dropdown.classList.remove('active');
      const toggle = dropdown.querySelector('.dropdown-toggle');
      if (toggle) {
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }
  
  // Manejar cada dropdown
  dropdowns.forEach(dropdown => {
    let hoverTimeout;
    
    // Hover behavior - abrir siempre al hacer hover
    dropdown.addEventListener('mouseenter', () => {
      clearTimeout(hoverTimeout);
      
      // Cerrar todos los demás dropdowns
      closeAllDropdowns();
      
      // Abrir el dropdown actual
      dropdown.classList.add('active');
      const toggle = dropdown.querySelector('.dropdown-toggle');
      if (toggle) {
        toggle.setAttribute('aria-expanded', 'true');
      }
    });
    
    dropdown.addEventListener('mouseleave', () => {
      clearTimeout(hoverTimeout);
      
      hoverTimeout = setTimeout(() => {
        const isHoveringDropdown = document.querySelector('.dropdown:hover');
        if (!isHoveringDropdown) {
          dropdown.classList.remove('active');
          const toggle = dropdown.querySelector('.dropdown-toggle');
          if (toggle) {
            toggle.setAttribute('aria-expanded', 'false');
          }
        }
      }, 100);
    });
    
    // Click behavior
    const toggle = dropdown.querySelector('.dropdown-toggle');
    if (toggle) {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        const isActive = dropdown.classList.contains('active');
        
        // Cerrar todos
        closeAllDropdowns();
        
        // Si no estaba activo, abrir este
        if (!isActive) {
          dropdown.classList.add('active');
          toggle.setAttribute('aria-expanded', 'true');
        }
      });
    }
  });
  
  // Cerrar cuando se hace click fuera
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown')) {
      closeAllDropdowns();
    }
  });
  
  // Cerrar cuando el mouse sale del navbar
  const navbar = document.querySelector('.navbar-nav');
  if (navbar) {
    navbar.addEventListener('mouseleave', () => {
      setTimeout(() => {
        const isHoveringDropdown = document.querySelector('.dropdown:hover');
        if (!isHoveringDropdown) {
          closeAllDropdowns();
        }
      }, 300);
    });
  }
</script>

</body>
</html>