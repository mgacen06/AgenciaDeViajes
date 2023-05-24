<?php
require_once("../administracion/Database/Database.php");
$resultado = Database::getAllUsuarios();

$info = [$_POST['correo'], $_POST['contrasenia']];

$resultado = Database::login($info[0], $info[1]);

if($resultado == null){
    header('Location: login.php');
} else{
    if($resultado['rol'] == 1){
        session_start();
        $_SESSION['user'] = $resultado;
        header('Location:../administracion/index.php');
    }else if($resultado['rol'] == 2){
        session_start();
        $_SESSION['user'] = $resultado;
        header('Location: index.php?nombre=' . $resultado['nombre']);
    }else{
        header('Location: login.php');
    }
}


//userExist($resultado, $info);
// function userExist($resultado, $info){
//     foreach ($resultado as $fila) {
//         if (hash_equals($info[0], $fila[4])) {
//             if(hash_equals($info[1], $fila[5])){
//                 header('Location: index.php?bien="1"');
//             } else {
//                 header('Location: login.php?bien="0"');
//             }
//         } else{
//             header('Location: login.php?bien="0"');
//         }
//     }
// }
?>