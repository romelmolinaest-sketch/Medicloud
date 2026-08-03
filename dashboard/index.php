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

    <title>MediCloud - Dashboard</title>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="dashboard">

    <header>
        <h1>MediCloud</h1>

        <div>
            Bienvenido,
            <strong><?php echo e($_SESSION["nombre"]); ?></strong>
            (<?php echo e($_SESSION["rol"]); ?>)
            |
            <a href="../logout.php">Cerrar sesión</a>
        </div>
    </header>

    <main>

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

    </main>

</div>

</body>
</html>
