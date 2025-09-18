<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configurar header JSON
header('Content-Type: application/json; charset=utf-8');

// DEBUG: Registrar todas las peticiones
error_log("=== API CONTACTO DEBUG ===");
error_log("Method: " . $_SERVER['REQUEST_METHOD']);
error_log("POST data: " . print_r($_POST, true));
error_log("Raw input: " . file_get_contents('php://input'));
error_log("========================");

require_once __DIR__ . '/../../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode([
        'status' => 'error', 
        'message' => 'Método no permitido',
        'received_method' => $_SERVER['REQUEST_METHOD'],
        'debug' => 'API funcionando, pero no recibe POST'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$nombre   = trim($_POST["nombre"] ?? '');
$empresa  = trim($_POST["empresa"] ?? '');
$email    = trim($_POST["email"] ?? '');
$telefono = trim($_POST["telefono"] ?? '');
$servicio = trim($_POST["servicio"] ?? '');
$fecha    = trim($_POST["fecha"] ?? '');
$hora     = trim($_POST["hora"] ?? '');
$mensaje  = trim($_POST["mensaje"] ?? '');

if (!$nombre || !$empresa || !$email || !$telefono || !$servicio || !$fecha || !$hora) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error', 
        'message' => 'Faltan campos obligatorios',
        'received_data' => $_POST
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Error de conexión a la base de datos'], JSON_UNESCAPED_UNICODE);
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO contacto_demos 
    (nombre, empresa, email, telefono, servicio, fecha_preferida, hora_preferida, mensaje)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta'], JSON_UNESCAPED_UNICODE);
    exit;
}

$stmt->bind_param("ssssssss", $nombre, $empresa, $email, $telefono, $servicio, $fecha, $hora, $mensaje);

if ($stmt->execute()) {
    $registro_id = $conn->insert_id;
    
    // Intentar enviar correo (opcional)
    $email_enviado = false;
    try {
        $to = 'eohh20011@gmail.com';
        $subject = "Nueva solicitud de demo - $empresa";
        $body = "Nueva solicitud:\n\nNombre: $nombre\nEmpresa: $empresa\nEmail: $email\nTeléfono: $telefono\nServicio: $servicio\nFecha: $fecha\nHora: $hora\nMensaje: $mensaje";
        $headers = "From: noreply@aloia.ai\r\nReply-To: $email\r\n";
        
        $email_enviado = mail($to, $subject, $body, $headers);
    } catch (Exception $e) {
        // No fallar si el email falla
        error_log("Error enviando email: " . $e->getMessage());
    }
    
    echo json_encode([
        'status' => 'success', 
        'message' => 'Su solicitud ha sido enviada correctamente',
        'id' => $registro_id,
        'email_sent' => $email_enviado
    ], JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Error al guardar los datos'], JSON_UNESCAPED_UNICODE);
}

$stmt->close();
$conn->close();
?>