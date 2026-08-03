<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MediCloud | Sistema de Gestión de Citas Médicas</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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

background:linear-gradient(135deg,#0d6efd,#20c997);

min-height:100vh;

display:flex;

justify-content:center;

align-items:center;

color:white;

}

.container{

width:90%;
max-width:1200px;

display:flex;

justify-content:space-between;

align-items:center;

gap:60px;

}

.texto{

flex:1;

}

.texto h1{

font-size:60px;

margin-bottom:20px;

}

.texto p{

font-size:20px;

line-height:1.8;

margin-bottom:35px;

}

.btn{

display:inline-block;

padding:16px 35px;

background:white;

color:#0d6efd;

font-size:18px;

font-weight:bold;

text-decoration:none;

border-radius:10px;

transition:.3s;

}

.btn:hover{

transform:translateY(-5px);

background:#f5f5f5;

}

.tarjeta{

width:420px;

background:white;

color:#333;

border-radius:20px;

padding:35px;

box-shadow:0 20px 40px rgba(0,0,0,.25);

}

.tarjeta h2{

text-align:center;

margin-bottom:25px;

color:#0d6efd;

}

.item{

display:flex;

align-items:center;

margin-bottom:18px;

font-size:17px;

}

.item i{

font-size:24px;

color:#0d6efd;

margin-right:15px;

}

footer{

position:absolute;

bottom:20px;

width:100%;

text-align:center;

font-size:14px;

}

@media(max-width:900px){

.container{

flex-direction:column;

text-align:center;

}

.texto h1{

font-size:42px;

}

.tarjeta{

width:100%;

}

}

</style>

</head>

<body>

<div class="container">

<div class="texto">

<h1><i class="fa-solid fa-heart-pulse"></i> MediCloud</h1>

<p>

Sistema web para la gestión de citas médicas desarrollado como proyecto académico de Ciberseguridad en la Nube.

La plataforma incorpora mecanismos de autenticación segura, protección contra ataques web y despliegue en una plataforma PaaS.

</p>

<a href="login.php" class="btn">

<i class="fa-solid fa-right-to-bracket"></i>

Iniciar sesión

</a>

</div>

<div class="tarjeta">

<h2>Características</h2>

<div class="item">

<i class="fa-solid fa-user-doctor"></i>

Administración de médicos

</div>

<div class="item">

<i class="fa-solid fa-hospital-user"></i>

Gestión de pacientes

</div>

<div class="item">

<i class="fa-solid fa-calendar-check"></i>

Control de citas médicas

</div>

<div class="item">

<i class="fa-solid fa-shield-halved"></i>

Contraseñas cifradas

</div>

<div class="item">

<i class="fa-solid fa-lock"></i>

Protección contra SQL Injection

</div>

<div class="item">

<i class="fa-solid fa-bug-slash"></i>

Protección contra XSS

</div>

<div class="item">

<i class="fa-solid fa-cloud"></i>

Despliegue en Railway (PaaS)

</div>

</div>

</div>

<footer>

© <?php echo date("Y"); ?> MediCloud | Proyecto de Ciberseguridad en la Nube - Tec Azuay

</footer>

</body>

</html>
