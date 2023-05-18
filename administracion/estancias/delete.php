<?php
echo 'Hemos recogido el valor del id: '. $_GET['id'];
// 1. recoger el id de la url-> ver si existe y en tal caso recogerlo
$id_valor = $_GET['id'];

//2. importar la clase Database.php
require_once('../Database/Database.php');
//ejemplo: localhost


//3. invocar metodo delete
Database::delete($id);

//4. retornar a index.php para ver cambios
header('Location: index.php');
?>