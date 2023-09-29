<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centro de Estudiantes ISCC</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo_iscc_x32.ico" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar" style="background-color: #162f6b;"
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo_iscc_x64.png" alt="Logo" width="64" height="64"
                        class="d-inline-block align-text-top"> Centro de Estudiantes ISCC
                </a>
            </div>
        </nav>
    </header>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/foto1 (1).jpeg" alt="Centro de Estudiantes">
            </div>
            <div class="carousel-item">
                <img src="img/foto1 (2).jpeg" alt="Centro de Estudiantes">
            </div>
            <div class="carousel-item">
                <img src="img/foto1 (3).jpeg" alt="Centro de Estudiantes">
            </div>
            <div class="carousel-item">
                <img src="img/foto1 (4).jpeg" alt="Centro de Estudiantes">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php
   echo" <h2 class="integrantesText">INTEGRANTES</h2>
   echo" <div class="card-group col-md-6">
    echo"    <div class="card">
    echo"        <img src="img/descarga.jpg" class="cold" alt="...">
    echo"        <div class="card-body">
    echo"            <h5 class="card-title">Juan Perez</h5>
   echo"             <p class="card-text"><b>Presidente</b> del Centro de Estudiantes</p>
    echo"            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    echo"        </div>
    echo"    </div>
    echo"    <div class="card">
   echo"         <img src="img/descarga1.jpeg" class="card-img-top" alt="...">
    echo"        <div class="card-body">
    echo"            <h5 class="card-title">Rosita Vargas</h5>
    echo"            <p class="card-text"><b>Sub-Secretaria</b> del Centro de Estudiantes.</p>
    echo"            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    echo"        </div>
    echo"    </div>
    echo"    <div class="card">
    echo"        <img src="img/descarga2.jpg" class="card-img-top" alt="...">
    echo"        <div class="card-body">
    echo"            <h5 class="card-title" id="nombre">Pedro Pujol</h5>
    echo"            <p class="card-text" id="rango"><b>Sub-Secretario</b> del Centro de Estudiantes.</p>
    echo"            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    echo"        </div>
    echo"    </div>
    echo"</div>
    ?>
    <button type="button" class="btn btn-dark" style="background-color: #162f6b;" id="boton">Ver mas</button>

        <form action="create.php" method="post" >
            
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="rango">Rango</label>
                <input type="text" name="rango" id="rango" required>
            </div>
            <input type="submit" name="create" value="create">
        </form>

        <form action="create.php" method="post">
            <input type="submit" name="read" value="read">
        </form>

    <!--PUBLICACIONES--->
    <h2 class="integrantesText">PUBLICACIONES</h2>
    <div class="main">
          <ul id="posts">
            <!-- Aquí irán las publicaciones simuladas -->
          </ul>
        </section>
      </div>
      <h2 class="integrantesText">CALENDARIO DE REUNIONES</h2>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"> </script>
    <script src="app.js"></script>
</body>



<div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="imgLogo/facebook.png" width="32" height="32">
            <p><a href="#" target="_blank">Contactanos por<br>Facebook</a></p>
        </li>
        <li>
            <img src="imgLogo/instagram.png" width="32" height="32">
            <p><a href="#" target="_blank">Contactanos por <br>Instragram</a></p>
        </li>
        <li>
            <img src="imgLogo/whatsapp.png" width="32" height="32">
            <p><a href="#" target="_blank">Contactanos por<br>Whatsapp</a></p>
        </li>
        <li>
            <img src="imgLogo/youtube.png" width="32" height="32">
            <p><a href="#" target="_blank">Seguinos en<br>Youtube</a></p>
        </li>
       
</div>
<?php
$conexion = mysqli_connect("localhost", "root", "", "integrantes");
// Seleccionar todos los registros de la tabla 'usuarios'
$consulta = "SELECT * FROM integrantes2";
$resultado = mysqli_query($conexion, $consulta);

// Mostrar los datos
echo "<table>";


while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>"; 
    echo "<td>" . "nombre: " . $fila['nombre_y_apellido'] ."</td>";
    echo "<td>" . "rango: " . $fila['rango'] ."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</html>