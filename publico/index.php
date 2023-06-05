<?php
require_once("../administracion/Database/Database.php");
$resultado = Database::getAllAlojamientos();

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}
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
                echo "<small class='tipo'>" . $fila['tipoEstancia'] . "</small>";
                echo "<p class='lugar'>" . $fila['ubicacion'] . "</p>";
                echo "<div class='precio'>" . $fila['precioPorNoche'] . "€/noche</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
    <footer id="elFooter"></footer>
</body>
<script src="navYFooter.js"></script>
<script src="app.js"></script>

</html>