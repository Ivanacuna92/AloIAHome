<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Herramienta de Colores | Aloia";
$activePage = 'herramientas';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para la herramienta de colores -->
<link rel="stylesheet" href="<?= CSS_PATH ?>herramienta-colores.css">

<!-- Header específico para la página de colores con efecto de partículas -->
<section class="color-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Herramienta de Colores</h1>
                <p class="text-xl opacity-90">Selecciona, convierte y genera paletas de colores</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>color-icon.png" alt="Color" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3721/3721925.png'">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto opacity-0 animate-[fadeIn_1s_ease-in-out_0.6s_forwards]">
            <div class="color-picker-container shadow-aloia">
                <div class="tabs-container flex mb-4">
                    <button class="tab-button active" data-tab="picker">Selector de Color</button>
                    <button class="tab-button" data-tab="converter">Conversor</button>
                    <button class="tab-button" data-tab="palette">Paletas</button>
                </div>
                
                <!-- Tab: Selector de Color -->
                <div id="picker-tab" class="tab-content active">
                    <div class="color-preview" id="colorPreview"></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="form-label">Rojo (R)</label>
                            <input type="range" min="0" max="255" value="253" class="color-slider red" id="redSlider">
                            <input type="number" min="0" max="255" value="253" class="form-control" id="redInput">
                        </div>
                        <div>
                            <label class="form-label">Verde (G)</label>
                            <input type="range" min="0" max="255" value="97" class="color-slider green" id="greenSlider">
                            <input type="number" min="0" max="255" value="97" class="form-control" id="greenInput">
                        </div>
                        <div>
                            <label class="form-label">Azul (B)</label>
                            <input type="range" min="0" max="255" value="68" class="color-slider blue" id="blueSlider">
                            <input type="number" min="0" max="255" value="68" class="form-control" id="blueInput">
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label">Selector de Color</label>
                        <input type="color" class="w-full h-12 cursor-pointer" id="colorPicker" value="#FD6144">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <div class="color-value">
                                <span id="hexValue">#FD6144</span>
                                <button class="copy-btn" data-value="#FD6144" onclick="copyToClipboard(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="color-value">
                                <span id="rgbValue">rgb(253, 97, 68)</span>
                                <button class="copy-btn" data-value="rgb(253, 97, 68)" onclick="copyToClipboard(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div>
                            <div class="color-value">
                                <span id="hslValue">hsl(11, 98%, 63%)</span>
                                <button class="copy-btn" data-value="hsl(11, 98%, 63%)" onclick="copyToClipboard(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="color-value">
                                <span id="hsvValue">hsv(11, 73%, 99%)</span>
                                <button class="copy-btn" data-value="hsv(11, 73%, 99%)" onclick="copyToClipboard(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab: Conversor -->
                <div id="converter-tab" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-4">
                                <label class="form-label">Formato de entrada</label>
                                <select class="form-control" id="inputFormat">
                                    <option value="hex">HEX (#RRGGBB)</option>
                                    <option value="rgb">RGB (R,G,B)</option>
                                    <option value="hsl">HSL (H,S,L)</option>
                                    <option value="hsv">HSV (H,S,V)</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Valor</label>
                                <input type="text" class="form-control" id="inputValue" placeholder="Ingresa un valor de color">
                            </div>
                            
                            <button class="btn-aloia-primary mb-4" id="convertBtn">Convertir</button>
                        </div>
                        
                        <div>
                            <div class="color-preview mb-4" id="convertPreview"></div>
                            
                            <div class="space-y-3">
                                <div class="color-value">
                                    <span>HEX: </span>
                                    <span id="convertHex">#000000</span>
                                    <button class="copy-btn" data-value="#000000" onclick="copyToClipboard(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="color-value">
                                    <span>RGB: </span>
                                    <span id="convertRgb">rgb(0, 0, 0)</span>
                                    <button class="copy-btn" data-value="rgb(0, 0, 0)" onclick="copyToClipboard(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="color-value">
                                    <span>HSL: </span>
                                    <span id="convertHsl">hsl(0, 0%, 0%)</span>
                                    <button class="copy-btn" data-value="hsl(0, 0%, 0%)" onclick="copyToClipboard(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="color-value">
                                    <span>HSV: </span>
                                    <span id="convertHsv">hsv(0, 0%, 0%)</span>
                                    <button class="copy-btn" data-value="hsv(0, 0%, 0%)" onclick="copyToClipboard(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab: Paletas -->
                <div id="palette-tab" class="tab-content">
                    <div class="mb-4">
                        <label class="form-label">Color base</label>
                        <input type="color" class="w-full h-12 cursor-pointer" id="paletteBaseColor" value="#FD6144">
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label">Tipo de paleta</label>
                        <select class="form-control" id="paletteType">
                            <option value="analogous">Análoga</option>
                            <option value="monochromatic">Monocromática</option>
                            <option value="triadic">Triádica</option>
                            <option value="complementary">Complementaria</option>
                            <option value="split">Complementaria dividida</option>
                        </select>
                    </div>
                    
                    <button class="btn-aloia-primary mb-4" id="generatePaletteBtn">Generar Paleta</button>
                    
                    <div class="mt-6">
                        <h3 class="text-xl font-bold mb-3">Paleta de colores</h3>
                        <div class="color-palette" id="colorPalette">
                            <!-- Las paletas de colores se generarán aquí -->
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="text-xl font-bold mb-3">Códigos de colores</h3>
                        <div id="paletteValues" class="space-y-2">
                            <!-- Los valores de colores se mostrarán aquí -->
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
        <h2 class="text-3xl font-bold text-center mb-12">¿Por qué usar una herramienta de colores?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Diseño Profesional</h3>
                <p class="text-gray-600">
                    Crea combinaciones de colores armoniosas para tus diseños web, gráficos o proyectos creativos.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Conversión Precisa</h3>
                <p class="text-gray-600">
                    Convierte colores entre diferentes formatos (HEX, RGB, HSL, HSV) con precisión para cualquier plataforma.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Inspiración Creativa</h3>
                <p class="text-gray-600">
                    Encuentra inspiración con paletas de colores generadas automáticamente basadas en teoría del color.
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Diseño Web</h3>
                <p class="text-sm text-gray-600">
                    Selecciona colores para tu sitio web que sean accesibles y atractivos visualmente.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Diseño Gráfico</h3>
                <p class="text-sm text-gray-600">
                    Crea paletas de colores para logotipos, carteles, folletos y otros materiales gráficos.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Desarrollo Frontend</h3>
                <p class="text-sm text-gray-600">
                    Convierte colores entre formatos para usar en CSS, JavaScript o cualquier lenguaje de programación.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Decoración de Interiores</h3>
                <p class="text-sm text-gray-600">
                    Planifica esquemas de color para habitaciones y espacios interiores.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Script para la herramienta de colores -->
<script src="<?= JS_PATH ?>herramienta-colores.js"></script>

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