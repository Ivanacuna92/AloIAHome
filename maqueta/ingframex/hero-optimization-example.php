<!-- HERO SECTION OPTIMIZATION WITH FETCHPRIORITY -->

<!-- BEFORE: Using CSS background-image (not optimal for LCP) -->
<style>
  .hero-section-old {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/hero-image.jpg');
    background-size: cover;
    background-position: center;
  }
</style>

<!-- AFTER: Using img tag with fetchpriority="high" (optimal for LCP) -->
<style>
  .hero-section {
    position: relative;
    overflow: hidden;
    padding: 120px 0 80px;
    color: white;
    text-align: center;
  }
  
  .hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -2;
  }
  
  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }
  
  .hero-content {
    position: relative;
    z-index: 1;
  }
</style>

<section class="hero-section">
  <!-- High priority image for faster LCP -->
  <img src="images/hero-image.jpg" 
       alt="Descripción de la imagen hero" 
       class="hero-image"
       fetchpriority="high"
       loading="eager"
       decoding="async">
  
  <!-- Dark overlay -->
  <div class="hero-overlay"></div>
  
  <!-- Content -->
  <div class="container hero-content">
    <h1>Título de la Página</h1>
    <p>Descripción o subtítulo</p>
  </div>
</section>

<!-- IMPLEMENTATION EXAMPLE FOR camaras_infrarojas.php -->
<section class="hero-section">
  <img src="images/camaras-optris.png" 
       alt="Cámaras infrarrojas Optris para medición térmica industrial" 
       class="hero-image"
       fetchpriority="high"
       loading="eager"
       decoding="async">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>CAMARAS INFRAROJAS OPTRIS</h1>
    <p>Matriz completa de productos y aplicaciones industriales para soluciones de medición térmica de precisión</p>
  </div>
</section>

<!-- BENEFITS OF THIS APPROACH:
1. fetchpriority="high" tells browser to prioritize this image
2. loading="eager" ensures immediate loading (default for above-fold content)
3. decoding="async" prevents blocking while decoding the image
4. Better LCP (Largest Contentful Paint) scores
5. Improved Core Web Vitals
6. Better SEO performance
7. Actual img tag allows lazy loading for other images on the page
-->

<!-- ADDITIONAL OPTIMIZATIONS:
1. Use WebP format with JPEG fallback:
-->
<picture>
  <source srcset="images/hero-image.webp" type="image/webp">
  <img src="images/hero-image.jpg" 
       alt="Descripción" 
       class="hero-image"
       fetchpriority="high"
       loading="eager"
       decoding="async">
</picture>

<!-- 2. Responsive images for different screen sizes: -->
<img srcset="images/hero-mobile.jpg 768w,
             images/hero-tablet.jpg 1024w,
             images/hero-desktop.jpg 1920w"
     sizes="100vw"
     src="images/hero-desktop.jpg"
     alt="Descripción"
     class="hero-image"
     fetchpriority="high"
     loading="eager"
     decoding="async">