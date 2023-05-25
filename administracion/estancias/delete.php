<?php
$id = $_GET['id'];
require_once('../Database/Database.php');
Database::deleteAlojamientos($id);
header('Location: index.php');
?>