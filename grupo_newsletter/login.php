<?php
include "header.php";
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica el nombre de usuario y contraseña (en este caso, usuario: admin, contraseña: admin)
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === 'admin' && $contrasena === 'hechoporeduardoyjoan') {
        // Inicio de sesión exitoso, redirecciona a la página de administración
        header('Location: admin.php');
        exit;
    } else {
        // Credenciales incorrectas, muestra un mensaje de error
        $error = 'Credenciales incorrectas';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center">

    <form class="form-signin container-fluid w-50" method="POST" action="">
        <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <label for="inputUsuario" class="visually-hidden mb-3">Usuario</label>
        <input type="text" id="inputUsuario" class="form-control mb-3" name="usuario" placeholder="Usuario" required autofocus>

        <label for="inputContrasena" class="visually-hidden mb-3">Contraseña</label>
        <input type="password" id="inputContrasena" class="form-control mb-3" name="contrasena" placeholder="Contraseña" required>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
    </form>

</body>
<?php 
    include "footer.php"
?>
</html>
