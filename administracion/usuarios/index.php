<?php

    require_once("../Database/Database.php");
    $resultado=Database::getAllUsuarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/administracion/style.css">
    <title>Usuarios</title>
</head>
<body>
<thead class="cabecera">
            <th>ID</th><
            <th>DNI</th>
            <th>nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Ubicación</th>
            <br>
        </thead>
        </tbody>
        <tbody class= "contenido">
            <?php 

            foreach ($resultado as $fila){
                // opcional con las comillas dobles las diferencio con barra invertida si las quiero usar dentro de un string
                echo "<tr>";
                for($i = 0; $i< 7 ; $i++){
                    echo "<td>". $fila[$i] . "</td>";
                }
                echo "</tr><br>";
            }
            ?>
            </tbody>
    </table>
</body>
</html>