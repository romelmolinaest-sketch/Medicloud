<?php

function e($dato)
{
    return htmlspecialchars($dato, ENT_QUOTES, 'UTF-8');
}
session_start();

if (!isset($_SESSION["nombre"])) {
    header("Location: ../login.php");
    exit();
}

require_once "../config/conexion.php";
require_once "../config/security.php";

// Contadores
$medicos = $conexion->query("SELECT COUNT(*) AS total FROM medicos")->fetch_assoc()['total'];
$pacientes = $conexion->query("SELECT COUNT(*) AS total FROM pacientes")->fetch_assoc()['total'];
$citas = $conexion->query("SELECT COUNT(*) AS total FROM citas")->fetch_assoc()['total'];
$especialidades = $conexion->query("SELECT COUNT(*) AS total FROM especialidades")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Dashboard - MediCloud</title>

<link rel="stylesheet" href="../css/estilos.css">

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    margin:20px;
}

.tarjetas{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
    margin-bottom:40px;
}

.tarjeta{

    width:180px;
    background:#2196F3;
    color:white;
    border-radius:10px;
    padding:20px;
    text-align:center;

}

.tarjeta h2{
    margin:0;
}

.tarjeta h1{
    font-size:40px;
    margin-top:15px;
}

table{

    border-collapse: collapse;
    width:100%;

}

table th{

    background:#1976D2;
    color:white;

}

table th,
table td{

    border:1px solid #ccc;
    padding:10px;
    text-align:center;

}

button{

    margin-top:30px;
    padding:12px 25px;
    border:none;
    background:#1976D2;
    color:white;
    border-radius:6px;
    cursor:pointer;

}

</style>

</head>

<body>

<h1>MediCloud</h1>

<h3>

Bienvenido

<?php echo e($_SESSION["nombre"]); ?>

</h3>

<div class="tarjetas">

<div class="tarjeta">

<h2>Médicos</h2>

<h1><?php echo $medicos; ?></h1>

</div>

<div class="tarjeta">

<h2>Pacientes</h2>

<h1><?php echo $pacientes; ?></h1>

</div>

<div class="tarjeta">

<h2>Citas</h2>

<h1><?php echo $citas; ?></h1>

</div>

<div class="tarjeta">

<h2>Especialidades</h2>

<h1><?php echo $especialidades; ?></h1>

</div>

</div>

<hr>

<h2>Lista de Médicos</h2>

<table>

<tr>

<th>ID</th>

<th>Nombre</th>

<th>Apellido</th>

<th>Especialidad</th>

<th>Teléfono</th>

<th>Correo</th>

</tr>

<?php

$sql = "SELECT
medicos.id,
medicos.nombre,
medicos.apellido,
medicos.telefono,
medicos.correo,
especialidades.nombre AS especialidad

FROM medicos

INNER JOIN especialidades

ON medicos.id_especialidad = especialidades.id";

$resultado = $conexion->query($sql);

while($fila = $resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $fila['id']; ?></td>

<td><?php echo $fila['nombre']; ?></td>

<td><?php echo $fila['apellido']; ?></td>

<td><?php echo $fila['especialidad']; ?></td>

<td><?php echo $fila['telefono']; ?></td>

<td><?php echo $fila['correo']; ?></td>

</tr>

<?php
}
?>

</table>

<a href="../logout.php">

<button>

Cerrar sesión

</button>

</a>

</body>

</html>
