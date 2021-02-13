<?php
session_start();
include("config.php");
    $mailto = $_POST['mail_to'];
	$qur="select * from tbl_user where email='$mailto'";
 $re=mysqli_query($con,$qur);
 if(!mysqli_fetch_array($re))
 {
	 ?>
	 <script>
		alert("Email isn't registered");
		window.location="forgot.php";
	 </script>
	 <?php
 }
 else
 {
    $mailSub = "Forget Password";//$_POST['mail_sub'];
    $q="select * from tbl_user where email='$mailto'";
	$res=mysqli_query($con,$q);
	if($row=mysqli_fetch_array($res))
		$pass=$row['password'];
	$b='<br>';
	$mailMsg ="Your password is ".$pass.$b.$b.$b."This is auto generated mail please don't reply us";
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
	     alert("Mail Not Sent");
	     window.location="forgot.php";
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Password has been sent on your Email");
	     window.location="login.php";
	   </script>
<?php 
}
}

 ?>





   