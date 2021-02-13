<?php
session_start();
include("config.php");
$price=$_GET["price"];
$qty=$_GET["qty"];
$pid=$_GET["pid"];
 echo $q="UPDATE tbl_phone
SET price='$price' , qty='$qty'
WHERE pid='$pid' ";
$r=mysqli_query($con,$q);
header('Location: managephone.php');
?>