<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Editar Evento</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Evento</h2>
        <a pt="2" class="btn btn-primary" href="paanelactualiar_borrar.php">Volver</a>
  
        <?php
        // Verificar si se ha pasado un ID válido a través de la URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            // Conectar a la base de datos y recuperar los detalles del evento con el ID dado
            include('db.php'); // Asegúrate de tener tu archivo de conexión a la base de datos

            // Consulta para obtener los detalles del evento con el ID dado
            $sql = "SELECT * FROM eventos WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Mostrar el formulario para editar el evento con los detalles actuales
                ?>
                <form action="editar_evento.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
                    </div>
                    <!-- Aquí puedes agregar campos adicionales para los otros detalles del evento -->
                    <!-- Por ejemplo: -->
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora:</label>
                        <input type="time" class="form-control" id="hora" name="hora" value="<?php echo $row['hora']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lugar">Lugar:</label>
                        <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $row['lugar']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="info">Información:</label>
                        <textarea class="form-control" id="info" name="info" rows="4" required><?php echo $row['info']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="invitados">Invitados:</label>
                        <input type="text" class="form-control" id="invitados" name="invitados" value="<?php echo $row['invitados']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $row['precio']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $row['imagen']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable:</label>
                        <input type="text" class="form-control" id="responsable" name="responsable" value="<?php echo $row['responsable']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="capacidad">Capacidad:</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad" value="<?php echo $row['capacidad']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contacto">Contacto:</label>
                        <input type="text" class="form-control" id="contacto" name="contacto" value="<?php echo $row['contacto']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $row['estado']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tipoEvento">Tipo de Evento:</label>
                        <input type="text" class="form-control" id="tipoEvento" name="tipoEvento" value="<?php echo $row['tipoEvento']; ?>" required>
                       
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <!-- Agregar más campos aquí para los otros detalles -->
                    <button type="submit" class="btn btn-primary">Actualizar Evento</button>
                </form>
                <?php
            } else {
                echo "No se encontró el evento.";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
        } else {
      
        }

        // Procesar la actualización cuando se envíe el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $id = $_POST['id'];
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
            // Agregar más campos aquí para los otros detalles

            // Conectar a la base de datos y realizar la actualización
            include('db.php'); // Asegúrate de tener tu archivo de conexión a la base de datos

            // Consulta para actualizar los detalles del evento en la base de datos
            $sql = "UPDATE eventos SET 
            nombre='$nombre', 
            fecha='$fecha', 
            hora='$hora', 
            lugar='$lugar', 
            info='$info', 
            invitados='$invitados', 
            precio='$precio', 
            imagen='$imagen', 
            responsable='$responsable', 
            capacidad='$capacidad', 
            contacto='$contacto', 
            estado='$estado', 
            tipoEvento='$tipoEvento' 
            WHERE id=$id";
    
            if ($conn->query($sql) === TRUE) {
                echo "Registro actualizado correctamente.";
            } else {
                echo "Error al actualizar el registro: " . $conn->error;
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
