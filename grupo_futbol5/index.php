<?php
$conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["agregar"])) {
        $img = $_POST["img"];
        $titulo = $_POST["titulo"];
        $enlace = $_POST["enlace"];
        
        $sql = "INSERT INTO canchas (nombrecancha, direccion, ciudad, provincia, superficie, contacto, correo, horario, servicios) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssssssss", $titulo, $direccion, $ciudad, $provincia, $superficie, $contacto, $correo, $horario, $servicios);

        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            echo "Error al agregar la tarjeta.";
        }
    }
}

$consulta = "SELECT * FROM canchas";
$resultado = mysqli_query($conexion, $consulta);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>F5Deportes - Canchas de Fútbol 5</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="img/pelota.png" alt="Logo" width="40" height="40">
                F5DEPORTES - CANCHAS DE FUTBOL 5
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel">F5DEPORTES</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="formulario.php">Registrar Cancha</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Contactos</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="https://www.facebook.com/"><i
                                            class="bi bi-facebook"></i> Facebook</a></li>
                                <li><a class="dropdown-item" href="https://www.instagram.com/"><i
                                            class="bi bi-instagram"></i> Instagram</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.whatsapp.com/"><i
                                            class="bi bi-whatsapp"></i> 3774538193</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 p-4">
       <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
       <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

            if (mysqli_connect_errno()) {
                die("La conexión a la base de datos falló: " . mysqli_connect_error());
            }

            $consulta = "SELECT * FROM canchas";
            $resultado = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="img/futbol5.jpg" class="card-img-top" alt="Imagen de la Cancha">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $fila['nombrecancha'] . '</h5>';
                echo '<p class="card-text">' . $fila['direccion'] . ', ' . $fila['ciudad'] . '</p>';
                echo '<a href="pagina_destino.php?id=' . $fila['id'] . '" class="btn btn-primary">Ver Detalles</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            mysqli_close($conexion);

            $tarjetas = [
                ["img" => "img/img1.jpg", "titulo" => "FANATICOS", "direccion" => "Calle Ejemplo, Ciudad Ejemplo", "enlace" => "fanaticos.html"],
                ["img" => "img/img2.jpg", "titulo" => "BARRIO NORTE", "direccion" => "Otra Calle, Otra Ciudad", "enlace" => "barrionorte.html"],
                ["img" => "img/img3.jpg", "titulo" => "KRISTAL", "direccion" => "Calle de Kristal, Otra Ciudad", "enlace" => "kristal.html"],
                ["img" => "img/img4.jpg", "titulo" => "LA ESTACIÓN", "direccion" => "Estación, Ciudad Estación", "enlace" => "laestacion.html"],
                ["img" => "img/img5.jpg", "titulo" => "LO DEL VIEJO", "direccion" => "Vieja Calle, Vieja Ciudad", "enlace" => "lodelviejo.html"],
                ["img" => "img/img5.jpg", "titulo" => "TERCER TIEMPO", "direccion" => "Tercer Calle, Tercer Ciudad", "enlace" => "tercertiempo.html"],
            ];            

            foreach ($tarjetas as $tarjeta) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $tarjeta['img'] . '" class="card-img-top" alt="Imagen de la Cancha">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $tarjeta['titulo'] . '</h5>';
                echo '<p class="card-text">' . $tarjeta['direccion'] . '</p>';
                echo '<a href="' . $tarjeta['enlace'] . '" class="btn btn-primary">Ver Detalles</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>



    <footer>
        <p class="text-center">&copy; 2023 F5Deportes. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>