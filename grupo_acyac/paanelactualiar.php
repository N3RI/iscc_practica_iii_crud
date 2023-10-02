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
        // Incluir el archivo de conexión a la base de datos
        include('db.php');

        // Consulta para obtener los eventos desde la base de datos
        $sql = "SELECT * FROM eventos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            // Mostrar los encabezados de la tabla
            echo '<th>Nombre</th>';
            echo '<th>Fecha</th>';
            echo '<th>Hora</th>';
            echo '<th>Estado</th>';
            echo '<th>Informacion</th>';

            // ... (otros encabezados)
            echo '<th>Editar</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                // Mostrar los datos del evento en cada fila
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['fecha'] . '</td>';
                echo '<td>' . $row['hora'] . '</td>';
                echo '<td>' . $row['estado'] . '</td>';
                echo '<td>' . $row['info'] . '</td>';

                // ... (otros datos)
                // Añadir un botón de editar que llama a la función editarEvento con el ID del evento
                echo '<td><button class="btn btn-primary" onclick="editarEvento(' . $row['id'] . ')">Editar</button></td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "No se encontraron eventos.";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
        <script>
            function editarEvento(id) {
                // Redirigir a la página de edición con el ID del evento
                window.location.href = 'editar_evento.php?id=' + id;
            }
        </script>
    </div>
</body>
</html>
