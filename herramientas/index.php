<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Herramientas Digitales | Aloia";
$activePage = 'herramientas';

$tools = [
    [
        'title' => 'Generador de Enlaces WhatsApp',
        'slug' => 'whatsapp-generador.php',
        'category' => 'comunicacion',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />',
        'description' => 'Crea enlaces directos para iniciar conversaciones de WhatsApp sin guardar el número.',
        'badge' => null
    ],
    [
        'title' => 'Generador de Firmas para Correo',
        'slug' => 'firma-generador.php',
        'category' => 'comunicacion',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
        'description' => 'Crea firmas profesionales para tus correos con info de contacto y redes sociales.',
        'badge' => null
    ],
    [
        'title' => 'Generador de Códigos QR',
        'slug' => 'qr-generador.php',
        'category' => 'utilidades',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />',
        'description' => 'Genera códigos QR para enlaces, texto, ubicaciones y más.',
        'badge' => null
    ],
    [
        'title' => 'Generador de Contraseñas',
        'slug' => 'password-generador.php',
        'category' => 'seguridad',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />',
        'description' => 'Crea contraseñas seguras con diferentes niveles de complejidad.',
        'badge' => 'Popular'
    ],
    [
        'title' => 'Localizador IP',
        'slug' => 'get-ip.php',
        'category' => 'utilidades',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />',
        'description' => 'Consulta información detallada sobre tu IP y ubicación geográfica.',
        'badge' => null
    ],
    [
        'title' => 'Conversor de Colores',
        'slug' => 'colores.php',
        'category' => 'diseno',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />',
        'description' => 'Selecciona y convierte colores para diseño web y branding.',
        'badge' => 'Nueva'
    ],
];
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para la página de herramientas -->
<link rel="stylesheet" href="<?= CSS_PATH ?>herramientas.css">

<!-- Header específico para la página de herramientas con efecto de partículas -->
<section class="tools-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div
                class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Herramientas Digitales</h1>
                <p class="text-xl opacity-90">Soluciones prácticas para tus necesidades digitales</p>
            </div>
            <div
                class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>tools-icon.png" alt="Herramientas"
                    class="w-40 h-40 object-contain animate-float"
                    onerror="this.src='https://cdn-icons-png.flaticon.com/512/1057/1057097.png'">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <div class="container mx-auto px-4">
        <!-- Buscador de herramientas -->
        <div class="max-w-2xl mx-auto mb-12 opacity-0 animate-[fadeIn_1s_ease-in-out_0.6s_forwards]">
            <div class="search-container">
                <span class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
                <input type="text" class="search-input shadow-aloia" placeholder="Buscar herramientas..."
                    id="searchTools">
            </div>

            <!-- Categorías -->
            <div class="flex flex-wrap justify-center mb-8">
                <button class="category-tab active" data-category="all">Todas</button>
                <button class="category-tab" data-category="comunicacion">Comunicación</button>
                <button class="category-tab" data-category="seguridad">Seguridad</button>
                <button class="category-tab" data-category="diseno">Diseño</button>
                <button class="category-tab" data-category="utilidades">Utilidades</button>
            </div>
        </div>

        <!-- Grid de herramientas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 opacity-0 animate-[fadeIn_1s_ease-in-out_0.8s_forwards]"
            id="toolsGrid">
            <?php foreach ($tools as $tool): ?>
                <div class="tool-card" data-category="<?= $tool['category'] ?>">
                    <?php if (!empty($tool['badge'])): ?>
                        <div class="tool-badge"><?= htmlspecialchars($tool['badge']) ?></div>
                    <?php endif; ?>
                    <div class="p-6">
                        <div class="tool-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <?= $tool['icon'] ?>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3"><?= htmlspecialchars($tool['title']) ?></h3>
                        <p class="text-gray-600"><?= htmlspecialchars($tool['description']) ?></p>
                        <a href="<?= htmlspecialchars($tool['slug']) ?>" class="tool-link">
                            Usar herramienta
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- Mensaje de no resultados -->
        <div id="noResults" class="hidden text-center py-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-bold mb-2">No se encontraron herramientas</h3>
            <p class="text-gray-600">Intenta con otra búsqueda o categoría</p>
        </div>
    </div>
</main>

<!-- Sección de beneficios -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Por qué usar nuestras herramientas?</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-aloia text-center">
                <div class="w-16 h-16 rounded-full bg-aloia-orange/10 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-aloia-orange" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Rápidas y Eficientes</h3>
                <p class="text-gray-600">
                    Todas nuestras herramientas están optimizadas para funcionar de manera rápida y eficiente,
                    ahorrándote tiempo valioso.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-aloia text-center">
                <div class="w-16 h-16 rounded-full bg-aloia-red/10 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-aloia-red" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Seguras y Privadas</h3>
                <p class="text-gray-600">
                    Tu privacidad es nuestra prioridad. Todas las herramientas funcionan en tu navegador sin almacenar
                    tus datos personales.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-aloia text-center">
                <div class="w-16 h-16 rounded-full bg-aloia-purple/10 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-aloia-purple" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Compatibles con Móviles</h3>
                <p class="text-gray-600">
                    Diseñadas para funcionar perfectamente en cualquier dispositivo, desde tu computadora hasta tu
                    smartphone.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sección de CTA -->
<section class="py-16 bg-gradient-to-r from-aloia-orange to-aloia-red text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">¿No encuentras la herramienta que necesitas?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Estamos constantemente desarrollando nuevas herramientas para ayudarte en tus tareas digitales. ¡Háznoslo
            saber!
        </p>
        <a href="contacto.php"
            class="inline-block bg-white text-aloia-red font-bold py-3 px-8 rounded-full shadow-lg hover:transform hover:scale-105 transition-all">
            Sugerir una herramienta
        </a>
    </div>
</section>

<!-- Script para la funcionalidad de la página -->
<script src="<?= JS_PATH ?>herramientas.js"></script>

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