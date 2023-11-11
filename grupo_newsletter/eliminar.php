<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>


<?php
require("config.php");

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
            include "header.php";
            echo '<div style="background-color: #4caf50; color: #fff; padding: 10px; text-align: center; font-size: 18px;">Se eliminó correctamente al alumno de la base de datos. Ya no recibirá correos.</div>';
            echo '<div class="text-center mt-4">';
            echo '<div style="display: flex; justify-content: center; margin-top:1rem;">';
            echo '<a href="admin.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; font-size: 16px; margin-right: 10px;">Volver a Admin</a>';
            echo '</div>';
            echo '</div>';
            include "footer.php";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Datos de entrada inválidos.";
    }
}

?>