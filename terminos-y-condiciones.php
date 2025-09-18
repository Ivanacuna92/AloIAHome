<?php
require_once __DIR__ . '/includes/config.php';
$page_title = "Terminos y Condiciones | Aloia";
?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones de Servicio - ALOIA.AI</title>
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
                    <button onclick="scrollToSection('introduccion')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        1. Introducción y Aceptación
                    </button>
                    <button onclick="scrollToSection('servicios')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        2. Descripción de los Servicios
                    </button>
                    <button onclick="scrollToSection('cuenta')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        3. Registro de Cuenta y Seguridad
                    </button>
                    <button onclick="scrollToSection('suscripcion')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        4. Términos de Suscripción y Precios
                    </button>
                    <button onclick="scrollToSection('datos')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        5. Protección de Datos y Privacidad
                    </button>
                    <button onclick="scrollToSection('propiedad')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        6. Derechos de Propiedad Intelectual
                    </button>
                    <button onclick="scrollToSection('uso')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        7. Política de Uso Aceptable
                    </button>
                    <button onclick="scrollToSection('ia')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        8. Términos Específicos de IA
                    </button>
                    <button onclick="scrollToSection('responsabilidad')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        9. Limitacin de Responsabilidad
                    </button>
                    <button onclick="scrollToSection('indemnizacion')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        10. Indemnización
                    </button>
                    <button onclick="scrollToSection('terminacion')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        11. Vigencia y Terminación
                    </button>
                    <button onclick="scrollToSection('disputas')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        12. Resolución de Disputas
                    </button>
                    <button onclick="scrollToSection('consumidor')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        13. Protección al Consumidor
                    </button>
                    <button onclick="scrollToSection('fiscales')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        14. Obligaciones Fiscales
                    </button>
                    <button onclick="scrollToSection('cumplimiento')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        15. Cumplimiento y Regulatorio
                    </button>
                    <button onclick="scrollToSection('diversas')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        16. Disposiciones Diversas
                    </button>
                    <button onclick="scrollToSection('contacto')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        17. Información de Contacto
                    </button>
                    <button onclick="scrollToSection('suplementarios')" class="nav-item w-full text-left px-3 py-2 rounded text-sm text-gray-600">
                        18. Términos Suplementarios
                    </button>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 max-w-4xl">
            <!-- Title Section -->
            <div class="text-center mb-16">
                <div class="w-16 h-16 gradient-main rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="file-text" class="w-8 h-8 text-white"></i>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Términos y Condiciones de Servicio</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-4">
                    ALOIA.AI - Soluciones de Inteligencia Artificial
                </p>
                <div class="text-sm text-gray-500 space-y-1">
                    <p>Fecha de Vigencia: 25 Julio 2025</p>
                    <p>Última Actualización: 25 Julio 2025</p>
                </div>
            </div>

            <div class="space-y-16">
                <!-- Section 1 -->
                <section id="introduccion" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        1. Introducción y Aceptación
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">1.1 Descripción del Acuerdo</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Estos Términos y Condiciones ("Términos") constituyen un acuerdo legalmente vinculante entre MAUISTIK NETWORK S.A. de C.V., que opera bajo el nombre comercial Aloia ("Aloia," "nosotros," "nos," o "nuestro"), una sociedad mexicana y usted ("Cliente," "usted," o "su"), ya sea personalmente o en representación de una entidad, respecto al acceso y uso de nuestras soluciones de inteligencia artificial, incluyendo pero no limitándose a asistentes virtuales, chatbots, automatización de procesos, servicios de consultoría y tecnologías relacionadas (colectivamente, los "Servicios").
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">1.2 Aceptación de los Términos</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Al acceder o usar nuestros Servicios, suscribirse a nuestra plataforma, o hacer clic en "Acepto," usted reconoce que ha leído, entendido y acepta estar obligado por estos T&eacute;rminos. Si no está de acuerdo con estos Términos, no debe acceder ni usar nuestros Servicios.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 2 -->
                <section id="servicios" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        2. Descripción de los Servicios
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">2.1 Soluciones de IA Ofrecidas</h3>
                            <p class="text-gray-700 mb-4">Aloia proporciona los siguientes Servicios:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• <strong>Asistentes Virtuales y Chatbots:</strong> Interfaces conversacionales impulsadas por IA que brindan interacción con clientes 24/7.</li>
                                <li>• <strong>Tecnologías de Voz:</strong> Capacidades de voz a texto y texto a voz.</li>
                                <li>• <strong>Automatización de Procesos:</strong> Sistemas de flujo de trabajo automatizados y consolidación de datos.</li>
                                <li>• <strong>Inteligencia de Negocios:</strong> Dashboards en tiempo real y análisis predictivo.</li>
                                <li>• <strong>Consultoría en IA:</strong> Servicios de asesoría estratégica para implementación de IA.</li>
                                <li>• <strong>Desarrollo Personalizado:</strong> Soluciones de IA adaptadas para necesidades específicas del negocio.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">2.2 Proceso de Implementación</h3>
                            <p class="text-gray-700 mb-4">Nuestros Servicios siguen un modelo estructurado de implementación en 4 fases:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• <strong>Fase 1 (Semana 1):</strong> Análisis diagnóstico y diseño de estrategia.</li>
                                <li>• <strong>Fase 2 (Semanas 3-5):</strong> Configuración de solución e integración.</li>
                                <li>• <strong>Fase 3:</strong> Monitoreo en tiempo real y despliegue de analíticos.</li>
                                <li>• <strong>Fase 4:</strong> Mejora continua y optimización.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">2.3 Limitaciones del Servicio</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los Servicios se proporcionan "tal como están." Los resultados generados por IA pueden contener inexactitudes y no garantizamos que las respuestas de IA sean libres de errores, completas o adecuadas para cualquier propósito particular. Se recomienda supervisión humana para decisiones crticas.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 3 -->
                <section id="cuenta" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        3. Registro de Cuenta y Seguridad
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">3.1 Requisitos de Cuenta</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Para acceder a ciertos Servicios, debe registrarse para una cuenta proporcionando información precisa, actual y completa. Usted es responsable de mantener la confidencialidad de las credenciales de su cuenta.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">3.2 Seguridad de la Cuenta</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Debe notificarnos inmediatamente cualquier uso no autorizado de su cuenta. No somos responsables por pérdidas o daños resultantes de su incumplimiento con los requisitos de seguridad.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">3.3 Declaraciones del Usuario</h3>
                            <p class="text-gray-700 mb-4">Usted declara que:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Tiene la capacidad legal para celebrar estos Términos.</li>
                                <li>• No se encuentra en un país sujeto a embargo.</li>
                                <li>• No usará los Servicios para propósitos ilegales.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section 4 -->
                <section id="suscripcion" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        4. Términos de Suscripción y Precios
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">4.1 Planes de Suscripción</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los Servicios se ofrecen a través de varios planes de suscripción con ciclos de facturación mensual o anual. Los precios específicos se proporcionan durante el proceso de consulta y se documentan en su Orden de Servicio.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">4.2 Términos de Pago</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Las tarifas se cotizan en Pesos Mexicanos (MXN) y excluyen impuestos aplicables.</li>
                                <li>• El pago vence dentro de 30 días de la fecha de factura.</li>
                                <li>• Aceptamos pago vía transferencia bancaria, tarjeta de crédito o métodos de pago aprobados.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">4.3 Renovación Automática</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Las suscripciones se renuevan automáticamente a menos que se cancelen al menos 30 días antes de la fecha de renovación. Los avisos de renovación se enviarán a su dirección de correo registrada.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">4.4 Cambios de Precio</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Podemos modificar los precios con 60 días de aviso. El uso continuado después del período de aviso constituye aceptación de los nuevos precios.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 5 -->
                <section id="datos" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        5. Protección de Datos y Privacidad
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">5.1 Cumplimiento con la Ley Mexicana de Protección de Datos</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Cumplimos con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP), según se modificó en marzo de 2025. Nuestras actividades de procesamiento de datos se rigen por nuestro Aviso de Privacidad, que forma parte de estos Trminos.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">5.2 Procesamiento de Datos para Servicios de IA</h3>
                            <p class="text-gray-700 mb-4">Al usar nuestros Servicios, usted reconoce que:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li> Sus datos pueden ser procesados por sistemas de IA para la prestación del servicio.</li>
                                <li>• Implementamos principios de minimización de datos mientras mantenemos la calidad del servicio.</li>
                                <li>• Tiene derechos bajo la LFPDPPP incluyendo acceso, rectificación, cancelación y oposición (derechos ARCO).</li>
                                <li>• Puede oponerse a la toma de decisiones automatizadas que afecten el rendimiento profesional o estatus económico.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">5.3 Transferencias Internacionales de Datos</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los datos pueden transferirse a nuestros socios tecnológicos para procesamiento de IA. Aseguramos salvaguardas apropiadas a través de cláusulas contractuales estándar y cumplimiento con los requisitos mexicanos de protección de datos.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">5.4 Seguridad de Datos</h3>
                            <p class="text-gray-700 mb-4">Implementamos medidas de seguridad estándar de la industria incluyendo:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Cifrado en tránsito y en reposo.</li>
                                <li>• Controles de acceso y autenticación.</li>
                                <li>• Evaluaciones regulares de seguridad.</li>
                                <li>• Procedimientos de respuesta a incidentes.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section 6 -->
                <section id="propiedad" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        6. Derechos de Propiedad Intelectual
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">6.1 Tecnología de Aloia</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Todos los derechos sobre nuestros algoritmos de IA, modelos, software y tecnología permanecen como nuestra propiedad exclusiva. No se otorga licencia alguna sobre nuestra tecnología propietaria excepto la necesaria para usar los Servicios.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">6.2 Datos del Cliente</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Usted retiene todos los derechos sobre los datos que proporciona ("Datos del Cliente"). Nos otorga una licencia limitada para procesar los Datos del Cliente únicamente para proporcionar los Servicios.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">6.3 Contenido Generado por IA</h3>
                            <p class="text-gray-700 mb-4">Sujeto a su propiedad de datos de entrada:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Usted posee los resultados generados por IA creados específicamente para usted.</li>
                                <li>• Conservamos derechos para mejorar nuestros modelos usando insights anonimizados y agregados.</li>
                                <li>• No usaremos sus datos específicos para entrenar modelos para otros clientes sin consentimiento.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">6.4 Retroalimentación</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Cualquier sugerencia o retroalimentación que proporcione puede ser usada por nosotros sin compensación para mejorar nuestros Servicios.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 7 -->
                <section id="uso" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        7. Política de Uso Aceptable
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">7.1 Usos Prohibidos</h3>
                            <p class="text-gray-700 mb-4">Usted acepta no usar los Servicios para:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Violar leyes o regulaciones aplicables.</li>
                                <li>• Infringir derechos de propiedad intelectual.</li>
                                <li>• Generar contenido dañino, discriminatorio o ilegal.</li>
                                <li>• Intentar extraer nuestros datos de entrenamiento o realizar ingeniería inversa de nuestros modelos.</li>
                                <li>• Sobrecargar nuestros sistemas con solicitudes excesivas.</li>
                                <li>• Suplantar a otros o crear contenido engañoso.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">7.2 Moderación de Contenido</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Nos reservamos el derecho de monitorear y remover contenido que viole estos Términos o la ley aplicable.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 8 -->
                <section id="ia" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        8. Términos Específicos de IA
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">8.1 Transparencia de IA</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Divulgamos cuando usted está interactuando con sistemas de IA. Nuestra IA puede procesar datos a través de proveedores terceros, que están obligados por acuerdos apropiados de protección de datos.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">8.2 Supervisión Humana</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Para decisiones de alto riesgo, recomendamos revisión humana de los resultados de IA. Usted es responsable de validar el contenido generado por IA antes del uso.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">8.3 Actualizaciones de Modelo</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Mejoramos continuamente nuestros modelos de IA. Las actualizaciones pueden afectar las características de salida y le notificaremos cambios significativos.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">8.4 Cumplimiento con Regulaciones de IA Futuras</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Nos comprometemos al cumplimiento con la legislación mexicana de IA esperada para septiembre de 2025 y actualizaremos estos Términos en consecuencia.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 9 -->
                <section id="responsabilidad" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        9. Limitación de Responsabilidad
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">9.1 Renuncia de Garantías</h3>
                            <p class="text-gray-700 leading-relaxed">
                                LOS SERVICIOS SE PROPORCIONAN "TAL COMO ESTÁN" SIN GARANTÍAS DE NINGÚN TIPO. RENUNCIAMOS A TODAS LAS GARANTÍAS, EXPRESAS O IMPLÍCITAS, INCLUYENDO COMERCIABILIDAD, APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIN.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">9.2 Limitación de Responsabilidad</h3>
                            <p class="text-gray-700 leading-relaxed">
                                HASTA EL MÁXIMO PERMITIDO POR LA LEY, NUESTRA RESPONSABILIDAD TOTAL NO EXCEDERÁ LA CANTIDAD PAGADA POR USTED EN LOS DOCE (12) MESES ANTERIORES A LA RECLAMACIÓN.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">9.3 Exclusiones</h3>
                            <p class="text-gray-700 leading-relaxed">
                                NO SOMOS RESPONSABLES POR DAÑOS INDIRECTOS, INCIDENTALES, ESPECIALES, CONSECUENTES O PUNITIVOS, INCLUYENDO PÉRDIDA DE GANANCIAS, AUN SI SE NOS ADVIRTIÓ DE LA POSIBILIDAD.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">9.4 Servicios Esenciales</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Algunas jurisdicciones no permiten limitación de responsabilidad para servicios esenciales. Estas limitaciones pueden no aplicarse a usted.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 10 -->
                <section id="indemnizacion" class="scroll-mt-24  text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        10. Indemnización
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">10.1 Indemnización del Cliente</h3>
                            <p class="text-gray-700 mb-4">Usted acepta indemnizarnos de reclamaciones que surjan de:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Su uso de los Servicios.</li>
                                <li>• Violación de estos Términos.</li>
                                <li>• Infracción de derechos de terceros.</li>
                                <li>• Sus Datos del Cliente.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">10.2 Nuestra Indemnización</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Le defenderemos contra reclamaciones de que nuestros Servicios infringen derechos de propiedad intelectual de terceros, sujeto a limitaciones y su cooperación.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 11 -->
                <section id="terminacion" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        11. Vigencia y Terminación
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">11.1 Vigencia</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Estos Términos permanecen en efecto hasta ser terminados por cualquier parte.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">11.2 Terminación por Conveniencia</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Cualquier parte puede terminar con 30 días de aviso por escrito.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">11.3 Terminación por Causa</h3>
                            <p class="text-gray-700 mb-4">Podemos terminar inmediatamente si usted:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Incumple estos Términos materialmente.</li>
                                <li> Falla en pagar tarifas cuando vencen.</li>
                                <li>• Viola la ley aplicable.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">11.4 Efecto de la Terminación</h3>
                            <p class="text-gray-700 mb-4">Al terminar:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Su acceso a los Servicios cesa.</li>
                                <li>• Debe pagar tarifas pendientes.</li>
                                <li>• Puede exportar sus datos dentro de 30 días.</li>
                                <li>• Las secciones que sobreviven la terminación permanecen en efecto.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section 12 -->
                <section id="disputas" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        12. Resolución de Disputas
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">12.1 Resolución Informal</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Alentamos la resolución a través de nuestro servicio al cliente antes de procesos formales.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">12.2 Mediación y Arbitraje</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Las disputas no resueltas informalmente se someterán a mediación a través del Centro de Arbitraje de México (CAM). Si la mediación falla, sigue arbitraje vinculante bajo las reglas del CAM.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">12.3 Derechos del Consumidor</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los consumidores mexicanos conservan derechos para presentar quejas ante PROFECO y acceder a mecanismos de protección al consumidor bajo la LFPC.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">12.4 Ley Aplicable</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Estos Términos se rigen por la ley federal mexicana. Para disputas comerciales internacionales, las partes pueden acordar ley aplicable alternativa.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 13 -->
                <section id="consumidor" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        13. Protección al Consumidor Mexicano
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">13.1 Derechos Obligatorios</h3>
                            <p class="text-gray-700 mb-4">De conformidad con la LFPC, los consumidores mexicanos tienen derechos no renunciables a:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Recibir Servicios como se describe.</li>
                                <li>• Información veraz y completa.</li>
                                <li>• Trato no discriminatorio.</li>
                                <li>• Presentar quejas ante PROFECO.</li>
                                <li>• Cancelar dentro de períodos estatutarios donde aplique.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">13.2 Garantía</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Para contratos de consumidor, proporcionamos la garantía mínima de 90 días requerida por ley para defectos del servicio.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">13.3 Derechos de Idioma</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los consumidores mexicanos tienen derecho a recibir estos Términos y todas las comunicaciones en español.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 14 -->
                <section id="fiscales" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        14. Obligaciones Fiscales
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">14.1 Impuestos Mexicanos</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los precios excluyen el Impuesto al Valor Agregado (IVA) a la tasa actual del 16%, que se agregará a las facturas.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">14.2 Facturación Electrnica</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Proporcionamos facturas electrónicas (CFDI) que cumplen con los requisitos del SAT.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">14.3 Clientes Internacionales</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los clientes internacionales pueden estar sujetos a retenciones fiscales según la ley mexicana.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 15 -->
                <section id="cumplimiento" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        15. Cumplimiento y Regulatorio
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">15.1 Controles de Exportación</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los Servicios pueden estar sujetos a controles de exportación. Usted acepta no exportar Servicios contrario a las leyes aplicables.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">15.2 Anti-corrupción</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Ambas partes acuerdan cumplir con las leyes anticorrupción aplicables.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">15.3 Cambios Regulatorios</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Nos reservamos el derecho de modificar Servicios para cumplir con nuevas regulaciones, incluyendo la próxima legislación de IA.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 16 -->
                <section id="diversas" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        16. Disposiciones Diversas
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.1 Acuerdo Completo</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Estos Términos, junto con su Orden de Servicio y nuestro Aviso de Privacidad, constituyen el acuerdo completo.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.2 Modificaciones</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Podemos actualizar estos Términos con aviso. El uso continuado después de cambios constituye aceptación.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.3 Divisibilidad</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Si alguna disposición es inaplicable, el resto continúa en efecto.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.4 Cesión</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Usted no puede ceder estos Términos sin nuestro consentimiento. Podemos ceder nuestros derechos a afiliadas o sucesores.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.5 Fuerza Mayor</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Ninguna parte es responsable por retrasos debido a circunstancias fuera del control razonable.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">16.6 Avisos</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los avisos deben ser por escrito a las direcciones especificadas en su Orden de Servicio.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section 17 -->
                <section id="contacto" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        17. Información de Contacto
                    </h2>
                    <div class="prose prose-gray max-w-none">
                        <div class="border border-gray-200 rounded-lg p-6">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 gradient-main rounded-full flex items-center justify-center">
                                    <i data-lucide="mail" class="w-5 h-5 text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-900">Mauistik Network S.A. de C.V. (Aloia)</h4>
                                    <p class="text-sm text-gray-600">Información de contacto</p>
                                </div>
                            </div>
                            <div class="space-y-2 text-gray-700">
                                <p><strong>Correo:</strong> <a href="mailto:ivan@aloia.ai" class="text-blue-600 hover:underline">ivan@aloia.ai</a></p>
                                <p><strong>Teléfono:</strong> +52 55 3222 0893</p>
                                <p><strong>Sitio web:</strong> <a href="https://www.aloia.ai" class="text-blue-600 hover:underline">https://www.aloia.ai</a></p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 18 -->
                <section id="suplementarios" class="scroll-mt-24 text-justify">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6 section-divider pl-4">
                        18. Términos Suplementarios para Servicios Específicos
                    </h2>
                    <div class="prose prose-gray max-w-none space-y-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">18.1 Servicios de Chatbot</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Términos adicionales aplican a implementaciones de chatbot incluyendo retención de datos de conversación, requisitos de integración y métricas de rendimiento.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">18.2 Servicios de Consultoría</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Los servicios profesionales se rigen por declaraciones de trabajo separadas que definen entregables, cronogramas y criterios de aceptación.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">18.3 Desarrollo Personalizado</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Las soluciones personalizadas de IA incluyen asignaciones adicionales de propiedad intelectual y disposiciones de código fuente como se documenta en acuerdos de desarrollo.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Final commitment -->
                <div class="text-center py-12 border-t border-gray-200">
                    <div class="w-12 h-12 gradient-main rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="file-text" class="w-6 h-6 text-white"></i>
                    </div>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                        Al usar nuestros Servicios, usted reconoce que ha leído, entendido y acepta estar obligado por estos Términos y Condiciones.
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
                    <i data-lucide="file-text" class="w-3 h-3 text-white"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">ALOIA.AI</span>
            </div>
            <p class="text-sm text-gray-600">
                &copy; 2025 MAUISTIK NETWORK S.A. DE C.V. Todos los derechos reservados.
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