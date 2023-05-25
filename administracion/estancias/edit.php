<?php
$id = $_GET['id'];
require_once('../Database/Database.php');
$alojamiento= Database::findByIdAlojamientos($id);
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
            <input type="hidden" name="id" value = "<?php echo $alojamiento['id']?>">
            <input type="text" name="nombreViaje" placeholder="modificar nombre " value = "<?php echo $alojamiento['nombreViaje']?>">
            <input type="text" name="imagen" placeholder="modificar imagen" value = "<?php echo $alojamiento['imagen']?>">
            <input type="text" name="tipoEstancia" placeholder="modificar tipo estancia" value = "<?php echo $alojamiento['tipoEstancia']?>">
            <input type="text" name="ubicacion" placeholder="modificar ubicacion" value = "<?php echo $alojamiento['ubicacion']?>">
            <input type="text" name="precioPorNoche" placeholder="modificar precio/noche" value = "<?php echo $alojamiento['precioPorNoche']?>">
            <button class="btn" type="submit">Enviar</button> 
        </form>
    </main>  
</body>
</html>