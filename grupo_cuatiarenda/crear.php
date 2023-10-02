






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Eventos</title>
</head>
<body>
<div class="container my-2 shadow">
			<div class="row justify-content-center align-items-center g-2">
				<div class="col">
					<!-- Formulario para crear un usuario -->
					<h2>Crear Nuevo Evento</h2>
					<form action="crud.php" method="post" class="row g-3 mb-3">
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
							<input type="submit" name="create" value="Crear">
					</form>
				</div>
			</div>
		</div>
</body>
</html>