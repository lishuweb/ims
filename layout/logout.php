<?php 
session_start();
// session_unset($_SESSION['id']);
session_unset();
session_destroy();
header('Location:../home.php');
?>