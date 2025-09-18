<?php
require_once __DIR__ . '/includes/config.php';
$page_title = "Aviso de Privacidad | Aloia";
?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso de Privacidad - Mauistik Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/lucide.min.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        .gradient-main {
            background: linear-gradient(135deg, #FD6144, #AE3A8D);
        }
        .scroll-smooth {
            scroll-behavior: smooth;
        }
        .nav-item {
            transition: all 0.2s ease;
        }
        .nav-item.active {
            background-color: #f3f4f6;
            color: #FD6144;
            border-left: 3px solid #FD6144;
        }
        .nav-item:hover:not(.active) {
            background-color: #f9fafb;
        }
        .scroll-to-top {
            transform: scale(0);
            transition: all 0.3s ease;
        }
        .scroll-to-top.show {
            transform: scale(1);
        }
        .section-divider {
            border-left: 2px solid #e5e7eb;
        }
    </style>
</head>
<body class="bg-white scroll-smooth">

    <div class="container mx-auto px-6 py-8 flex gap-12">
        <!-- Navigation Sidebar -->
        <aside class="hidden lg:block w-64 sticky top-24 h-fit">
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-sm font-medium text-gray-900 mb-4">Contenidos</h3>
                <nav class="space-y-1" id="navigation">
                    <button onclick="scrollToSection('identidad')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        1. Identidad y Domicilio
                    </button>
                    <button onclick="scrollToSection('datos')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        2. Datos que Recabamos
                    </button>
                    <button onclick="scrollToSection('finalidades')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        3. Finalidades del Tratamiento
                    </button>
                    <button onclick="scrollToSection('transferencias')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        4. Transferencias de Datos
                    </button>
                    <button onclick="scrollToSection('derechos')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        5. Derechos ARCO
                    </button>
                    <button onclick="scrollToSection('limitacion')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        6. Limitacin de Uso
                    </button>
                    <button onclick="scrollToSection('cookies')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        7. Cookies y Tecnologas
                    </button>
                    <button onclick="scrollToSection('seguridad')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        8. Medidas de Seguridad
                    </button>
                    <button onclick="scrollToSection('cambios')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        9. Cambios al Aviso
                    </button>
                    <button onclick="scrollToSection('consentimiento')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        10. Consentimiento
                    </button>
                    <button onclick="scrollToSection('contacto')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        11. Contacto
                    </button>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 max-w-4xl text-justify">
            <!-- Title Section -->
            <div class="text-center mb-16">
                <div class="w-16 h-16 gradient-main rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="shield" class="w-8 h-8 text-white"></i>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Aviso de Privacidad</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Protegemos sus datos personales con transparencia y los más altos estándares de seguridad
                </p>
            </div>

            <div class="space-y-16">
                <!-- Section 1 -->
                <section id="identidad" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        1. Identidad y Domicilio del Responsable
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Aloia ai, S.A. DE C.V.</strong> (en adelante "ALOIA.AI"), 
                            con domicilio en [INSERTAR DIRECCIÓN COMPLETA], es responsable del tratamiento y 
                            protección de sus datos personales, en cumplimiento con la Ley Federal de Protección 
                            de Datos Personales en Posesión de los Particulares, su Reglamento y demás normatividad 
                            aplicable en Mxico.
                        </p>
                    </div>
                </section>

                <!-- Section 2 -->
                <section id="datos" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        2. Datos Personales que Recabamos
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Para las finalidades establecidas en el presente Aviso de Privacidad, ALOIA.AI
                            podrá recabar las siguientes categoras de datos personales:
                        </p>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Datos de identificación</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Nombre completo</li>
                                    <li>• Correo electrónico</li>
                                    <li>• Número telefónico</li>
                                    <li> Dirección</li>
                                    <li> Identificación oficial</li>
                                    <li>• RFC y/o CURP</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Datos laborales</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li> Cargo o puesto</li>
                                    <li> Empresa o institución</li>
                                    <li>• Datos de contacto laboral</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Datos financieros</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li> Información de facturación</li>
                                    <li>• Datos bancarios para pagos y cobros</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Datos técnicos</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Dirección IP</li>
                                    <li>• Identificadores de dispositivos</li>
                                    <li>• Cookies y tecnologías similares</li>
                                    <li>• Datos de navegacin y uso</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 3 -->
                <section id="finalidades" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        3. Finalidades del Tratamiento
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Sus datos personales serán utilizados para las siguientes finalidades:
                        </p>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Finalidades primarias (necesarias)</h3>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="text-gray-700"> Gestionar la relación comercial y contractual</div>
                                    <div class="text-gray-700">• Proporcionar los servicios y productos solicitados</div>
                                    <div class="text-gray-700"> Procesar pagos y facturación</div>
                                    <div class="text-gray-700">• Brindar soporte técnico y atención al cliente</div>
                                    <div class="text-gray-700"> Actualizar registros y mantener cuenta activa</div>
                                    <div class="text-gray-700">• Cumplir con obligaciones legales aplicables</div>
                                    <div class="text-gray-700"> Prevenir fraudes y garantizar seguridad</div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Finalidades secundarias (no necesarias)</h3>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="text-gray-700">• Enviar comunicaciones sobre nuevos productos</div>
                                    <div class="text-gray-700">• Realizar encuestas de satisfacción</div>
                                    <div class="text-gray-700"> Mejorar nuestros productos y servicios</div>
                                    <div class="text-gray-700">• Enviar invitaciones a eventos y webinars</div>
                                    <div class="text-gray-700">• Ofrecer promociones y descuentos personalizados</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                            <p class="text-gray-700 text-sm">
                                Si no desea que sus datos personales sean tratados para finalidades secundarias, 
                                puede comunicar su negativa enviando un correo electrónico a
                                <a href="mailto:ivan@aloia.ai" class="text-blue-600 hover:underline">
                                     ivan@aloia.ai
                                </a>
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 4 -->
                <section id="transferencias" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        4. Transferencias de Datos
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            ALOIA.AI podrá transferir sus datos personales, sin requerir su consentimiento, 
                            en los siguientes supuestos:
                        </p>
                        <ol class="space-y-3 text-gray-700">
                            <li>1. A empresas afiliadas, subsidiarias o controladoras de ALOIA.AI</li>
                            <li>2. A proveedores de servicios que actúan como encargados del tratamiento</li>
                            <li>3. A autoridades competentes en los casos legalmente previstos</li>
                            <li>4. En casos de emergencia para proteger la seguridad</li>
                            <li>5. Para el cumplimiento de obligaciones legales</li>
                        </ol>
                    </div>
                </section>

                <!-- Section 5 -->
                <section id="derechos" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        5. Derechos ARCO y Revocación del Consentimiento
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <div class="grid md:grid-cols-4 gap-6 mb-8">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gray-100 text-gray-700 rounded-full flex items-center justify-center text-xl font-semibold mx-auto mb-2">
                                    A
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Acceso</h4>
                                <p class="text-sm text-gray-600">Conocer qué datos tenemos</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gray-100 text-gray-700 rounded-full flex items-center justify-center text-xl font-semibold mx-auto mb-2">
                                    R
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Rectificación</h4>
                                <p class="text-sm text-gray-600">Corregir información inexacta</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gray-100 text-gray-700 rounded-full flex items-center justify-center text-xl font-semibold mx-auto mb-2">
                                    C
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Cancelación</h4>
                                <p class="text-sm text-gray-600">Eliminar de nuestros registros</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gray-100 text-gray-700 rounded-full flex items-center justify-center text-xl font-semibold mx-auto mb-2">
                                    O
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Oposición</h4>
                                <p class="text-sm text-gray-600">Oponerse al uso específico</p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-6">
                            <h4 class="font-medium text-gray-900 mb-4">Para ejercer sus Derechos ARCO:</h4>
                            <p class="text-gray-700 mb-4">
                                Envíe su solicitud a
                                <a href="mailto:ivan@aloia.ai" class="text-blue-600 hover:underline">
                                      ivan@aloia.ai
                                </a>
                                incluyendo:
                            </p>
                            <ol class="space-y-2 text-gray-700">
                                <li>1. Nombre completo y correo electrónico</li>
                                <li>2. Documentos que acrediten su identidad</li>
                                <li>3. Descripcin clara de los datos personales</li>
                                <li>4. Documentos que faciliten la localización</li>
                            </ol>
                        </div>
                    </div>
                </section>

                <!-- Section 6 -->
                <section id="limitacion" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        6. Limitacin de Uso y Divulgación
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            Para limitar el uso o divulgación de sus datos personales, puede inscribirse en el 
                            Registro Público para Evitar Publicidad (REPEP) de la PROFECO o enviar su solicitud 
                            al correo electrónico
                            <a href="mailto:ivan@aloia.ai" class="text-blue-600 hover:underline">
                                 ivan@aloia.ai
                            </a>
                        </p>
                    </div>
                </section>

                <!-- Section 7 -->
                <section id="cookies" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        7. Uso de Cookies y Tecnologías de Rastreo
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            Nuestro sitio web y plataformas utilizan cookies y otras tecnologías similares para 
                            mejorar su experiencia de navegación, analizar tendencias, administrar el sitio y 
                            recopilar información demográfica sobre nuestra base de usuarios. Puede configurar 
                            su navegador para rechazar todas o algunas cookies.
                        </p>
                    </div>
                </section>

                <!-- Section 8 -->
                <section id="seguridad" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        8. Medidas de Seguridad
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            ALOIA.AI ha implementado y mantiene medidas de seguridad administrativas, 
                            tcnicas y fsicas para proteger sus datos personales contra daño, pérdida, alteración, 
                            destruccin o el uso, acceso o tratamiento no autorizado.
                        </p>
                    </div>
                </section>

                <!-- Section 9 -->
                <section id="cambios" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        9. Cambios al Aviso de Privacidad
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            ALOIA.AI se reserva el derecho de efectuar modificaciones o actualizaciones 
                            al presente Aviso de Privacidad. Cualquier modificación será comunicada a través de 
                            nuestro sitio web
                            <a href="https://aloia.ai/index.php" class="text-blue-600 hover:underline">
                               https://aloia.ai/
                            </a>
                            o mediante correo electrónico.
                        </p>
                    </div>
                </section>

                <!-- Section 10 -->
                <section id="consentimiento" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        10. Consentimiento
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            Al proporcionar sus datos personales a ALOIA.AI, ya sea a través de nuestro 
                            sitio web, aplicaciones, formularios electrónicos o físicos, o cualquier otro medio, 
                            usted acepta el tratamiento de sus datos personales conforme a los términos y 
                            condiciones de este Aviso de Privacidad.
                        </p>
                    </div>
                </section>

                <!-- Section 11 -->
                <section id="contacto" class="scroll-mt-24">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        11. Contacto
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <div class="border border-gray-200 rounded-lg p-6">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 gradient-main rounded-full flex items-center justify-center">
                                    <i data-lucide="mail" class="w-5 h-5 text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-900">Contacto de Privacidad</h4>
                                    <p class="text-sm text-gray-600">Para consultas sobre este aviso</p>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                Si tiene alguna pregunta o comentario respecto a este Aviso de Privacidad, 
                                puede contactarnos a través del correo electrónico
                                <a href="mailto:ivan@aloia.ai" class="text-blue-600 hover:underline">
									ivan@aloia.ai
                                </a>
                                o en nuestro domicilio mencionado al inicio de este documento.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Final commitment -->
                <div class="text-center py-12 border-t border-gray-200">
                    <div class="w-12 h-12 gradient-main rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="shield" class="w-6 h-6 text-white"></i>
                    </div>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                        ALOIA.AI se compromete con la protección de sus datos personales y el 
                        cumplimiento de la normatividad aplicable en materia de privacidad.
                    </p>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-gray-50 py-8 mt-16">
        <div class="container mx-auto px-6 text-center">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-6 h-6 gradient-main rounded flex items-center justify-center">
                    <i data-lucide="shield" class="w-3 h-3 text-white"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">ALOIA.AI</span>
            </div>
            <p class="text-sm text-gray-600">
                &copy; 2025 ALOIA.AI Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <button id="scrollToTop" class="scroll-to-top fixed bottom-8 right-8 w-10 h-10 bg-gray-900 text-white rounded-full shadow-lg z-50 hover:bg-gray-800">
        <i data-lucide="chevron-up" class="w-5 h-5 mx-auto"></i>
    </button>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Variables
        let activeSection = '';
        const scrollToTopBtn = document.getElementById('scrollToTop');
        const navItems = document.querySelectorAll('.nav-item');

        // Scroll to section function
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Update active navigation item
        function updateActiveNav(currentSection) {
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.onclick.toString().includes(currentSection)) {
                    item.classList.add('active');
                }
            });
        }

        // Handle scroll events
        function handleScroll() {
            // Show/hide scroll to top button
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }

            // Update active section
            const sections = document.querySelectorAll('section[id]');
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= sectionTop - 100) {
                    current = section.id;
                }
            });

            if (current !== activeSection) {
                activeSection = current;
                updateActiveNav(current);
            }
        }

        // Event listeners
        window.addEventListener('scroll', handleScroll);
        scrollToTopBtn.addEventListener('click', scrollToTop);

        // Initialize
        handleScroll();
    </script>
</body>
</html>

<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>