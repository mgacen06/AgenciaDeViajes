<?php 

$datos = [$_POST['id'], $_POST['fechaInicio'], $_POST['fechaFin'],$_POST['usuarios_id'], $_POST['alojamientos_id']];
      
require_once('../Database/Database.php');
Database::updateReservas($datos);
header('Location: index.php');

?>
<!DOCTYPE html>
    <!--  fechaInicio DATE NOT NULL,
 fechaFin DATE NOT NULL,
 usuarios_id INT NOT NULL,
 alojamientos_id INT NOT NULL, -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/administracion/style.css">
    <title>Update</title>
</head>
<body>
    <a href="index.php">Atrás</a>
</body>
</html>