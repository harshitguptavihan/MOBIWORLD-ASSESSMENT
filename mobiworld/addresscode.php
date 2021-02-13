<?php
include("config.php");
session_start();
$email=$_SESSION['email'];

$q="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$q);
if($row=Mysqli_fetch_array($res))
	$uid=$row['uid'];
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $pin=$_POST['pincode'];
 $street=$_POST['street'];
 $land=$_POST['landmark'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $payment=$_POST['paymethod'];
 $card=$_POST['card'];
 $expdate=$_POST['expdate'];
 $c1=$_POST['c1'];
 $c2=$_POST['c2'];
 $c3=$_POST['c3'];
 if($c1+$c2==$c3)
 {
  
$q2="insert into tbl_address (uid,name,phone,pincode,street,landmark,city,state,paymethod,cardno,expdate) values('$uid','$name','$phone','$pin','$street','$land','$city','$state','$payment','$card','$expdate')";

mysqli_query($con,$q2);
if($_SESSION['proid'])
{
	header("location:buyorder.php");
}
else
{
 header("location:order.php");
}
 }
 
 else
 {
?>

<script>
alert("Entered Wrong Value. Please Try Again");
window.location="address.php";
</script>
 
 <?php
 }
 ?>