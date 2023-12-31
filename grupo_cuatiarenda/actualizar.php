<?php
$conexion = mysqli_connect("localhost", "root", "", "calendario");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

$id = $nombre = $fecha = $hora = $lugar = $informacion = $categoria = $invitados = $precio = $imagen = $responsable = $capacidad = $contacto = $estado = $tipo = "";

// Verificar si se proporciona un ID válido en la URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Actualizar
    // Verifica si se envió una solicitud POST para actualizar
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
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
        $tipo = $_POST["tipo"];

        // Actualizar los datos del evento en la base de datos
        $stmt = $conexion->prepare("UPDATE eventos SET nombre=?, fecha=?, hora=?, lugar=?, informacion=?, categoria=?, invitados=?, precio=?, imagen=?, responsable=?, capacidad=?, contacto=?, estado=?, tipo=? WHERE id=?");
        $stmt->bind_param("ssssssssssssssi", $nombre, $fecha, $hora, $lugar, $informacion, $categoria, $invitados, $precio, $imagen, $responsable, $capacidad, $contacto, $estado, $tipo, $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Evento actualizado con éxito.";
        } else {
            echo "Error al actualizar el evento: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        // Obtener los datos del evento usando el ID de la URL
        $stmt = $conexion->prepare("SELECT * FROM eventos WHERE id = ?");
        $stmt->bind_param("i", $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                // Asignar los valores de la base de datos a las variables
                $nombre = $row["nombre"];
                $fecha = $row["fecha"];
                $hora = $row["hora"];
                $lugar = $row["lugar"];
                $informacion = $row["informacion"];
                $categoria = $row["categoria"];
                $invitados = $row["invitados"];
                $precio = $row["precio"];
                $imagen = $row["imagen"];
                $responsable = $row["responsable"];
                $capacidad = $row["capacidad"];
                $contacto = $row["contacto"];
                $estado = $row["estado"];
                $tipo = $row["tipo"];
            } else {
                echo "No se encontró el evento con el ID proporcionado.";
            }
        } else {
            echo "Error al obtener datos del evento: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    }
} else {
    echo "No se proporcionó un ID válido en la URL.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Eventos</title>
</head>
<body>

<div class="container mb-2 shadow">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <!-- Formulario para actualizar un usuario -->
            <h2>Actualizar Evento</h2>
            <form action="actualizar.php?id=<?php echo $id; ?>" method="post" class="row g-3 mb-3">
                <div class="col">
                    <label for="id" class="form-label">ID del Evento</label>
                    <input type="number" name="id" id="id" class="form-control" required value="<?php echo $id; ?>">
                </div>
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo $nombre; ?>">
                </div>
                <div class="col">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control" required value="<?php echo $fecha; ?>">
                </div>
                <div class="col">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="text" name="hora" id="hora" class="form-control" required value="<?php echo $hora; ?>">
                </div>
                <div class="col">
                    <label for="lugar" class="form-label">Lugar</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" required value="<?php echo $lugar; ?>">
                </div>
                <div class="col">
                    <label for="informacion" class="form-label">Información</label>
                    <input type="text" name="informacion" id="informacion" class="form-control" required value="<?php echo $informacion; ?>">
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
                <input type="submit" name="update" value="Actualizar">
            </form>
        </div>
    </div>
</div>

</body>
</html>
