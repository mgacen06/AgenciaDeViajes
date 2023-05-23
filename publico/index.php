<?php
require_once("../administracion/Database/Database.php");
$resultado = Database::getAllAlojamientos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Lucía Ortiz y Mario García">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../publico/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/navYFooter.css">
    <link rel="shortcut icon" href="img/icono.ico" type="" id="icono">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css%22%3E">
    <title>Viajes Lario</title>
</head>

<body>
    <nav id="elNav"></nav>
    <main>
        <a id="titulo" href="index.php">Viajes Lario</a>
        <div class="buscador">
            <button type="button" class="button1">Buscar</button>
            <div class="lineav"></div>
            <div class="filtrosBuscador">
                <input type="text" placeholder="¿Qué fecha te gustaría alojarte?">
                <div class="lineah"></div>
                <input type="text" class="destino" id="destino" name="destino" placeholder="Destino">
            </div>
        </div>
        <div class="ofertaViajes">
            <?php
            foreach ($resultado as $fila) {
                echo "<div class='card'>";
                echo "<img class='imagen' alt='Avatar' src=" . $fila['imagen'] . "></img>";
                echo "<div class='info'>";
                echo "<h4 class='titulo'>" . $fila['nombreViaje'] . "</h4>";
                echo "<small>" . $fila['tipoEstancia'] . "</small>";
                echo "<p class='lugar'>" . $fila['ubicacion'] . "</p>";
                echo "<div class='precio'>" . $fila['precioPorNoche'] . "€ /noche</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
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
            <small>Copyright © 2022 Empresa de venta de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España</small>
        </div>
    </footer>
</body>
<script src="navYFooter.js"></script>
<script src="app.js"></script>

</html>