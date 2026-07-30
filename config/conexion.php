<?php

$servidor   = getenv("MYSQLHOST") ?: getenv("MYSQL_HOST");
$usuario    = getenv("MYSQLUSER") ?: getenv("MYSQL_USER");
$contrasena = getenv("MYSQLPASSWORD") ?: getenv("MYSQL_PASSWORD");
$basedatos  = getenv("MYSQLDATABASE") ?: getenv("MYSQL_DATABASE");
$puerto     = getenv("MYSQLPORT") ?: getenv("MYSQL_PORT");

echo "<pre>";
var_dump($servidor, $usuario, $basedatos, $puerto);
echo "</pre>";
exit;
