<?php
session_start();
include("config.php");
$name=$_POST['name'];
$brand=$_POST['brand'];
$series=$_POST['series'];
$color=$_POST['color'];
$price=$_POST['price'];
$category=$_POST['ctgry'];
$type=$_POST['type'];
$qty=$_POST['qty'];
$descr=$_POST['descr'];
$source="photo/phones/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$source);

$q="Insert into tbl_phone (name,brand,series,color,price,category,type,qty,image,descr)VALUES('$name','$brand','$series','$color','$price','$category','$type','$qty','$image','$descr')";
mysqli_query($con,$q);
?>
<script>
alert("Accessory Added Successfully");
window.location="addaccessories.php"
</script>