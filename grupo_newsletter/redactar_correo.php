<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Envío de Correos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<h1 class="text-center mt-4">Redactá acá el correo electrónico</h1>
<div class="container mt-5 d-flex justify-content-center">

        <form action="enviar_correos.php" method="post" enctype="multipart/form-data" class="col-md-6">
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto:</label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Se acercan fechas importantes... recordatorio para la inscripcion de finales...">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Queridos estudiantes, les acercamos la siguiente informacion..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <div id="passwordHelpBlock" class="form-text">
 Cuando hagas click en "Enviar" se enviará el coreo electrónico a todas las personas que aparecen en la base de datos.
</div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

