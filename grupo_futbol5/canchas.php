<?php
$conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");

if (mysqli_connect_errno()) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Obtener datos de canchas
$consulta = "SELECT * FROM canchas";
$resultado = mysqli_query($conexion, $consulta);

$canchas = [];

while ($fila = mysqli_fetch_assoc($resultado)) {
    $canchas[] = $fila;
}

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($canchas);

mysqli_close($conexion);
?>
