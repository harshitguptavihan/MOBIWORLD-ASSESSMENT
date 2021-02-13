<?php 
include('config.php');
$cid=$_GET['cid'];
$sql = "select qty from tbl_cart where cid='$cid'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
	$qty=$row['qty'];
	$qty++;
	$sql1="update tbl_cart set qty='$qty' where cid='$cid' ";
	$res=mysqli_query($con,$sql1);
	header("Location:cart.php");
}


?>