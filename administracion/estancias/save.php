<?php
    // 1. Recoger todos los elementos del formulario
    $datos = [$_POST['nombreViaje'], $_POST['imagen'], $_POST['tipoEstancia'], $_POST['ubicacion'], $_POST['precioPorNoche']];
    // 2. Importar la clase Database.php
    require_once('../Database/Database.php');

    // 3. Invocar la funcion save de Database llevandole los datos
    Database::save($datos);

    // 4. Retornar al index.php
    header('Location: index.php');
?>