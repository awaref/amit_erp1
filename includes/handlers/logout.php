<?php  
include '../classes/config/Session.php';
session_destroy();
header("Location: ../../index.php");
?>