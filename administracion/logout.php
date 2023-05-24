<?php
session_start(); // Inicia la sesión si no está iniciada


session_destroy();

// Redirige al usuario a la página de inicio de sesión o a cualquier otra página que desees
header("Location: login.php");
exit;
?>