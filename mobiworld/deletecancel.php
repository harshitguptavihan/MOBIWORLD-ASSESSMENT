<?php
session_start();
include("config.php");
$caid=$_REQUEST['cid'];

$q="delete from tbl_cancel where caid='$caid'";
mysqli_query($con,$q);

?>
<script>
alert("Deleted Successfully");
window.location="cancelledorder.php";
</script>