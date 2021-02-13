<?php
include("config.php");
session_start();
error_reporting(0);
$email=$_SESSION['email'];
 $pass=$_SESSION['pass'];
$id=$_REQUEST['id'];

if($id==1)
{
$q="select * from tbl_phone where brand='Xiaomi' and type='Phone'";
$res=mysqli_query($con,$q);
}

if($id==2)
{
$q="select * from tbl_phone where brand='Samsung' and type='Phone'";
$res=mysqli_query($con,$q);
}
if($id==3)
{
$q="select * from tbl_phone where brand='Huawei' and type='Phone'";
$res=mysqli_query($con,$q);
}
if($id==4)
{
$q="select * from tbl_phone where brand='Realme' and type='Phone'";
$res=mysqli_query($con,$q);
}
if($id==5)
{
$q="select * from tbl_phone where brand='Oppo' and type='Phone'";
$res=mysqli_query($con,$q);
}
if($id==6)
{
$q="select * from tbl_phone where brand='Vivo' and type='Phone'"; 
$res=mysqli_query($con,$q);
}
if($id==7)
{
$q="select * from tbl_phone where brand='Apple' and type='Phone'";
$res=mysqli_query($con,$q);
}
if($id==8)
{
$q="select * from tbl_phone where brand='Google' and type='Phone'";
$res=mysqli_query($con,$q);
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
transition:0.1s;
	transform:scale(1.03);
}

.button_example{
border:1px solid #cacaca; -webkit-border-radius: 5px; -moz-border-radius: 5px;border-radius: 5px;font-size:12px; padding: 10px 10px 10px 10px; text-decoration:none;text-align:center; display:inline-block;text-shadow: 0px 0px 0 rgba(0,0,0,0.3);font-weight:bold; color: black;
 background-color: #E6E6E6; background-image: -webkit-gradient(linear, left top, left bottom, from(#E6E6E6), to(#CCCCCC));
 background-image: -webkit-linear-gradient(top, #E6E6E6, #CCCCCC);
 background-image: -moz-linear-gradient(top, #E6E6E6, #CCCCCC);
 background-image: -ms-linear-gradient(top, #E6E6E6, #CCCCCC);
 background-image: -o-linear-gradient(top, #E6E6E6, #CCCCCC);
 background-image: linear-gradient(to bottom, #E6E6E6, #CCCCCC);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#E6E6E6, endColorstr=#CCCCCC);
}

.button_example:hover{
 border:1px solid #b3b3b3;color:black;
 background-color: #cdcdcd; background-image: -webkit-gradient(linear, left top, left bottom, from(#cdcdcd), to(#b3b3b3));
 background-image: -webkit-linear-gradient(top, #cdcdcd, #b3b3b3);
 background-image: -moz-linear-gradient(top, #cdcdcd, #b3b3b3);
 background-image: -ms-linear-gradient(top, #cdcdcd, #b3b3b3);
 background-image: -o-linear-gradient(top, #cdcdcd, #b3b3b3);
 background-image: linear-gradient(to bottom, #cdcdcd, #b3b3b3);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#cdcdcd, endColorstr=#b3b3b3);
}

.button_example1{
border:1px solid #8d518c; -webkit-border-radius: 5px; -moz-border-radius: 5px;border-radius: 5px;font-size:12px; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: 0px 0px 0 rgba(0,0,0,0.3);font-weight:bold; color: black;text-align:center;width:107px;
 background-color: #AA6CA9; background-image: -webkit-gradient(linear, left top, left bottom, from(#AA6CA9), to(#7E4596));
 background-image: -webkit-linear-gradient(top, #AA6CA9, #7E4596);
 background-image: -moz-linear-gradient(top, #AA6CA9, #7E4596);
 background-image: -ms-linear-gradient(top, #AA6CA9, #7E4596);
 background-image: -o-linear-gradient(top, #AA6CA9, #7E4596);
 background-image: linear-gradient(to bottom, #AA6CA9, #7E4596);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#AA6CA9, endColorstr=#7E4596);
}

.button_example1:hover{
 border:1px solid #70406f;color: black;
 background-color: #90538f; background-image: -webkit-gradient(linear, left top, left bottom, from(#90538f), to(#613573));
 background-image: -webkit-linear-gradient(top, #90538f, #613573);
 background-image: -moz-linear-gradient(top, #90538f, #613573);
 background-image: -ms-linear-gradient(top, #90538f, #613573);
 background-image: -o-linear-gradient(top, #90538f, #613573);
 background-image: linear-gradient(to bottom, #90538f, #613573);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#90538f, endColorstr=#613573);
}
</style>
</head>

<body>  

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
	  
      <li><a href="cart.php" id="one"><span class="glyphicon glyphicon-shopping-cart" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Cart</h5>
	  <?php 
	  $q6="SELECT count(uid) from tbl_cart where uid=(select uid from tbl_user where email='$email')";
	  $res6=mysqli_query($con,$q6);
	  while($row6=mysqli_fetch_array($res6))
	  {
		 $countt=$row6['count(uid)'];
	  }
	  ?>
	  <span style="background-color:#ffffff;font-weight:bold;color:#3a485a;padding-left:5px;padding-right:5px;border-radius:50%"><?php echo $countt; ?></span></a>
	  </li>
	  <li><?php include("head1.php");?></li>
    </ul>		 
    </div>
    
  </div>
</nav>
 <div class="container-fluid" >
 <div class="row">   
         <?php 
			   
			   while($row1=mysqli_fetch_array($res))
			   {
				   ?>				

<div   class=" col-sm-3" style="margin-top:30px">

<div class="row">
<div class="col-xs-12" >


	<a href="phone.php?id=<?php echo $row1['pid']; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px" > </a>
 
  
 <?php if(!$row1['qty'])
 { ?>
<img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px">
 
  <?php
  
 }
 ?>
 
</div>
</div>
<div class="row">

<div class=" col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"><?php echo $row1['price'];?></span>
</div>
</div>
</div>							
			   <?php
		

		}

		
	?> 	
 
   </div> 
 
 

 </div>
 <?php
 include("footer.php");
 ?>
 <script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>

</body>