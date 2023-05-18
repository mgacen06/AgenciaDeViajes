<?php
    // 1. Recoger todos los elementos del formulario
    $datos = [$_POST['dni'], $_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['contrasenia'],$_POST['direccion'] ];
    // 2. Importar la clase Database.php
    require_once('../Database/Database.php');

    // 3. Invocar la funcion save de Database llevandole los datos
    Database::save($datos);

    // 4. Retornar al index.php
    header('Location: index.php');
    /*
    dni varchar(10) NOT NULL UNIQUE,
     nombre varchar(25) NOT NULL,
     apellidos varchar(45),
     correo varchar(45) NOT NULL UNIQUE,
     contrasenia varchar(45),
     direccion varchar(45) NOT NULL,
    
            */
?>