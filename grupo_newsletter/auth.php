<?php

// Supongamos que tienes un conjunto de credenciales predefinidas
$usuarios = array(
    'admin' => 'contrasena_admin',
    // Agrega más usuarios si es necesario
);

function validarCredenciales($usuario, $contrasena)
{
    global $usuarios;
    
    // Verifica si las credenciales son válidas
    return isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena;
}

?>
