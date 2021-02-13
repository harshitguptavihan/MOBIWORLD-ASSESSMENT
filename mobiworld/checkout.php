<?php
//error_reporting(0);
session_start();
include("config.php");
$r=$_POST['check'];
$_SESSION['check']=$r;
header("location:address.php");
?>