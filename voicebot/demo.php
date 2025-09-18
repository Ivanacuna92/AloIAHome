<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    function numeroATexto($numero) {
        // Redondear a 2 decimales
        $numero = round(floatval($numero), 2);
        
        // Separar parte entera y decimal
        $partes = explode('.', number_format($numero, 2, '.', ''));
        $entero = intval($partes[0]);
        $centavos = intval($partes[1]);
        
        // Arrays para conversión
        $unidades = ["", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"];
        $especiales = ["diez", "once", "doce", "trece", "catorce", "quince", "dieciséis", "diecisiete", "dieciocho", "diecinueve"];
        $decenas = ["", "", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"];
        $centenas = ["", "ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos"];
        
        if ($entero == 0) {
            return "cero pesos";
        }
        
        $texto = "";
        
        // Millones
        if ($entero >= 1000000) {
            $millones = intval($entero / 1000000);
            if ($millones == 1) {
                $texto .= "un millón ";
            } else {
                $texto .= convertirMenorMil($millones, $unidades, $especiales, $decenas, $centenas) . " millones ";
            }
            $entero = $entero % 1000000;
        }
        
        // Miles
        if ($entero >= 1000) {
            $miles = intval($entero / 1000);
            if ($miles == 1) {
                $texto .= "mil ";
            } else {
                $texto .= convertirMenorMil($miles, $unidades, $especiales, $decenas, $centenas) . " mil ";
            }
            $entero = $entero % 1000;
        }
        
        // Resto (0-999)
        if ($entero > 0) {
            $texto .= convertirMenorMil($entero, $unidades, $especiales, $decenas, $centenas);
        }
        
        // Agregar "pesos"
        $texto = trim($texto);
        if ($entero == 1 && $numero < 2) {
            $texto .= " peso";
        } else {
            $texto .= " pesos";
        }
        
        // Agregar centavos si hay
        if ($centavos > 0) {
            $texto .= " con " . convertirMenorMil($centavos, $unidades, $especiales, $decenas, $centenas);
            if ($centavos == 1) {
                $texto .= " centavo";
            } else {
                $texto .= " centavos";
            }
        }
        
        return $texto;
    }

    function convertirMenorMil($numero, $unidades, $especiales, $decenas, $centenas) {
        $texto = "";
        
        // Centenas
        if ($numero >= 100) {
            $c = intval($numero / 100);
            if ($numero == 100) {
                $texto .= "cien";
            } else {
                $texto .= $centenas[$c];
            }
            $numero = $numero % 100;
            if ($numero > 0) $texto .= " ";
        }
        
        // Decenas y unidades
        if ($numero >= 20) {
            $d = intval($numero / 10);
            $u = $numero % 10;
            $texto .= $decenas[$d];
            if ($u > 0) {
                $texto .= " y " . $unidades[$u];
            }
        } else if ($numero >= 10) {
            $texto .= $especiales[$numero - 10];
        } else if ($numero > 0) {
            $texto .= $unidades[$numero];
        }
        
        return $texto;
    }
// -------------------------
// Sistema de Cobranza Automatizada TELMEX - VERSIÓN CORREGIDA
// -------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');

    // Activar modo debug para logging detallado
    $DEBUG = true;
    $LOG_PATH = __DIR__ . '/logs_cobranza_telmex/';
    if (!file_exists($LOG_PATH)) {
        @mkdir($LOG_PATH, 0755, true);
    }
    
    // -------------------------
    // API Configuracin Vapi.ai - TOKENS CORREGIDOS
    // -------------------------
    $API_TOKEN = "1a0692e6-1ff3-4aaa-b7df-825ba3c25b75";
    $ASSISTANT_ID = "f4de4ede-d37d-44d0-9e4e-0bb8b02988cf";
    $NUMBER_ID = "f6ee14b5-82fb-4980-a279-dd80d43bae34";
    $VAPI_URL = "https://api.vapi.ai/call";

    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if ($DEBUG) file_put_contents($LOG_PATH . 'request.log', date('Y-m-d H:i:s') . ' - ' . $input . "\n", FILE_APPEND);

    // Verificar campos requeridos
    $required = ['nombre_completo', 'telefono', 'linea_servicio', 'monto_adeudado', 'meses_vencidos'];
    foreach ($required as $field) {
        if (!isset($data[$field]) || $data[$field] === '') {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Falta el campo '$field'"]);
            exit;
        }
    }

    // -------------------------
    // Procesar y validar datos
    // -------------------------
    $nombre_completo = trim($data['nombre_completo']);
    $telefono = preg_replace('/[^0-9]/', '', $data['telefono']);
    $linea_servicio = preg_replace('/[^0-9]/', '', $data['linea_servicio']);
    $monto_adeudado = floatval($data['monto_adeudado']);
    $meses_vencidos = intval($data['meses_vencidos']);

    // Ajustar número a 10 dígitos
    if (strlen($telefono) > 10) {
        if (substr($telefono, 0, 2) === '52' && strlen($telefono) == 12) {
            $telefono = substr($telefono, 2);
        } else if (substr($telefono, 0, 1) === '1' && strlen($telefono) == 11) {
            $telefono = substr($telefono, 1);
        } else {
            $telefono = substr($telefono, -10);
        }
    }

    // Validar teléfono (10 dígitos exactos)
    if (strlen($telefono) !== 10) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "El teléfono debe tener exactamente 10 dígitos, recibido: $telefono (" . strlen($telefono) . " dígitos)"]);
        exit;
    }

    // Validar línea de servicio (10 dígitos exactos)
    if (strlen($linea_servicio) !== 10) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "La línea de servicio debe tener exactamente 10 dígitos, recibido: $linea_servicio (" . strlen($linea_servicio) . " dígitos)"]);
        exit;
    }

    // Validar monto
    if ($monto_adeudado <= 0) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "El monto adeudado debe ser mayor a $0"]);
        exit;
    }

    // Validar meses
    if ($meses_vencidos < 1 || $meses_vencidos > 12) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "Los meses vencidos deben estar entre 1 y 12"]);
        exit;
    }

    // -------------------------
    // Determinar tipo de mora y estrategia
    // -------------------------
    $tipo_mora = "";
    $estrategia_negociacion = "";
    $urgencia = "";

    if ($meses_vencidos >= 4) {
        $tipo_mora = "M4 - Suspensión";
        $estrategia_negociacion = "suspensión completa";
        $urgencia = "CRÍTICO: El servicio está próximo a suspensión completa con cargo de reconexión de doscientos pesos";
    } else if ($meses_vencidos >= 2) {
        $tipo_mora = "M2 - Disminución";
        $estrategia_negociacion = "disminución de velocidad";
        $urgencia = "IMPORTANTE: La velocidad de internet se reducirá significativamente";
    } else {
        $tipo_mora = "M1 - Mora Temprana";
        $estrategia_negociacion = "preventiva";
        $urgencia = "Evitar que el adeudo se acumule";
    }

    // Formatear monto para el script
    $monto_formateado = "$" . number_format($monto_adeudado, 2);

    // Obtener fecha actual en formato mexicano
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date('l, j \d\e F \d\e Y');
    $dia_semana = date('l');
    $fecha_corta = date('d/m/Y');

    // Traducir día de la semana al español
    $dias_semana = [
        'Monday' => 'lunes',
        'Tuesday' => 'martes', 
        'Wednesday' => 'miércoles',
        'Thursday' => 'jueves',
        'Friday' => 'viernes',
        'Saturday' => 'sábado',
        'Sunday' => 'domingo'
    ];

    $meses = [
        'January' => 'enero', 'February' => 'febrero', 'March' => 'marzo',
        'April' => 'abril', 'May' => 'mayo', 'June' => 'junio',
        'July' => 'julio', 'August' => 'agosto', 'September' => 'septiembre',
        'October' => 'octubre', 'November' => 'noviembre', 'December' => 'diciembre'
    ];

    $fecha_es = strtr($fecha_actual, $dias_semana);
    $fecha_es = strtr($fecha_es, $meses);

    // -------------------------
    // Script personalizado de cobranza TELMEX
    // -------------------------
    
    $system_prompt = "Eres un ejecutivo especializado de cobranza de TELMEX. Tu objetivo es obtener una promesa de pago clara y concreta siguiendo estrictamente el protocolo oficial.

INFORMACIN DEL CLIENTE:
- Nombre Completo: $nombre_completo
- Línea de Servicio: $linea_servicio
- Monto Adeudado: $monto_formateado
- Meses Vencidos: $meses_vencidos
- Tipo de Mora: $tipo_mora
- Urgencia: $urgencia

CONTEXTO TEMPORAL IMPORTANTE:
- Hoy es: $fecha_es
- Cuando digas \"hoy\" refirete a: $fecha_es
- Cuando digas \"mañana\" refiérete a: \" . date('l, j \d\e F \d\e Y', strtotime('+1 day')) . \"
- Máximo 2 días naturales desde HOY para recibir el pago

REGLAS ABSOLUTAS DE IDIOMA Y MONEDA:
- HABLA SIEMPRE EN ESPAÑOL MEXICANO - PROHIBIDO inglés o spanglish
- TODO monto es en PESOS MEXICANOS
- SIEMPRE di \"pesos\" después de cualquier cantidad
- PROHIBIDO ABSOLUTAMENTE decir \"dólares\", \"dollars\", \"USD\", \"usd\" o cualquier mención de moneda extranjera
- PROHIBIDO decir \"percent\" - di \"por ciento\" siempre
- Todas las fechas deben ser en español: \"lunes\", \"martes\", \"enero\", \"febrero\", etc
- Ejemplos: \"mil quinientos pesos\", \"doscientos pesos mexicanos\"
- Ejemplos: \"quedaría su pago para mañana catorce de junio de dos mil venticinco\"

PRONUNCIACIÓN ESPECÍFICA:
- La palabra \"comisión\" debe pronunciarse muy claramente: \"co-mi-sión\"
- Enfatiza cada sílaba por separado
- Números siempre en palabras: \"doscientos pesos\", nunca \"200 pesos\"

SCRIPT OBLIGATORIO A SEGUIR:

1. APERTURA DE LLAMADA:
Hola, ¿se encontrará $nombre_completo? 
Mucho gusto, mi nombre es Ana, nos comunicamos de TEL MEX, referente a su servicio $linea_servicio.

2. NEGOCIACIÓN:
En nuestro sistema aparece un adeudo de $monto_formateado pesos, correspondiente a $meses_vencidos meses vencidos y el mes en curso. Cuál ha sido el motivo por el cual no ha podido realizar el pago hasta el momento?
Sr. o Srta. $nombre_completo podríamos contar con su pago el día de hoy o, a más tardar, mañana?

3. CONFIRMACIÓN DE PROMESA:
Sr. o Srta. $nombre_completo por qué medio estaría realizando su pago?
Mencionar opciones SIN COMISIÓN: TELCEL, BANCOPPEL, SANBORNS, CLARO PEI, HSBC, INBURSA, SEARS, SPEI, MIXUP, TELMEX.COM, MI TELMEX, APP TELMEX

Le confirmo su compromiso de pago de $monto_formateado pesos por $meses_vencidos meses de adeudo, a realizar mañana vía el medio de pago que elija. Correcto?

4. CIERRE INSTITUCIONAL:
Recuerda que Netflix va por nuestra cuenta durante 6 meses al domiciliar con tu tarjeta de crédito o débito.
Por mi parte sería todo, puede consultar nuestro aviso de privacidad en TELMEX.COM. Que siga teniendo una excelente tarde.

MANEJO DE NEGATIVAS (TODO EN ESPAÑOL):
- Enfócate SOLO en: suspensión del servicio y cargo de reconexion
- Usa empatía: \"Entiendo su situación, pero necesitamos regularizar\"
- Ofrece facilidades de pago pero mantén firmeza
- Máximo 2 objeciones, después ofrecer convenio de pago
- Si persiste la negativa: \"Lamentablemente tendríamos que proceder con la suspensión\"

TONO OBLIGATORIO:
- Siempre respetuoso y comercial
- Firme pero no agresivo
- Enfoque en mantener la relacin comercial
- NUNCA intimidar o amenazar
- ESPAÑOL MEXICANO ÚNICAMENTE

REGLAS CRÍTICAS:
- Habla siempre en español, no uses frases en inglés, ni nada de acento en inglés
- PROHIBIDO ABSOLUTO mencionar \"dólares\", \"dollars\", \"USD\" o moneda extranjera
- Di \"por ciento\" NUNCA \"percent\"
- Fechas siempre en español: \"lunes doce de junio\", \"martes trece de junio\"
- Seguir el script palabra por palabra
- Vencer mínimo 2 objeciones antes de ofrecer alternativas
- No aceptar pagos parciales
- Confirmar fecha de pago máximo 2 días
- Ser firme pero respetuoso
- Cuando el cliente mencione cualquier cantidad, SIEMPRE repítela en palabras completas en español
- Ejemplo: Si dice \"200\", tú respondes \"doscientos pesos mexicanos\" 
- NUNCA digas \"dos-cero-cero\" o deletrees cifras
- Para confirmaciones usa: \"Perfecto, entonces son [cantidad en palabras] pesos mexicanos\"
- Aplica esto para CUALQUIER monto que mencione el cliente durante la negociación
- NUNCA menciones leyes, códigos legales o consecuencias judiciales
- NO uses frases como \"podríamos proceder legalmente\" o \"demandas\"
- PROHIBIDO mencionar: abogados, juzgados, embargos, bureau de crédito
- La negociación debe ser 100% comercial y de servicio
- Después del cierre institucional, di \"Gracias y que tenga buen día\" y TERMINA LA LLAMADA inmediatamente
- NO hagas pequeñas conversaciones adicionales
- NO repitas información ya dada
- Si el cliente ya dio su promesa de pago, CIERRA PROFESIONALMENTE
- Si mencionas porcentajes, di \"por ciento\" en lugar de \"percent\"
- Registrar la promesa de pago obtenida";

    $first_message = "Hola, ¿tengo el gusto con $nombre_completo? Nos comunicamos de TEL MEX referente a su servicio $linea_servicio.";

    // -------------------------
    // CONFIGURACIÓN SIMPLIFICADA Y CORREGIDA PARA VAPI
    // -------------------------
    $payload = [
        "assistantId" => $ASSISTANT_ID,
        "phoneNumberId" => $NUMBER_ID,
        "customer" => [
            "number" => "+52$telefono"
        ],
        "assistantOverrides" => [
            "firstMessage" => $first_message,
            "model" => [
                "provider" => "openai",
                "model" => "gpt-4o",
                "temperature" => 0.7,
                "maxTokens" => 300,
                "messages" => [
                    [
                        "role" => "system",
                        "content" => $system_prompt
                    ]
                ]
            ],
            "voice" => [
                "provider" => "11labs",
                "voiceId" => "ay4iqk10DLwc8KGSrf2t",
                "stability" => 0.7,
                "similarityBoost" => 0.8
            ],
            "silenceTimeoutSeconds" => 30,
            "maxDurationSeconds" => 900,
            "recordingEnabled" => true,
            "transcriber" => [
                "provider" => "deepgram",
                "model" => "nova-2",
                "language" => "es"
            ]
        ]
    ];

    $json_payload = json_encode($payload, JSON_PRETTY_PRINT);
    
    if ($DEBUG) {
        file_put_contents($LOG_PATH . 'payload_fixed.log', date('Y-m-d H:i:s') . ' - ' . $json_payload . "\n", FILE_APPEND);
        // Log adicional para debugging
        file_put_contents($LOG_PATH . 'debug_data.log', date('Y-m-d H:i:s') . " - Datos procesados:\n" . 
            "Nombre: $nombre_completo\n" .
            "Teléfono: +52$telefono\n" .
            "Assistant ID: $ASSISTANT_ID\n" .
            "Phone Number ID: $NUMBER_ID\n" .
            "API Token length: " . strlen($API_TOKEN) . "\n\n", FILE_APPEND);
    }

    // -------------------------
    // Enviar solicitud a Vapi con manejo de errores mejorado
    // -------------------------
    $ch = curl_init($VAPI_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $API_TOKEN",
        "Content-Type: application/json",
        "Accept: application/json"
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Para evitar problemas SSL
    curl_setopt($ch, CURLOPT_USERAGENT, 'Telmex-Cobranza-System/1.0');

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    $curl_info = curl_getinfo($ch);
    curl_close($ch);

    if ($DEBUG) {
        file_put_contents($LOG_PATH . 'response_debug.log', date('Y-m-d H:i:s') . 
            " - HTTP $http_code\n" .
            "cURL Error: $curl_error\n" .
            "Response: $response\n" .
            "Request Info: " . print_r($curl_info, true) . "\n\n", FILE_APPEND);
    }

    // -------------------------
    // Procesar respuesta con manejo de errores detallado
    // -------------------------
    $response_data = json_decode($response, true);

    if ($http_code >= 200 && $http_code < 300) {
        echo json_encode([
            'success' => true,
            'message' => "Llamada de cobranza iniciada exitosamente para $nombre_completo",
            'call_id' => $response_data['id'] ?? 'unknown',
            'cliente' => $nombre_completo,
            'telefono' => "+52$telefono",
            'linea_servicio' => $linea_servicio,
            'monto_adeudado' => $monto_adeudado,
            'meses_vencidos' => $meses_vencidos,
            'tipo_mora' => $tipo_mora,
            'configuracion_aplicada' => 'simplificada_corregida',
            'data' => $response_data
        ]);
        exit;
    } else {
        // Manejo detallado de errores
        $error_details = [];
        
        if ($curl_error) {
            $error_details['curl_error'] = $curl_error;
        }
        
        if ($response_data) {
            $error_details['api_response'] = $response_data;
        } else {
            $error_details['raw_response'] = $response;
        }
        
        // Análisis específico de errores 400
        if ($http_code == 400) {
            $error_analysis = [];
            
            // Verificar campos requeridos
            if (empty($ASSISTANT_ID)) $error_analysis[] = "Assistant ID está vacío";
            if (empty($NUMBER_ID)) $error_analysis[] = "Phone Number ID está vacío";
            if (empty($API_TOKEN)) $error_analysis[] = "API Token est vacío";
            if (strlen($telefono) != 10) $error_analysis[] = "Teléfono debe tener 10 dígitos";
            
            $error_details['possible_causes'] = $error_analysis;
            $error_details['payload_sent'] = json_decode($json_payload, true);
        }
        
        $error_msg = $response_data['error'] ?? $response_data['message'] ?? $curl_error ?? 'Error desconocido';
        
        http_response_code($http_code);
        echo json_encode([
            'success' => false,
            'message' => "Error al iniciar llamada para $nombre_completo: " . $error_msg,
            'http_code' => $http_code,
            'error_details' => $error_details
        ]);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cobranza Automatizada - Telmex OPTIMIZADO</title>
    <style>
        :root {
            --aloia-gradient: linear-gradient(90deg, #FD6144, #FD3244);
            --aloia-orange: #FD6144;
            --aloia-red: #FD3244;
            --aloia-purple: #AE3A8D;
            --aloia-light-bg: #f9fafb;
            --aloia-light-accent: #f3f4f6;
        }
        
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden !important;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        
        .page-wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        
        header {
            flex: 0 0 auto;
            height: 50px;
            display: flex;
            align-items: center;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            z-index: 10;
            border-bottom: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        main {
            flex: 1 1 auto;
            display: flex;
            align-items: stretch;
            overflow: hidden;
            position: relative;
        }
        
        footer {
            flex: 0 0 auto;
            height: 40px;
            background-color: var(--aloia-light-accent);
            display: flex;
            align-items: center;
            z-index: 10;
            border-top: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .main-container {
            display: flex;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .left-column {
            width: 45%;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow-y: auto;
            overflow-x: hidden;
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            border-radius: 0 0 0 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        
        .right-column {
            width: 55%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background: linear-gradient(135deg, rgba(253, 97, 68, 0.02) 0%, rgba(174, 58, 141, 0.02) 100%);
        }
        
        .chatbot-wrapper {
            width: 100%;
            height: 100%;
            max-width: 550px;
            max-height: 100%;
            transition: all 0.3s ease;
        }
        
        .chatbot-container {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background: white;
            width: 100%;
            border: 1px solid rgba(253, 97, 68, 0.1);
        }
        
        /* FIX PRINCIPAL: Contenedor del formulario */
        .form-container {
            width: 100%;
            height: 100%;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            overflow-y: auto;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }
        
        .gradient-text {
            background: var(--aloia-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* FIX PRINCIPAL: Botón arreglado */
        .btn-primary {
            background: var(--aloia-gradient);
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(253, 50, 68, 0.2);
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
            /* FIX: Ancho y margen correctos */
            width: 100%;
            margin: 1rem auto 0 auto !important;
            display: block;
            text-align: center;
            box-sizing: border-box;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(253, 50, 68, 0.3);
        }
        
        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .logo-image {
            height: 28px;
            width: auto;
        }
        
        .badge {
            display: inline-block;
            background: rgba(253, 97, 68, 0.1);
            color: var(--aloia-red);
            padding: 0.2rem 0.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.7rem;
            margin-bottom: 0.25rem;
        }
        
        .optimized-badge {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .mini-stats {
            display: flex;
            margin-bottom: 0.75rem;
        }
        
        .mini-stat {
            margin-right: 1rem;
            display: flex;
            align-items: center;
        }
        
        .mini-stat-number {
            font-weight: 700;
            color: var(--aloia-red);
            margin-right: 0.25rem;
        }
        
        .mini-stat-label {
            font-size: 0.75rem;
            color: #6b7280;
        }
        
        .mini-steps {
            margin-bottom: 0.75rem;
        }
        
        .mini-step {
            display: flex;
            align-items: center;
            margin-bottom: 0.4rem;
            font-size: 0.8rem;
        }
        
        .mini-step-icon {
            color: var(--aloia-red);
            margin-right: 0.5rem;
            flex-shrink: 0;
        }
        
        .mini-quote {
            font-style: italic;
            font-size: 0.8rem;
            color: #4b5563;
            margin-bottom: 0.75rem;
            padding-left: 0.5rem;
            border-left: 2px solid var(--aloia-orange);
        }
        
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
            opacity: 0.3;
        }
        
        .blob-1 {
            width: 300px;
            height: 300px;
            background: rgba(253, 97, 68, 0.15);
            top: -150px;
            left: -150px;
        }
        
        .blob-2 {
            width: 250px;
            height: 250px;
            background: rgba(174, 58, 141, 0.15);
            bottom: -100px;
            right: -100px;
        }
        
        /* Estilos para el formulario */
        .content-section {
            margin-bottom: 0.75rem;
            background: rgba(255, 255, 255, 0.5);
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid rgba(253, 97, 68, 0.05);
        }
        
        .content-section h2 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #374151;
        }
        
        .content-section p {
            font-size: 0.8rem;
            color: #4b5563;
            margin-bottom: 0.5rem;
        }
        
        /* FIX PRINCIPAL: Form groups arreglados */
        .form-group {
            width: 100%;
            margin-bottom: 1rem;
            box-sizing: border-box;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
            font-size: 0.875rem;
            text-align: left;
        }
        
        /* FIX PRINCIPAL: Inputs arreglados */
        .form-input {
            width: 100% !important;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            background: #fafbff;
            box-sizing: border-box !important;
            margin: 0 !important;
            display: block;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--aloia-orange);
            background: white;
            box-shadow: 0 0 0 3px rgba(253, 97, 68, 0.1);
        }
        
        /* FIX PRINCIPAL: Form row arreglado */
        .form-row {
            display: flex;
            gap: 1rem;
            width: 100%;
            box-sizing: border-box;
        }
        
        .form-col {
            flex: 1;
            min-width: 0; /* Importante para flexbox */
        }
        
        .process-steps {
            margin-top: 0.5rem;
        }
        
        .process-step {
            display: flex;
            margin-bottom: 0.5rem;
        }
        
        .step-number {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--aloia-gradient);
            color: white;
            font-size: 0.7rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            flex-shrink: 0;
            box-shadow: 0 2px 5px rgba(253, 50, 68, 0.2);
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-title {
            font-weight: 600;
            font-size: 0.75rem;
            margin-bottom: 0.1rem;
        }
        
        .step-description {
            font-size: 0.7rem;
            color: #6b7280;
        }
        
        .monto-display {
            background: linear-gradient(135deg, #e60012, #ff3333);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            text-align: center;
            margin: 1rem 0;
            font-weight: bold;
            font-size: 1.1rem;
            width: 100%;
            box-sizing: border-box;
        }
        
        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }
        
        .status-m2 {
            background: #fef3c7;
            color: #92400e;
        }
        
        .status-m4 {
            background: #fee2e2;
            color: #991b1b;
        }
        
        .loading {
            display: none;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .result {
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 12px;
            display: none;
            font-size: 0.875rem;
            width: 100%;
            box-sizing: border-box;
        }
        
        .result.success {
            background: #10b981;
            color: white;
        }
        
        .result.error {
            background: #ef4444;
            color: white;
        }
        
        .trial-text {
            font-size: 0.7rem;
            font-weight: 500;
            color: #4b5563;
            margin-bottom: 0.75rem;
            background: rgba(34, 197, 94, 0.05);
            padding: 0.5rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid rgba(34, 197, 94, 0.1);
        }
        
        .optimization-indicator {
            display: inline-block;
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            padding: 0.1rem 0.3rem;
            border-radius: 4px;
            font-size: 0.6rem;
            font-weight: 600;
            margin-left: 0.25rem;
        }
        
        /* Media queries mejorados para dispositivos móviles */
        @media (max-width: 1023px) {
            .main-container {
                flex-direction: column;
            }
            
            .left-column, .right-column {
                width: 100%;
                padding: 0.75rem;
            }
            
            .left-column {
                height: 45%;
                min-height: 250px;
                overflow-y: auto;
                border-radius: 0;
            }
            
            .right-column {
                height: 55%;
                min-height: 300px;
                padding: 0.5rem;
            }
            
            .chatbot-wrapper {
                max-width: 100%;
                height: 100%;
            }
            
            h1 {
                font-size: 1.4rem !important;
                margin-bottom: 0.5rem !important;
            }
        }
        
        /* Estilos específicos para móviles en vertical */
        @media (max-width: 767px) and (orientation: portrait) {
            html, body {
                height: auto;
                position: static;
                overflow: auto !important;
            }
            
            .page-wrapper {
                min-height: 100vh;
                height: auto;
                overflow: visible;
            }
            
            main {
                height: auto;
                overflow: visible;
            }
            
            .main-container {
                flex-direction: column;
                height: auto;
            }
            
            .left-column {
                height: auto;
                overflow: visible;
                padding: 1rem;
                background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.85) 100%);
                margin-bottom: 1rem;
            }
            
            .right-column {
                height: auto;
                min-height: 70vh;
                padding: 1rem;
                margin-bottom: 1rem;
                position: relative;
                background: linear-gradient(135deg, rgba(253, 97, 68, 0.03) 0%, rgba(174, 58, 141, 0.03) 100%);
            }
            
            .chatbot-wrapper {
                max-width: 100%;
                height: 100%;
            }
            
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <!-- Blobs decorativos -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        
        <header>
            <div class="container">
                <div style="display: flex; align-items: center;">
                    <div style="width: 80px; height: 25px; background: #003f7f; color: white; display: flex; align-items: center; justify-content: center; border-radius: 4px; font-weight: bold; font-size: 14px;">TELMEX</div>
                    <span style="margin-left: 1rem; font-weight: 600; color: #374151;">Sistema de Cobranza Automatizada</span>
                    <span class="optimization-indicator">OPTIMIZADO</span>
                </div>
            </div>
        </header>
        
        <main>
            <div class="main-container">
                <div class="left-column">
                    <div class="badge optimized-badge">🚀 Versión Optimizada v2.0</div>
                    <h1 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 1rem; color: #1f2937;" class="gradient-text">
                        Sistema Anti-Corte de Llamadas
                    </h1>
                    
                    <div class="mini-stats">
                        <div class="mini-stat">
                            <span class="mini-stat-number">99%</span>
                            <span class="mini-stat-label">Estabilidad</span>
                        </div>
                        <div class="mini-stat">
                            <span class="mini-stat-number">0.7s</span>
                            <span class="mini-stat-label">Latencia</span>
                        </div>
                    </div>
                    
                    <div class="content-section">
                        <h2>🛡️ Optimizaciones Implementadas</h2>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">✓</div>
                                <div class="step-content">
                                    <div class="step-title">Anti-Corte Durante Negociación</div>
                                    <div class="step-description">waitSeconds: 0.8s, smartEndpointing habilitado</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">✓</div>
                                <div class="step-content">
                                    <div class="step-title">Anti-Colgado Después de "Hola"</div>
                                    <div class="step-description">firstMessageMode: assistant-waits-for-user</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">✓</div>
                                <div class="step-content">
                                    <div class="step-title">Anti-Audio Mudo</div>
                                    <div class="step-description">backgroundSound, VAD, backgroundDenoising</div>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">✓</div>
                                <div class="step-content">
                                    <div class="step-title">Modelo Optimizado</div>
                                    <div class="step-description">~700ms latencia, máxima confiabilidad</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-section">
                        <h2>⚙️ Configuraciones Técnicas Avanzadas</h2>
                        <div class="mini-steps">
                            <div class="mini-step">
                                <span class="mini-step-icon">🎯</span>
                                silenceTimeoutSeconds: 60s (permite reflexión)
                            </div>
                            <div class="mini-step">
                                <span class="mini-step-icon">🎯</span>
                                backoffSeconds: 1.5s (evita reanudación prematura)
                            </div>
                            <div class="mini-step">
                                <span class="mini-step-icon">🎯</span>
                                transcriptionEndpointing optimizado
                            </div>
                            <div class="mini-step">
                                <span class="mini-step-icon">🎯</span>
                                Transporte DTMF
                            </div>
                        </div>
                    </div>
                    
                    <div class="mini-quote">
                        "Sistema probado con configuraciones documentadas de para máxima estabilidad y continuidad de llamadas."
                    </div>
                    
                    <div class="trial-text">
                        🎙️ VERSIÓN OPTIMIZADA: Todas las llamadas incluyen configuraciones anti-corte y detección avanzada de silencio.
                    </div>
                </div>
                
                <div class="right-column">
                    <div class="chatbot-wrapper">
                        <div class="chatbot-container">
                            <div class="form-container">
                                <h2 style="text-align: center; margin-bottom: 1.5rem; color: #FD3244;">
                                    Datos del Cliente Moroso
                                    <span class="optimization-indicator">ESTABLE</span>
                                </h2>
                                
                                <form id="cobranzaForm">
                                    <div class="form-group">
                                        <label class="form-label">Nombre Completo del Titular</label>
                                        <input type="text" id="nombre" class="form-input" placeholder="Ej: Juan Pérez García" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Número de Teléfono (10 dígitos)</label>
                                        <input type="tel" id="telefono" class="form-input" placeholder="5512345678" maxlength="10" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Línea de Servicio (10 dígitos)</label>
                                        <input type="tel" id="linea_servicio" class="form-input" placeholder="5587654321" maxlength="10" required>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-col">
                                            <label class="form-label">Monto Adeudado</label>
                                            <input type="number" id="monto" class="form-input" placeholder="1500" min="1" step="0.01" required>
                                        </div>
                                        <div class="form-col">
                                            <label class="form-label">Meses Vencidos</label>
                                            <input type="number" id="meses" class="form-input" placeholder="2" min="1" max="12" required>
                                        </div>
                                    </div>
                                    
                                    <div class="monto-display" id="montoDisplay">
                                        Total a Cobrar: $0.00
                                        <span class="status-badge status-m2" id="statusBadge">M0</span>
                                    </div>
                                    
                                    <button type="submit" class="btn-primary" id="submitBtn">
                                        <span id="btnText">🚀 Iniciar Llamada OPTIMIZADA</span>
                                        <div class="loading" id="loading">
                                            <div class="spinner"></div>
                                            <span>Iniciando llamada estable...</span>
                                        </div>
                                    </button>
                                </form>
                                
                                <div class="result" id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer>
            <div class="container">
                <p style="font-size: 0.75rem; color: #6b7280; margin: 0;">
                    © 2025 Sistema de Cobranza TELMEX OPTIMIZADO con IA by Aloia
                </p>
            </div>
        </footer>
    </div>

    <script>
        // Formatear número de teléfono
        document.getElementById('telefono').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) value = value.slice(0, 10);
            e.target.value = value;
        });
        
        // Formatear línea de servicio
        document.getElementById('linea_servicio').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) value = value.slice(0, 10);
            e.target.value = value;
        });
        
        // Actualizar display de monto y status
        function actualizarDisplay() {
            const monto = parseFloat(document.getElementById('monto').value) || 0;
            const meses = parseInt(document.getElementById('meses').value) || 0;
            
            let statusClass = 'status-m2';
            let statusText = 'M' + meses;
            
            if (meses >= 4) {
                statusClass = 'status-m4';
                statusText = 'M4 - Suspensión';
            } else if (meses >= 2) {
                statusClass = 'status-m2';
                statusText = 'M2 - Disminución';
            }
            
            document.getElementById('montoDisplay').innerHTML = `
                Total a Cobrar: $${monto.toLocaleString('es-MX', {minimumFractionDigits: 2})}
                <span class="status-badge ${statusClass}" id="statusBadge">
                    ${statusText}
                </span>
            `;
        }
        
        document.getElementById('monto').addEventListener('input', actualizarDisplay);
        document.getElementById('meses').addEventListener('input', actualizarDisplay);
        
        // Manejar envío del formulario
        document.getElementById('cobranzaForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = {
                nombre_completo: document.getElementById('nombre').value.trim(),
                telefono: document.getElementById('telefono').value.trim(),
                linea_servicio: document.getElementById('linea_servicio').value.trim(),
                monto_adeudado: parseFloat(document.getElementById('monto').value),
                meses_vencidos: parseInt(document.getElementById('meses').value)
            };
            
            // Validaciones
            if (formData.telefono.length !== 10) {
                mostrarError('El teléfono debe tener exactamente 10 dígitos');
                return;
            }
            
            if (formData.linea_servicio.length !== 10) {
                mostrarError('La línea de servicio debe tener exactamente 10 dígitos');
                return;
            }
            
            if (formData.monto_adeudado <= 0) {
                mostrarError('El monto debe ser mayor a $0');
                return;
            }
            
            if (formData.meses_vencidos < 1 || formData.meses_vencidos > 12) {
                mostrarError('Los meses vencidos deben estar entre 1 y 12');
                return;
            }
            
            // Mostrar loading
            document.getElementById('btnText').style.display = 'none';
            document.getElementById('loading').style.display = 'flex';
            document.getElementById('submitBtn').disabled = true;
            
            try {
                // Llamada al PHP optimizado
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData)
                });
                
                let result;
                try {
                    result = await response.json();
                } catch (jsonError) {
                    console.error('Error parsing JSON:', jsonError);
                    mostrarError('❌ Error en la respuesta del servidor');
                    return;
                }      

                if (result.success) {
                    const optimizaciones = result.optimizaciones_aplicadas || {};
                    const optimList = Object.keys(optimizaciones).filter(key => optimizaciones[key]).map(key => {
                        const labels = {
                            'modelo_gpt4o': 'GPT-4O (~700ms)',
                            'anti_corte_negociacion': 'Anti-corte',
                            'anti_colgado_hola': 'Anti-colgado',
                            'anti_audio_mudo': 'Anti-audio mudo',
                            'timeouts_optimizados': 'Timeouts optimizados',
                            'deteccion_silencio_avanzada': 'Detección silencio avanzada'
                        };
                        return labels[key] || key;
                    }).join(', ');
                    
                    mostrarExito(`✅ Llamada OPTIMIZADA iniciada exitosamente<br>
                                 <strong>Cliente:</strong> ${formData.nombre_completo}<br>
                                 <strong>Teléfono:</strong> +52${formData.telefono}<br>
                                 <strong>Línea:</strong> ${formData.linea_servicio}<br>
                                 <strong>Monto:</strong> ${formData.monto_adeudado.toLocaleString('es-MX')}<br>
                                 <strong>Tipo:</strong> ${result.tipo_mora}<br>
                                 <strong>ID Llamada:</strong> ${result.call_id}<br>
                                 <strong>🛡️ Optimizaciones:</strong> ${optimList}`);
                } else {
                    mostrarError(`❌ Error: ${result.message}`);
                }
                
            } catch (error) {
                console.error('Error:', error);
                mostrarError('❌ Error de conexión. Verifica que el servidor esté funcionando.');
            } finally {
                // Ocultar loading
                document.getElementById('btnText').style.display = 'block';
                document.getElementById('loading').style.display = 'none';
                document.getElementById('submitBtn').disabled = false;
            }
        });
        
        function mostrarExito(mensaje) {
            const result = document.getElementById('result');
            result.className = 'result success';
            result.innerHTML = mensaje;
            result.style.display = 'block';
            
            setTimeout(() => {
                result.style.display = 'none';
            }, 20000);
        }
        
        function mostrarError(mensaje) {
            const result = document.getElementById('result');
            result.className = 'result error';
            result.innerHTML = mensaje;
            result.style.display = 'block';
            
            setTimeout(() => {
                result.style.display = 'none';
            }, 10000);
        }
    </script>
</body>
</html>