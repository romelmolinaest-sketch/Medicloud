<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - MediCloud</title>

    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<div class="contenedor">

    <div class="tarjeta">

        <h1>MediCloud</h1>

        <h3>Iniciar Sesión</h3>

        <form action="validar_login.php" method="POST">

            <input
                type="email"
                name="correo"
                placeholder="Correo electrónico"
                required>

            <br><br>

            <input
                type="password"
                name="password"
                placeholder="Contraseña"
                required>

            <br><br>

            <button type="submit">

                Ingresar

            </button>

        </form>

    </div>

</div>

</body>

</html>