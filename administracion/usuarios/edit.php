<?php

$id = $_GET['id'];
require_once('../Database/Database.php');
$usuario= Database::findById($id);
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
        
        <input type="hidden" name="id" value = "<?php echo $usuario['id']?>">
        <input type="text" name="dni" placeholder="modificar dni " value = "<?php echo $usuario['dni']?>">
        <input type="text" name="nombre" placeholder="modificar nombre" value = "<?php echo $usuario['nombre']?>">
        <input type="text" name="apellidos" placeholder="modificar apellidos" value = "<?php echo $usuario['apellidos']?>">
        <input type="text" name="correo" placeholder="modificar correo" value = "<?php echo $usuario['correo']?>">
        <input type="text" name="contrasenia" placeholder="modificar contraseña" value = "<?php echo $usuario['contrasenia']?>">
        <input type="text" name="direccion" placeholder="modificar direccion" value = "<?php echo $usuario['direccion']?>">
        <button class="btn" type="submit">Enviar</button> 
    </form>
</body>
</html>