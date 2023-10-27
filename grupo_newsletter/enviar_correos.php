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

    // Adjuntar archivo
    $archivo_nombre = $_FILES['archivo']['name'];
    $archivo_temp = $_FILES['archivo']['tmp_name'];
    $archivo_tipo = $_FILES['archivo']['type'];

    // Verifica si se subió un archivo
    if(!empty($archivo_nombre)) {
        $archivo_adjunto = chunk_split(base64_encode(file_get_contents($archivo_temp)));
        $boundary = md5(date('r', time()));

        $headers = "From: newsletter@iscc.com\r\n";
        $headers .= "Reply-To: newsletter@iscc.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        $mensaje = "--$boundary\r\n";
        $mensaje .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $mensaje .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $mensaje .= chunk_split(base64_encode($mensaje));

        $mensaje .= "\r\n--$boundary\r\n";
        $mensaje .= "Content-Type: $archivo_tipo; name=\"$archivo_nombre\"\r\n";
        $mensaje .= "Content-Disposition: attachment; filename=\"$archivo_nombre\"\r\n";
        $mensaje .= "Content-Transfer-Encoding: base64\r\n";
        $mensaje .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
        $mensaje .= $archivo_adjunto;
        $mensaje .= "\r\n--$boundary--\r\n";

    } else {
        // Si no se adjunta un archivo
        $headers = "From: newsletter@iscc.com\r\n";
        $headers .= "Reply-To: newsletter@iscc.com\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
    }

    // Enviar correos a los destinatarios
    foreach ($destinatarios as $destinatario) {
        mail($destinatario, $asunto, $mensaje, $headers);
    }

    echo "Correos enviados con éxito.";
} else {
    echo "No hay destinatarios en la base de datos.";
}

$conexion->close();

?>
