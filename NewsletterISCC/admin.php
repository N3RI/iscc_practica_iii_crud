<?php
require("config.php");
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
    echo "<tr>";
    echo "<td>" . $fila['ID'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['apellido'] . "</td>";
    echo "<td>" . $fila['dni'] . "</td>";
    echo "<td>" . $fila['genero'] . "</td>";
    echo "<td>" . $fila['email'] . "</td>";
    echo "<td>" . $fila['carrera'] . "</td>";
    echo "<td>" . $fila['estado'] . "</td>";
    echo "<td>" . $fila['fecha'] . "</td>";
    echo '<form action="actualizar.php" method="post">
    <input type="hidden" name="id" value="' . $fila['ID'] . '">
    <td><button type="submit" class="btn btn-primary" name="update">Eliminar</button></td>
  </form>';
    echo '<form action="eliminar.php" method="post">
    <input type="hidden" name="id" value="' . $fila['ID'] . '">
    <td><button type="submit" class="btn btn-danger" name="delete">Eliminar</button></td>
  </form>';

    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

//eliminar
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Validar la entrada
    if (!empty($id)) {
        // Crear una declaración preparada
        $stmt = $conexion->prepare("DELETE FROM alumnos WHERE id=?");
        $stmt->bind_param("i", $id);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Registro eliminado con éxito. \n";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Datos de entrada inválidos.";
    }
}


mysqli_close($conexion);
?>
<a href="index.php" class="btn btn-primary">Ir a index</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>