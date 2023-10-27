<?php
// Establecer una conexión a la base de datos
// $conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
$conexion = mysqli_connect("localhost", "root", "", "integrantes");

// Comprobar la conexión y devolver error
if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Insertar datos en la tabla 'usuarios'
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["create"])) {
	$nombre = $_POST["nombre"];
	$rango = $_POST["rango"];

				// Crear una declaración preparada
        $stmt = $conexion->prepare("INSERT INTO integrantes2 (nombre_y_apellido, rango) VALUES (?, ?)");
        $stmt->bind_param("ss", $nombre, $rango);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Registro creado con éxito. \n";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Datos de entrada inválidos.";
    }



// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>





