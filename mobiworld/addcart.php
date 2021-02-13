<?php
session_start();
$con=mysqli_connect("LOCALHOST","root","","oms");
echo $id=$_REQUEST['id'];
$email=$_SESSION['email'];
$r="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$r);
 while($row=mysqli_fetch_array($res))
   echo $uid=$row['uid'];
$q1="insert into tbl_cart (uid,pid,qty) values('$uid','$id','1')";
mysqli_query($con,$q1);
header("location:cart.php"); 


?>