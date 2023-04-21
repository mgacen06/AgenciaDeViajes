<?php

    require_once("Database.php");
    $resultado=Database::getAllEstancias();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Lucía Ortiz y Mario García">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../PFC/fontawesome/css/all.css">
    <link rel="shortcut icon" href="img/icono.ico" type="" id="icono">
    <title>Viajes Lario</title>
</head>

<!-- Estructura de estilos del programa:
    body    Para el body su nombre
        nav     Para el nav su nombre
            ul      .ulnav
                li      .linav
        main    Para el main su nombre
            div     .buscador   El buscador por diferentes filtros
                button  .botonBuscador
                div     .filtrosBuscador
                    div     .filtro
                    div     .filtro
                    div     .filtro
            div     .ofertaViajes   Donde estan todos los viajes
                div     .card   La card de cada viaje
                    img     .imagen     La imagen principal del viaje
                    div     .info      El cuadro donde esta la informacion
                        h4      .titulo
                        small   .estancia   Tipo de estancia
                        p       .lugar      Lugar del viaje
                        div     .precio     
        footer  Para el footer su nombre
            div     .redesSociales  Espacio para las redes sociales de la web
                a       .redes      
                div     .infoFooter
                    div     .about
                    div     .maps
                
-->
<body>
    <nav id="elNav">
    </nav>
    <main>
        <h1><strong id="titulo">Viajes Lario</strong></h1>
        <div class="buscador">
            <button type="button" class="button1">Buscar</button>
            </button>
            <div class="lineav"></div>
            <div class="filtrosBuscador">
                <input type="text"  placeholder="¿Qué fecha te gustaría alojarte?">
                <div class="lineah"></div>
                <input type="text" class="destino" id="destino" name="destino" placeholder="Destino">
                <div></div>
            </div>
        </div>
        <div class="ofertaViajes"></div>
    </main>
    <footer>
        <div class="redesSociales">
            <a class="redes" href="https://www.instagram.com/mgacen06/"><i id="botontw" class="fab fa-instagram"></i>Instagram</a>
            <a class="redes" href="https://twitter.com"><i id="botontw" class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="infoFooter">
            <div id="aboutus">
                <!-- Sobre nosotros -->
                <h4>Nuestra historia:</h4>
                <p>Es una empresa que nació en 2004, por Lucía Ortiz y Mario García, llegando a posicionarse como una de las empresas de viajes con más usuarios registrados, en la que más de 50.000 personas al año confían para planificar sus vacaciones.</p>
                <p>Visita nuestras redes sociales para conocer más.</p>
            </div>
            <div></div>
            <br>
            <small >Copyright © 2022 Empresa de venta de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España</small>
        </div>
    </footer>
</body>
<script src="navYFooter.js"></script>
<script src="app.js"></script>
</html>