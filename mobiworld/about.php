<?php
session_start();
error_reporting(0);
include("config.php");

 $email=$_SESSION['email'];
 $pass=$_SESSION['pass'];
$q="select * from tbl_website";
$res=mysqli_query($con,$q);
$row1=mysqli_fetch_array($res);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type='text/javascript' src="js/afterglow.min.js"></script>
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

<head>
<style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

body {
    font-family: 'Poppins', sans-serif;
    
}
#one{
	background-color:transparent;
}
#one:hover {
  background-color: transparent;
 cursor:pointer;
}


img.logo-navbar {
    width: 19rem !important;
    height: 8rem !important;
}

.p1{
transition:0.1s;
}

.p1:hover{
transition:0.7s;
	transform:scale(1.03);
}

.p2{
transition:1s;
}

.p2:hover{
	transition:0.3s;
	transform:scale(1.01);
	box-shadow:2px 2px 4px gray;
}
</style>
</head>
 <body style="background-color:#f1f3f4">  

 <nav class="navbar  " style="border-radius:0px;background-color:#3a485a;z-index:2">
  <div class="container" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain" style="background:#dbdbdb">
        
 <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar" style="background-color:black"></span>
         <span class = "icon-bar" style="background-color:black"></span>
         <span class = "icon-bar" style="background-color:black"></span>
    
  </button>
      <a href="index.php" ><img src="photo/logo1.png" class="img img-responsive logo-navbar"></a>
    </div>
    <div class="collapse navbar-collapse " id="navMain">
     <ul class="nav navbar-nav navbar-right" style="position:relative;left:50px;top:5px">
	 <li><a href="index.php" id="one"  ><span class="glyphicon glyphicon-home" style="color:#ffffff;
	 "></span> <h5 style="color:#ffffff;display:inline-block" > Home</h5></a></li>
	 <li><a href="mobiles.php" id="one"><span class="glyphicon glyphicon-phone" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Mobiles</h5></a></li>
	 <li><a href="accessories.php" id="one"><span class="glyphicon glyphicon-headphones" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Accessories</h5></a></li>
	 
	 <?php
	 if($email==false)				
	 {
	 ?>
	
      
      <li><a href="login.php" id="one"><span class="glyphicon glyphicon-log-in" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Sign In</h5></a></li>
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
						<span style="color:#ffffff;"><?php echo $row['name'];?> &nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true" style="position:relative;bottom:3px" ></i></span></a>
						 
						 <ul class="dropdown-menu" >
  <li><a href="profile.php" style="font-size:13px" ><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Account Settings</a></li>
    <li class="divider"></li>
  <li><a href="corder.php" style="font-size:13px" ><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;&nbsp;Orders</a></li>
  <li class="divider"></li>
  <li><a href="logout.php" style="font-size:13px"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Log Out</a></li>
 
  </ul>
						 
						 <?php
							 
						  }

						 
				?></li>
				<?php
						
 }
				?>
	  
      <li><a href="cart.php" id="one"><span class="glyphicon glyphicon-shopping-cart" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Cart</h5><?php 
	  $q6="SELECT count(uid) from tbl_cart where uid=(select uid from tbl_user where email='$email')";
	  $res6=mysqli_query($con,$q6);
	  while($row6=mysqli_fetch_array($res6))
	  {
		 $countt=$row6['count(uid)'];
	  }
	  ?>
	  <span style="background-color:#ffffff;font-weight:bold;color:#3a485a;padding-left:5px;padding-right:5px;border-radius:50%"><?php echo $countt; ?></span></a></li>
	  <li><?php include("head1.php");?></li>
    </ul>		 
    </div>
    
  </div>
</nav>

<div class="container-fluid">
<div class="row" style="margin-top:45px">
<div class="col-sm-12 text-center">
<span style="font-size:3em">Our Team</span>
</div>
</div><br><br>
<div class="container">
<div class="row" style="margin-right:45px">
<div class="col-sm-offset-1 col-sm-3 text-center">
<img src="photo/HAMZA.png" class="img img-responsive card" style="border:1px solid black"><br>
<h4>Hamza Khan</h4>
<h5 style="font-style:italic">(DEVELOPER)</h5>
<div class="row">
<div class="col-sm-12">
<span><a href="https://www.facebook.com/h.khan121" class="fa fa-facebook-official fa-2x" target="_blank" style="text-decoration:none;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="https://www.instagram.com/hamza_khan1811" target="_blank" class="fa fa-instagram fa-2x" style="text-decoration:none;color:hotpink"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="https://www.twitter.com/hamzakh06301741" class="fa fa-twitter fa-2x" target="_blank" style="text-decoration:none;color:darkskyblue"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" class="fa fa-google-plus fa-2x" target="_blank" style="text-decoration:none;color:red"></a></span>
</div>
</div>
</div>
<div class="col-sm-offset-1 col-sm-3 text-center">
<img src="photo/FAIZ.jpg" class="img img-responsive card" style="border:1px solid black"><br>
<h4>Mohd Faiz</h4>
<h5 style="font-style:italic">(UI Designer)</h5><div class="row">
<div class="col-sm-12">
<span><a href="https://www.facebook.com/m.faiz1.O" target="_blank" class="fa fa-facebook-official fa-2x" style="text-decoration:none;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="https://www.instagram.com/faiz_1.0" target="_blank" class="fa fa-instagram fa-2x" style="text-decoration:none;color:hotpink"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="https://www.twitter.com/FaizAns799" target="_blank" class="fa fa-twitter fa-2x" style="text-decoration:none;color:darkskyblue"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="https://plus.google.com/u/0/113985770664361591012" target="_blank" class="fa fa-google-plus fa-2x" style="text-decoration:none;color:red"></a></span>
</div>
</div>
</div>
<div class="col-sm-offset-1 col-sm-3 text-center">
<img src="photo/HARSHIT.png" class="img img-responsive card" style="border:1px solid black"><br>
<h4>Harshit Gupta</h4>
<h5 style="font-style:italic">(DEVELOPER)</h5>
<div class="row">
<div class="col-sm-12">
<span><a href="#" class="fa fa-facebook-official fa-2x" style="text-decoration:none;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" class="fa fa-instagram fa-2x" style="text-decoration:none;color:hotpink"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" class="fa fa-twitter fa-2x" style="text-decoration:none;color:darkskyblue"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><a href="#" class="fa fa-google-plus fa-2x" style="text-decoration:none;color:red"></a></span>
</div>
</div>
</div>
</div>
</div>
</div><br>

<?php include("footer.php"); ?>

<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>

</body>