<?php

$url = getenv("MYSQL_URL");

if (!$url) {
    die("MYSQL_URL no encontrada");
}

$db = parse_url($url);

$conexion = new mysqli(
    $db["host"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/"),
    $db["port"]
);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
