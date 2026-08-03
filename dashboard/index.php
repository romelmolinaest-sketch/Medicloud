<?php
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MediCloud | Dashboard</title>

<link rel="stylesheet" href="../css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#edf3f8;
}

/* HEADER */

header{

    background:#0d6efd;

    color:white;

    padding:18px 35px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    box-shadow:0 3px 12px rgba(0,0,0,.15);

}

header h1{

    font-size:30px;

}

.usuario{

    font-size:17px;

}

.usuario a{

    color:white;

    text-decoration:none;

    margin-left:20px;

    background:#dc3545;

    padding:10px 18px;

    border-radius:8px;

    transition:.3s;

}

.usuario a:hover{

    background:#bb2d3b;

}

/* CONTENEDOR */

.container{

    width:90%;

    max-width:1200px;

    margin:40px auto;

}

/* GRID */

.grid{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

    gap:25px;

}

/* TARJETAS */

.card{

    background:white;

    border-radius:15px;

    padding:35px;

    text-align:center;

    box-shadow:0 12px 25px rgba(0,0,0,.08);

    transition:.3s;

}

.card:hover{

    transform:translateY(-8px);

    box-shadow:0 20px 40px rgba(0,0,0,.18);

}

.card i{

    font-size:55px;

    color:#0d6efd;

    margin-bottom:20px;

}

.card h2{

    color:#666;

    margin-bottom:15px;

}

.card h1{

    font-size:55px;

    color:#0d6efd;

}

/* FOOTER */

footer{

    margin-top:50px;

    text-align:center;

    color:#777;

    padding:20px;

}

@media(max-width:700px){

header{

flex-direction:column;

gap:15px;

}

}

</style>

</head>

<body>

<header>

<h1><i class="fa-solid fa-heart-pulse"></i> MediCloud</h1>

<div class="usuario">

Bienvenido,

<strong><?php echo e($_SESSION["nombre"]); ?></strong>

(<?php echo e($_SESSION["rol"]); ?>)

<a href="../logout.php">

<i class="fa-solid fa-right-from-bracket"></i>

Cerrar sesión

</a>

</div>

</header>

<div class="container">

<div class="grid">

<div class="card">

<i class="fa-solid fa-user-doctor"></i>

<h2>Médicos</h2>

<h1><?php echo $medicos; ?></h1>

</div>

<div class="card">

<i class="fa-solid fa-hospital-user"></i>

<h2>Pacientes</h2>

<h1><?php echo $pacientes; ?></h1>

</div>

<div class="card">

<i class="fa-solid fa-calendar-check"></i>

<h2>Citas</h2>

<h1><?php echo $citas; ?></h1>

</div>

<div class="card">

<i class="fa-solid fa-stethoscope"></i>

<h2>Especialidades</h2>

<h1><?php echo $especialidades; ?></h1>

</div>

</div>

</div>

<footer>

© <?php echo date("Y"); ?> MediCloud - Sistema de Gestión de Citas Médicas

</footer>

</body>

</html>
