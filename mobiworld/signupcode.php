<?php
session_start();
error_reporting(0);


include("config.php");
 
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 $email=$_POST['email'];
 
 $qur="select * from tbl_user where email='$email'";
 $re=mysqli_query($con,$qur);
 if(mysqli_fetch_array($re))
 {
	 ?>
	 <script>
		alert("Email already registered");
		window.location="signup.php";
	 </script>
	 <?php
 }
 else
 {
 $phone=$_POST['phone'];
 $_SESSION['name']=$name;
 $_SESSION['pass']=$pass;
 $_SESSION['email']=$email;
 $_SESSION['phone']=$phone;

    $mailto = $email;
    $mailSub = "Your OTP For Verification:";//$_POST['mail_sub'];
  /*  $q="select * from tbl_user where email='$mailto'";
	$res=mysqli_query($con,$q);
	if($row=mysqli_fetch_array($res))
		$pass=$row['password']; */
	
   $mailMsg =rand(1000,10000);
   $_SESSION['otp']=$mailMsg;
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
   {
       echo "";//OTP sending is failed please try later";
   }
   else
   {
	   
       ?><div style="width:100%;background-color:green;"><span style="width:100%">OTP has been Sent on your email</span></div>
  <?php }
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<style>
.button {
	outline: none !important;
	border: none;
	background: transparent;
}

.button:hover {
	cursor: pointer;
}
</style>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="otpcode.php" method="POST">
					<span class="login100-form-title p-b-26">
						OTP Verification
					</span>
<br>
                       
					

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="OTP">
						<span class="focus-input100" data-placeholder="OTP"></span>
					</div>
     
                   

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" class="login100-form-btn button" name="sub" value="Sign Up">
								
							
						</div>
						
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

