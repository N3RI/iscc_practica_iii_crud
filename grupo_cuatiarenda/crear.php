<?php
$conexion = mysqli_connect("localhost", "root", "", "calendario");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
$id = $nombre = $fecha = $hora = $lugar = $informacion = $categoria = $invitados = $precio = $imagen = $responsable = $capacidad = $contacto = $estado = $tipo = "";
// Crear (Insertar)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["create"])) {
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = $_POST["lugar"];
    $informacion = $_POST["informacion"];
    $categoria = $_POST["categoria"];
    $invitados = $_POST["invitados"];
    $precio = $_POST["precio"];
    $imagen = $_POST["imagen"];
    $responsable = $_POST["responsable"];
    $capacidad = $_POST["capacidad"];
    $contacto = $_POST["contacto"];
    $estado = $_POST["estado"];
    $tipo_evento = $_POST["tipo_evento"];

    // Validar la entrada (puedes agregar más validaciones según sea necesario)
    if (!empty($nombre) && !empty($fecha) && !empty($hora) && !empty($lugar) && !empty($informacion)) {

        // Crear una declaración preparada
        $stmt = $conexion->prepare("INSERT INTO eventos (nombre, fecha, hora, lugar, informacion, categoria, invitados, precio, imagen, responsable, capacidad, contacto, estado, tipo_evento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $nombre, $fecha, $hora, $lugar, $informacion, $categoria, $invitados, $precio, $imagen, $responsable, $capacidad, $contacto, $estado, $tipo_evento);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Evento creado con éxito.\n";
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Evento</title>
</head>
<body>
<div class="container my-2 shadow">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h2>Crear Nuevo Evento</h2>
            <form action="crud.php" method="post" class="row g-3 mb-3">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="col">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>
                <div class="col">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="col">
                    <label for="lugar" class="form-label">Lugar</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" required>
                </div>
                <div class="col">
                    <label for="informacion" class="form-label">Información</label>
                    <input type="text" name="informacion" id="informacion" class="form-control" required>
                </div>
                <div class="col">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" required value="<?php echo $categoria; ?>">
                </div>
                <div class="col">
                    <label for="invitados" class="form-label">Invitados</label>
                    <input type="text" name="invitados" id="invitados" class="form-control" required value="<?php echo $invitados; ?>">
                </div>
                <div class="col">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" name="precio" id="precio" class="form-control" required value="<?php echo $precio; ?>">
                </div>
                <div class="col">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="text" name="imagen" id="imagen" class="form-control" required value="<?php echo $imagen; ?>">
                </div>
                <div class="col">
                    <label for="responsable" class="form-label">Responsable</label>
                    <input type="text" name="responsable" id="responsable" class="form-control" required value="<?php echo $responsable; ?>">
                </div>
                <div class="col">
                    <label for="capacidad" class="form-label">Capacidad</label>
                    <input type="text" name="capacidad" id="capacidad" class="form-control" required value="<?php echo $capacidad; ?>">
                </div>
                <div class="col">
                    <label for="contacto" class="form-label">Contacto</label>
                    <input type="text" name="contacto" id="contacto" class="form-control" required value="<?php echo $contacto; ?>">
                </div>
                <div class="col">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" required value="<?php echo $estado; ?>">
                </div>
                <div class="col">
                    <label for="tipo" class="form-label">Tipo de Evento</label>
                    <input type="text" name="tipo" id="tipo" class="form-control" required value="<?php echo $tipo; ?>">
                </div>
                <input type="submit" name="create" value="Crear">
            </form>
        </div>
    </div>
</div>
</body>
</html>
