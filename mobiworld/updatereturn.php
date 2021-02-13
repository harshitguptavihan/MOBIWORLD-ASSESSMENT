<?php
session_start();
include("config.php");
$rid=$_REQUEST['id'];
$email=$_SESSION['email'];
$sts=$_POST['status'];
$q="update tbl_return set status='$sts' where rid='$rid'";
mysqli_query($con,$q);
if($sts=='Order Returned')
{
	$q1="update tbl_return set dor=curdate() where rid='$rid'";
	mysqli_query($con,$q1);
  
}



 $qh="select * from tbl_return where rid='$rid'";
$re=mysqli_query($con,$qh);
if($row=mysqli_fetch_array($re))
{ 
$oid=$row['oid'];
$uid=$row['uid'];
$sts=$row['status'];
}
$qh2="select * from tbl_order where oid='$oid'";
$resh1=mysqli_query($con,$qh2);
if($row1=mysqli_fetch_array($resh1))
   {       		
				$qty=$row1['qty'];
				$pid=$row1['pid']; 
				$orid=$row1['proid']; 
   }
$q3="select * from tbl_phone where pid='$pid'";
$resh2=mysqli_query($con,$q3);
if($row2=mysqli_fetch_array($resh2))
				{
					$qt=$row2['qty'];
					$quantity=$qt+$qty;
			     	$q4="update tbl_phone set qty='$quantity' where pid='$pid'";
			        mysqli_query($con,$q4);
                }
$q3="select * from tbl_phone where pid='$pid'";
$res4=mysqli_Query($con,$q3);
if($row4=mysqli_fetch_array($res4))
{
	$pname=$row4['name'];
}
 $q5="select * from tbl_user where uid='$uid'";
	$res5=mysqli_Query($con,$q5);
	if($row5=mysqli_fetch_array($res5))
	{
		$name=$row5['name'];
		$mailto=$row5['email'];
	}
    $mailSub = "Track Your Return";
		$b="<br>";
   $mailMsg ="Dear ".$name." \n your order of ".$pname." with Order ID " .$orid. " has been ".$sts.$b.$b.$b."This is auto generated mail please don't reply us";
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
	     alert("Mail not sent.");
	     window.location="managereturn.php";
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Mail Sent to Customer.");
	     window.location="managereturn.php";
	   </script>
<?php } 