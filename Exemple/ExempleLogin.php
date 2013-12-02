<?php
session_start();
$_SESSION['IsLoggedIn'] = '1';
header('Location: Exemple.php');
?>