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
    <link rel="stylesheet" href="../style.css">
    <title>Usuarios</title>
</head>
<body>
    <a href="edit.php">Crear</a>
    <table class="tabla">
        <thead class="cabecera">
            <th>id</th>
            <th>dni</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Ubicación</th>
            <br>
        </thead>
        </tbody>
        <tbody class="contenido">
            <?php
            foreach ($resultado as $fila) {
                // opcional con las comillas dobles las diferencio con barra invertida si las quiero usar dentro de un string
                echo "<tr>";
                for ($i = 0; $i < 7; $i++) {
                    echo "<td>" . $fila[$i] . "</td>";
                }
                echo "<td class=btns> <a class='btn' href='edit.php?id=".$fila['id']."'>Editar</a> <a class='btn' href='delete.php?id=".$fila['id']."'>Eliminar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>