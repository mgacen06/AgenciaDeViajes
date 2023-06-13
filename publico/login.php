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
        <link rel="shortcut icon" href="/publico/img/icono.ico" type="" id="icono">
        <title>Login</title>
    </head>
    <body>
        <nav id="elNav"></nav>
        <main>
            <div class="hijo2form">
                <div class="hijo3form">
                    <h2>Inicio de sesión</h2>
                    <form method="POST" action="user_exist.php" class="caja" id="login">
                        <label>Correo<br>
                            <input type="email" placeholder="xxxxx@gmail.com" onblur="validarCorreo()" name="correo" id="correo" required>
                            <span id="spanCorreo"></span>
                        </label>
                        <label>Contraseña<br>
                            <input placeholder="********" onblur="validarContrasenia()" name="contrasenia" type="password" id="contrasenia" required>
                            <br>
                            <span id="spanContrasenia"></span>
                        </label>
                        <button class="btn" type="submit" name="">Iniciar sesión</button>
                    </form>
                </div>
                <div class="hijo3form">
                    <div>¿Todavía no te has registrado? Haz click aquí:</div>
                    <div><a href="registro.php" class="btn"> Registrarse</a></div>
                </div>  
            </div>
        </main>
        <footer id="elFooter"></footer>
    </body>
    <script src="app_login.js"></script>
    <script src="navYFooter.js"></script>
</html>