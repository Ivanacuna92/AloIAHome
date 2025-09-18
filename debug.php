<?php
// debug_sistema.php - Solo para debugging, no usar en producción
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐛 Debug del Sistema - Aloia</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        .success { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .error { background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .warning { background: #fff3cd; color: #856404; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .info { background: #d1ecf1; color: #0c5460; padding: 10px; border-radius: 5px; margin: 10px 0; }
        table { border-collapse: collapse; width: 100%; margin: 10px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        pre { background: #f8f9fa; padding: 15px; border-radius: 5px; overflow-x: auto; }
        .test-form { background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>🐛 Debug del Sistema de Contacto - Aloia</h1>
    
    <h2>📊 Información General del Sistema</h2>
    <table>
        <tr><th>Parámetro</th><th>Valor</th></tr>
        <tr><td>PHP Version</td><td><?= phpversion() ?></td></tr>
        <tr><td>Sistema Operativo</td><td><?= php_uname('s') . ' ' . php_uname('r') ?></td></tr>
        <tr><td>Usuario del servidor</td><td><?= get_current_user() ?></td></tr>
        <tr><td>Directorio actual</td><td><?= __DIR__ ?></td></tr>
        <tr><td>Función mail()</td><td><?= function_exists('mail') ? '✅ Disponible' : '❌ No disponible' ?></td></tr>
        <tr><td>Extensión mysqli</td><td><?= extension_loaded('mysqli') ? '✅ Cargada' : '❌ No cargada' ?></td></tr>
        <tr><td>sendmail_path</td><td><?= ini_get('sendmail_path') ?: 'No configurado' ?></td></tr>
    </table>

    <h2>🔧 Prueba de Envío de Correo</h2>
    <?php
    if (isset($_POST['test_mail'])) {
        $test_email = $_POST['test_email'] ?? 'eohh20011@gmail.com';
        $subject = 'Prueba desde Debug Sistema - ' . date('Y-m-d H:i:s');
        $message = "Este es un correo de prueba enviado desde el sistema de debug.\n\nFecha: " . date('Y-m-d H:i:s');
        $headers = "From: Debug Aloia <noreply@aloia.ai>\r\nContent-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($test_email, $subject, $message, $headers)) {
            echo "<div class='success'>✅ Correo enviado exitosamente a $test_email</div>";
        } else {
            echo "<div class='error'>❌ Error al enviar correo a $test_email</div>";
        }
    }
    ?>
    
    <div class="test-form">
        <form method="POST">
            <h3>Probar envío de correo:</h3>
            <input type="email" name="test_email" value="eohh2011@gmail.com" placeholder="Email de destino" style="padding: 8px; width: 250px;">
            <button type="submit" name="test_mail" style="padding: 8px 15px; margin-left: 10px;">Enviar correo de prueba</button>
        </form>
    </div>

    <h2>🗄️ Configuración de Base de Datos</h2>
    <?php
    $db_config_path = __DIR__ . '/../../includes/db.php';
    if (file_exists($db_config_path)) {
        echo "<div class='success'>✅ Archivo de configuración encontrado: $db_config_path</div>";
        
        require_once $db_config_path;
        
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if ($conn->connect_error) {
                echo "<div class='error'>❌ Error de conexión: " . $conn->connect_error . "</div>";
            } else {
                echo "<div class='success'>✅ Conexión exitosa a la base de datos</div>";
                
                echo "<table>";
                echo "<tr><th>Parámetro</th><th>Valor</th></tr>";
                echo "<tr><td>Host</td><td>" . DB_HOST . "</td></tr>";
                echo "<tr><td>Base de datos</td><td>" . DB_NAME . "</td></tr>";
                echo "<tr><td>Usuario</td><td>" . DB_USER . "</td></tr>";
                echo "<tr><td>Charset del servidor</td><td>" . $conn->character_set_name() . "</td></tr>";
                echo "</table>";
                
                // Verificar tabla contacto_demos
                $result = $conn->query("SHOW TABLES LIKE 'contacto_demos'");
                if ($result && $result->num_rows > 0) {
                    echo "<div class='success'>✅ Tabla 'contacto_demos' existe</div>";
                    
                    // Mostrar estructura
                    $structure = $conn->query("DESCRIBE contacto_demos");
                    if ($structure) {
                        echo "<h3>📋 Estructura de la tabla:</h3>";
                        echo "<table>";
                        echo "<tr><th>Campo</th><th>Tipo</th><th>Nulo</th><th>Clave</th><th>Default</th><th>Extra</th></tr>";
                        while ($row = $structure->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['Field'] . "</td>";
                            echo "<td>" . $row['Type'] . "</td>";
                            echo "<td>" . $row['Null'] . "</td>";
                            echo "<td>" . $row['Key'] . "</td>";
                            echo "<td>" . ($row['Default'] ?? 'NULL') . "</td>";
                            echo "<td>" . ($row['Extra'] ?? '') . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    
                    // Contar registros
                    $count_result = $conn->query("SELECT COUNT(*) as total FROM contacto_demos");
                    if ($count_result) {
                        $count = $count_result->fetch_assoc()['total'];
                        echo "<div class='info'>📊 Total de registros en la tabla: $count</div>";
                    }
                    
                } else {
                    echo "<div class='error'>❌ La tabla 'contacto_demos' no existe</div>";
                    echo "<div class='info'>📝 Para crear la tabla, ejecuta este SQL:</div>";
                    echo "<pre>CREATE TABLE IF NOT EXISTS `contacto_demos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) NOT NULL,
    `empresa` varchar(100) NOT NULL,
    `email` varchar(150) NOT NULL,
    `telefono` varchar(20) NOT NULL,
    `servicio` varchar(50) NOT NULL,
    `fecha_preferida` date NOT NULL,
    `hora_preferida` time NOT NULL,
    `mensaje` text,
    `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `estado` enum('pendiente','contactado','completado','cancelado') DEFAULT 'pendiente',
    PRIMARY KEY (`id`),
    KEY `idx_email` (`email`),
    KEY `idx_fecha_registro` (`fecha_registro`),
    KEY `idx_estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;</pre>";
                }
                
                $conn->close();
            }
        } catch (Exception $e) {
            echo "<div class='error'>❌ Error: " . $e->getMessage() . "</div>";
        }
        
    } else {
        echo "<div class='error'>❌ Archivo de configuración no encontrado: $db_config_path</div>";
    }
    ?>

    <h2>🌐 Información del Servidor Web</h2>
    <table>
        <tr><th>Variable</th><th>Valor</th></tr>
        <tr><td>HTTP_HOST</td><td><?= $_SERVER['HTTP_HOST'] ?? 'No definido' ?></td></tr>
        <tr><td>SERVER_NAME</td><td><?= $_SERVER['SERVER_NAME'] ?? 'No definido' ?></td></tr>
        <tr><td>DOCUMENT_ROOT</td><td><?= $_SERVER['DOCUMENT_ROOT'] ?? 'No definido' ?></td></tr>
        <tr><td>REQUEST_URI</td><td><?= $_SERVER['REQUEST_URI'] ?? 'No definido' ?></td></tr>
        <tr><td>HTTP_USER_AGENT</td><td><?= $_SERVER['HTTP_USER_AGENT'] ?? 'No definido' ?></td></tr>
    </table>

    <h2>🧪 Simulador de Formulario</h2>
    <div class="test-form">
        <h3>Probar el API de contacto:</h3>
        <form id="test-form">
            <table>
                <tr>
                    <td><label>Nombre:</label></td>
                    <td><input type="text" name="nombre" value="Juan Pérez" required style="width: 200px; padding: 5px;"></td>
                </tr>
                <tr>
                    <td><label>Empresa:</label></td>
                    <td><input type="text" name="empresa" value="Test Company" required style="width: 200px; padding: 5px;"></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" value="test@example.com" required style="width: 200px; padding: 5px;"></td>
                </tr>
                <tr>
                    <td><label>Teléfono:</label></td>
                    <td><input type="tel" name="telefono" value="5551234567" required style="width: 200px; padding: 5px;"></td>
                </tr>
                <tr>
                    <td><label>Servicio:</label></td>
                    <td>
                        <select name="servicio" required style="width: 210px; padding: 5px;">
                            <option value="ia-personalizada">IA Personalizada</option>
                            <option value="automatizacion">Automatización de Procesos</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Fecha:</label></td>
                    <td><input type="date" name="fecha" value="<?= date('Y-m-d', strtotime('+1 day')) ?>" required style="width: 200px; padding: 5px;"></td>
                </tr>
                <tr>
                    <td><label>Hora:</label></td>
                    <td>
                        <select name="hora" required style="width: 210px; padding: 5px;">
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="14:00">02:00 PM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Mensaje:</label></td>
                    <td><textarea name="mensaje" style="width: 200px; height: 60px; padding: 5px;">Mensaje de prueba</textarea></td>
                </tr>
            </table>
            <button type="submit" style="padding: 10px 20px; margin-top: 10px;">Probar formulario</button>
        </form>
        
        <div id="test-result" style="margin-top: 15px;"></div>
    </div>

    <script>
    document.getElementById('test-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const resultDiv = document.getElementById('test-result');
        resultDiv.innerHTML = '<div class="info">⏳ Enviando solicitud...</div>';
        
        // Ajusta esta URL según tu estructura de carpetas
        fetch('../api/registrar_contacto.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(text => {
            try {
                const data = JSON.parse(text);
                if (data.status === 'success') {
                    resultDiv.innerHTML = '<div class="success">✅ ' + data.message + '</div>';
                } else {
                    resultDiv.innerHTML = '<div class="error">❌ ' + data.message + '</div>';
                }
            } catch (e) {
                resultDiv.innerHTML = '<div class="error">❌ Respuesta no válida: ' + text.substring(0, 200) + '...</div>';
            }
        })
        .catch(error => {
            resultDiv.innerHTML = '<div class="error">❌ Error de conexión: ' + error.message + '</div>';
        });
    });
    </script>

    <div style="margin-top: 30px; padding: 15px; background: #f8f9fa; border-radius: 5px;">
        <p><strong>📝 Notas:</strong></p>
        <ul>
            <li>Este archivo es solo para debugging - no lo dejes en producción</li>
            <li>Usa el archivo <code>registrar_contacto.php</code> limpio para producción</li>
            <li>Asegúrate de que la ruta del API en el simulador sea correcta</li>
        </ul>
    </div>
</body>
</html>