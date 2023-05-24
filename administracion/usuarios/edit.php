<?php

$id = $_GET['id'];
require_once('../Database/Database.php');
$usuario= Database::findByIdUsuarios($id);
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
    <main>
    <video id="videoFondo" src="../img/mar.mp4" autoplay muted loop></video>
    <a href="index.php" class="btn">Atrás</a> 
    <form action="update.php" method ="POST">
        <input type="hidden" name="id" value = "<?php echo $usuario['id']?>">
        <input type="text" name="rol" placeholder="modificar rol " value = "<?php echo $usuario['rol']?>">
        <input type="text" name="dni" placeholder="modificar dni " value = "<?php echo $usuario['dni']?>">
        <input type="text" name="nombre" placeholder="modificar nombre" value = "<?php echo $usuario['nombre']?>">
        <input type="text" name="apellidos" placeholder="modificar apellidos" value = "<?php echo $usuario['apellidos']?>">
        <input type="text" name="correo" placeholder="modificar correo" value = "<?php echo $usuario['correo']?>">
        <input type="text" name="contrasenia" placeholder="modificar contraseña" value = "<?php echo $usuario['contrasenia']?>">
        <input type="text" name="direccion" placeholder="modificar direccion" value = "<?php echo $usuario['direccion']?>">
        <button class="btn" type="submit">Enviar</button> 
    </form>
</body>
    </main>
</html>