<?php 

$datos = [$_POST['id'], $_POST['dni'], $_POST['nombre'],$_POST['apellidos'],$_POST['correo'],$_POST['contrasenia'], $_POST['direccion']];
      
require_once('../Database/Database.php');
Database::updateUsuarios($datos);
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