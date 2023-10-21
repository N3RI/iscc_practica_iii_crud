<?php
$conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de datos
    $nombrecancha = mysqli_real_escape_string($conexion, $_POST["nombrecancha"]);
    $direccion = mysqli_real_escape_string($conexion, $_POST["direccion"]);
    $ciudad = mysqli_real_escape_string($conexion, $_POST["ciudad"]);
    $provincia = mysqli_real_escape_string($conexion, $_POST["provincia"]);
    $superficie = mysqli_real_escape_string($conexion, $_POST["superficie"]);
    $contacto = mysqli_real_escape_string($conexion, $_POST["contacto"]);
    $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
    $horario = mysqli_real_escape_string($conexion, $_POST["horario"]);
    $servicios = mysqli_real_escape_string($conexion, $_POST["servicios"]);

    // Sentencia preparada para insertar la nueva cancha
    $consulta = "INSERT INTO canchas (nombrecancha, direccion, ciudad, provincia, superficie, contacto, correo, horario, servicios) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $nombrecancha, $direccion, $ciudad, $provincia, $superficie, $contacto, $correo, $horario, $servicios);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: index.php'); 
        } else {
            echo "Error al registrar la cancha: " . mysqli_error($conexion);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la declaración: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>



