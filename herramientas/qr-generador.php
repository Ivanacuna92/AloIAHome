<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Generador de Códigos QR | Aloia";
$activePage = 'herramientas';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para el generador de QR -->
<link rel="stylesheet" href="<?= CSS_PATH ?>qr-generador.css">

<!-- Header específico para la página de QR con efecto de partículas -->
<section class="qr-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Generador de Códigos QR</h1>
                <p class="text-xl opacity-90">Crea códigos QR personalizados para tu negocio o uso personal</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>qr-icon.png" alt="QR Code" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://cdn-icons-png.flaticon.com/512/714/714390.png'">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Columna del formulario -->
            <div class="w-full lg:w-1/2 opacity-0 animate-[fadeIn_1s_ease-in-out_0.6s_forwards] transform translate-x-[-30px] animate-[slideRight_1s_ease-in-out_0.6s_forwards]">
                <div class="bg-white rounded-2xl shadow-aloia p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-aloia-orange to-aloia-red flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold">Crea tu código QR</h2>
                    </div>

                    <form id="qrForm">
                        <div class="mb-4">
                            <label class="form-label">Tipo de QR</label>
                            <select class="form-select" id="qrType">
                                <option value="url">URL</option>
                                <option value="text">Texto</option>
                                <option value="email">Email</option>
                                <option value="tel">Teléfono</option>
                                <option value="sms">SMS</option>
                                <option value="wifi">WiFi</option>
                            </select>
                        </div>

                        <div id="dynamicFields">
                            <!-- Los campos se generan dinámicamente según el tipo -->
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="form-label">Color del QR</label>
                                <input type="color" class="color-picker" id="qrColor" value="#FD3244">
                            </div>
                            <div>
                                <label class="form-label">Tamaño (px)</label>
                                <input type="number" class="form-control" id="qrSize" value="200" min="100" max="500">
                            </div>
                        </div>

                        <button type="button" id="generateBtn" class="btn-aloia-primary">
                            Generar QR
                        </button>
                    </form>
                </div>
            </div>

            <!-- Columna de preview -->
            <div class="w-full lg:w-1/2 opacity-0 animate-[fadeIn_1s_ease-in-out_0.8s_forwards] transform translate-x-[30px] animate-[slideLeft_1s_ease-in-out_0.8s_forwards]">
                <div class="bg-white rounded-2xl shadow-aloia p-6">
                    <h3 class="text-2xl font-bold mb-4">Vista previa</h3>
                    <div class="qr-preview">
                        <div id="qrcode"></div>
                    </div>
                    <button id="downloadBtn" class="btn-aloia-primary hidden">
                        Descargar QR
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Beneficios -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Para qué usar códigos QR?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Acceso rápido</h3>
                <p class="text-gray-600">
                    Facilita el acceso a tu sitio web, menú digital o información de contacto con un simple escaneo.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Seguridad</h3>
                <p class="text-gray-600">
                    Comparte información de forma segura y evita errores de transcripción manual de datos.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Personalización</h3>
                <p class="text-gray-600">
                    Adapta los colores y tamaños para que coincidan con tu marca e identidad visual.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Casos de uso -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Casos de uso</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-orange/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Menús digitales</h3>
                <p class="text-sm text-gray-600">
                    Coloca códigos QR en tus mesas para que los clientes accedan a tu menú digital sin contacto.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Pagos móviles</h3>
                <p class="text-sm text-gray-600">
                    Facilita los pagos compartiendo tus datos bancarios o enlaces a plataformas de pago mediante QR.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Eventos</h3>
                <p class="text-sm text-gray-600">
                    Incluye códigos QR en invitaciones para acceder a ubicaciones, registros o información adicional.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">WiFi</h3>
                <p class="text-sm text-gray-600">
                    Comparte acceso a tu red WiFi sin necesidad de compartir contraseñas manualmente.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Script para el generador de QR usando Google Charts API -->
<script src="<?= JS_PATH ?>qr-generador.js"></script>

<!-- Script para las partículas -->
<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof initParticlesCanvas === 'function') {
            initParticlesCanvas(); // Solo si hay <canvas id="particles-canvas">
        }
    });
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
<?php include __DIR__ . '/../partials/layout/footer.php'; ?>