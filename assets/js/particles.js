/**
 * particles.js – Módulo reutilizable para animación de partículas en fondo canvas
 */
// assets/js/particles.js

function initParticlesCanvas() {
    const canvas = document.getElementById('particles-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = canvas.width = canvas.offsetWidth;
    let height = canvas.height = canvas.offsetHeight;
    const colors = ['#FD6144', '#FD3244', '#AE3A8D'];

    let mouseX = 0, mouseY = 0, isClicked = false, clickTimer = null;

    class Particle {
        constructor() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.size = Math.random() * 3 + 1;
            this.color = colors[Math.floor(Math.random() * colors.length)];
            this.speedX = Math.random() * 0.5 - 0.25;
            this.speedY = Math.random() * 0.5 - 0.25;
            this.originalSpeed = { x: this.speedX, y: this.speedY };
            this.alpha = Math.random() * 0.3 + 0.1;
        }

        update() {
            const dx = this.x - mouseX;
            const dy = this.y - mouseY;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < 100) {
                const force = 100 / distance;
                this.speedX = this.originalSpeed.x + (dx / distance) * force * 0.02;
                this.speedY = this.originalSpeed.y + (dy / distance) * force * 0.02;
            } else {
                this.speedX = this.speedX * 0.95 + this.originalSpeed.x * 0.05;
                this.speedY = this.speedY * 0.95 + this.originalSpeed.y * 0.05;
            }

            if (isClicked) {
                this.speedX *= 1.5;
                this.speedY *= 1.5;
            }

            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0) this.x = width;
            if (this.x > width) this.x = 0;
            if (this.y < 0) this.y = height;
            if (this.y > height) this.y = 0;
        }

        draw() {
            ctx.globalAlpha = this.alpha;
            ctx.fillStyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.globalAlpha = 1;
        }
    }

    const particlesArray = [];
    const particleCount = Math.min(100, Math.floor(width * height / 10000));
    for (let i = 0; i < particleCount; i++) particlesArray.push(new Particle());

    function animateParticles() {
        ctx.clearRect(0, 0, width, height);
        particlesArray.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(animateParticles);
    }

    canvas.addEventListener('mousemove', (e) => {
        const rect = canvas.getBoundingClientRect();
        mouseX = e.clientX - rect.left;
        mouseY = e.clientY - rect.top;
    });

    canvas.addEventListener('mousedown', () => {
        isClicked = true;
        clearTimeout(clickTimer);
        clickTimer = setTimeout(() => isClicked = false, 500);
    });

    window.addEventListener('resize', () => {
        width = canvas.width = canvas.offsetWidth;
        height = canvas.height = canvas.offsetHeight;
    });

    animateParticles();
}
