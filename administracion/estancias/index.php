<?php

    require_once("../Database/Database.php");
    $resultado=Database::getAllAlojamientos();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Alojamientos</title>
</head>
<body>
<table class="tabla">
        <thead class="cabecera">
            <th>id</th>
            <th>NombreViaje</th>
            <th>Imagen</th>
            <th>TipoEstancia</th>
            <th>Ubicación</th>
            <th>Precio</th>
        </thead>
        </tbody>
        <tbody class= "contenido">
            <?php 

            foreach ($resultado as $fila){
                
                for($i = 0; $i< 6 ; $i++){
                    echo "<td>". $fila[$i] . "</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
    </table>
</body>
</tbody>
