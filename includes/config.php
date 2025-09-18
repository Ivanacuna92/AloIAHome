<?php
// Configuración global del sitio

$site_name = "Aloia";
$site_tagline = "Alo al cambio, Alo al futuro";

// 🖥️ Entorno LOCAL
define('BASE_URL', '/aloia-refactor/public_html');

// 🌐 Entorno PRODUCCIÓN (descomenta esta línea y comenta la anterior al subir)
// define('BASE_URL', ''); // o '/' si está en el root del dominio

// Rutas públicas absolutas para assets
define('IMG_PATH', BASE_URL . '/assets/img/');
define('CSS_PATH', BASE_URL . '/assets/css/');
define('JS_PATH',  BASE_URL . '/assets/js/');

// Página actual (útil para navegación activa o SEO)
$current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: 'home';

// Títulos por ruta (para SEO dinmico si quieres escalar)
$page_titles = [
    '' => 'Inicio - Aloia',
    'home' => 'Inicio - Aloia',
    'nosotros' => 'Nosotros - Aloia',
    'productos/chatbot' => 'Chatbot IA - Aloia',
    'productos/voicebot' => 'Voicebot - Aloia',
    'productos/rpa' => 'RPA - Aloia',
    'productos/desarrollo-a-la-medida' => 'Desarrollo a Medida - Aloia',
    'productos/consultor-de-ia' => 'Consultor IA - Aloia',
];

// Determinar título actual
$page_title = $page_titles[$current_path] ?? 'Aloia';

// Función para obtener la URL actual (para canonicals, etc.)
function getCurrentUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    return rtrim($protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '/');
}
