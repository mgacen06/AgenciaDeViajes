<?php
require_once("../administracion/Database/Database.php");
$resultado = Database::getAllUsuarios();

$info = [$_POST['correo'], $_POST['contrasenia']];

function correoOK($resultado, $info){
    $bien=false;
    foreach ($resultado as $fila) {
        if (hash_equals($info[0], $fila[4])) {
            $bien=true;
            echo "Usuario Coincide: " . $fila[4] . "<br>";

        } else{
            $bien=false;
            echo "Usuario mal: " . $fila[4] . "<br>";

        }
    }
    return $bien;
}

function contraseniaOK($resultado, $info){
    $bien=false;
    foreach ($resultado as $fila) {
        if(password_verify($info[1],$fila[5])){
            $bien=true;
            echo "Contrasenia Coincide: " . $fila[5] . "<br>";
        } else {
            $bien=false;
            echo "Contrasenia mal: " . $fila[5] . "<br>";
        }
    }
    return $bien;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PRACTICA ORDENADORES</title>
</head>

<body>
    <?php
    echo "Hola Enviada: " . $info[0] . "<br>";

    $encuentra =correoOK($resultado, $info);

    echo "Hola Enviada: " . $info[1] . "<br>";
    echo password_hash("1234", PASSWORD_DEFAULT);

    
    $esta =contraseniaOK($resultado, $info);
    
    ?>
</body>

</html>