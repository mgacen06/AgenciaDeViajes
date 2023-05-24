<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Lucía Ortiz y Mario García">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navYFooter.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../PFC/fontawesome/css/all.css">
    <link rel="shortcut icon" href="imagenes/icono.ico" type="" id="icono">
    <title>Login</title>
</head>
<body>
    <nav id="elNav"></nav>
    <main class="hijo2form">
        <br>
        <div>
            <h3>Inicio de sesión</h3>
        </div>
        <form method="POST" action="user_exist.php" class="caja" id="login">
            <br><br>
            <label>Correo<br>
                <input type="email" placeholder="xxxxx@gmail.com" onblur="validarCorreo()" name="correo" id="correo" required>
                <span id="spanCorreo"></span>
            </label>
            <br><br>
            <label>Contraseña<br>
                <input placeholder="********" onblur="validarContrasenia()" name="contrasenia" type="password" id="contrasenia" required>
                <br>
                <span id="spanContrasenia"></span>
            </label>
            <br><br>
            <button type="submit" name="">Iniciar sesión</button>
            <br><br>
            <div>¿Todavía no te has registrado? Haz click aquí:</div>
            <br><br>
            <a href="registro.php" class="button1"> Registrarse</a>
            <br><br>
        </form>
    </main>
    <footer id="elFooter"></footer>
</body>
<script src="app_login.js"></script>
<script src="navYFooter.js"></script>

</html>