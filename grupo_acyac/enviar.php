<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulario de Eventos</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Formulario de Eventos</h2>
        <form action="enviar.php" method="POST">
        <div class="form-group">
                <label for="nombre">Nombre del Evento:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
            <div class="form-group">
                <label for="lugar">Lugar:</label>
                <input type="text" class="form-control" id="lugar" name="lugar" required>
            </div>
            <div class="form-group">
                <label for="info">Información:</label>
                <textarea class="form-control" id="info" name="info" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="invitados">Invitados:</label>
                <input type="text" class="form-control" id="invitados" name="invitados" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen" required>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable:</label>
                <input type="text" class="form-control" id="responsable" name="responsable" required>
            </div>
            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" class="form-control" id="capacidad" name="capacidad" required>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" class="form-control" id="contacto" name="contacto" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="tipoEvento">Tipo de Evento:</label>
                <input type="text" class="form-control" id="tipoEvento" name="tipoEvento" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Evento</button>
        </form>
    </div>

<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];
    $info = $_POST['info'];
    $invitados = $_POST['invitados'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $responsable = $_POST['responsable'];
    $capacidad = $_POST['capacidad'];
    $contacto = $_POST['contacto'];
    $estado = $_POST['estado'];
    $tipoEvento = $_POST['tipoEvento'];
  
    // Consulta SQL para insertar los datos en la tabla 'eventos'
    $sql = "INSERT INTO eventos (nombre, fecha, hora, lugar, info, invitados, precio, imagen, responsable, capacidad, contacto, estado, tipoEvento) 
            VALUES ('$nombre', '$fecha', '$hora', '$lugar', '$info', '$invitados', '$precio', '$imagen', '$responsable', '$capacidad', '$contacto', '$estado', '$tipoEvento')";

    if ($conn->query($sql) === TRUE) {
        echo "Evento guardado exitosamente.";
    } else {
        echo "Error al guardar el evento: " . $conn->error;
    }
}
$conn->close();
?>

</body>

</html>
