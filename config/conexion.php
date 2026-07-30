<?php

$servidor   = getenv("MYSQLHOST");
$usuario    = getenv("MYSQLUSER");
$contrasena = getenv("MYSQLPASSWORD");
$basedatos  = getenv("MYSQLDATABASE");
$puerto     = getenv("MYSQLPORT");

$conexion = new mysqli(
    $servidor,
    $usuario,
    $contrasena,
    $basedatos,
    (int)$puerto
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
