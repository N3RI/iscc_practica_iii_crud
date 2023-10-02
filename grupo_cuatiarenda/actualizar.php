<?php
// Actualizar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $nuevoNombre = $_POST["nuevo_nombre"];

    // Validar la entrada
    if (!empty($id) && !empty($nombre)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("UPDATE usuarios SET nombre=? WHERE id=?");
        $stmt->bind_param("si", $nombre, $id);

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
					<form action="actualizar.php" method="post" class="row g-3 mb-3">
					<div class="col">
						<label for="id_update" class="form-label">Nombre</label>
						<input type="texto" name="nombre" id="nombre" class="form-control" required value="<?php echo $nombre?>">
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Fecha</label>
						<input type="texto" name="fecha" id="fecha" class="form-control" required value="<?php echo $fecha?>">
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Hora</label>
						<input type="texto" name="hora" id="hora" class="form-control" required value="<?php echo $hora?>">
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Lugar</label>
						<input type="texto" name="lugar" id="lugar" class="form-control" required value="<?php echo $lugar?>">
					</div>
					<div class="col">
						<label for="nuevo_nombre" class="form-label">Información</label>
						<input type="text" name="informacion" id="informacion" class="form-control" required value="<?php echo $informacion?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Categoría</label>
						<input type="text" name="categoria" id="categoria" class="form-control" required value="<?php echo $categoria?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Invitados</label>
						<input type="text" name="invitados" id="invitados" class="form-control" required value="<?php echo $invitados?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Precio</label>
						<input type="text" name="precio" id="precio" class="form-control" required value="<?php echo $precio?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Imagen</label>
						<input type="text" name="imagen" id="iamgen" class="form-control" required value="<?php echo $imagen?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Responsable</label>
						<input type="text" name="responsable" id="responsable" class="form-control" required value="<?php echo $responsable?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Capacidad</label>
						<input type="text" name="capacidad" id="capacidad" class="form-control" required value="<?php echo $capacidad?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Contacto</label>
						<input type="text" name="contacto" id="contacto" class="form-control" required value="<?php echo $contacto?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Estado</label>
						<input type="text" name="estado" id="estado" class="form-control" required value="<?php echo $estado?>">
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Tipo de Evento</label>
						<input type="text" name="tipo_de_evento" id="tipo_de_evento" class="form-control" required value="<?php echo $tipo_de_evento?>">
					</div>
						<input type="submit" name="update" value="Actualizar">
					</form>
				</div>
			</div>
		</div>
    
</body>
</html>