<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Preconnect to external resources -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://stackpath.bootstrapcdn.com">
  
  <!-- Critical inline CSS for immediate render -->
  <style>
    /* Reset and base styles */
    *,*::before,*::after{box-sizing:border-box}
    body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff}
    
    /* Critical navbar styles */
    .site-navbar{background:#fff;box-shadow:0 2px 5px rgba(0,0,0,0.1);padding:1rem 0;position:relative;z-index:999}
    .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}
    @media (min-width:576px){.container{max-width:540px}}
    @media (min-width:768px){.container{max-width:720px}}
    @media (min-width:992px){.container{max-width:960px}}
    @media (min-width:1200px){.container{max-width:1140px}}
    
    /* Prevent layout shift */
    .navbar-brand img{height:50px;width:auto}
    .hero-section{min-height:400px}
  </style>
  
  <!-- Preload critical resources -->
  <link rel="preload" href="css/bootstrap.css" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" as="style">
  
  <!-- Load critical CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap">
  
  <!-- Defer non-critical CSS -->
  <link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  
  <!-- Noscript fallback -->
  <noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </noscript>
  
  <!-- Minimal loadCSS polyfill -->
  <script>
    !function(e){"use strict";var n=function(n,t,o){var i,r=e.document,d=r.createElement("link");if(t)i=t;else{var a=(r.body||r.getElementsByTagName("head")[0]).childNodes;i=a[a.length-1]}var l=r.styleSheets;d.rel="stylesheet",d.href=n,d.media="only x",function e(n){if(r.body)return n();setTimeout(function(){e(n)})}(function(){i.parentNode.insertBefore(d,t?i:i.nextSibling)});var f=function(e){for(var n=d.href,t=l.length;t--;)if(l[t].href===n)return e();setTimeout(function(){f(e)})};function s(){d.addEventListener&&d.removeEventListener("load",s),d.media=o||"all"}return d.addEventListener&&d.addEventListener("load",s),d.onloadcssdefined=f,f(s),d};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
  </script>
</head>
<body id="home" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <nav class="navbar navbar-expand-lg navbar-light site-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="logo2.png" alt="INGFRAMEX Logo" width="179" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pirometros.php">Pirómetros</a>
              <a class="dropdown-item" href="camaras_infrarojas.php">Cámaras Infrarrojas</a>
              <a class="dropdown-item" href="calibradores.php">Calibradores</a>
              <a class="dropdown-item" href="registradores_temperatura.php">Registradores</a>
              <a class="dropdown-item" href="analizador_combustion.php">Analizadores de Combustión</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Industrias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="industria_primaria.php">Industria Primaria</a>
              <a class="dropdown-item" href="metal.php">Metal</a>
              <a class="dropdown-item" href="vidrio.php">Vidrio</a>
              <a class="dropdown-item" href="plasticos.php">Plásticos</a>
              <a class="dropdown-item" href="automotriz.php">Automotriz</a>
              <a class="dropdown-item" href="electronicos.php">Electrónicos</a>
              <a class="dropdown-item" href="alimentos.php">Alimentos</a>
              <a class="dropdown-item" href="farmaceutica_medica.php">Farmacéutica y Médica</a>
              <a class="dropdown-item" href="investigacion_desarrollo.php">Investigación y Desarrollo</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>