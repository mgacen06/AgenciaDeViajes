<?php
    $datos = [$_POST['nombreViaje'], $_POST['imagen'], $_POST['tipoEstancia'], $_POST['ubicacion'], $_POST['precioPorNoche']];
    require_once('../Database/Database.php');
    Database::saveAlojamientos($datos);
    header('Location: index.php');
?>