<?php
require("config.php");
include "header.php";

// Seleccionar todos los registros de la tabla 'alumnos'
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $consulta);
// Mostrar los datos
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>dni</th>";
echo "<th>genero</th>";
echo "<th>email</th>";
echo "<th>carrera</th>";
echo "<th>estado</th>";
echo "<th>fecha</th>";
echo '<th>Acciones</th>'; // Agregamos una columna extra para los botones de acción
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    $id = $fila['ID'];
    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];
    $dni = $fila['dni'];
    $genero = $fila['genero'];
    $email = $fila['email'];
    $carrera = $fila['carrera'];
    $estado = $fila['estado'];
    $fecha = $fila['fecha'];
    
    echo "<td>" . $id . "</td>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . $apellido . "</td>";
    echo "<td>" . $dni . "</td>";
    echo "<td>" . $genero . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $carrera . "</td>";
    echo "<td>" . $estado . "</td>";
    echo "<td>" . $fecha . "</td>";
    echo '<form action="actualizar.php" method="post">
    <input type="hidden" name="id" value="' . $fila['ID'] . '">
    <td><button type="submit" class="btn btn-primary" name="actualizar">Update</button></td>
  </form>';
    echo '<form action="eliminar.php" method="post">
    <input type="hidden" name="id" value="' . $fila['ID'] . '">
    <td><button type="submit" class="btn btn-danger" name="delete">Eliminar</button></td>
  </form>';

    echo "</tr>";
}
echo "</tbody>";
echo "</table>";


?>
<a href="index.php" class="btn btn-primary">Ir a index</a>
<a href="redactar_correo2.php" class="btn btn-primary">Click aquí para redactar un email</a>
<?php 
    include "footer.php"
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>