<?php
session_start();
$con=mysqli_connect("localhost","root","","oms");

$ram=$_POST['ram']; 
$rom=$_POST['rom']; 
$ss=$_POST['screensize']; 
$battery=$_POST['battery']; 
$camera=$_POST['camera']; 
$processor=$_POST['processor']; 
$descr=$_POST['descr']; 
  
$name=$_SESSION['name'];

$brand=$_SESSION['brand'];
$series=$_SESSION['series'];
$color=$_SESSION['color'];
$category=$_SESSION['category'];
$type=$_SESSION['type'];
$price=$_SESSION['price'];
$qty=$_SESSION['qty'];
$image=$_SESSION['image'];

$q="insert into tbl_phone (name,brand,series,color,price,category,type,qty,image,ram,rom,ss,battery,camera,processor,descr)values('$name','$brand','$series','$color','$price','$category','$type','$qty','$image','$ram','$rom','$ss','$battery','$camera','$processor','$descr')";
mysqli_query($con,$q);

?>
<script>
alert("Phone Added Successfully");
window.location="addphone.php"
</script>
