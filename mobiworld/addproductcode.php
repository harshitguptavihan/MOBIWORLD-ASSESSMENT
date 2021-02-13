<?php
$con=mysqli_connect("localhost","root","","oms");


$name=$_POST['name'];
//echo $name;
$ser=$_POST['series'];
//echo $ser;
$price=$_POST['price'];
//echo $price;
$cat=$_POST['a'];
//echo $cat;
//die;
$file=$_FILES['file']['name'];
//echo $name,$fname,$pass,$email,$file;
$size=$_FILES['file']['size'];
//echo $size/1024," KB ";
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
$q="insert into tbl_product (proname,price,img,category,series) values ('$name','$price','$file','$cat','$ser')";
mysqli_query($con,$q);
$location="photo/";
move_uploaded_file($tmp_name,$location.$file);
?>