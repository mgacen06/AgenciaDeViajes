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
    <title>Registro</title>
</head>
<body>
    <nav id="elNav"></nav>
    <main>
        <div class="reg">
            <div><h2>Registro</h2></div>
                <form method="" action="" class="formul">
                    <div id="registro">
                        <label>Nombre<br>
                            <input type="text" placeholder="Nombre" onblur="validarNombre()" name="nombre" id="nombre">
                            <span id="spanNombre"></span>
                        </label>
                        <br><br>
                        <label>Apellidos<br>
                            <input type="text" placeholder="Apellidos" onblur="validarApellidos()" name="apellidos" id="apellidos">
                            <span id="spanApellido"></span>
                        </label>
                        <br><br>
                        <label>DNI<br>
                            <input placeholder="00000000X" onblur="validarDNI()"  type="text" name="dni" id="dni">
                            <span id="spanDNI"></span>
                        </label>
                        <br><br>
                        <label>Teléfono<br>
                            <input placeholder="123456789" onblur="validarTel()"  type="tel" name="telefono" id="tlfn">
                            <br>
                            <span id="spanTlfn"></span>
                        </label>
                        <br><br>
                        <label>Dirección<br>
                            <input placeholder="Direccion completa" type="text" onblur="validarDir()" name="direccion" id="dir">
                            <br>
                            <span id="spanDir"></span>
                        </label>
                        <br><br>
                        <label>Correo<br>
                            <input type="email" placeholder="xxxxx@gmail.com" onblur="validarCorreo()" name="correo" id="correo">
                            <span id="spanCorreo"></span>
                        </label>
                        <br><br>
                        <label>Contraseña<br>
                            <input placeholder="********" onblur="validarContrasenia()" name="contrasenia" type="password"
                                id="contrasenia">
                            <br>
                            <span id="spanContrasenia"></span>
                        </label>
                        <br><br>
                        <label>Acepto las condiciones de uso<br>
                            <input type="checkbox" name="condiciones" id="condiciones" value="Acepto">
                        </label>
                        <br><br>  
                    </div>
                    <button type="submit" name="" class="btn"><h7>Registrar</h7></button>
                </form>
            </div>  
        </div>
    </main>
    <footer id="elFooter"></footer>
</body>
<script src="app_registro.js"></script>
<script src="navYFooter.js"></script>

</html>