<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_start();

if (isset($_SESSION["nombre"])) {
    header("Location: dashboard/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MediCloud | Iniciar sesión</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background:linear-gradient(135deg,#0d6efd,#20c997);

}

.card{

width:420px;

background:#fff;

border-radius:20px;

padding:45px;

box-shadow:0 20px 45px rgba(0,0,0,.25);

animation:fade .6s;

}

@keyframes fade{

from{

opacity:0;

transform:translateY(30px);

}

to{

opacity:1;

transform:translateY(0);

}

}

.logo{

text-align:center;

margin-bottom:20px;

}

.logo i{

font-size:70px;

color:#0d6efd;

margin-bottom:10px;

}

.logo h1{

font-size:32px;

color:#0d6efd;

}

.logo p{

color:#777;

margin-top:8px;

}

.form-group{

margin-top:25px;

}

.form-group label{

display:block;

margin-bottom:8px;

font-weight:600;

color:#444;

}

.input{

display:flex;

align-items:center;

background:#f4f5f7;

border-radius:10px;

padding:14px;

}

.input i{

color:#0d6efd;

margin-right:12px;

font-size:18px;

}

.input input{

width:100%;

border:none;

background:none;

outline:none;

font-size:16px;

}

button{

width:100%;

margin-top:30px;

padding:15px;

border:none;

border-radius:10px;

background:#0d6efd;

color:#fff;

font-size:17px;

font-weight:bold;

cursor:pointer;

transition:.3s;

}

button:hover{

background:#0b5ed7;

transform:translateY(-2px);

}

.footer{

margin-top:25px;

text-align:center;

font-size:14px;

color:#777;

}

.footer a{

text-decoration:none;

color:#0d6efd;

font-weight:bold;

}

</style>

</head>

<body>

<div class="card">

<div class="logo">

<i class="fa-solid fa-heart-pulse"></i>

<h1>MediCloud</h1>

<p>Sistema de Gestión de Citas Médicas</p>

</div>

<form action="validar_login.php" method="POST">

<div class="form-group">

<label>Correo electrónico</label>

<div class="input">

<i class="fa-solid fa-envelope"></i>

<input
type="email"
name="correo"
placeholder="correo@medicloud.com"
required>

</div>

</div>

<div class="form-group">

<label>Contraseña</label>

<div class="input">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="password"
placeholder="********"
required>

</div>

</div>

<button type="submit">

<i class="fa-solid fa-right-to-bracket"></i>

Iniciar sesión

</button>

</form>

<div class="footer">

© <?php echo date("Y"); ?>

MediCloud

</div>

</div>

</body>

</html>
