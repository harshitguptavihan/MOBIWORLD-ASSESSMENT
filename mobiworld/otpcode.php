<?php

 session_start();
 include("config.php");
 $otp=$_POST['OTP'];
 if($_SESSION['otp']==$otp)
 {
   $name= $_SESSION['name'];
   $pass=$_SESSION['pass'];
   $email=$_SESSION['email'];
   $phone=$_SESSION['phone'];
   $q="insert into tbl_user (name,password,email,phone) values ('$name','$pass','$email','$phone')";
   mysqli_query($con,$q);
   unset($_SESSION['name']);
   unset($_SESSION['pass']);
   unset($_SESSION['email']);
   unset($_SESSION['phone']);
  
   ?>
   <script>
	     alert("Registered Successfully");
	     window.location="login.php";
	   </script>
   <?php
 }
 else
 {
	 ?>
       <script>
	     alert("OTP didn't match.Please fill Up Your details Again.");
	     window.location="signup.php";
	   </script>
       <?php 
	
 }
?>
