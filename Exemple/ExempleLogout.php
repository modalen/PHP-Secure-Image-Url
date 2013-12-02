<?php
session_start();
$_SESSION['IsLoggedIn'] = '0';
header('Location: Exemple.php');
?>