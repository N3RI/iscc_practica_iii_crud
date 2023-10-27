<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Envío de Correos</title>
</head>
<body>
    <form action="enviar_correos.php" method="post">
        Asunto: <input type="text" name="asunto"><br><br>
        Mensaje: <textarea name="mensaje"></textarea><br><br>
        Adjuntar Archivo: <input type="file" name="archivo"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
