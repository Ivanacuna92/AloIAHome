/**
 * Conditional CSS Loader for INGFRAMEX
 * Loads CSS files only when features are detected on the page
 */

(function() {
  'use strict';
  
  // CSS files to load conditionally
  const conditionalCSS = {
    animations: 'css/animate.css',
    carousel: 'css/owl.carousel.min.css', 
    lightbox: 'css/jquery.fancybox.min.css'
  };
  
  // Feature detection functions
  const features = {
    hasAnimations: function() {
      return document.querySelector('[class*="animate"], [class*="fade"], [data-aos]') !== null;
    },
    
    hasCarousel: function() {
      return document.querySelector('.owl-carousel, .slider-container, .hero-slider') !== null;
    },
    
    hasLightbox: function() {
      return document.querySelector('[data-fancybox], .fancybox, [href$=".jpg"], [href$=".png"], [href$=".gif"]') !== null;
    }
  };
  
  // Load CSS file
  function loadCSS(href) {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    link.type = 'text/css';
    
    // Add to head
    document.head.appendChild(link);
    
    return new Promise((resolve, reject) => {
      link.onload = resolve;
      link.onerror = reject;
    });
  }
  
  // Check features and load required CSS
  function loadConditionalCSS() {
    const promises = [];
    
    if (features.hasAnimations()) {
      console.log('✅ Animations detected - Loading animate.css');
      promises.push(loadCSS(conditionalCSS.animations));
    }
    
    if (features.hasCarousel()) {
      console.log('✅ Carousel detected - Loading owl.carousel.css');
      promises.push(loadCSS(conditionalCSS.carousel));
    }
    
    if (features.hasLightbox()) {
      console.log('✅ Lightbox detected - Loading fancybox.css');
      promises.push(loadCSS(conditionalCSS.lightbox));
    }
    
    return Promise.all(promises);
  }
  
  // Initialize when DOM is ready
  function init() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', loadConditionalCSS);
    } else {
      loadConditionalCSS();
    }
  }
  
  // Start the process
  init();
  
  // Export for manual use if needed
  window.INGFRAMEX = window.INGFRAMEX || {};
  window.INGFRAMEX.loadCSS = loadCSS;
  window.INGFRAMEX.loadConditionalCSS = loadConditionalCSS;
  
})();