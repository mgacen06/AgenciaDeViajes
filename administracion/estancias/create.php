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
        <a href="index.php" class="btn">Atrás</a>
        <video id="videoFondo" src="../img/mar.mp4" autoplay muted loop></video>
        <form action="save.php" method ="POST">
            <input type="text" name ="nombreViaje" placeholder="inserta una nombre">
            <input type="text" name = "imagen" placeholder="inserta una imagen">
            <input type="text" name ="tipoEstancia" placeholder="inserta un tipo">
            <input type="text" name="ubicacion" placeholder="inserta una ubicación">
            <input type="text" name="precioPorNoche" placeholder="inserta un precio/noche">
            <button class="btn" type="submit">Enviar</button> 
        </form>
    </main>
</body>
</html>