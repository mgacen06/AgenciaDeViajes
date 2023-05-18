<?php 

$datos = [$_POST['id'], $_POST['nombreViaje'], $_POST['imagen'],$_POST['tipoEstancia'],$_POST['ubicacion'],$_POST['precioPorNoche']];
      
require_once('Database.php');
Database::update($datos);
header('Location: index.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
</body>
</html>