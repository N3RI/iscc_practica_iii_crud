<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Página</title>
</head>
<body>
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
        <a href="formulario.html" class="btn btn-primary">Ir al Formulario</a>
    </div>
</body>
</html>
