<?php
// show errors
//  ini_set('display_errors', '1');
//  ini_set('display_startup_errors', '1');
//  error_reporting(E_ALL);

// Parámetros de conexión a la base de datos
$host = "104.156.59.38"; 
$usuario = "ifdcuruzu_newsletter"; // $usuario = "usuario";
$contraseña = "4oijWd#tRh*@"; // $contraseña = "contraseña";
$boletin = "ifdcuruzu_gruponewsletter";

// Crear una nueva conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $boletin);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres y la zona horaria
$conexion->set_charset("utf8mb4");

$conexion->query("SET NAMES 'utf8mb4' COLLATE 'utf8mb4_general_ci'");

?>