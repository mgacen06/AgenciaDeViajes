<?php

require_once("../Database/Database.php");
$resultado = Database::getAllUsuarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/hogar.ico" type="" id="icono">
    <link rel="stylesheet" href="../style.css">
    <title>Usuarios</title>
</head>
<body>
    <nav>
        <ul>
            <li><a class="menuA" href="../index.php">Administración</a></li>
            <li><a class="menuA"  href="../estancias/index.php">Estancias</a></li>
            <li><a class="menuA" href="../reservas/index.php">Reservas</a></li> 
            <li><a class="menuA" href="index.php">Usuarios</a></li> 
        </ul>
    </nav>
    <main>
    <video id="videoFondo" src="../img/mar.mp4" autoplay muted loop></video>
        <div class="caja">
            <h1><bold>Usuarios</bold></h1>
            <a href="create.php" class="btn"><strong>Crear</strong></a>
        </div>
        <table class="tabla">
            <thead class="cabecera">
                <th>id</th>
                <th>rol</th>
                <th>dni</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Ubicación</th>
                <th>Acciones</th>
                <br>
            </thead>
            </tbody>
            <tbody class="contenido">
                <?php
                foreach ($resultado as $fila) {
                    // opcional con las comillas dobles las diferencio con barra invertida si las quiero usar dentro de un string
                    echo "<tr>";
                    for ($i = 0; $i < 8; $i++) {
                        echo "<td>" . $fila[$i] . "</td>";
                    }
                    echo "<td class=btns> <a class='btn' href='edit.php?id=".$fila['id']."'>Editar</a> <a class='btn' href='delete.php?id=".$fila['id']."'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>