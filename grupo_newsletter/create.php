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

             include "header.php";
    echo '<div style="background-color: #4caf50; color: #fff; padding: 10px; text-align: center; font-size: 18px;">Te has suscrito correctamente al newsletter del ISCC. Empezarás a recibir novedades proximamente. Puedes cerrar la pagina</div>';
    include "footer.php";
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
