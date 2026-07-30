<?php

$servidor = "localhost";
$usuario = "medicloud_user";
$contrasena = "MediCloud2026!";
$basedatos = "medicloud";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>