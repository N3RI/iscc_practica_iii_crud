<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewsletterISCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>


    <nav class="navbar bg-custom">
        <div class="container-fluid">
            <img src="img/logo.png" alt="Bootstrap" class="mx-auto d-block">
            <button class="btn btn-primary" onclick="window.location.href = 'admin.php';">Ir a admin</button>
        </div>
    </nav>

    <div class="container-fluid">

        <h1 class="text-center m-4">¡Bienvenido al Newsletter del ISCC!</h1>

        <h2 class="text-center m-4">¡Mantente siempre informado y al día con las novedades del Instituto!</h2>

        <p class="text-center m-4">¿Te gustaría estar al tanto de las últimas novedades sobre la
            cursada, fechas de inscripción a mesas de examen, becas y toda la información relevante directamente en tu
            bandeja de entrada? ¡Entonces, suscríbete a nuestro boletín de noticias!</p>
    </div>

    <form class="container-fluid w-50 text-center" action="create.php" method="POST">
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
        

        <div class="form-check">
            <button type="submit" class="btn btn-primary mt-3" name="create" >Suscribirse</button>
        </div>
    </form>

    <div class="container-fluid text-center text-white mt-3 p-2 bg-custom">
        <p>Made with love by Joan Mauri & Eduardo López <a href="admin.php" target="_blank"
                rel="noopener noreferrer">Admin</a></p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>