<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Create</title>
</head>
<body>
<form action="save.php" method ="POST">
        <!-- 
            METHOD:
            ACTION: fichero que gestiona los datos
        -->
        <input type="text" name="dni" placeholder="modificar dni ">
        <input type="text" name="nombre" placeholder="modificar nombre" >
        <input type="text" name="apellidos" placeholder="modificar apellidos" >
        <input type="text" name="correo" placeholder="modificar correo" >
        <input type="text" name="contrasenia" placeholder="modificar contraseña" >
        <input type="text" name="direccion" placeholder="modificar direccion" >
        <button class="btn" type="submit">Enviar</button> 
    </form>
</body>
</html>