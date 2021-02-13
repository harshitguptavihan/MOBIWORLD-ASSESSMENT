<?php
include('config.php');
session_start();
$email=$_SESSION['email'];
 $acno=$_POST['acno'];
$reason=$_POST['reason'];
 $oreason=$_POST['oreason'];
$pimg=$_FILES['pimg'];
$pimgn=$pimg['name'];
$oid=$_SESSION['orderid'];
$q="select * from tbl_order where oid='$oid'";


$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
  $oid=$row['oid'];
  $pid=$row['pid'];
  $uid=$row['uid'];
  $aid=$row['address'];
  $uid=$row['uid'];
  $orid=$row['proid'];
}
move_uploaded_file($pimg['tmp_name'],"photo/passbook/$pimgn");

if($oreason) {
	$querry =  "INSERT INTO `tbl_return` ( `oid`, `pid`, `uid`, `reason`, `acno`, `pimg`,aid,status) VALUES 
('$oid', '$pid', '$uid', '$oreason', '$acno', '$pimgn','$aid','Return Requested')";
$result=mysqli_query($con,$querry);
$q3="select * from tbl_phone where pid='$pid'";
$res4=mysqli_Query($con,$q3);
if($row4=mysqli_fetch_array($res4))
{
	$pname=$row4['name'];
}
$q5="select * from tbl_user where email='$email'";
	$res5=mysqli_Query($con,$q5);
	if($row5=mysqli_fetch_array($res5))
	{
		$name=$row5['name'];
		$mailto=$row5['email'];
	}
    $mailSub = "Track Your Return";
		$b="<br>";
   $mailMsg ="Dear ".$name." \n your order of ".$pname." with Order ID " .$orid. " has been Requested For Return.".$b.$b.$b."This is auto generated mail please don't reply us";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "shopmobiworld@gmail.com";
   $mail ->Password = "mobiworld123";
   $mail ->SetFrom("shopmobiworld@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   { ?>
       <script>
	     alert("Return Requested Successfully.");
	     
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Return Requested Successfully.");
	     
	   </script>
<?php } 
header("location:forder.php?id=$oid");
}
else
{
	 $querry =  "INSERT INTO `tbl_return` ( `oid`, `pid`, `uid`, `reason`, `acno`, `pimg`,aid,status) VALUES (
	'$oid', '$pid', '$uid', '$reason', '$acno', '$pimgn','$aid','Return Requested')"; 
$result=mysqli_query($con,$querry);
$q3="select * from tbl_phone where pid='$pid'";
$res4=mysqli_Query($con,$q3);
if($row4=mysqli_fetch_array($res4))
{
	$pname=$row4['name'];
}
$q5="select * from tbl_user where email='$email'";
	$res5=mysqli_Query($con,$q5);
	if($row5=mysqli_fetch_array($res5))
	{
		$name=$row5['name'];
		$mailto=$row5['email'];
	}
    $mailSub = "Track Your Return";
		$b="<br>";
   $mailMsg ="Dear ".$name." \n your order of ".$pname." with Order ID " .$orid. " has been Requested For Return.".$b.$b.$b."This is auto generated mail please don't reply us";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "shopmobiworld@gmail.com";
   $mail ->Password = "mobiworld123";
   $mail ->SetFrom("shopmobiworld@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   { ?>
       <script>
	     alert("Return Requested Successfully.");
	     
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Return Requested Successfully.");
	     
	   </script>
<?php } 
header("location:forder.php?id=$oid");
} 

?>