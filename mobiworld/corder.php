<?php
include("config.php");
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
error_reporting(0);
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$r="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$r);
while($row=mysqli_fetch_array($res))
$uid=$row['uid'];
$query="select * from tbl_order where uid='$uid' order by oid desc ";
$res1=mysqli_query($con,$query);

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type='text/javascript' src="js/afterglow.min.js"></script>
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">


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
div.card {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}
</style>
</head>
 <body >  

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
<div class="container-fluid">
<div class="col-sm-12 text-center" style="margin-top:40px;">
<div class="panel panel-body card" style="border-radius:0px;background-color:#39334a">
<h2 style="color:#fafafa">Your Orders</h2>
</div>
</div>
</div><br><br>
<div class="container-fluid">
<?php
while($row1=mysqli_fetch_array($res1))
{
	$pid=$row1['pid'];
	$oid=$row1['oid'];
	$doo=$row1['doo'];
	$status=$row1['status'];
	$dod=$row1['dod'];
    $crnt=$row1['proid'];
	$qty=$row1['qty'];
$query1="select * from tbl_phone where pid='$pid'" ;
$res2=mysqli_query($con,$query1);
while($row2=mysqli_fetch_array($res2))
{
	
	
	 $pname=$row2['name'];
	 $img=$row2['image'];
     $colr=$row2['color'];
	$brnd=$row2['brand'];
	$price=$row2['price'];
	
}
$q5="select * from tbl_return where oid='$oid'";
$res4=mysqli_query($con,$q5);
if($row4=mysqli_fetch_array($res4))
{
	$sts=$row4['status'];
	$redate=$row4['dor'];
}
else
{
	$sts=0;
}

?>
<div class="col-sm-12" >
  <div class="container card " style="padding:20px;margin-top:20px;background-color:#ffffff">
  
  
  
  
  <div class="col-sm-offset-1 col-sm-1"  style="margin-left:50px;margin-top:15px">
  <img src="photo/phones/<?php echo $img; ?>" class="img img-responsive" style="height:140px;width:70px">
  </div>
  
  <div class="col-sm-offset-2 col-sm-4" style="margin-top:10px">
  <div class="row">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h4"><?php echo $pname;?></span> <span class="h4" style="font-weight:bold"><?php echo $colr;?></span></div></div>
  <div class="row" >
  <div class=" col-sm-12" > 
  <span style="font-size:10px;font-weight:bold;">By:</span> <span style="font-size:10px;font-weight:bold;color:blue"><?php echo $brnd; ?></span>
  </div>
  </div><br>
    <div class="row">
  <div class=" col-sm-12" > 
  <span style="font-weight:bold;">Order ID:</span> <span><?php echo $crnt; ?></span>
  </div>
  </div>
  
  <div class="row" >
  <div class=" col-sm-12" > 
  <span style="font-weight:bold;">Quantity:</span> <span><?php echo $qty; ?></span>
  </div>
  </div>
  <br>
  <div class="row" >
  <div class=" col-sm-12" > 
  <span style="font-weight:bold;font-size:1.4em;color:#b73918" class="fa fa-inr "> <?php echo $price*$qty; ?></span>
  </div>
  </div>
  </div>
  <div class="col-sm-offset-1 col-sm-3" style="margin-top:px">
  <br>
  <div class="row">
  <div class=" col-sm-12" > 
  <span style="font-weight:bold;">Date of Order:</span> <span><?php echo $doo; ?></span>
  </div>
  </div>
  <br>
  <div class="row">
  <div class=" col-sm-12" > 
  <?php
     if($sts)
     { ?><span style="font-weight:bold;">Status:</span> <span style="color:maroon"><?php echo $sts; 
	
	 ?></span>
	 <?php }
    else 
     {
		 ?>
  <span style="font-weight:bold;">Status:</span> <span style="color:green"><?php echo $status; ?></span> <?php } ?>
  </div>
  </div>
  <br>
  <div class="row">
  <div class=" col-sm-12" > 
  <?php
  if($redate)
  {
  ?>
  <span style="font-weight:bold;">Date Of Return:</span> <span><?php echo $redate; ?></span>
  <?php
  }
  else
  {
  ?>
  <span style="font-weight:bold;">Date Of Delivery:</span> <span><?php echo $dod; ?></span>
  <?php
  }
  ?>
  </div>
  </div>
  <br>
  <div class="row">
  <div class=" col-sm-12" > 
  <a href="forder.php?id=<?php echo $row1['oid']; ?>" style="color:#7e4596;text-decoration:none">View Full Details <span class="fa fa-chevron-right"></span></a> 
  </div>
  </div>
  </div>
 
  </div>
   <br>
  <hr>
  </div>
 
 
  
  <?php
  }
  ?>
  </div>
  
  <?php
include("footer.php");
?>
<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>


</body>

