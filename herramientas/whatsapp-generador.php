<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Generador de Enlaces WhatsApp | Aloia";
$activePage = 'herramientas';
?>

<?php include __DIR__ . '/../partials/layout/head.php'; ?>
<?php include __DIR__ . '/../partials/layout/header.php'; ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>whatsapp-generator.css">

<!-- Header específico para la página de WhatsApp con efecto de partículas -->
<section class="whatsapp-header bg-aloia-dark text-aloia-white py-20 md:py-24 relative overflow-hidden">
    <canvas id="particles-canvas" class="absolute top-0 left-0 w-full h-full"></canvas>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 opacity-0 animate-[fadeIn_1s_ease-in-out_0.2s_forwards] transform translate-y-10 animate-[slideUp_1s_ease-in-out_0.2s_forwards]">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Generador de Enlaces WhatsApp</h1>
                <p class="text-xl opacity-90">Crea enlaces personalizados para iniciar conversaciones en WhatsApp de forma rápida y sencilla.</p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end opacity-0 animate-[fadeIn_1s_ease-in-out_0.4s_forwards]">
                <img src="<?= IMG_PATH ?>whatsapp-icon.png" alt="WhatsApp" class="w-32 h-32 object-contain animate-float" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png'">
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
                        <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold">Crea tu enlace</h2>
                    </div>

                    <div class="form-group">
                        <label class="block text-gray-700 font-medium mb-2">Tu número de teléfono</label>
                        <div class="phone-input-container">
                            <select class="form-select" id="countryCode">
                                <option value="+52">🇲🇽 México (+52)</option>
                                <option value="+1">🇺🇸 USA (+1)</option>
                                <option value="+1">🇨🇦 Canadá (+1)</option>
                                <option value="+34">🇪🇸 España (+34)</option>
                                <option value="+54">🇦 Argentina (+54)</option>
                                <option value="+57">🇨🇴 Colombia (+57)</option>
                                <option value="+56">🇨🇱 Chile (+56)</option>
                                <option value="+51">🇵🇪 Perú (+51)</option>
                                <option value="+58">🇻🇪 Venezuela (+58)</option>
                                <option value="+502">🇹 Guatemala (+502)</option>
                                <option value="+503">🇸🇻 El Salvador (+503)</option>
                                <option value="+504">🇭🇳 Honduras (+504)</option>
                                <option value="+505">🇳🇮 Nicaragua (+505)</option>
                                <option value="+506">🇨🇷 Costa Rica (+506)</option>
                                <option value="+507">🇵 Panamá (+507)</option>
                                <option value="+593">🇪🇨 Ecuador (+593)</option>
                                <option value="+591">🇧🇴 Bolivia (+591)</option>
                                <option value="+595">🇵 Paraguay (+595)</option>
                                <option value="+598">🇺🇾 Uruguay (+598)</option>
                                <option value="+809">🇩🇴 República Dominicana (+809)</option>
                                <option value="+53">🇨🇺 Cuba (+53)</option>
                                <option value="+787">🇷 Puerto Rico (+787)</option>
                            </select>
                            <input type="tel" id="phone" class="form-control" placeholder="5512341234">
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Solo ingresa los nmeros, sin espacios ni guiones</p>
                    </div>

                    <div class="form-group">
                        <label class="block text-gray-700 font-medium mb-2">Texto del mensaje</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>

                    <button id="generateBtn" class="bg-aloia-red text-white px-6 py-3 rounded-full font-medium hover:bg-aloia-purple transition duration-300 mb-5">
                        Actualizar enlace
                    </button>

                    <div id="linkResult" class="link-result">
                        <label class="block text-gray-700 font-medium mb-2">Tu enlace de WhatsApp</label>
                        <input type="text" id="generatedLink" class="form-control mb-3" readonly>
                        <button id="copyBtn" class="btn-aloia-outline">
                            Copiar enlace
                        </button>
                    </div>
                </div>
            </div>

            <!-- Columna del preview -->
            <div class="w-full lg:w-1/2 opacity-0 animate-[fadeIn_1s_ease-in-out_0.8s_forwards] transform translate-x-[30px] animate-[slideLeft_1s_ease-in-out_0.8s_forwards]">
                <div class="iphone-mockup">
                    <div class="iphone-frame">
                        <!-- Notch del iPhone -->
                        <div class="notch"></div>
                        <!-- WhatsApp UI -->
                        <div class="wa-header">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                <div class="avatar-circle">
                                    <img src="<?= IMG_PATH ?>icono.png" alt="Aloia Bot" class="w-8 h-8">
                                </div>
                                <div>
                                    <div class="font-bold text-white" id="previewNumber">Preview del mensaje</div>
                                    <div class="text-xs text-white opacity-80">en línea</div>
                                </div>
                            </div>
                        </div>
                        <div id="previewChat"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Instrucciones -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Cómo generar tu link de WhatsApp?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Paso 1 -->
            <div class="instruction-card bg-white p-6 opacity-0 animate-[fadeIn_1s_ease-in-out_1s_forwards]">
                <div class="instruction-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">1. Ingresa tu número</h3>
                <p class="text-gray-600 mb-4">
                    Selecciona tu país del menú desplegable y escribe tu número de teléfono sin espacios ni caracteres especiales.
                </p>
                <p class="text-gray-600">
                    Para México el código es (+52). Si eres de otro país, selecciona el tuyo de la lista.
                </p>
            </div>
            
            <!-- Paso 2 -->
            <div class="instruction-card bg-white p-6 opacity-0 animate-[fadeIn_1s_ease-in-out_1.2s_forwards]">
                <div class="instruction-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">2. Escribe tu mensaje</h3>
                <p class="text-gray-600 mb-4">
                    Redacta el mensaje que quieres que aparezca pre-escrito cuando tus contactos abran el chat de WhatsApp.
                </p>
                <p class="text-gray-600">
                    Verás una vista previa en tiempo real. Cuando estés satisfecho, haz clic en "Actualizar enlace", copia y ¡listo!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Ventajas de usar enlaces personalizados</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-aloia border border-gray-100 hover:shadow-md transition-all opacity-0 animate-[fadeIn_1s_ease-in-out_1.4s_forwards]">
                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-aloia-orange to-aloia-red flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Más rápido</h3>
                <p class="text-gray-600">
                    Tus clientes no necesitan guardar tu número para iniciar una conversación, ahorrando tiempo y esfuerzo.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-aloia border border-gray-100 hover:shadow-md transition-all opacity-0 animate-[fadeIn_1s_ease-in-out_1.6s_forwards]">
                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-aloia-red to-aloia-purple flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Mensaje predefinido</h3>
                <p class="text-gray-600">
                    Incluye un mensaje personalizado que aparecerá automáticamente, facilitando el inicio de la conversación.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-aloia border border-gray-100 hover:shadow-md transition-all opacity-0 animate-[fadeIn_1s_ease-in-out_1.8s_forwards]">
                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-aloia-orange to-aloia-purple flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Compartible</h3>
                <p class="text-gray-600">
                    Comparte el enlace en tu sitio web, redes sociales, tarjetas de presentación o cualquier material promocional.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Casos de uso -->
<section class="py-12 bg-aloia-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Casos de uso</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-orange/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Tiendas online</h3>
                <p class="text-sm text-gray-600">
                    Añade un botón de WhatsApp en tu tienda para que los clientes puedan consultar sobre productos.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-red/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Servicios profesionales</h3>
                <p class="text-sm text-gray-600">
                    Facilita a tus clientes potenciales contactarte para solicitar presupuestos o información.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Reservas y citas</h3>
                <p class="text-sm text-gray-600">
                    Crea enlaces para que tus clientes puedan reservar citas o servicios directamente.
                </p>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-aloia hover:transform hover:scale-103 transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-aloia-orange/10 to-aloia-purple/10 flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-aloia-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold mb-2">Atención al cliente</h3>
                <p class="text-sm text-gray-600">
                    Ofrece soporte rápido a través de WhatsApp con mensajes predefinidos para cada tipo de consulta.
                </p>
            </div>
        </div>
    </div>
</section>

<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      initParticlesCanvas(); // Solo si hay <canvas id="particles-canvas">
    });
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<script src="<?= JS_PATH ?>whatsapp-generator.js"></script>
<?php include __DIR__ . '/../partials/layout/chatwidget.php'; ?>
<?php include __DIR__ . '/../partials/layout/footer.php'; ?>