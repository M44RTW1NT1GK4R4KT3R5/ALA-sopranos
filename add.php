<?php session_start();
 $_SESSION['pizza'] = $_GET['pizza'];
 header('Location: rest.php');
?>