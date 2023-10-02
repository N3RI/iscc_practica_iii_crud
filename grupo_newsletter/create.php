<?php


include("config.php");


// Crear (Insertar)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["create"])) {
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
	$genero = $_POST["genero"];
    $email = $_POST["email"];
    $carrera = $_POST["carrera"];
    
    

    // Validar la entrada (puedes agregar más validaciones según sea necesario)
    if (!empty($nombre) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  
				// Crear una declaración preparada
        $stmt = $conexion->prepare("INSERT INTO alumnos (nombre, apellido, dni, genero, email, carrera) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nombre, $apellido, $dni, $genero, $email, $carrera);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Registro creado con éxito. \n";
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
