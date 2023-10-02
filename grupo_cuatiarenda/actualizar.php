<?php
// $conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
$conexion = mysqli_connect("localhost", "root", "", "base_de_datos");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Actualizar un registro en la tabla 'usuarios'
$id = 1;
$nuevoNombre = "Nuevo Nombre";

$consulta = "UPDATE usuarios SET nombre='$nuevoNombre' WHERE id=$id";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
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
						<input type="texto" name="id" id="id_update" class="form-control" required>
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Fecha</label>
						<input type="texto" name="id" id="id_update" class="form-control" required>
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Hora</label>
						<input type="texto" name="id" id="id_update" class="form-control" required>
					</div>
                    <div class="col">
						<label for="id_update" class="form-label">Lugar</label>
						<input type="texto" name="id" id="id_update" class="form-control" required>
					</div>
					<div class="col">
						<label for="nuevo_nombre" class="form-label">Información</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Categoría</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Invitados</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Precio</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Imagen</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Responsable</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Capacidad</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Contacto</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Estado</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
                    <div class="col">
						<label for="nuevo_nombre" class="form-label">Tipo de Evento</label>
						<input type="text" name="nuevo_nombre" id="nuevo_nombre" class="form-control" required>
					</div>
						<input type="submit" name="update" value="Actualizar">
					</form>
				</div>
			</div>
		</div>
    
</body>
</html>