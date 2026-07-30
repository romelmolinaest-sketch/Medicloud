<?php

$url = getenv("MYSQL_URL");

if (!$url) {
    die("MYSQL_URL no encontrada");
}

$partes = parse_url($url);

$host = $partes["host"];
$usuario = $partes["user"];
$contrasena = $partes["pass"];
$basedatos = ltrim($partes["path"], "/");
$puerto = $partes["port"];

$conexion = new mysqli(
    $host,
    $usuario,
    $contrasena,
    $basedatos,
    $puerto
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
