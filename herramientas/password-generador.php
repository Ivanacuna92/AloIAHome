<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Generador de Contraseñas | Aloia";
$activePage = 'herramientas';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para el generador de contraseñas -->
<link rel="stylesheet" href="<?= CSS_PATH ?>password-generador.css">

<!-- Header específico para la página de contraseñas con efecto de partículas -->
<section class="password-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Generador de Contraseñas</h1>
                <p class="text-xl opacity-90">Crea contraseñas seguras y aleatorias al instante</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>password-icon.png" alt="Password" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3064/3064155.png'">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto opacity-0 animate-[fadeIn_1s_ease-in-out_0.6s_forwards]">
            <div class="password-display shadow-aloia">
                <span id="passwordOutput" class="font-mono">Haga clic en generar</span>
                <div class="action-buttons">
                    <button class="action-btn" id="copyBtn" title="Copiar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                    </button>
                    <button class="action-btn" id="refreshBtn" title="Generar nuevo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="password-options shadow-aloia">
                <h2 class="text-2xl font-bold mb-6">Personalice su contraseña</h2>
                
                <div class="mb-6">
                    <label class="form-label">Longitud de la contraseña: <span id="lengthValue" class="font-bold">12</span></label>
                    <input type="range" class="range-slider" id="lengthSlider" min="8" max="32" value="12">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="uppercaseCheck" checked>
                            <label class="form-check-label">Mayúsculas (A-Z)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="lowercaseCheck" checked>
                            <label class="form-check-label">Minúsculas (a-z)</label>
                        </div>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="numbersCheck" checked>
                            <label class="form-check-label">Números (0-9)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="symbolsCheck" checked>
                            <label class="form-check-label">Símbolos (!@#$%)</label>
                        </div>
                    </div>
                </div>

                <button id="generateBtn" class="btn-aloia-primary">
                    Generar Contraseña
                </button>
            </div>
        </div>
    </div>
</main>

<!-- Beneficios -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Por qué usar contraseñas seguras?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Protección</h3>
                <p class="text-gray-600">
                    Las contraseñas seguras protegen tus cuentas contra accesos no autorizados y ataques de fuerza bruta.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Privacidad</h3>
                <p class="text-gray-600">
                    Mantén tu información personal y datos confidenciales a salvo de miradas indiscretas.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m-6-8h6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Cumplimiento</h3>
                <p class="text-gray-600">
                    Cumple con las políticas de seguridad y normativas que exigen contraseñas robustas.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Consejos de seguridad -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Consejos para la gestión de contraseñas</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-orange/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Contraseñas únicas</h3>
                <p class="text-sm text-gray-600">
                    Utiliza una contraseña diferente para cada servicio o cuenta que utilices.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Gestor de contraseñas</h3>
                <p class="text-sm text-gray-600">
                    Usa un gestor de contraseñas para almacenar y generar contraseñas seguras.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Autenticación 2FA</h3>
                <p class="text-sm text-gray-600">
                    Activa la autenticación de dos factores siempre que sea posible.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Actualiza regularmente</h3>
                <p class="text-sm text-gray-600">
                    Cambia tus contraseñas periódicamente, especialmente para cuentas sensibles.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Script para el generador de contraseñas -->
<script src="<?= JS_PATH ?>password-generador.js"></script>

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