<?php

$id = $_GET['id'];
require_once('../Database/Database.php');
$alojamiento= Database::findById($id);
        /*
        nombreViaje varchar(45) NOT NULL,
        imagen varchar(45) NOT NULL,
        tipoEstancia varchar(15) NOT NULL,
        ubicacion varchar(45),
        precioPorNoche DOUBLE NOT NULL,
        */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Edit</title>
</head>
<body>
<form action="update.php" method ="POST">
        <!-- 
            METHOD:POST
            ACTION: fichero que gestiona los datos
        -->
        <!-- pasas un valor que no se ve -->
        <!-- 
            dni varchar(10) NOT NULL UNIQUE,
 nombre varchar(25) NOT NULL,
 apellidos varchar(45),
 correo varchar(45) NOT NULL UNIQUE,
 contrasenia varchar(45),
 direccion varchar(45) NOT NULL,

        --> 
        
        <input type="hidden" name="id" value = "<?php echo $alojamiento['id']?>">
        <input type="text" name="ndni" placeholder="modificar nombre " value = "<?php echo $alojamiento['nombreViaje']?>">
        <input type="text" name="nombre" placeholder="modificar imagen" value = "<?php echo $alojamiento['imagen']?>">
        <input type="text" name="apellidos" placeholder="modificar tipo estancia" value = "<?php echo $alojamiento['tipoEstancia']?>">
        <input type="text" name="correo" placeholder="modificar ubicacion" value = "<?php echo $alojamiento['ubicacion']?>">
        <input type="text" name="contrasenia" placeholder="modificar precio/noche" value = "<?php echo $alojamiento['precioPorNoche']?>">
        <button class="btn" type="submit">Enviar</button> 
    </form>
</body>
</html>