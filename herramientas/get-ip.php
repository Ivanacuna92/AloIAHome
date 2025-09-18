<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title = "Localizador IP | Aloia";
$activePage = 'herramientas';

// Obtener información básica del usuario
$user_ip = $_SERVER['REMOTE_ADDR']; 
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'No disponible';
$user_referer = $_SERVER['HTTP_REFERER'] ?? 'Acceso directo';
$server_port = $_SERVER['SERVER_PORT'] ?? '80';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para el localizador IP -->
<link rel="stylesheet" href="<?= CSS_PATH ?>get-ip.css">

<!-- Header específico para la página de IP con efecto de partículas -->
<section class="ip-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Localizador IP</h1>
                <p class="text-xl opacity-90">Consulta información detallada sobre tu dirección IP</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>ip-icon.png" alt="IP" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://cdn-icons-png.flaticon.com/512/1183/1183599.png'">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto opacity-0 animate-[fadeIn_1s_ease-in-out_0.6s_forwards]">
            <button class="btn-check-ip shadow-aloia" onclick="checkIP()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                Consultar mi IP
            </button>

            <div class="loader" id="loader"></div>

            <div class="info-container" id="infoContainer">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <div class="feature-card shadow-aloia">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Tu Dirección IP</h3>
                            <p class="text-3xl text-aloia-red font-mono mb-4" id="ipAddress"><?= $user_ip ?></p>
                            <hr class="my-4 border-gray-200">
                            <div class="mt-4 space-y-3">
                                <div class="flex items-start">
                                    <span class="font-bold w-28">Navegador:</span>
                                    <span id="userAgent" class="text-gray-600 flex-1"><?= htmlspecialchars(substr($user_agent, 0, 50)) ?>...</span>
                                </div>
                                <div class="flex items-start">
                                    <span class="font-bold w-28">Idioma:</span>
                                    <span id="language" class="text-gray-600 flex-1"><?= htmlspecialchars($user_language) ?></span>
                                </div>
                                <div class="flex items-start">
                                    <span class="font-bold w-28">Referencia:</span>
                                    <span id="referer" class="text-gray-600 flex-1"><?= htmlspecialchars($user_referer) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="feature-card shadow-aloia">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Información Geográfica</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">País</span>
                                        <p class="font-medium" id="country">Cargando...</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Ciudad</span>
                                        <p class="font-medium" id="city">Cargando...</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">ISP</span>
                                        <p class="font-medium" id="isp">Cargando...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mapa -->
                <div class="mt-6">
                    <div class="feature-card shadow-aloia">
                        <h3 class="text-2xl font-bold mb-4">Ubicación en el Mapa</h3>
                        <div id="map" class="w-full h-80 rounded-lg bg-gray-100 overflow-hidden">
                            <div class="flex items-center justify-center h-full text-gray-500">
                                <p>Cargando mapa...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Beneficios -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Para qué verificar tu IP?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="feature-icon flex items-center justify-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Seguridad</h3>
                <p class="text-gray-600">
                    Verifica si tu conexión es segura y si tu IP está expuesta a posibles amenazas.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="feature-icon flex items-center justify-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Privacidad</h3>
                <p class="text-gray-600">
                    Comprueba qué información puede ver un sitio web sobre ti cuando lo visitas.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="feature-icon flex items-center justify-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Geolocalización</h3>
                <p class="text-gray-600">
                    Conoce la ubicación aproximada que los servicios en línea pueden detectar de ti.
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Verificar VPN</h3>
                <p class="text-sm text-gray-600">
                    Comprueba si tu VPN está funcionando correctamente ocultando tu IP real.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Restricciones geográficas</h3>
                <p class="text-sm text-gray-600">
                    Identifica si puedes acceder a contenido restringido por ubicación.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Solución de problemas</h3>
                <p class="text-sm text-gray-600">
                    Diagnostica problemas de conexión relacionados con tu dirección IP.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Información técnica</h3>
                <p class="text-sm text-gray-600">
                    Obtén datos técnicos sobre tu conexión para configuraciones avanzadas.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Script para el localizador de IP -->
<script>
    const IP_INFO_URL = "<?= BASE_URL ?>/api/get_ip_info.php";
</script>
<script src="<?= JS_PATH ?>get-ip.js"></script>


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