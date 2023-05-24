<?php
require_once("../administracion/Database/Database.php");
$resultado = Database::getAllUsuarios();

$info = [$_POST['correo'], $_POST['contrasenia']];
userExist($resultado, $info);

function userExist($resultado, $info){
    foreach ($resultado as $fila) {
        if (hash_equals($info[0], $fila[4])) {
            if(hash_equals($info[1], $fila[5])){
                header('Location: index.php?bien="1"');
            } else {
                header('Location: login.php?bien="0"');
            }
        } else{
            header('Location: login.php?bien="0"');
        }
    }
}
?>