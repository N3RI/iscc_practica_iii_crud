<?php
$conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = mysqli_real_escape_string($conexion, $_POST["id_actualizar"]);
    $nuevoNombre = mysqli_real_escape_string($conexion, $_POST["nuevo_nombre"]);
    $nuevaDireccion = mysqli_real_escape_string($conexion, $_POST["nueva_direccion"]);

    // Actualizar la cancha en la base de datos
    $consulta = "UPDATE canchas SET nombrecancha='$nuevoNombre', direccion='$nuevaDireccion' WHERE id=$id";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        header('Location: index.php'); // Redirigir a la página de inicio
    } else {
        echo "Error al actualizar la cancha: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
