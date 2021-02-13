<?php
session_start();
include("config.php");
$pid=$_REQUEST['pid'];
$q="delete from tbl_phone WHERE pid='$pid'";
mysqli_query($con,$q);


?>

<script>
alert("Deleted Successfully");
window.location="manageaccessories.php"
</script>