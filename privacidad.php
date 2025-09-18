<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = "Aviso de privacidad | Aloia";

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
            background: linear-gradient(to right, #FD6144, #D54A7B, #AE3A8D);
        }
        .gradient-coral-magenta {
            background: linear-gradient(to bottom right, #FD6144, #AE3A8D);
        }
        .text-gradient {
            background: linear-gradient(to right, #FEB2A8, #FFFFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .scroll-smooth {
            scroll-behavior: smooth;
        }
        .backdrop-blur {
            backdrop-filter: blur(8px);
        }
        .section-icon {
            transition: all 0.3s ease;
        }
        .nav-item {
            transition: all 0.2s ease;
        }
        .nav-item.active {
            background: linear-gradient(to right, #FD6144, #AE3A8D);
            color: white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .nav-item:hover:not(.active) {
            background-color: #FFF7ED;
            color: #EA580C;
        }
        .scroll-to-top {
            transform: scale(0);
            transition: all 0.3s ease;
        }
        .scroll-to-top.show {
            transform: scale(1);
        }
        .scroll-to-top:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 scroll-smooth">
    <!-- Header -->
    <header class="sticky top-0 z-50 gradient-main text-white shadow-2xl backdrop-blur">
        <div class="container mx-auto px-4 md:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                        <i data-lucide="shield" class="w-6 h-6 text-white"></i>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gradient">
                        MAUISTIK NETWORK
                    </h1>
                </div>
                <div class="flex items-center gap-2 text-blue-200">
                    <i data-lucide="file-text" class="w-4 h-4"></i>
                    <p class="text-sm md:text-base">Última actualización: 20 de mayo de 2025</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 md:px-8 py-8 flex gap-8">
        <!-- Navigation Sidebar -->
        <aside class="hidden lg:block w-80 sticky top-32 h-fit">
            <div class="bg-white/80 backdrop-blur rounded-2xl shadow-xl border border-white/20 p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                    <i data-lucide="file-text" class="w-5 h-5 text-blue-600"></i>
                    Índice de Contenidos
                </h3>
                <nav class="space-y-2" id="navigation">
                    <button onclick="scrollToSection('identidad')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Identidad y Domicilio</span>
                    </button>
                    <button onclick="scrollToSection('datos')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="file-text" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Datos que Recabamos</span>
                    </button>
                    <button onclick="scrollToSection('finalidades')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="settings" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Finalidades del Tratamiento</span>
                    </button>
                    <button onclick="scrollToSection('transferencias')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Transferencias de Datos</span>
                    </button>
                    <button onclick="scrollToSection('derechos')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="shield" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Derechos ARCO</span>
                    </button>
                    <button onclick="scrollToSection('limitacion')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="lock" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Limitación de Uso</span>
                    </button>
                    <button onclick="scrollToSection('cookies')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Cookies y Tecnologías</span>
                    </button>
                    <button onclick="scrollToSection('seguridad')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="shield" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Medidas de Seguridad</span>
                    </button>
                    <button onclick="scrollToSection('cambios')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="file-text" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Cambios al Aviso</span>
                    </button>
                    <button onclick="scrollToSection('consentimiento')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Consentimiento</span>
                    </button>
                    <button onclick="scrollToSection('contacto')" class="nav-item w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 text-gray-700">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Contacto</span>
                    </button>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="bg-white/80 backdrop-blur shadow-2xl rounded-3xl border border-white/20 overflow-hidden">
                <!-- Title Section -->
                <div class="gradient-main text-white p-8 md:p-12">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="shield" class="w-10 h-10 text-white"></i>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">AVISO DE PRIVACIDAD</h1>
                        <p class="text-xl text-orange-100 max-w-2xl mx-auto">
                            Protegemos sus datos personales con los más altos estándares de seguridad y transparencia
                        </p>
                    </div>
                </div>

                <div class="p-8 md:p-12 space-y-12">
                    <!-- Section 1 -->
                    <section id="identidad" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                                1. IDENTIDAD Y DOMICILIO DEL RESPONSABLE
                            </h2>
                        </div>
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border-l-4 border-blue-500">
                            <p class="text-gray-700 leading-relaxed">
                                <strong class="text-blue-800">MAUISTIK NETWORK, S.A. DE C.V.</strong> (en adelante "MAUISTIK
                                NETWORK"), con domicilio en [INSERTAR DIRECCIÓN COMPLETA], es responsable del tratamiento y
                                protección de sus datos personales, en cumplimiento con la Ley Federal de Protección de Datos
                                Personales en Posesión de los Particulares, su Reglamento y dems normatividad aplicable en México.
                            </p>
                        </div>
                    </section>

                    <!-- Section 2 -->
                    <section id="datos" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="file-text" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">2. DATOS PERSONALES QUE RECABAMOS</h2>
                        </div>
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border-l-4 border-green-500">
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Para las finalidades establecidas en el presente Aviso de Privacidad, MAUISTIK NETWORK podr recabar
                                las siguientes categorías de datos personales:
                            </p>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-green-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="users" class="w-5 h-5"></i>
                                        2.1 Datos de identificación
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Nombre completo
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Correo electrónico
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Número telefónico
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Dirección
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Identificación oficial
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            RFC y/o CURP
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-green-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="settings" class="w-5 h-5"></i>
                                        2.2 Datos laborales
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Cargo o puesto
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Empresa o institución
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Datos de contacto laboral
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-green-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="file-text" class="w-5 h-5"></i>
                                        2.3 Datos financieros
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Información de facturación
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Datos bancarios para pagos y cobros
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-green-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="eye" class="w-5 h-5"></i>
                                        2.4 Datos técnicos
                                    </h3>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Dirección IP
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Identificadores de dispositivos
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Cookies y tecnologías similares
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            Datos de navegación y uso
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 3 -->
                    <section id="finalidades" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                                <i data-lucide="settings" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">3. FINALIDADES DEL TRATAMIENTO</h2>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 border-l-4 border-purple-500">
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Sus datos personales serán utilizados para las siguientes finalidades:
                            </p>

                            <div class="space-y-6">
                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-purple-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="shield" class="w-5 h-5"></i>
                                        3.1 Finalidades primarias (necesarias)
                                    </h3>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Gestionar la relación comercial y contractual
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Proporcionar los servicios y productos solicitados
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Procesar pagos y facturación
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Brindar soporte técnico y atención al cliente
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Actualizar registros y mantener cuenta activa
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Cumplir con obligaciones legales aplicables
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                            Prevenir fraudes y garantizar seguridad
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-sm">
                                    <h3 class="text-lg font-semibold text-purple-700 mb-4 flex items-center gap-2">
                                        <i data-lucide="mail" class="w-5 h-5"></i>
                                        3.2 Finalidades secundarias (no necesarias)
                                    </h3>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                                            Enviar comunicaciones sobre nuevos productos
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                                            Realizar encuestas de satisfacción
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                                            Mejorar nuestros productos y servicios
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                                            Enviar invitaciones a eventos y webinars
                                        </div>
                                        <div class="flex items-center gap-2 text-gray-700">
                                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                                            Ofrecer promociones y descuentos personalizados
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 p-4 bg-amber-50 border border-amber-200 rounded-xl">
                                <p class="text-gray-700">
                                    Si no desea que sus datos personales sean tratados para finalidades secundarias, puede comunicar
                                    su negativa enviando un correo electrónico a
                                    <a href="mailto:privacidad@mauistik.com" class="text-purple-600 hover:text-purple-800 font-medium underline decoration-2 underline-offset-2">
                                        privacidad@mauistik.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Section 4 -->
                    <section id="transferencias" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="users" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">4. TRANSFERENCIAS DE DATOS</h2>
                        </div>
                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-6 border-l-4 border-orange-500">
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                MAUISTIK NETWORK podrá transferir sus datos personales, sin requerir su consentimiento, en los
                                siguientes supuestos:
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-3 bg-white rounded-lg">
                                    <div class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">
                                        1
                                    </div>
                                    <p class="text-gray-700">A empresas afiliadas, subsidiarias o controladoras de MAUISTIK NETWORK</p>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-white rounded-lg">
                                    <div class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">
                                        2
                                    </div>
                                    <p class="text-gray-700">A proveedores de servicios que actan como encargados del tratamiento</p>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-white rounded-lg">
                                    <div class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">
                                        3
                                    </div>
                                    <p class="text-gray-700">A autoridades competentes en los casos legalmente previstos</p>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-white rounded-lg">
                                    <div class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">
                                        4
                                    </div>
                                    <p class="text-gray-700">En casos de emergencia para proteger la seguridad</p>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-white rounded-lg">
                                    <div class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">
                                        5
                                    </div>
                                    <p class="text-gray-700">Para el cumplimiento de obligaciones legales</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 5 -->
                    <section id="derechos" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="shield" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                                5. DERECHOS ARCO Y REVOCACIÓN DEL CONSENTIMIENTO
                            </h2>
                        </div>
                        <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-6 border-l-4 border-teal-500">
                            <div class="grid md:grid-cols-4 gap-4 mb-6">
                                <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">
                                        A
                                    </div>
                                    <h4 class="font-semibold text-teal-700 mb-1">Acceso</h4>
                                    <p class="text-sm text-gray-600">Conocer qué datos tenemos</p>
                                </div>
                                <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">
                                        R
                                    </div>
                                    <h4 class="font-semibold text-teal-700 mb-1">Rectificación</h4>
                                    <p class="text-sm text-gray-600">Corregir información inexacta</p>
                                </div>
                                <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">
                                        C
                                    </div>
                                    <h4 class="font-semibold text-teal-700 mb-1">Cancelación</h4>
                                    <p class="text-sm text-gray-600">Eliminar de nuestros registros</p>
                                </div>
                                <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">
                                        O
                                    </div>
                                    <h4 class="font-semibold text-teal-700 mb-1">Oposición</h4>
                                    <p class="text-sm text-gray-600">Oponerse al uso específico</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <h4 class="font-semibold text-teal-700 mb-4">Para ejercer sus Derechos ARCO:</h4>
                                <p class="text-gray-700 mb-4">
                                    Envíe su solicitud a
                                    <a href="mailto:privacidad@mauistik.com" class="text-teal-600 hover:text-teal-800 font-medium underline decoration-2 underline-offset-2">
                                        privacidad@mauistik.com
                                    </a>
                                    incluyendo:
                                </p>
                                <ol class="space-y-2">
                                    <li class="flex items-center gap-3">
                                        <div class="w-6 h-6 bg-teal-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                            1
                                        </div>
                                        <span class="text-gray-700">Nombre completo y correo electrónico</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-6 h-6 bg-teal-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                            2
                                        </div>
                                        <span class="text-gray-700">Documentos que acrediten su identidad</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-6 h-6 bg-teal-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                            3
                                        </div>
                                        <span class="text-gray-700">Descripción clara de los datos personales</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-6 h-6 bg-teal-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                            4
                                        </div>
                                        <span class="text-gray-700">Documentos que faciliten la localización</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </section>

                    <!-- Remaining sections -->
                    <section id="limitacion" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                                <i data-lucide="lock" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">6. LIMITACIÓN DE USO Y DIVULGACIÓN</h2>
                        </div>
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-6 border-l-4 border-indigo-500">
                            <p class="text-gray-700 leading-relaxed">
                                Para limitar el uso o divulgación de sus datos personales, puede inscribirse en el Registro Público
                                para Evitar Publicidad (REPEP) de la PROFECO o enviar su solicitud al correo electrónico
                                <a href="mailto:privacidad@mauistik.com" class="text-indigo-600 hover:text-indigo-800 font-medium underline decoration-2 underline-offset-2">
                                    privacidad@mauistik.com
                                </a>
                            </p>
                        </div>
                    </section>

                    <section id="cookies" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="eye" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                                7. USO DE COOKIES Y TECNOLOGAS DE RASTREO
                            </h2>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-6 border-l-4 border-yellow-500">
                            <p class="text-gray-700 leading-relaxed">
                                Nuestro sitio web y plataformas utilizan cookies y otras tecnologías similares para mejorar su
                                experiencia de navegación, analizar tendencias, administrar el sitio y recopilar información
                                demográfica sobre nuestra base de usuarios. Puede configurar su navegador para rechazar todas o
                                algunas cookies.
                            </p>
                        </div>
                    </section>

                    <section id="seguridad" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="shield" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">8. MEDIDAS DE SEGURIDAD</h2>
                        </div>
                        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl p-6 border-l-4 border-emerald-500">
                            <p class="text-gray-700 leading-relaxed">
                                MAUISTIK NETWORK ha implementado y mantiene medidas de seguridad administrativas, técnicas y físicas
                                para proteger sus datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o
                                tratamiento no autorizado.
                            </p>
                        </div>
                    </section>

                    <section id="cambios" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-lg flex items-center justify-center">
                                <i data-lucide="file-text" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">9. CAMBIOS AL AVISO DE PRIVACIDAD</h2>
                        </div>
                        <div class="bg-gradient-to-r from-pink-50 to-rose-50 rounded-2xl p-6 border-l-4 border-pink-500">
                            <p class="text-gray-700 leading-relaxed">
                                MAUISTIK NETWORK se reserva el derecho de efectuar modificaciones o actualizaciones al presente
                                Aviso de Privacidad. Cualquier modificación será comunicada a través de nuestro sitio web
                                <a href="https://www.mauistik.com" class="text-pink-600 hover:text-pink-800 font-medium underline decoration-2 underline-offset-2">
                                    www.mauistik.com
                                </a>
                                o mediante correo electrónico.
                            </p>
                        </div>
                    </section>

                    <section id="consentimiento" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                                <i data-lucide="users" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">10. CONSENTIMIENTO</h2>
                        </div>
                        <div class="bg-gradient-to-r from-violet-50 to-purple-50 rounded-2xl p-6 border-l-4 border-violet-500">
                            <p class="text-gray-700 leading-relaxed">
                                Al proporcionar sus datos personales a MAUISTIK NETWORK, ya sea a través de nuestro sitio web,
                                aplicaciones, formularios electrónicos o físicos, o cualquier otro medio, usted acepta el
                                tratamiento de sus datos personales conforme a los términos y condiciones de este Aviso de
                                Privacidad.
                            </p>
                        </div>
                    </section>

                    <section id="contacto" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-coral-magenta rounded-lg flex items-center justify-center">
                                <i data-lucide="phone" class="w-5 h-5 text-white"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">11. CONTACTO</h2>
                        </div>
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border-l-4 border-blue-500">
                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-12 h-12 gradient-coral-magenta rounded-full flex items-center justify-center">
                                        <i data-lucide="mail" class="w-6 h-6 text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-orange-700">Contacto de Privacidad</h4>
                                        <p class="text-gray-600">Para consultas sobre este aviso</p>
                                    </div>
                                </div>
                                <p class="text-gray-700">
                                    Si tiene alguna pregunta o comentario respecto a este Aviso de Privacidad, puede contactarnos a
                                    través del correo electrónico
                                    <a href="mailto:privacidad@mauistik.com" class="text-blue-600 hover:text-orange-800 font-medium underline decoration-2 underline-offset-2">
                                        privacidad@mauistik.com
                                    </a>
                                    o en nuestro domicilio mencionado al inicio de este documento.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Final commitment -->
                    <div class="mt-12 p-8 gradient-main rounded-2xl text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="shield" class="w-8 h-8 text-white"></i>
                        </div>
                        <p class="text-xl font-medium">
                            MAUISTIK NETWORK se compromete con la protección de sus datos personales y el cumplimiento de la
                            normatividad aplicable en materia de privacidad.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="gradient-main text-white py-8 mt-16">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-8 gradient-coral-magenta rounded-lg flex items-center justify-center">
                    <i data-lucide="shield" class="w-4 h-4 text-white"></i>
                </div>
                <span class="text-lg font-semibold">MAUISTIK NETWORK</span>
            </div>
            <p class="text-gray-300">&copy; 2025 MAUISTIK NETWORK, S.A. DE C.V. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <button id="scrollToTop" class="scroll-to-top fixed bottom-8 right-8 w-12 h-12 gradient-coral-magenta text-white rounded-full shadow-2xl z-50">
        <i data-lucide="chevron-up" class="w-6 h-6 mx-auto"></i>
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
<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>