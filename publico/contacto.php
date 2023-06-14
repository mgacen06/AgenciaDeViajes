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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>contacto</title>
</head>
<body>
    <nav id="elNav"></nav>
    <main> 
        <div class="cajacontacto">
            <div class="titulocont">Contacto</div>
            <div class="contactoform">
                <form method="" action="" id="contacto">
                    <div class="hijocontacto">
                        <label>Nombre<br>
                            <input type="text" placeholder="Nombre" onblur="validarNombre()" name="nombre" id="nombre">
                            <span id="spanNombre"></span>
                        </label>
                        <label>Apellidos<br>
                            <input type="text" placeholder="Apellidos" onblur="validarApellidos()" name="apellidos" id="apellidos">
                            <span id="spanApellido"></span>
                        </label>  
                    </div>
                    <label>Correo<br>
                                <input type="email" placeholder="xxxxx@gmail.com" onblur="validarCorreo()" name="correo" id="correo">
                                <span id="spanCorreo"></span>
                            </label>
                    <div class="hijocontacto">
                            <label>Texto a enviar<br>
                                <textarea rows="3" cols="20" placeholder="De 5 a 150 carácteres" onblur="validarTexto()" class="txtarea" name="texto" ></textarea>
                                <br>
                                <span id="spanTexto"></span>
                            </label>
                            <button type="submit" name="" class="btn">Enviar</button>
                    </div>
                </form>        
            </div> 
        </div>
    </main>
    <footer>
        <div class="redesSociales">
            <a class="redes" href="https://www.instagram.com/mgacen06/"><i id="botontw" class="fab fa-instagram"></i>Instagram</a>
            <a class="redes" href="https://twitter.com"><i id="botontw" class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="infoFooter">
            <br>
            <small>Copyright © 2022 Empresa de ofertas de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España</small>
        </div>
    </footer>
</body>
<script src="app_contacto.js"></script>
<script src="navYFooter.js"></script>
</html>