<?php
session_start();
$con=mysqli_connect("LOCALHOST","root","","oms");
$id=$_REQUEST['id'];
$_SESSION['proid']=$id;
header("location:address.php");

?>