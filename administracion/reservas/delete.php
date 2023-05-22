<?php
echo 'Hemos recogido el valor del id: '. $_GET['id'];
$id = $_GET['id'];
require_once('../Database/Database.php');
Database::deleteReservas($id);
header('Location: index.php');
?>