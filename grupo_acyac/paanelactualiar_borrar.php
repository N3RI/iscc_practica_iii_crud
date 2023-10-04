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
      
        include('db.php');

     
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
            $idEliminar = $_GET['eliminar'];
            $sqlEliminar = "DELETE FROM eventos WHERE id = $idEliminar";
            if ($conn->query($sqlEliminar) === TRUE) {
                echo "Evento eliminado correctamente.";
            } else {
                echo "Error al eliminar el evento: " . $conn->error;
            }
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
            echo '<th>Estado</th>';
            echo '<th>Informacion</th>';
            echo '<th>Eliminar</th>';
            echo '<th>Editar</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['fecha'] . '</td>';
                echo '<td>' . $row['hora'] . '</td>';
                echo '<td>' . $row['estado'] . '</td>';
                echo '<td>' . $row['info'] . '</td>';
                echo '<td><a class="btn btn-danger" href="?eliminar=' . $row['id'] . '">Eliminar</a></td>';
                echo '<td><button class="btn btn-primary" onclick="editarEvento(' . $row['id'] . ')">Editar</button></td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No se encontraron eventos.";
        }

        $conn->close();
        ?>
        <script>
            function editarEvento(id) {
          
                window.location.href = 'editar_evento.php?id=' + id;
            }
        </script>
    </div>
</body>
</html>
