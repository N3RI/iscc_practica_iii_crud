<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>

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
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        mail($destinatario, $asunto, $mensaje, $headers);
    }

    include "header.php";
    echo '<div style="background-color: #4caf50; color: #fff; padding: 10px; text-align: center; font-size: 18px;">Correos enviados con éxito.</div>';
    echo '<div class="text-center mt-4">';
    echo '<div style="display: flex; justify-content: center; margin-top:1rem;">';
    echo '<a href="admin.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; font-size: 16px; margin-right: 10px;">Volver a Admin</a>';
    echo '<a href="redactar_correo2.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; font-size: 16px;">Ir a Redactar Correo</a>';
    echo '</div>';
    echo '</div>';
    include "footer.php";

} else {
    include "header.php";
    echo '<div style="background-color: #4caf50; color: #ff0000; padding: 10px; text-align: center; font-size: 18px;">No hay destinatarios en la Base de datos.</div>';
    echo '<div class="text-center mt-4">';
    echo '<div style="display: flex; justify-content: center; margin-top:1rem;">';
    echo '<a href="admin.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; font-size: 16px; margin-right: 10px;">Volver a Admin</a>';
    echo '<a href="redactar_correo2.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; font-size: 16px;">Ir a Redactar Correo</a>';
    echo '</div>';
    echo '</div>';
    include "footer.php";
}

$conexion->close();

?>