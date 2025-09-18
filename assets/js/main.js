/**
 * aloia-ui.js
 * Script modularizado para controlar interacciones visuales y animaciones de la interfaz en Aloia.
 */

window.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    initMobileMenuToggle();
    initChatbotToggle();
    initIntersectionAnimations();
    //initCarousel();
    initSequentialLogoAnimations();
    initServiceCardHover();
    initAOSAnimations();
    initDesktopDropdownToggle();
    if (document.getElementById('particles-canvas') && typeof initParticlesCanvas === 'function') {
        initParticlesCanvas();
    }

});

/**
 * Módulo: Menú móvil
 */
function initMobileMenuToggle() {
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (!toggleButton || !mobileMenu) return;

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('mobile-menu-expanded');
        mobileMenu.classList.toggle('mobile-menu-collapsed');
    });

    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('mobile-menu-expanded');
            mobileMenu.classList.add('mobile-menu-collapsed');
        });
    });
}

/**
 * Módulo: Chatbot toggle
 */
function initChatbotToggle() {
    const triggers = document.querySelectorAll('[data-chatbot-trigger]');
    if (!triggers.length) return;

    triggers.forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.aloia-bot-container') ? closeChatbot() : openChatbot();
        });
    });
}

function openChatbot() {
    const container = document.createElement('div');
    container.className = 'aloia-bot-container';
    container.innerHTML = `
        <button class="aloia-bot-close" aria-label="Cerrar chatbot">&times;</button>
        <iframe src="https://fin-ai.aloia.dev/" allow="microphone; clipboard-write" frameborder="0"></iframe>
    `;
    document.body.appendChild(container);
    container.querySelector('.aloia-bot-close').addEventListener('click', closeChatbot);
}

function closeChatbot() {
    const container = document.querySelector('.aloia-bot-container');
    if (container) container.remove();
}

/**
 * Módulo: Animaciones al entrar en viewport
 */
function initIntersectionAnimations() {
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-visible');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-fade-in, .animate-slide-up, .animate-slide-right, .animate-slide-left')
        .forEach(el => observer.observe(el));
}

/**
 * Módulo: Carrusel auto-scroll

function initCarousel() {
    const carouselInner = document.querySelector('.carousel-inner');
    if (!carouselInner) return;

    const itemWidth = 180;
    const itemCount = document.querySelectorAll('.carousel-item').length;
    const maxPosition = Math.max(0, itemCount * itemWidth - carouselInner.parentElement.offsetWidth);
    let position = 0;

    let autoScroll = setInterval(scrollCarousel, 3000);

    function scrollCarousel() {
        position = (position + itemWidth) % maxPosition;
        carouselInner.style.transform = `translateX(-${position}px)`;
    }

    carouselInner.addEventListener('mouseenter', () => clearInterval(autoScroll));
    carouselInner.addEventListener('mouseleave', () => autoScroll = setInterval(scrollCarousel, 3000));
}  */

/**
 * Módulo: Animaciones secuenciales para logos
 */
function initSequentialLogoAnimations() {
    const logos = document.querySelectorAll('.animated-logo');
    if (!logos.length) return;
    
    // Duración de cada animacin
    const animationDuration = 2000; // 2 segundos
    
    // Tiempo entre animaciones
    const delayBetweenLogos = 1500; // 1.5 segundos
    
    // Funcin para animar un logo especfico
    function animateLogo(logo, index) {
        const img = logo.querySelector('img');
        if (!img) return;
        
        // Animación de escala y opacidad
        const scaleAnimation = logo.animate(
            [
                { transform: 'scale(1)', opacity: 0.8 },
                { transform: 'scale(1.1)', opacity: 1, offset: 0.5 },
                { transform: 'scale(1)', opacity: 0.8 }
            ],
            {
                duration: animationDuration,
                easing: 'ease-in-out',
                fill: 'forwards'
            }
        );
        
        // Cambiar de blanco a color
        img.classList.remove('brightness-0', 'invert');
        
        // Después de que termine la animacin, volver a blanco
        scaleAnimation.onfinish = () => {
            // Esperar un momento antes de volver a blanco
            setTimeout(() => {
                img.classList.add('brightness-0', 'invert');
                
                // Animar el siguiente logo después de un retraso
                const nextIndex = (index + 1) % logos.length;
                setTimeout(() => {
                    animateLogo(logos[nextIndex], nextIndex);
                }, delayBetweenLogos);
            }, 500); // Mantener en color por 0.5 segundos
        };
    }
    
    // Iniciar la secuencia con el primer logo después de un breve retraso inicial
    setTimeout(() => {
        animateLogo(logos[0], 0);
    }, 1000);
    
    // Añadir interacción al hover
    logos.forEach(logo => {
        const img = logo.querySelector('img');
        if (!img) return;
        
        logo.addEventListener('mouseenter', () => {
            img.classList.remove('brightness-0', 'invert');
        });
        
        logo.addEventListener('mouseleave', () => {
            // Solo volver a blanco si no está en animación activa
            if (!logo.classList.contains('animating')) {
                img.classList.add('brightness-0', 'invert');
            }
        });
    });
}

/**
 * Módulo: Hover animado en tarjetas
 */
function initServiceCardHover() {
    document.querySelectorAll('.service-card').forEach(card => {
        const icon = card.querySelector('.service-icon');
        if (!icon) return;

        card.addEventListener('mouseenter', () => {
            icon.style.animation = 'pulse 0.8s ease-in-out';
        });
        card.addEventListener('mouseleave', () => {
            icon.style.animation = 'none';
        });
    });
}

/**
 * Módulo: AOS minimalista sin librería externa
 */
function initAOSAnimations() {
    const style = document.createElement('style');
    style.textContent = `
        [data-aos] {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        [data-aos].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }
    `;
    document.head.appendChild(style);

    function animateOnScroll() {
        document.querySelectorAll('[data-aos]').forEach(el => {
            const elTop = el.getBoundingClientRect().top;
            if (elTop < window.innerHeight * 0.85) {
                const delay = el.getAttribute('data-aos-delay') || 0;
                setTimeout(() => el.classList.add('aos-animate'), delay);
            }
        });
    }

    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);
}

/**
 * Módulo: Dropdown con click
 */

function initDesktopDropdownToggle() {
    const button = document.querySelector('#desktop-dropdown > button');
    const menu = document.getElementById('dropdown-menu');

    if (!button || !menu) return;

    let open = false;

    button.addEventListener('click', (e) => {
        e.preventDefault();
        open = !open;
        menu.classList.toggle('hidden', !open);
    });

    // Cierra si haces clic fuera
    document.addEventListener('click', (e) => {
        if (!button.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
            open = false;
        }
    });
}
