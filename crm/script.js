// ALO-CRM Landing Page - JavaScript Completo
window.addEventListener('DOMContentLoaded', () => {
    initChatbotToggle();

});
// Progress Bar
window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const maxHeight = document.documentElement.scrollHeight - window.innerHeight;
    const percentage = (scrolled / maxHeight) * 100;
    document.getElementById('progressBar').style.width = percentage + '%';
});

// Fade In con Scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const fadeInObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');

            // Si es una sección con elementos hijos, animar con stagger
            const staggerElements = entry.target.querySelectorAll('.stagger-item');
            staggerElements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('stagger-animation');
                }, index * 100);
            });
        }
    });
}, observerOptions);

// Aplicar observer a todos los elementos fade-in-scroll
document.querySelectorAll('.fade-in-scroll').forEach(el => {
    fadeInObserver.observe(el);
});

// Observer especfico para los items de funcionalidades
const functionalityObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            functionalityObserver.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.2,
    rootMargin: '0px 0px -50px 0px'
});

// Calculadora de pérdidas FUNCIONAL
function initCalculator() {
    const leadsInput = document.getElementById('leadsPerMonth');
    const ticketInput = document.getElementById('avgTicket');
    const lossAmount = document.getElementById('lossAmount');

    function calculateLoss() {
        const leads = parseInt(leadsInput.value) || 100;
        const ticket = parseInt(ticketInput.value) || 5000;

        // 73% de leads perdidos según el headline
        const lostLeads = Math.floor(leads * 0.73);
        const monthlyLoss = lostLeads * ticket;

        // Animar el cambio del número
        animateValue(lossAmount, monthlyLoss);
    }

    function animateValue(element, value) {
        const duration = 1000;
        const start = parseInt(element.textContent.replace(/[^0-9]/g, '')) || 0;
        const increment = (value - start) / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if ((increment > 0 && current >= value) || (increment < 0 && current <= value)) {
                current = value;
                clearInterval(timer);
            }

            // Formatear número con comas
            const formatted = new Intl.NumberFormat('es-MX', {
                style: 'currency',
                currency: 'MXN',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(Math.floor(current));

            element.textContent = formatted + ' MXN';
        }, 16);
    }

    if (leadsInput && ticketInput && lossAmount) {
        // Calcular inicial
        calculateLoss();

        // Listeners
        leadsInput.addEventListener('input', calculateLoss);
        ticketInput.addEventListener('input', calculateLoss);
    }
}

// Animacin de contadores
function animateCounters() {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const suffix = counter.textContent.includes('%') ? '%' : '';
        let hasAnimated = false;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    let current = 0;
                    const increment = target / 50;

                    const updateCounter = () => {
                        if (current < target) {
                            current = Math.min(current + increment, target);
                            counter.textContent = Math.ceil(current) + suffix;
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target + suffix;
                        }
                    };

                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(counter);
    });
}

// Carrusel de testimonios FUNCIONAL
function initTestimonialCarousel() {
    const carousel = document.getElementById('testimonialsCarousel');
    if (!carousel) return;

    const cards = carousel.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.nav-dot');
    let currentIndex = 0;
    let autoplayInterval;

    function showTestimonial(index) {
        // Ocultar todos
        cards.forEach(card => {
            card.classList.remove('active');
            card.style.display = 'none';
        });

        dots.forEach(dot => dot.classList.remove('active'));

        // Mostrar el actual
        cards[index].classList.add('active');
        cards[index].style.display = 'block';
        dots[index].classList.add('active');

        currentIndex = index;
    }

    function nextTestimonial() {
        const nextIndex = (currentIndex + 1) % cards.length;
        showTestimonial(nextIndex);
    }

    function startAutoplay() {
        autoplayInterval = setInterval(nextTestimonial, 5000);
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    // Inicializar
    showTestimonial(0);
    startAutoplay();

    // Event listeners para los dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoplay();
            showTestimonial(index);
            startAutoplay();
        });
    });

    // Pausar en hover
    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
}

// Animación de hover para integraciones
function initIntegrationAnimations() {
    const integrationItems = document.querySelectorAll('.integration-item');
    const center = document.querySelector('.integration-center');

    if (!center) return;

    // Efecto simple de hover sin líneas
    integrationItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Solo añadir glow al centro
            center.style.boxShadow = '0 0 30px rgba(253, 97, 68, 0.5)';
        });

        item.addEventListener('mouseleave', () => {
            // Restaurar sombra normal
            center.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.15)';
        });
    });
}

// Formulario con validación mejorada
function initForm() {
    const form = document.getElementById('leadForm');
    if (!form) return;

    const inputs = form.querySelectorAll('input, select');

    // Validación en tiempo real
    inputs.forEach(input => {
        input.addEventListener('blur', () => {
            validateField(input);
        });

        input.addEventListener('input', () => {
            if (input.classList.contains('error')) {
                validateField(input);
            }
        });
    });

    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        let errorMessage = '';

        if (field.required && !value) {
            isValid = false;
            errorMessage = 'Este campo es requerido';
        }

        if (field.type === 'email') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (value && !emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Por favor ingresa un email válido';
            }
        }

        if (isValid) {
            field.classList.remove('error');
            field.style.borderColor = '#16D4A7';
        } else {
            field.classList.add('error');
            field.style.borderColor = '#ff6b6b';
        }

        return isValid;
    }

    // Submit del formulario
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Validar todos los campos
        let isFormValid = true;
        inputs.forEach(input => {
            if (!validateField(input)) {
                isFormValid = false;
            }
        });

        if (!isFormValid) {
            return;
        }

        // Obtener datos
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);

        // Simular envío
        const submitButton = form.querySelector('.form-submit');
        const originalText = submitButton.textContent;

        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

        // Simular delay de envío
        await new Promise(resolve => setTimeout(resolve, 2000));

        // Éxito
        submitButton.innerHTML = '<i class="fas fa-check"></i> Registro exitoso!';
        submitButton.style.backgroundColor = '#16D4A7';

        // Mostrar mensaje de éxito
        showNotification('¡Gracias por tu interés! Te contactaremos en las próximas 2 horas.', 'success');

        // Limpiar formulario
        setTimeout(() => {
            form.reset();
            submitButton.disabled = false;
            submitButton.textContent = originalText;
            submitButton.style.backgroundColor = '';
            inputs.forEach(input => {
                input.style.borderColor = '';
            });
        }, 3000);

        // Guardar en localStorage para seguimiento
        localStorage.setItem('alo_lead_submitted', JSON.stringify({
            data,
            timestamp: new Date().toISOString()
        }));
    });
}

// Sistema de notificaciones
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
        <span>${message}</span>
    `;

    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#16D4A7' : '#FF6B6B'};
        color: white;
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 10000;
        animation: slideInRight 0.5s ease-out;
        max-width: 400px;
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.5s ease-out';
        setTimeout(() => notification.remove(), 500);
    }, 5000);
}

// Smooth scroll para CTAs
function initSmoothScroll() {
    document.querySelectorAll('.cta-button').forEach(button => {
        if (button.textContent.includes('ACTIVA')) {
            button.addEventListener('click', (e) => {
                if (!button.closest('form')) {
                    e.preventDefault();
                    const ctaSection = document.querySelector('.final-cta-section');
                    if (ctaSection) {
                        ctaSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }
            });
        }
    });
}

// Demo interactivo
function initDemo() {
    const playDemoBtn = document.querySelector('.play-demo-btn');
    if (playDemoBtn) {
        playDemoBtn.addEventListener('click', () => {
            showNotification('Demo: Lead de Facebook → IA responde en 30s → Lead calificado → Venta cerrada', 'info');
        });
    }
}

// Video player
function initVideoPlayer() {
    const videoPlayBtns = document.querySelectorAll('.video-play-btn');
    videoPlayBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const video = btn.parentElement.querySelector('video');
            if (video) {
                if (video.paused) {
                    video.play();
                    btn.style.display = 'none';
                } else {
                    video.pause();
                    btn.style.display = 'flex';
                }
            }
        });
    });
}


function initChatWidget() {
    const chatButton = document.querySelector('.chat-button');
    if (chatButton) {
        chatButton.addEventListener('click', () => {
            showNotification('¡Hola! Un asesor te atender en menos de 2 minutos.', 'success');
        });
    }
}

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

// Modal functionality
function initModal() {
    const modal = document.getElementById('formModal');
    const primaryCTA = document.querySelector('.primary-cta');
    const closeBtn = document.querySelector('.close-modal');
    const modalForm = document.getElementById('modalLeadForm');

    // Abrir modal
    if (primaryCTA) {
        primaryCTA.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    }

    // Cerrar modal
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    }

    // Cerrar al hacer clic fuera
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Submit del formulario modal
    if (modalForm) {
        modalForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(modalForm);
            const data = Object.fromEntries(formData);

            const submitButton = modalForm.querySelector('.form-submit');
            const originalText = submitButton.textContent;

            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

            await new Promise(resolve => setTimeout(resolve, 2000));

            submitButton.innerHTML = '<i class="fas fa-check"></i> ¡Registro exitoso!';
            submitButton.style.backgroundColor = '#16D4A7';

            showNotification('¡Gracias! Te contactaremos en las próximas 2 horas.', 'success');

            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
                modalForm.reset();
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                submitButton.style.backgroundColor = '';
            }, 2000);
        });
    }
}

// Notificaciones de leads recientes
function showLeadNotifications() {
    const notifications = [
        "Carlos de Monterrey activó su prueba gratis",
        "Ana de Guadalajara está viendo el demo",
        "Roberto de CDMX solicit información",
        "María de Puebla eligió el plan Acelera",
        "José de Quertaro agendó una llamada"
    ];

    setInterval(() => {
        if (Math.random() > 0.7) { // 30% de probabilidad
            const message = notifications[Math.floor(Math.random() * notifications.length)];
            const notification = document.createElement('div');
            notification.className = 'lead-notification';
            notification.innerHTML = `
                <i class="fas fa-bell"></i>
                <span>${message}</span>
            `;

            notification.style.cssText = `
                position: fixed;
                bottom: 100px;
                left: 30px;
                background: white;
                padding: 16px 24px;
                border-radius: 8px;
                box-shadow: 0 5px 20px rgba(0,0,0,0.15);
                display: flex;
                align-items: center;
                gap: 12px;
                z-index: 999;
                animation: slideInLeft 0.5s ease-out;
            `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.style.animation = 'slideOutLeft 0.5s ease-out';
                setTimeout(() => notification.remove(), 500);
            }, 4000);
        }
    }, 30000);
}

// Parallax effect
function initParallax() {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.hero-content');
        const heroVideo = document.querySelector('.hero-video');

        if (heroContent && scrolled < window.innerHeight) {
            heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
            heroContent.style.opacity = Math.max(0, 1 - (scrolled / window.innerHeight));
        }

        if (heroVideo && scrolled < window.innerHeight) {
            heroVideo.style.transform = `translateY(${scrolled * 0.1}px)`;
        }
    });
}

// Añadir estilos de animacin
// Añadir estilos de animación
function addAnimationStyles() {
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutLeft {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(-100%);
                opacity: 0;
            }
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
      
        
        .error {
            border-color: #ff6b6b !important;
        }
        
        .connection-line {
            transform-origin: 0 0 !important;
        }
    `;
    document.head.appendChild(style);
}

// FAQ Functionality
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', () => {
            // Cerrar otros items abiertos
            const currentlyActive = document.querySelector('.faq-item.active');
            if (currentlyActive && currentlyActive !== item) {
                currentlyActive.classList.remove('active');
            }

            // Toggle el item clickeado
            item.classList.toggle('active');

            // Animar el scroll suave al abrir
            if (item.classList.contains('active')) {
                setTimeout(() => {
                    const rect = item.getBoundingClientRect();
                    const offset = window.pageYOffset + rect.top - 100;

                    window.scrollTo({
                        top: offset,
                        behavior: 'smooth'
                    });
                }, 100);
            }
        });
    });

    // Animación de entrada para FAQ items
    const faqObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                faqObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    faqItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'all 0.6s ease';
        faqObserver.observe(item);
    });
}

// Inicializar todo cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    initCalculator();
    animateCounters();
    initTestimonialCarousel();
    initIntegrationAnimations();
    initForm();
    initSmoothScroll();
    initDemo();
    initVideoPlayer();
    initChatWidget();
    initModal();
    showLeadNotifications();
    initParallax();
    addAnimationStyles();
    initFAQ();

    // Observar elementos de funcionalidades
    document.querySelectorAll('.functionality-item').forEach(item => {
        functionalityObserver.observe(item);
    });

    console.log('✅ ALO-CRM Landing Page - Todos los sistemas funcionando');
});

// Exit intent
let exitIntentShown = false;
document.addEventListener('mouseleave', (e) => {
    if (e.clientY <= 0 && !exitIntentShown) {
        exitIntentShown = true;
        showNotification('Un ejecutivo AI puede atenderte!', 'info');
    }
});