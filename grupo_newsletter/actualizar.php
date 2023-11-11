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

require("config.php");

$id = "";
$nuevoNombre = "";
$nuevoApellido = "";
$nuevoDNI = "";
$nuevoGenero = "";
$nuevoEmail = "";
$nuevaCarrera = "";


// si apreté botón Actualizar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["actualizar"])) {
	$id = $_POST["id"];

	$stmt = $conexion->prepare("SELECT ID, nombre, apellido, dni, genero, email, carrera FROM alumnos WHERE id=?");
	$stmt->bind_param("i", $id);

	// Ejecutar la declaración preparada
	if ($stmt->execute()) {
		$stmt->bind_result($id, $nuevoNombre, $nuevoApellido, $nuevoDNI, $nuevoGenero, $nuevoEmail, $nuevaCarrera);
		while ($stmt->fetch()) {
	}
	} else {
			echo "Error: " . $stmt->error;
	}
}

// si aprieto el botón Update
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $nuevoNombre = $_POST["nuevo_nombre"];
    $nuevoApellido = $_POST["nuevo_apellido"];
    $nuevoDNI = $_POST["nuevo_dni"];
    $nuevoGenero = $_POST["nuevo_genero"];
    $nuevoEmail = $_POST["nuevo_email"];
   $nuevaCarrera = $_POST["nuevo_carrera"];
   

    // Validar la entrada
    if (!empty($nuevoApellido) && !empty($nuevoNombre) && !empty($nuevoEmail)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("UPDATE alumnos SET nombre=?, apellido=?, dni=?, genero=?, email=?, carrera=? WHERE id=$id");
        $stmt->bind_param("ssssssi", $nuevoNombre, $nuevoApellido, $nuevoDNI, $nuevoGenero, $nuevoEmail, $nuevoCarrera , $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					Registro actualizado con éxito.
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    include "header.php"
?>

    <h1 class="text-center">
        Actualizar registro
    </h1>

    <form class="container-fluid w-50 text-center" action="actualizar.php" method="POST">
        <div class="mb-3">
            <label for="nuevo_nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nuevo_nombre" name="nuevo_nombre" aria-describedby="nombre" value="<?php echo $nuevoNombre; ?>">

        </div>

        <div class="mb-3">
            <label for="nuevo_apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="nuevo_apellido" name="nuevo_apellido" aria-describedby="apellido" value="<?php echo $nuevoApellido; ?>">

        </div>
        <div class="mb-3">
            <label for="nuevo_dni" class="form-label">DNI</label>
            <input type="dni" class="form-control" id="nuevo_dni" name="nuevo_dni" aria-describedby="dni" value="<?php echo $nuevoDNI; ?>">

        </div>

        <label for="nuevo_genero" class="form-label">Género</label>
        <div class="mb-3">

            <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" name="nuevo_genero" id="nuevo_genero" value="Femenino">
                <label class="form-check-label" for="nuevo_genero">
                    Femenino
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nuevo_genero" id="nuevo_genero" value="Masculino" checked>
                <label class="form-check-label" for="nuevo_genero">
                    Masculino
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nuevo_genero" id="nuevo_genero" value="X" checked>
                <label class="form-check-label" for="nuevo_genero">
                    No Binarie (X)
                </label>
            </div>

        </div>
        <div class="mb-3">
            <label for="nuevo_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="nuevo_email" name="nuevo_email" value="<?php echo $nuevoEmail; ?>">
        </div>
        <label for="nuevo_carrera" class="form-label">Carrera</label>
        <select class="form-select" aria-label="Default select example" name="nuevo_carrera">
            <option value="Tecnicatura Superior en Desarrollo De Software">Tecnicatura Superior en Desarrollo De Software</option>
            <option value="Tecnicatura Superior en Infraestructura Informática">Tecnicatura Superior en Infraestructura Informática</option>
            <option value="Tecnicatura Superior en Enfermería">Tecnicatura Superior en Enfermería</option>
            <option value="Tecnicatura Superior en Gestión de la Producción Agropecuaria">Tecnicatura Superior en Gestión de la Producción Agropecuaria </option>
            <option value="Tecnicatura Superior en Higiene y Seguridad">Tecnicatura Superior en Higiene y Seguridad</option>
            <option value="Tecnicatura Superior en Comunicacion Social">Tecnicatura Superior en Comunicacion Social</option>
            <option value="Profesorado de Artes Visuales">Profesorado de Artes Visuales </option>
            <option value="Profesorado de Educación Inicial">Profesorado de Educación Inicial</option>
            <option value="Profesorado de Educación Primaria">Profesorado de Educación Primaria</option>
            <option value="Profesorado de Inglés">Profesorado de Inglés</option>
            <option value="Profesorado de Informática">Profesorado de Informática</option>
            <option value="Capacitación en Inglés">Capacitación en Inglés</option>
            <option value="Capacitación en Portugués">Capacitación en Portugués</option>
            <option value="Capacitación en Francés">Capacitación en Francés</option>
            <option value="Capacitación en Dibujo y Pintura">Capacitación en Dibujo y Pintura</option>
        </select>
        

        <div class="form-check">
            <button type="submit" class="btn btn-primary mt-3" name="update" >Suscribirse</button>
        </div>
    </form>

    <?php 
    include "footer.php"
?>
</body>
</html>

