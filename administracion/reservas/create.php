
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
        <video id="videoFondo" src="../img/mar.mp4" autoplay muted loop></video>
        <a href="index.php" class="btn">Atrás</a>
        <form action="save.php" method ="POST">
            <input type="text" name="fechaInicio" placeholder="modificar fecha inicio">
            <input type="text" name="fechaFin" placeholder="modificar fecha fin " >
            <input type="text" name="usuarios_id" placeholder="modificar aloj. id" >
            <input type="text" name="alojamientos_id" placeholder="modificar us. id" >
            <button class="btn" type="submit">Enviar</button> 
        </form>
    </main>
</body>
</html>