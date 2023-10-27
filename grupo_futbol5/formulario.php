<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="form.css">

    <title>Formulario de Canchas</title>
</head>

<body>
    <div class="container">
        <h1>Formulario de Canchas</h1>

        <h2>Registrar Cancha</h2>
        <form action="agregar_cancha.php" method="POST" class="form">
            <div class="form-group">
                <label for="nombrecancha">Nombre de la Cancha:</label>
                <input type="text" name="nombrecancha" id="nombrecancha" class="input-field" maxlength="15" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <select name="ciudad" id="ciudad" class="input-field" required>
                    <option value="Curuzu Cuatia">Curuzu Cuatia</option>
                    <option value="Sauce">Sauce</option>

                </select>
            </div>
            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <select name="provincia" id="provincia" class="input-field" required>
                    <option value="Corrientes">Corrientes</option>

                </select>
            </div>
            <div class="form-group">
                <label for="superficie">Superficie:</label>
                <select name="superficie" id="superficie" class="input-field" required>
                    <option value="cesped_natural">Césped Natural</option>
                    <option value="cesped_artificial">Césped Artificial</option>
                    <option value="tierra_batida">Tierra Batida</option>
                    <option value="pista_madera">Pista de Madera</option>
                    <option value="concreto">Concreto</option>
                    <option value="arena">Arena</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" name="contacto" id="contacto" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="input-field" required
                    pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
            </div>
            <div class="form-group">
                <label for="horario">Horario:</label>
                <input type="text" name="horario" id="horario" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="servicios">Servicio:</label>
                <input type="text" name="servicios" id="servicios" class="input-field" required>
            </div>
            <input type="submit" value="Registrar Cancha" class="btn">
        </form>

        <h2>Actualizar Cancha por ID</h2>
        <form action="actualizar_cancha.php" method="POST" class="form">
            <div class="form-group">
                <label for="id_actualizar">Seleccionar Cancha a Actualizar:</label>
                <select name="id_actualizar" id="id_actualizar" class="input-field" required>
                    <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");
            
            if (mysqli_connect_errno()) {
                die("La conexión a la base de datos falló: " . mysqli_connect_error());
            }
            
            $consulta = "SELECT id, nombrecancha FROM canchas";
            $resultado = mysqli_query($conexion, $consulta);
            
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<option value="' . $fila['id'] . '">' . $fila['nombrecancha'] . '</option>';
            }
            
            mysqli_close($conexion);
            ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nuevo_nombre">Nuevo Nombre:</label>
                <input type="text" name="nuevo_nombre" id="nuevo_nombre" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="nueva_direccion">Nueva Dirección:</label>
                <input type="text" name="nueva_direccion" id="nueva_direccion" class="input-field" required>
            </div>
            <input type="submit" value="Actualizar" class="btn">
        </form>


        <h2>Eliminar Cancha por Nombre</h2>
<form action="eliminar_cancha.php" method="POST" class="form">
    <div class="form-group">
        <label for="nombre_eliminar">Selecciona una Cancha para Eliminar:</label>
        <select name="nombre_eliminar" id="nombre_eliminar" class="input-field" required>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdd_canchas");
            
            if (mysqli_connect_errno()) {
                die("La conexión a la base de datos falló: " . mysqli_connect_error());
            }
            
            $consulta = "SELECT nombrecancha FROM canchas";
            $resultado = mysqli_query($conexion, $consulta);
            
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<option value="' . $fila['nombrecancha'] . '">' . $fila['nombrecancha'] . '</option>';
            }
            
            mysqli_close($conexion);
            ?>
        </select>
    </div>
    <input type="submit" value="Eliminar" class="btn">
</form>

        <div>
            <a href="index.php" class="btn btn-primary mt-4">Ir a la Página de Inicio</a>
            <a href="tabla.php" class="btn btn-primary mt-4">Ir a la Tabla de Registro</a>
        </div>
    </div>

</body>

</html>