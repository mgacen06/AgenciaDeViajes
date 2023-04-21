<?php

    //PARA DECIRLE IMPORTAR DATABASE:
    require('Database.php');

    $database = new Database();
    // $resultado = $database -> getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alojamientos</title>
</head>
<body>
<table class="tabla">
        <thead class="cabecera">
        <th>ID</th>
                <th>id</th>
                <th>NoombreViaje</th>
                <th>Imagen</th>
                <th>tipoEstancia</th>
                <th>Ubicación</th>
                <th>Precio</th>
        </thead>
        </tbody>
        <tbody class= "contenido">
            <?php 
            $tabla = $database-> getAllEstancias();

            foreach ($tabla as $fila){
                // opcional con las comillas dobles las diferencio con barra invertida si las quiero usar dentro de un string
                echo "<tr>";
                for($i = 0; $i< 5 ; $i++){
                    echo "<td>". $fila[$i] . "</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
    </table>
</body>
</tbody>
