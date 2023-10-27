<?php
$conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de la cancha a eliminar
    $nombreEliminar = mysqli_real_escape_string($conexion, $_POST["nombre_eliminar"]);

    // Eliminar la cancha de la base de datos
    $consulta = "DELETE FROM canchas WHERE nombrecancha='$nombreEliminar'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        header('Location: index.php'); // Redirigir a la página de inicio
    } else {
        echo "Error al eliminar la cancha: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
