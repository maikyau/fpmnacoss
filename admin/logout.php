<?php
session_start();
include("../connection.php");

unset($_SESSION['user_login']);
header('Location:login.php');
exit();
?>
