<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title = "Generador de Firmas de Email | Aloia";
$activePage = 'herramientas';
?>
<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<!-- Estilos personalizados para el generador de firmas -->
<link rel="stylesheet" href="<?= CSS_PATH ?>firma-generador.css">

<!-- Header de Firmas -->
<section class="signature-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Generador de Firmas</h1>
                <p class="text-xl opacity-90">Crea tu firma profesional para correo electrónico</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>email-icon.png" alt="Email" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://cdn-icons-png.flaticon.com/512/5968/5968534.png'">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold">Crea tu firma</h2>
                    </div>

                    <form id="signatureForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Nombre*</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div>
                                <label class="form-label">Apellido*</label>
                                <input type="text" class="form-control" id="apellido" required>
                            </div>
                            <div>
                                <label class="form-label">Puesto</label>
                                <input type="text" class="form-control" id="puesto">
                            </div>
                            <div>
                                <label class="form-label">Departamento</label>
                                <input type="text" class="form-control" id="departamento">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa">
                            </div>
                            <div>
                                <label class="form-label">Teléfono Oficina</label>
                                <input type="tel" class="form-control" id="telOficina">
                            </div>
                            <div>
                                <label class="form-label">Teléfono Móvil</label>
                                <input type="tel" class="form-control" id="telMovil">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Email*</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Imagen de perfil</label>
                                <input type="url" class="form-control" id="imgPerfil" placeholder="https://">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Logotipo de empresa</label>
                                <input type="url" class="form-control" id="imgLogo" placeholder="https://">
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="mt-6">
                            <h3 class="text-xl font-bold mb-4">Redes Sociales</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="form-label">LinkedIn</label>
                                    <input type="url" class="form-control" id="linkedin" placeholder="https://linkedin.com/in/...">
                                </div>
                                <div>
                                    <label class="form-label">Twitter</label>
                                    <input type="url" class="form-control" id="twitter" placeholder="https://twitter.com/...">
                                </div>
                                <div>
                                    <label class="form-label">Instagram</label>
                                    <input type="url" class="form-control" id="instagram" placeholder="https://instagram.com/...">
                                </div>
                                <div>
                                    <label class="form-label">Facebook</label>
                                    <input type="url" class="form-control" id="facebook" placeholder="https://facebook.com/...">
                                </div>
                            </div>
                        </div>

                        <!-- Personalización de colores -->
                        <div class="mt-6">
                            <h3 class="text-xl font-bold mb-4">Personalización de colores</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="form-label">Color principal</label>
                                    <input type="color" class="color-picker w-full" id="colorTema" value="#FD3244">
                                </div>
                                <div>
                                    <label class="form-label">Color texto</label>
                                    <input type="color" class="color-picker w-full" id="colorTexto" value="#000000">
                                </div>
                                <div>
                                    <label class="form-label">Color enlaces</label>
                                    <input type="color" class="color-picker w-full" id="colorEnlaces" value="#FD6144">
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-4 mt-6">
                            <button type="button" id="btnBorrar" class="btn-aloia-outline">
                                Borrar todo
                            </button>
                            <button type="button" id="btnCrear" class="btn-aloia-primary">
                                Crear firma
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Columna de preview -->
            <div class="w-full lg:w-1/2 opacity-0 animate-[fadeIn_1s_ease-in-out_0.8s_forwards] transform translate-x-[30px] animate-[slideLeft_1s_ease-in-out_0.8s_forwards]">
                <div class="bg-white rounded-2xl shadow-aloia p-6">
                    <h3 class="text-2xl font-bold mb-4">Vista previa</h3>
                    <div class="preview-area" id="signaturePreview">
                        <div id="previewContent">
                            <!-- El preview se actualiza via JavaScript -->
                        </div>
                    </div>
                    <button id="btnCopiar" class="btn-aloia-primary hidden">
                        Copiar firma
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Beneficios -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Por qué usar un Generador de Firmas?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Profesionalismo</h3>
                <p class="text-gray-600">
                    Dale un toque empresarial a tus correos con una firma que destaque y refleje tu identidad profesional.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Personalización</h3>
                <p class="text-gray-600">
                    Adapta los colores y diseño a tu marca e identidad visual para crear una firma única y memorable.
                </p>
            </div>
            
            <div class="feature-card p-6 text-center opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="feature-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Contacto Directo</h3>
                <p class="text-gray-600">
                    Comparte tu información de manera elegante y accesible, facilitando que tus contactos se comuniquen contigo.
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Profesionales</h3>
                <p class="text-sm text-gray-600">
                    Ideal para consultores, abogados y profesionales independientes que buscan proyectar una imagen profesional.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Empresas</h3>
                <p class="text-sm text-gray-600">
                    Mantén una imagen corporativa consistente en todas las comunicaciones por correo electrónico de tu empresa.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Creativos</h3>
                <p class="text-sm text-gray-600">
                    Diseñadores, fotógrafos y artistas pueden mostrar su estilo personal con una firma que refleje su creatividad.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Ventas</h3>
                <p class="text-sm text-gray-600">
                    Equipos comerciales pueden incluir enlaces directos a productos o servicios en sus firmas para impulsar conversiones.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Script para el generador de firmas -->
<script src="<?= JS_PATH ?>firma-generador.js"></script>

<!-- Script para las partículas -->
<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        initParticlesCanvas(); // Solo si hay <canvas id="particles-canvas">
    });
</script>


<script src="<?= JS_PATH ?>main.js"></script>
<?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
<?php include __DIR__ . '/../partials/layout/footer.php'; ?>