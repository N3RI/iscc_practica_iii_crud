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

    <form class="container-fluid w-50 text-center" action="actualizar.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre">

        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="apellido">

        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="dni" class="form-control" id="dni" name="dni" aria-describedby="dni">

        </div>

        <label for="genero" class="form-label">Género</label>
        <div class="mb-3">

            <div class="form-check  form-check-inline ">
                <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino">
                <label class="form-check-label" for="flexRadioDefault1">
                    Femenino
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Masculino
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" id="genero" value="X" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No Binarie (X)
                </label>
            </div>

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <label for="carrera" class="form-label">Carrera</label>
        <select class="form-select" aria-label="Default select example" name="carrera">
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
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Acepto terminos y condiciones.
            </label>
        </div>

        <div class="form-check">
            <button type="submit" class="btn btn-primary mt-3" name="create" >Suscribirse</button>
        </div>
    </form>
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