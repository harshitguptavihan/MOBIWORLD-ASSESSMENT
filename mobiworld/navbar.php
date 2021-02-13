<?php
session_start();
error_reporting(0);
include("config.php");
 $email=$_SESSION['email'];
 $pass=$_SESSION['pass'];


?>


<style>
#one{
	background-color:transparent;
}
#one:hover {
  background-color: transparent;
 cursor:pointer;
}
.navbar {
  background:rgba(245,255,250,.65);
}

img.logo-navbar {
    width: 19rem !important;
    height: 8rem !important;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

 <body>  

 <nav class="navbar  navbar-opaque " style="z-index:2;border-radius:0px">
  <div class="container" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain" style="background:#dbdbdb">
        
 <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar" style="background-color:black"></span>
         <span class = "icon-bar" style="background-color:black"></span>
         <span class = "icon-bar" style="background-color:black"></span>
    
  </button>
      <a href="index.php" ><img src="photo/logo.png" class="img img-responsive logo-navbar"></a>
    </div>
    <div class="collapse navbar-collapse " id="navMain">
     <ul class="nav navbar-nav navbar-right" style="position:relative;left:50px;top:5px">
	 <li><a href="index.php" id="one"><span class="glyphicon glyphicon-home" style="color:black;
	 "></span> <h5 style="color:black;display:inline-block" > Home</h5></a></li>
	 <li><a href="mobiles.php" id="one"><span class="glyphicon glyphicon-phone" style="color:black"></span> <h5 style="color:black;display:inline-block"> Mobiles</h5></a></li>
	 <li><a href="#" id="one"><span class="glyphicon glyphicon-headphones" style="color:black"></span> <h5 style="color:black;display:inline-block"> Accessories</h5></a></li>
	 
	 <?php
	 if($email==false)				
	 {
	 ?>
      <li><a href="signup.php" id="one"><span class="glyphicon glyphicon-user" style="color:black"></span> <h5 style="color:black;display:inline-block"> Sign Up</h5></a></li>
      <li><a href="login.php" id="one"><span class="glyphicon glyphicon-log-in" style="color:black"></span> <h5 style="color:black;display:inline-block"> Sign In</h5></a></li>
	 <?php
	 }
	 ?>
	  <?php
	  if($email==true)
						 {
	  ?>
	  <li class="dropdown dropdown-toggle" style="position:relative;top:7px"><?php 
				         
                          $qr="select name from tbl_user where email='$email' and password='$pass'";
                          $r=mysqli_query($con,$qr);
                          while($row=mysqli_fetch_array($r))
						  {
						
						 ?> <a href="#" data-toggle="dropdown" id="one">	 
						<span style="color:black;"><?php echo $row['name'];?> &nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true" style="position:relative;bottom:3px" ></i></span></a>
						 
						 <ul class="dropdown-menu" >
  <li><a href="profile.php" style="font-size:13px" ><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Account Settings</a></li>
  <li class="divider"></li>
  <li><a href="logout.php" style="font-size:13px"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Log Out</a></li>
 
  </ul>
						 
						 <?php
							 
						  }

						 
				?></li>
				<?php
						
 }
				?>
	  
      <li><a href="cart.php" id="one"><span class="glyphicon glyphicon-shopping-cart" style="color:black"></span> <h5 style="color:black;display:inline-block"> Cart</h5></a></li>
	  <li><?php include("head1.php");?></li>
    </ul>		 
    </div>
    
  </div>
</nav>
<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>

</body>