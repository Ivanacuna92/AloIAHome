<?php
// CSS OPTIMIZATION GUIDE FOR BETTER SEO PERFORMANCE

/* 
CURRENT ISSUES:
1. Loading 648KB of CSS (many files unused)
2. All CSS loaded synchronously (blocks rendering)
3. No critical CSS inlining
4. Duplicate CSS files (bootstrap.css and _bootstrap.css)

RECOMMENDED OPTIMIZATIONS:
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- 1. INLINE CRITICAL CSS (above-the-fold styles) -->
  <style>
    /* Critical CSS - only what's needed for initial render */
    body { margin: 0; font-family: 'Open Sans', sans-serif; }
    .site-navbar { background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); padding: 1rem 0; }
    .hero-section { background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)); padding: 120px 0 80px; color: white; text-align: center; }
    /* Add other critical styles here */
  </style>
  
  <!-- 2. PRELOAD CRITICAL RESOURCES -->
  <link rel="preload" href="css/bootstrap.css" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" as="style">
  
  <!-- 3. LOAD CRITICAL CSS NORMALLY -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  
  <!-- 4. DEFER NON-CRITICAL CSS -->
  <link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  
  <!-- 5. CONDITIONALLY LOAD CSS (only when needed) -->
  <?php if ($page_uses_animations): ?>
    <link rel="preload" href="css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <?php endif; ?>
  
  <?php if ($page_uses_carousel): ?>
    <link rel="preload" href="css/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <?php endif; ?>
  
  <?php if ($page_uses_lightbox): ?>
    <link rel="preload" href="css/jquery.fancybox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <?php endif; ?>
  
  <!-- 6. FALLBACK FOR BROWSERS WITHOUT JS -->
  <noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  </noscript>
  
  <!-- 7. PRELOAD POLYFILL FOR OLDER BROWSERS -->
  <script>
    /*! loadCSS rel=preload polyfill */
    !function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(function(){t.onload()},0)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"===a.rel&&"style"===a.getAttribute("as")&&(null===a.getAttribute("onload")&&a.setAttribute("onload","this.onload=null;this.rel='stylesheet'"),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
  </script>
</head>
<body>
  <!-- Page content -->
</body>
</html>

<?php
/*
ADDITIONAL RECOMMENDATIONS:

1. COMBINE AND MINIFY CSS:
   - Merge bootstrap.css, bootstrap-grid.css, bootstrap-reboot.css into one minified file
   - Remove unused CSS rules (use PurgeCSS or similar tools)

2. USE CSS MODULES:
   - Create page-specific CSS files instead of loading everything everywhere
   - Example: camaras-infrarojas.css, pirometros.css, etc.

3. IMPLEMENT CRITICAL CSS EXTRACTION:
   - Use tools like Critical or Penthouse to automatically extract above-the-fold CSS
   - Inline this CSS in <head> for instant rendering

4. OPTIMIZE FONT LOADING:
   - Use font-display: swap for web fonts
   - Preload critical fonts
   - Consider system font stack for faster initial render

5. REMOVE DUPLICATE FILES:
   - Delete _bootstrap.css (189KB) if bootstrap.css (154KB) is being used
   - This saves 189KB of unnecessary disk space

6. LAZY LOAD COMPONENT CSS:
   - Load component-specific CSS only when component is visible
   - Use Intersection Observer API

7. USE MODERN CSS FEATURES:
   - CSS Grid instead of heavy grid frameworks
   - CSS custom properties for theming
   - Native CSS animations instead of animate.css

EXPECTED PERFORMANCE GAINS:
- 50-70% reduction in initial CSS payload
- 30-40% faster First Contentful Paint (FCP)
- 20-30% improvement in Time to Interactive (TTI)
- Better Core Web Vitals scores
- Improved SEO rankings
*/
?>