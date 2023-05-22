<?php

$id = $_GET['id'];
require_once('../Database/Database.php');
$reserva= Database::findByIdReservas($id);
        
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
        <a href="index.php" class="btn">Atrás</a>
        <input type="hidden" name="id" value = "<?php echo $reserva['id']?>">
        <input type="text" name="fechaInicio" placeholder="modificar fecha inicio " value = "<?php echo $reserva['fechaInicio']?>">
        <input type="text" name="fechaFin" placeholder="modificar fecha fin" value = "<?php echo $reserva['fechaFin']?>">
        <input type="text" name="usuarios_id" placeholder="modificar us.id" value = "<?php echo $reserva['usuarios_id']?>">
        <input type="text" name="alojamientos_id" placeholder="modificar aloj.id" value = "<?php echo $reserva['alojamientos_id']?>">
        <button class="btn" type="submit">Enviar</button>
    </main>
</body>
</html>