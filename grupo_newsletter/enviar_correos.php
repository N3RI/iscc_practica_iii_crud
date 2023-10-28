<?php

// Conexión a la base de datos
require("config.php");

// Obtener destinatarios de la base de datos
$sql = "SELECT email FROM alumnos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $destinatarios = [];
    while($row = $result->fetch_assoc()) {
        $destinatarios[] = $row["email"];
    }

    // Obtener datos del formulario
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Enviar correos a los destinatarios
    foreach ($destinatarios as $destinatario) {
        $headers = "From: newsletter@iscc.com\r\n";
        $headers .= "Reply-To: newsletter@iscc.com\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        mail($destinatario, $asunto, $mensaje, $headers);
    }

    echo "Correos enviados con éxito.";
} else {
    echo "No hay destinatarios en la base de datos.";
}

$conexion->close();

?>