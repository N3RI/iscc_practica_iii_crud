<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Lista de Eventos</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Eventos</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "eventos";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM eventos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nombre</th>';
            echo '<th>Fecha</th>';
            echo '<th>Hora</th>';
            echo '<th>Lugar</th>';
            echo '<th>Información</th>';
            echo '<th>Invitados</th>';
            echo '<th>Precio</th>';
            echo '<th>Imagen</th>';
            echo '<th>Responsable</th>';
            echo '<th>Capacidad</th>';
            echo '<th>Contacto</th>';
            echo '<th>Estado</th>';
            echo '<th>Tipo de Evento</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['fecha'] . '</td>';
                echo '<td>' . $row['hora'] . '</td>';
                echo '<td>' . $row['lugar'] . '</td>';
                echo '<td>' . $row['info'] . '</td>';
                echo '<td>' . $row['invitados'] . '</td>';
                echo '<td>' . $row['precio'] . '</td>';
                echo '<td>' . $row['imagen'] . '</td>';
                echo '<td>' . $row['responsable'] . '</td>';
                echo '<td>' . $row['capacidad'] . '</td>';
                echo '<td>' . $row['contacto'] . '</td>';
                echo '<td>' . $row['estado'] . '</td>';
                echo '<td>' . $row['tipoEvento'] . '</td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No se encontraron eventos.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>