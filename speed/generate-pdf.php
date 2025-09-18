<?php
// Habilitar registro de errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establecer la codificación UTF-8
header('Content-Type: text/html; charset=utf-8');

// Debug: registrar lo que se recibe
error_log("POST data received: " . print_r($_POST, true));

// Verificar si se recibieron datos del formulario
if (!isset($_POST['services_json']) || empty($_POST['services_json'])) {
    // Verificar si al menos tenemos los datos del cliente como respaldo
    if (isset($_POST['companyName']) && isset($_POST['contactName']) && 
        isset($_POST['contactEmail']) && isset($_POST['contactPhone'])) {
        
        // Construir datos básicos si no hay services_json
        $clientData = [
            'companyName' => $_POST['companyName'],
            'contactName' => $_POST['contactName'], 
            'contactEmail' => $_POST['contactEmail'],
            'contactPhone' => $_POST['contactPhone']
        ];
        
        // Crear estructura mínima con servicios vacíos
        $data = [
            'services' => [],
            'client' => $clientData
        ];
        
        error_log("Using fallback client data: " . print_r($data, true));
        
    } else {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false, 
            'error' => 'No se recibieron datos',
            'debug_post' => $_POST,
            'debug_json_field' => isset($_POST['services_json']) ? $_POST['services_json'] : 'Field not set'
        ]);
        exit;
    }
} else {
    // Intentar decodificar los datos JSON
    $data = json_decode($_POST['services_json'], true);
}

// Verificar si la decodificación fue exitosa (solo si intentamos decodificar JSON)
if (isset($_POST['services_json']) && !empty($_POST['services_json']) && $data === null) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false, 
        'error' => 'Invalid JSON data', 
        'received' => $_POST['services_json']
    ]);
    exit;
}

// Verificar si los datos tienen la estructura esperada
if (!isset($data['services']) || !is_array($data['services'])) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false, 
        'error' => 'Estructura de datos inválida',
        'data' => $data
    ]);
    exit;
}

// Verificar si tenemos información del cliente
if (!isset($data['client']) || !is_array($data['client'])) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false, 
        'error' => 'Falta información del cliente',
        'data' => $data
    ]);
    exit;
}

// Extraer los servicios
$services = $data['services'];

// Extraer la información del cliente
$clientInfo = $data['client'];

// Incluir la biblioteca FPDF
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Función para convertir UTF-8 a ISO-8859-1
    protected function normalize($string) {
        return iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $string);
    }
    
    // Colores de Aloia
    private $primaryColor = [242, 41, 78]; // #F2294E - aloia-crimson
    private $primaryDark = [13, 13, 13];   // #0D0D0D - aloia-obsidian
    private $primaryLight = [238, 44, 83]; // #EE2C53 - aloia-electric-red
    private $accentColor = [253, 95, 68]; // #FD5F44 - aloia-fire-orange
    
    // Información del cliente
    private $clientInfo = null;
    
    // Constructor para recibir la información del cliente
    function __construct($clientInfo = null) {
        parent::__construct();
        $this->clientInfo = $clientInfo;
    }
    
    // Cabecera de página
    function Header()
    {
        // Logo
        if (file_exists('logo.png')) {
            $this->Image('logo.png', 10, 10, 30);
        }
        // Título
        $this->SetFont('Arial', 'B', 20);
        $this->SetTextColor($this->primaryColor[0], $this->primaryColor[1], $this->primaryColor[2]);
        $this->Cell(0, 20, $this->normalize('Aloia - Tu Tranquilidad Tecnológica'), 0, 1, 'R');
        $this->SetFont('Arial', '', 12);
        $this->SetTextColor(80, 80, 80);
        $this->Cell(0, 10, $this->normalize('Cotización de Servicios'), 0, 1, 'R');
        // Línea
        $this->SetDrawColor($this->accentColor[0], $this->accentColor[1], $this->accentColor[2]);
        $this->Line(10, 40, 200, 40);
        $this->Ln(15);
    }
    
    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(80, 80, 80);
        $this->Cell(0, 10, $this->normalize('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
    
    // Sección de información del cliente
    function ClientInfoSection()
    {
        if ($this->clientInfo) {
            $this->ResumenSection('Información del Cliente');
            
            $this->SetFont('Arial', '', 11);
            $this->SetTextColor(50, 50, 50);
            
            $this->Cell(60, 8, 'Empresa:', 0, 0);
            $this->Cell(0, 8, $this->normalize($this->clientInfo['companyName']), 0, 1);
            
            $this->Cell(60, 8, 'Contacto:', 0, 0);
            $this->Cell(0, 8, $this->normalize($this->clientInfo['contactName']), 0, 1);
            
            $this->Cell(60, 8, 'Correo:', 0, 0);
            $this->Cell(0, 8, $this->normalize($this->clientInfo['contactEmail']), 0, 1);
            
            $this->Cell(60, 8, 'Movil:', 0, 0);
            $this->Cell(0, 8, $this->normalize($this->clientInfo['contactPhone']), 0, 1);
            
            $this->Ln(5);
        }
    }
    
    // Sección de resumen
    function ResumenSection($title)
    {
        $this->SetFont('Arial', 'B', 16);
        $this->SetFillColor($this->primaryColor[0], $this->primaryColor[1], $this->primaryColor[2]);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(0, 10, $this->normalize($title), 0, 1, 'L', true);
        $this->Ln(5);
    }
    
    // Sección de servicios
    function ServicesSection($selectedServices)
    {
        $this->ResumenSection('Servicios Incluidos');
        
        $this->SetFont('Arial', '', 11);
        $this->SetTextColor(50, 50, 50);
        
        // Verificar qué servicios están seleccionados
        $hasChat = false;
        $hasVoice = false;
        $hasMail = false;
        
        foreach($selectedServices as $service) {
            if (strpos($service['name'], 'Chatbot') !== false) {
                $hasChat = true;
            }
            if (strpos($service['name'], 'Voicebot') !== false) {
                $hasVoice = true;
            }
            if (strpos($service['name'], 'Mail Composer') !== false) {
                $hasMail = true;
            }
        }
        
        // Mostrar descripciones de los servicios seleccionados
        if ($hasChat) {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Chatbots:', 0, 1);
            $this->SetFont('Arial', '', 11);
            $this->MultiCell(0, 6, $this->normalize('Asistente virtual que sostiene conversaciones naturales en texto con los usuarios. Estos asistentes virtuales pueden responder preguntas frecuentes, proporcionar información y realizar tareas específicas, mejorando la eficiencia en la atención al cliente y otros procesos empresariales. Nuestro Chatbot IA brinda atención 24/7, pudiendo tener integración con WhatsApp y respuestas personalizadas, permitiendo una interacción continua y eficiente con los clientes.'), 0, 'J');
            $this->Ln(5);
        }
        
        if ($hasVoice) {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Voicebots:', 0, 1);
            $this->SetFont('Arial', '', 11);
            $this->MultiCell(0, 6, $this->normalize('Son asistentes virtuales que interactúan con los usuarios a través de comandos de voz. Utilizan tecnologías de síntesis de voz para comprender y responder en lenguaje natural, facilitando una comunicación más fluida y humana. Los voicebots pueden manejar llamadas telefónicas automáticamente, reduciendo costos y mejorando la capacidad de atención. Nuestros proporcionan atención directa, voz natural y respuestas personalizadas, optimizando la experiencia del usuario y la eficiencia operativa.'), 0, 'J');
            $this->Ln(5);
        }
        
        if ($hasMail) {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Mailé Composer:', 0, 1);
            $this->SetFont('Arial', '', 11);
            $this->MultiCell(0, 6, $this->normalize('Asistente que te permite generar correos eficientes y de alto impacto para llegar de forma digital a la bandeja de entrada de todos tus clientes o potenciales clientes, con un alto nivel de personalización y análisis de cada contacto.'), 0, 'J');
            $this->Ln(5);
        }
        
        // Si hay otros servicios seleccionados que no son los principales
        $otherServices = [];
        foreach($selectedServices as $service) {
            if (strpos($service['name'], 'Chatbot') === false && 
                strpos($service['name'], 'Voicebot') === false && 
                strpos($service['name'], 'Mail Composer') === false) {
                $otherServices[] = $service;
            }
        }
        
        if (!empty($otherServices)) {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Otros Servicios:', 0, 1);
            $this->SetFont('Arial', '', 11);
            
            foreach($otherServices as $service) {
                $this->Cell(0, 8, '-' . $this->normalize($service['name'] . ' - ' . $service['level']), 0, 1);
            }
        }
        
        $this->Ln(5);
    }
    
    // Tabla de cotización
    function PricingTable($services)
    {
        $this->ResumenSection('Cotización Personalizada');
        
        // Cabecera de tabla
        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor($this->primaryLight[0], $this->primaryLight[1], $this->primaryLight[2]);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(80, 10, 'Servicio', 1, 0, 'C', true);
        $this->Cell(60, 10, 'Especificaciones', 1, 0, 'C', true);
        $this->Cell(40, 10, 'Precio (MXN)', 1, 1, 'C', true);
        
        // Datos
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(50, 50, 50);
        $total = 0;
        
        foreach($services as $service) {
            $this->Cell(80, 10, $this->normalize($service['name']), 1, 0, 'L');
            $this->Cell(60, 10, $this->normalize($service['level']), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($service['price'], 2), 1, 1, 'R');
            $total += $service['price'];
        }
        
        // Total
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(140, 10, 'Total Mensual', 1, 0, 'R');
        $this->Cell(40, 10, '$' . number_format($total, 2), 1, 1, 'R');
        
        $this->Ln(5);
    }
    
    // Sección de beneficios
    function BenefitsSection()
    {
        $this->ResumenSection('Beneficios');
        
        $this->SetFont('Arial', '', 11);
        $this->SetTextColor(50, 50, 50);
        
        $benefits = [
            'Menos Costos, Más Ganancias - Reduce hasta 70% tus costos operativos',
            'Respuestas al Toque - Atención instantánea que genera más lealtad',
            'Cero Errores - Decisiones precisas basadas en datos, no en corazonadas',
            'Tu Tiempo es Oro - Enfócate en crecer mientras la IA maneja lo demás',
            'Disponibilidad 24/7 - Atención continua sin interrupciones',
            'Escalabilidad Inmediata - Crece sin límites según tus necesidades'
        ];
        
        foreach($benefits as $benefit) {
            $this->Cell(0, 8, '-' . $this->normalize($benefit), 0, 1);
        }
        
        $this->Ln(5);
    }
    
    // Nueva sección: Qué necesitamos para comenzar
    function StartingStepsSection()
    {
        $this->ResumenSection('¿Qué necesitamos para comenzar?');
        
        $this->SetFont('Arial', '', 11);
        $this->SetTextColor(50, 50, 50);
        
        $steps = [
            'Firma de contrato de servicios',
            'Determinar la información que necesita el asistente para responder',
            'Afinar la personalidad del asistente',
            'Conectar el asistente a su ambiente de trabajo (CRM, Mails, Reportes)',
            'Dejar que el asistente aumente tu eficiencia'
        ];
        
        for($i = 0; $i < count($steps); $i++) {
            $this->Cell(0, 8, ($i+1) . '. ' . $this->normalize($steps[$i]), 0, 1);
        }
        
        $this->Ln(5);
    }
    
    // Sección de contacto
    function ContactSection()
    {
        $this->ResumenSection('Contacto');
        
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(50, 50, 50);
        $this->Cell(0, 10, $this->normalize('¿Listo para automatizar tu negocio?'), 0, 1);
        
        $this->SetFont('Arial', '', 11);
        $this->Cell(0, 8, 'Email: contact@aloia.ai', 0, 1);
        $this->Cell(0, 8, $this->normalize('Teléfono: +52 55 3222 0893'), 0, 1);
        $this->Cell(0, 8, 'Web: www.aloia.ai', 0, 1);
        
        $this->Ln(10);
        
        $this->SetFont('Arial', 'I', 10);
        $this->SetTextColor($this->primaryColor[0], $this->primaryColor[1], $this->primaryColor[2]);
        $this->Cell(0, 10, $this->normalize('Cotización generada el ' . date('d/m/Y')), 0, 1, 'C');
    }
}

try {
    // Crear PDF
    $pdf = new PDF($clientInfo);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    // Agregar información del cliente
    $pdf->ClientInfoSection();
    
    // Agregar contenido
    $pdf->ServicesSection($services);
    $pdf->BenefitsSection();
    
    // Agregar tabla de cotización solo si hay servicios seleccionados
    if (!empty($services)) {
        $pdf->PricingTable($services);
    }
    
    $pdf->StartingStepsSection();
    $pdf->ContactSection();
    
    // Nombre del archivo
    $filename = 'Cotizacion_Aloia.pdf';
    
    // Salida del PDF
    $pdf->Output($filename, 'D');
    exit;
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Error al generar PDF: ' . $e->getMessage()]);
    exit;
}

