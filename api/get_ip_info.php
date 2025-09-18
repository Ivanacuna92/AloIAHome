<?php
// Establecer encabezados para JSON
header('Content-Type: application/json');

// Obtener información básica del usuario
$user_ip = $_SERVER['REMOTE_ADDR']; 
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'No disponible';
$user_referer = $_SERVER['HTTP_REFERER'] ?? 'Acceso directo';
$server_port = $_SERVER['SERVER_PORT'] ?? '80';

// Simular tiempo de respuesta para el efecto visual
$response_time = number_format(mt_rand(10, 99) / 100, 2);

// Intentar obtener información geográfica usando la API de ipinfo.io
$geo_info = [];
try {
    $ip_info = @file_get_contents("https://ipinfo.io/{$user_ip}/json");
    if ($ip_info) {
        $geo_info = json_decode($ip_info, true);
    }
} catch (Exception $e) {
    // Manejar silenciosamente el error
}

// Extraer coordenadas si están disponibles
$latitude = null;
$longitude = null;
if (isset($geo_info['loc'])) {
    $coords = explode(',', $geo_info['loc']);
    if (count($coords) == 2) {
        $latitude = $coords[0];
        $longitude = $coords[1];
    }
}

// Preparar la respuesta
$response = [
    'ip' => $user_ip,
    'userAgent' => $user_agent,
    'language' => $user_language,
    'referer' => $user_referer,
    'port' => $server_port,
    'responseTime' => $response_time,
    'country' => $geo_info['country'] ?? null,
    'city' => $geo_info['city'] ?? null,
    'region' => $geo_info['region'] ?? null,
    'isp' => $geo_info['org'] ?? null,
    'latitude' => $latitude,
    'longitude' => $longitude,
    'timezone' => $geo_info['timezone'] ?? null
];

// Devolver la respuesta como JSON
echo json_encode($response);
?>