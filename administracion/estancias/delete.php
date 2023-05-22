<?php

$id = $_GET['id'];

require_once('../Database/Database.php');

Database::deleteAlojamientos($id);

//4. retornar a index.php para ver cambios
header('Location: index.php');
?>