<?php
session_start();
include("config.php");

$email=$_SESSION['email'];
$pid=$_SESSION['pid'];
$q="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
	$uid=$row['uid'];
}
$title=$_POST['title'];
$descrip=$_POST['description'];
$q1="insert into tbl_review (pid,uid,title,descrip)VALUES('$pid','$uid','$title','$descrip')";
mysqli_query($con,$q1);
?>
<script>
alert("Thanks for Reviewing");
window.location="corder.php";
</script>