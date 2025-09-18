<?php
// LINKS DEL FOOTER CON ICONOS FONT AWESOME
$footerLinks = [
    'rapidos' => [
        ['title' => 'Inicio',    'url' => BASE_URL . '/'],
        ['title' => 'Nosotros',  'url' => BASE_URL . '/about-us.php'],
        ['title' => 'Productos', 'url' => 'https://cyfsadigital.com/#productos'],
        ['title' => 'Podcast',   'url' => BASE_URL . '/podcast/index.php'],
        ['title' => 'Blog',      'url' => BASE_URL . '/blog/index.php'],
    ],
    'productos' => [
        ['title' => 'Chatbot IA',          'url' => BASE_URL . '/productos/Chatbot.php',                'icon' => 'fa-solid fa-comments'],
        ['title' => 'Voicebot',            'url' => BASE_URL . '/productos/Voicebot.php',               'icon' => 'fa-solid fa-phone'],
        ['title' => 'RPA',                 'url' => BASE_URL . '/productos/RPA.php',                    'icon' => 'fa-solid fa-cogs'],
        ['title' => 'Desarrollo a medida', 'url' => BASE_URL . '/productos/desarrollo.php', 'icon' => 'fa-solid fa-code'],
        ['title' => 'Consultor IA',        'url' => BASE_URL . '/productos/Consultor.php',        'icon' => 'fa-solid fa-user-tie'],
    ],
    'herramientas' => [
        ['title' => 'Enlace WhatsApp',     'url' => BASE_URL . '/herramientas/whatsapp-generador.php',        'icon' => 'fa-brands fa-whatsapp'],
        ['title' => 'Firma Email',         'url' => BASE_URL . '/herramientas/firma-generador.php',            'icon' => 'fa-solid fa-envelope'],
        ['title' => 'Generador QR',        'url' => BASE_URL . '/herramientas/qr-generador.php',               'icon' => 'fa-solid fa-qrcode'],
        ['title' => 'Contraseñas',         'url' => BASE_URL . '/herramientas/password-generador.php',      'icon' => 'fa-solid fa-key'],
        ['title' => 'Colores',             'url' => BASE_URL . '/herramientas/colores.php','icon' => 'fa-solid fa-palette'],
        ['title' => 'Consulta IP',         'url' => BASE_URL . '/herramientas/get-ip.php',       'icon' => 'fa-solid fa-globe'],
    ],
];

// CONTACTO CON ICONOS FONT AWESOME
$footerContacto = [
    ['icon' => 'fa-solid fa-map-marker-alt', 'text' => 'Ciudad de México, México'],
    ['icon' => 'fa-solid fa-envelope',       'text' => 'ivan@aloia.ai', 'url' => 'mailto:ivan@aloia.ai'],
    ['icon' => 'fa-solid fa-phone',          'text' => '+52 55 5529 4919',       'url' => 'tel:+525555294919'],
];
?>


<footer class="bg-aloia-dark text-aloia-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            <!-- Logo y descripción -->
            <div class="md:col-span-1">
                <img src="<?= IMG_PATH ?>icono.png" alt="aloia.ai" class="h-12 mb-4">
                <p class="text-sm text-aloia-light-gray mb-4">
                    Transformamos la manera en que las empresas interactúan con sus clientes, ofreciendo soluciones tecnológicas innovadoras y eficientes.
                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="https://www.linkedin.com/company/chatbotparaempresas" target="_blank" class="text-aloia-light-gray hover:text-aloia-orange transition-colors">
                        <i class="bi bi-linkedin text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Links Rápidos -->
            <div class="md:col-span-1">
                <h5 class="text-white font-medium text-lg mb-4">Links Rápidos</h5>
                <ul class="space-y-2">
                    <?php foreach ($footerLinks['rapidos'] as $link): ?>
                        <li><a href="<?= $link['url'] ?>" class="text-aloia-light-gray hover:text-aloia-orange transition-colors"><?= $link['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Productos -->
            <div class="md:col-span-1">
                <h5 class="text-white font-medium text-lg mb-4">Nuestros Productos</h5>
                <ul class="space-y-2">
                    <?php foreach ($footerLinks['productos'] as $link): ?>
                        <li>
                            <a href="<?= $link['url'] ?>" class="text-aloia-light-gray hover:text-aloia-orange transition-colors flex items-center">
                                <i class="bi <?= $link['icon'] ?> mr-2"></i> <?= $link['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Herramientas -->
            <div class="md:col-span-1">
                <h5 class="text-white font-medium text-lg mb-4">Herramientas Gratis</h5>
                <ul class="space-y-2">
                    <?php foreach ($footerLinks['herramientas'] as $link): ?>
                        <li>
                            <a href="<?= $link['url'] ?>" class="text-aloia-light-gray hover:text-aloia-orange transition-colors flex items-center">
                                <i class="bi <?= $link['icon'] ?> mr-2"></i> <?= $link['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="md:col-span-1">
                <h5 class="text-white font-medium text-lg mb-4">Contacto</h5>
                <ul class="space-y-3 text-sm">
                    <?php foreach ($footerContacto as $item): ?>
                        <li class="text-aloia-light-gray flex items-start">
                            <i class="bi <?= $item['icon'] ?> mr-2 mt-1"></i>
                            <?php if (!empty($item['url'])): ?>
                                <a href="<?= $item['url'] ?>" class="hover:text-aloia-orange transition-colors"><?= $item['text'] ?></a>
                            <?php else: ?>
                                <span><?= $item['text'] ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-aloia-light-gray mb-4 md:mb-0">
                &copy; <?= date('Y') ?> aloia.ai. Todos los derechos reservados.
            </p>
            <div class="flex space-x-6">
                <a href="/privacidadm.php" class="text-sm text-aloia-light-gray hover:text-aloia-orange transition-colors">Aviso de Privacidad</a>
                <a href="<?= BASE_URL ?>/terminos-y-condiciones.php" class="text-sm text-aloia-light-gray hover:text-aloia-orange transition-colors">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>
