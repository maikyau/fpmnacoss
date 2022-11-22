<?php
include("../connection.php");
mysqli_query($con,"UPDATE `notification` SET `status`='hide' WHERE `id` ='".$_GET['id']."'");
header("Location: notification.php");
?>