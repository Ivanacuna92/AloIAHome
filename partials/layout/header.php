<?php
// Menú principal
$menuPrincipal = [
    ['title' => 'Home',         'url' => '/index.php',                           'key' => 'home'],
    ['title' => 'Nosotros',     'url' => '/about-us.php',                            'key' => 'nosotros'],
    ['title' => 'Herramientas', 'url' => '/herramientas/', 'key' => 'herramientas'],
];

// Dropdown productos
$productos = [
    ['title' => 'Chatbot IA', 'url' => '/productos/Chatbot.php',    'icon' => 'fas fa-comment'],
    ['title' => 'Voicebot',   'url' => '/productos/Voicebot.php',   'icon' => 'fas fa-microphone'],
    ['title' => 'RPA',        'url' => '/productos/RPA.php',        'icon' => 'fas fa-cogs'],
    ['title' => 'Framework',  'url' => '/crm/index.php',  'icon' => 'fas fa-toolbox', 'target' => '_blank'],
    ['title' => 'Desarrollo a medida',        'url' => '/productos/desarrollo.php',        'icon' => 'fas fa-code'],
    ['title' => 'Consultor IA',        'url' => '/productos/Consultor.php',        'icon' => 'fas fa-robot'],
];

// Asegurar que $activePage esté definida (puedes pasarla desde cada vista)
if (!isset($activePage)) {
    $activePage = ''; // fallback
}
?>

<!-- Header/Navbar -->
<header class="bg-aloia-dark relative z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="<?= BASE_URL ?>/index.php" class="text-aloia-white text-3xl font-bold">
                <img src="<?= IMG_PATH ?>icono.png" alt="aloia.ai" class="h-10">
            </a>

            <!-- Navegación desktop -->
            <nav class="hidden md:flex items-center space-x-8 relative">
                <?php foreach ($menuPrincipal as $item): ?>
                    <a href="<?= BASE_URL . $item['url'] ?>"
                       class="text-aloia-white font-medium <?= $activePage === $item['key'] ? 'border-b-2 border-aloia-white' : 'hover:border-b-2 hover:border-aloia-white' ?>">
                        <?= htmlspecialchars($item['title']) ?>
                    </a>
                <?php endforeach; ?>

                <!-- Dropdown -->
                <div class="relative group" id="desktop-dropdown">
                    <button class="text-aloia-white font-medium flex items-center gap-1 hover:border-b-2 hover:border-aloia-white focus:outline-none">
                        Productos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute hidden bg-white text-gray-800 mt-2 rounded-lg shadow-lg py-2 w-56" id="dropdown-menu">
                        <?php foreach ($productos as $p): ?>
    <a href="<?= BASE_URL . $p['url'] ?>"
       class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 <?= $activePage === $p['url'] ? 'bg-gray-100 font-semibold' : '' ?>"
       <?= isset($p['target']) ? 'target="' . htmlspecialchars($p['target']) . '"' : '' ?>>
       
        <?php if (!empty($p['icon'])): ?>
            <i class="<?= htmlspecialchars($p['icon']) ?> text-aloia-red w-4"></i>
        <?php endif; ?>

        <?= htmlspecialchars($p['title']) ?>
    </a>
<?php endforeach; ?>
                    </div>
                </div>

                <a href="<?= BASE_URL ?>/contacto.php"
                   class="bg-aloia-white text-aloia-red px-6 py-2 rounded-full font-medium flex items-center <?= $activePage === 'contacto' ? 'ring-2 ring-red-300' : '' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Contáctanos
                </a>
            </nav>

            <!-- Botón mobile -->
            <button id="mobile-menu-toggle" class="md:hidden text-aloia-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Menú mvil -->
    <div id="mobile-menu" class="md:hidden fixed top-16 left-0 w-full bg-aloia-dark z-40 transition-all duration-300 ease-in-out space-y-4 px-4 py-6 hidden">
        <?php foreach ($menuPrincipal as $item): ?>
            <a href="<?= BASE_URL . $item['url'] ?>" class="block text-aloia-white font-medium <?= $activePage === $item['key'] ? 'underline' : '' ?>">
                <?= htmlspecialchars($item['title']) ?>
            </a>
        <?php endforeach; ?>

        <details class="text-aloia-white">
            <summary class="cursor-pointer font-medium">Productos</summary>
            <div class="ml-4 mt-2 space-y-1">
                <?php foreach ($productos as $p): ?>
                    <a href="<?= BASE_URL . $p['url'] ?>" class="block text-sm <?= $activePage === $p['url'] ? 'underline' : '' ?>">
                        <?php if (!empty($p['icon'])): ?>
                            <i class="<?= htmlspecialchars($p['icon']) ?> mr-1 text-aloia-red"></i>
                        <?php endif; ?>
                        <?= htmlspecialchars($p['title']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </details>

        <a href="<?= BASE_URL ?>/contacto" class="block bg-aloia-white text-aloia-red px-4 py-2 rounded-full font-medium text-center <?= $activePage === 'contacto' ? 'ring-2 ring-red-300' : '' ?>">
            Contáctanos
        </a>
    </div>
</header>
    <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '726228309749295');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=746268309494295&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->

    <!-- JavaScript del menú móvil -->
    <script>
        // Aquí va tu JavaScript del menú mvil si lo tienes
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-55BG4K7VMN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-55BG4K7VMN');
    </script>
    
    <!-- Twitter conversion tracking base code -->
    <script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='https://static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    twq('config','q96pf');
    </script>
    <!-- End Twitter conversion tracking base code -->