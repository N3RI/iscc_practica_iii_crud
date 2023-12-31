<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daiana Romero</title>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo de la biblioteca con texto -->
            <div class="logo">
                <img src="img/cr.png" alt="Logo de Mi Biblioteca">
                <span class="logo-text">Biblioteca Popular Cuatiá Rendá</span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#carrusel">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#actividades">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#historia">Historia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel debajo del menú -->
    <div id="carrusel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="Carrusel 1">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="Carrusel 2">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="Carrusel 3">
            </div>
        </div>
    </div>

    <table border="2">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Informacion</th>
            <th>Categoria</th>
            <th>Invitados</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Responsable</th>
            <th>Capacidad</th>
            <th>Contacto</th>
            <th>Estado</th>
            <th>Tipo de Evento</th>
            
        </tr>
        <tr>

 <?php
// $conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
$conexion = mysqli_connect("localhost", "root", "", "calendario");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Seleccionar todos los registros de la tabla 'usuarios'
$consulta = "SELECT * FROM eventos";
$resultado = mysqli_query($conexion, $consulta);

// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td> " . $fila['fecha'] . "</td>";
    echo "<td>" . $fila['hora'] . "</td>";
    echo "<td>" . $fila['lugar'] . "</td>";
    echo "<td>" . $fila['informacion'] . "</td>";
    echo "<td>" . $fila['categoria'] . "</td>";
    echo "<td>" . $fila['invitados'] . "</td>";
    echo "<td>" . $fila['precio'] . "</td>";
    echo "<td>" . $fila['imagen'] . "</td>";
    echo "<td> " . $fila['responsable'] . "</td>";
    echo "<td> " . $fila['capacidad'] . "</td>";
    echo "<td>" . $fila['contacto'] . "</td>";
    echo "<td>" . $fila['estado'] . "</td>";
    echo "<td>" . $fila['tipo'] . "</td>";
    echo "</tr>";
} echo "</table>";
mysqli_close($conexion);
?> 
 
    <div id="eventos" class="container">
        <div class="card mb-4 selectable-card cursor-pointer">
            <img src="img/evento1.jpg" class="card-img-top" alt="Evento 1">
            <div class="card-body">
                <h2 class="card-title">Evento 1</h2>
                <p class="card-text">Descripción del evento 1.</p>
            </div>
        </div>
        <div class="card mb-4 selectable-card cursor-pointer">
            <img src="img/evento2.jpg" class="card-img-top" alt="Evento 2">
            <div class="card-body">
                <h2 class="card-title">Evento 2</h2>
                <p class="card-text">Descripción del evento 2.</p>
            </div>
        </div>
    </div>

    <!-- Contenedor de Actividades -->
    <div id="actividades" class="container">
        <div class="card mb-4 selectable-card cursor-pointer">
            <img src="img/actividad1.jpg" class="card-img-top" alt="Actividad 1">
            <div class="card-body">
                <h2 class="card-title">Actividad 1</h2>
                <p class="card-text">Descripción de la actividad 1.</p>
            </div>
        </div>
        <div class="card mb-4 selectable-card cursor-pointer">
            <img src="img/actividad2.jpg" class="card-img-top" alt="Actividad 2">
            <div class="card-body">
                <h2 class="card-title">Actividad 2</h2>
                <p class="card-text">Descripción de la actividad 2.</p>
            </div>
        </div>
    </div>

    <!-- Contenedor de Historia con dos tarjetas -->
    <div id="historia" class="container">
        <div class="card-deck">
            <div class="card selectable-card cursor-pointer">
                <img src="img/historia1.jpg" class="card-img-top" alt="Imagen Historia 1">
                <div class="card-body">
                    <h2 class="card-title">Historia de la Biblioteca</h2>
                    <p class="card-text">Texto de la historia.</p>
                </div>
            </div>
            <div class="card selectable-card cursor-pointer">
                <img src="img/historia2.jpg" class="card-img-top" alt="Imagen Historia 2">
                <div class="card-body">
                    <h2 class="card-title">Otra Historia Importante</h2>
                    <p class="card-text">Texto de la historia.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-content">
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/1234567890" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <p class="footer-text">Síguenos en redes sociales</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts de Bootstrap y jQuery (desde CDN) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>
</html>