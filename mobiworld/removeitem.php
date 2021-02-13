<?php
$con=mysqli_connect("localhost","root","","oms");
$id=$_REQUEST['id'];
$q="delete from tbl_cart where pid='$id'";
mysqli_query($con,$q);
header("Location:cart.php");

?>