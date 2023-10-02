<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Actualizar registro
    </h1>
</body>
</html>

<?php

require("config.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $nuevoNombre = $_POST["nuevo_nombre"];

    // Validar la entrada
    if (!empty($id) && !empty($nuevoNombre)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("UPDATE usuarios SET nombre=? WHERE id=?");
        $stmt->bind_param("si", $nuevoNombre, $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Registro actualizado con éxito. \n";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Datos de entrada inválidos.";
    }
}

?>