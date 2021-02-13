<?php
session_start();
include("config.php");
$uid=$_REQUEST['uid'];
$name=$_POST['uname'];
$phone=$_POST['phone'];

$q="update tbl_user set name='$name',phone='$phone' where uid='$uid'";
mysqli_query($con,$q);
?>

<script>
alert("Profile Updated Successfully");
window.location="editprofile.php";
</script>