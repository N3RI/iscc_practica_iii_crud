<?php
require("config.php");

//eliminar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Validar la entrada
    if (!empty($id)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("DELETE FROM alumnos WHERE id=?");
        $stmt->bind_param("i", $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Registro eliminado con éxito. \n";
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