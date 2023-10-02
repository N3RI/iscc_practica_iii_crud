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
                <img src="img/futbol5.jpg" alt="Logo" width="40" height="40">
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
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
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

    <div class="container mt-5">
        <h2>Lista de Canchas</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de la Cancha</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Superficie</th>
                    <th>Contacto</th>
                    <th>Correo</th>
                    <th>Horario</th>
                    <th>Servicios</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

                if (mysqli_connect_errno()) {
                    die("La conexión a la base de datos falló: " . mysqli_connect_error());
                }

                $consulta = "SELECT * FROM canchas";
                $resultado = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['nombrecancha'] . "</td>";
                    echo "<td>" . $fila['direccion'] . "</td>";
                    echo "<td>" . $fila['ciudad'] . "</td>";
                    echo "<td>" . $fila['provincia'] . "</td>";
                    echo "<td>" . $fila['superficie'] . "</td>";
                    echo "<td>" . $fila['contacto'] . "</td>";
                    echo "<td>" . $fila['correo'] . "</td>";
                    echo "<td>" . $fila['horario'] . "</td>";
                    echo "<td>" . $fila['servicios'] . "</td>";
                    echo "</tr>";
                }

                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>

    <div class="container mt-5 p-4">
    <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
        <?php
        $tarjetas = [
            ["img" => "img/img1.jpg", "titulo" => "FANATICOS", "enlace" => "fanaticos.html"],
            ["img" => "img/img2.jpg", "titulo" => "BARRIO NORTE", "enlace" => "barrionorte.html"],
            ["img" => "img/img3.jpg", "titulo" => "KRISTAL", "enlace" => "kristal.html"],
            ["img" => "img/img4.jpg", "titulo" => "LA ESTACIÓN", "enlace" => "laestacion.html"],
            ["img" => "img/img5.jpg", "titulo" => "LO DEL VIEJO", "enlace" => "lodelviejo.html"],
            ["img" => "img/img5.jpg", "titulo" => "TERCER TIEMPO", "enlace" => "tercertiempo.html"],
            
        ];

        foreach ($tarjetas as $tarjeta) {
            echo '<div class="col">';
            echo '<div class="card text-bg-dark">';
            echo '<div class="card-img-container">';
            echo '<img src="' . $tarjeta['img'] . '" class="card-img" alt="...">';
            echo '<div class="card-title-overlay">';
            echo '<h5>' . $tarjeta['titulo'] . '</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="card-footer d-flex justify-content-end">';
            echo '<a href="' . $tarjeta['enlace'] . '" class="btn btn-primary">Ver más</a>';
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
