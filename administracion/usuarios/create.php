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
    <main>
        <a href="index.php " class="btn">Atrás</a>
        <video id="videoFondo" src="../img/mar.mp4" autoplay muted loop></video>
        <form action="save.php" method ="POST">
            <input type="text" name="rol" placeholder="modificar rol ">
            <input type="text" name="dni" placeholder="modificar dni ">
            <input type="text" name="nombre" placeholder="modificar nombre" >
            <input type="text" name="apellidos" placeholder="modificar apellidos" >
            <input type="text" name="correo" placeholder="modificar correo" >
            <input type="text" name="contrasenia" placeholder="modificar contraseña" >
            <input type="text" name="direccion" placeholder="modificar direccion" >
            <button class="btn" type="submit">Enviar</button> 
        </form>
    </main>
</body>
</html>