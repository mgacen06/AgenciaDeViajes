<?php
    $datos = [$_POST['id'], $_POST['fechaInicio'], $_POST['fechaFin'],$_POST['usuarios_id'], $_POST['alojamientos_id']];
    require_once('../Database/Database.php');
    Database::saveReservas($datos);
    header('Location: index.php');
?>
