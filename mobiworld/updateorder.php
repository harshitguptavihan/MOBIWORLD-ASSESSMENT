<?php
session_start();
include("config.php");
$oid=$_REQUEST['id'];
$q2="select * from tbl_order where oid='$oid'";
	$res2=mysqli_Query($con,$q2);
	if($row2=mysqli_fetch_array($res2))
	{
		$proid=$row2['proid'];
		$pid=$row2['pid'];
		
	}
	
	$q3="select * from tbl_phone where pid='$pid'";
	$res3=mysqli_Query($con,$q3);
	if($row3=mysqli_fetch_array($res3))
	{
		$pname=$row3['name'];
		
	}
$status=$_POST['status'];
if($status=='Delivered')
{ 
$q="update tbl_order SET status='$status',dod=curdate() where oid='$oid'"; 
mysqli_Query($con,$q);

}
else
{
	 $q="update tbl_order SET status='$status' where oid='$oid'"; 
     mysqli_Query($con,$q);

}
    $q1="select * from tbl_user where uid=(select uid from tbl_order where oid='$oid')";
	$res=mysqli_Query($con,$q1);
	if($row=mysqli_fetch_array($res))
	{
		$name=$row['name'];
		$mailto=$row['email'];
	}
    $mailSub = "Track your order";//$_POST['mail_sub'];
  /*  $q="select * from tbl_user where email='$mailto'";
	$res=mysqli_query($con,$q);
	if($row=mysqli_fetch_array($res))
		$pass=$row['password']; */
		$b="<br>";
   $mailMsg ="Dear ".$name." your order of ".$pname." with Order ID ".$proid." has been ".$status.$b.$b.$b." This is auto generated mail please don't reply us";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; 
   $mail ->IsHTML(true);
   $mail ->Username = "shdc.bca.1.harshit@gmail.com";
   $mail ->Password = "@2harshitG";
   $mail ->SetFrom("shdc.bca.1.harshit@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   { ?>
       <script>
	     alert("Mail Sent to your Phone");
	     window.location="manageorder.php";
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Mail sent to the customer");
	     window.location="manageorder.php";
	   </script>
<?php } ?>





   
