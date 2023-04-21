<?php

    require_once("Database.php");
    $resultado=Database::getAllReservas();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>
<body>
<table>
<thead class="cabecera">
        <th>ID</th>
                <th>id</th>
                <th>fechaInicio</th>
                <th>FechaFin</th>
                <th>UsuariosID</th>
                <th>AlojamientosID</th>
        </thead>
        </tbody>
        <tbody class= "contenido">
            <?php 

            foreach ($resultado as $fila){
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
</html>