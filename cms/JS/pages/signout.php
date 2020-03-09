<?php
session_start();
//$role=$_SESSION['role'];

session_destroy();
header("Location: ../index.php");
exit();
?>