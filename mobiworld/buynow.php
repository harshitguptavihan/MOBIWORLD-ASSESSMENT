<?php
include("config.php");
$id=$_REQUEST['id'];
session_start();

$email=$_SESSION['email'];

$r="select uid from tbl_user where email='$email'";
			   $res=mysqli_query($con,$r);
			   while($row=mysqli_fetch_array($res))
			   $uid=$row['uid'];
 
$q="" 
 
 
 

?>