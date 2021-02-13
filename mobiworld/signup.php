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
<script>

function validate()
	{
		 var name=document.getElementById("name").value;
		
		 if(!isNaN(name))
		 {
			 alert("Name must be in a character");
			 return false;
		 }	
		 var num=document.getElementById("phone").value;	
         if(isNaN(num))
		 {
			 alert("Phone Number must be numeric");
			 return false;
		 }	
		 var pno= /^(\+[\d]{1,5}|0)?[7-9]\d{9}$/;
		if(!pno.test(num))
			{  
				alert("Incorrect Format. Valid Format Is +919628XXXXXX");
				return false;
			}       
	   if(!(num.length==13))
		 {
			 alert("Please insert valid Mobile number..!!");
			 return false;
		 }	
		 var email=document.getElementById("email").value;	
		 var pn=/^[a-zA-Z0-9._]+@[a-zA-Z.]+.[a-zA-Z]{2,6}$/;
		 var email=document.getElementById("email").value;
		if(!pn.test(email))
			{  
				alert("Incorrect email Format");
				return false;
			}
		var pass=document.getElementById("pass").value;
	  //linient matching
   
	  if(!(pass.match(/[a-z]/)))
	    {  
				alert("Password should contain alphabet, number and special character");
				return false;
			}
	  if(!(pass.match(/[0-9]/)))
	    {  
				alert("Password should contain alphabet, number and special character");
				return false;
			}
	  if(!(pass.match(/[!@#$%&*.?]/)))
	    {  
				alert("Password should contain alphabet, number and special character");
				return false;
			}
	  if(pass.length==0||pass.length<8)
	    {  
				alert("Password should contain minimum 8 characters");
				return false;
			}
	
	}




</script>
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
				<form class="login100-form validate-form" action="signupcode.php" method="POST"  onsubmit="return validate()" >
					<span class="login100-form-title p-b-26">
						Sign Up
					</span>

                       
					
<br>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" id="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
     
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="tel" name="phone" id="phone" >
						<span class="focus-input100" data-placeholder="Phone "></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
<br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" class="login100-form-btn button" name="sub" value="Sign Up" onsubmit>
								
							
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