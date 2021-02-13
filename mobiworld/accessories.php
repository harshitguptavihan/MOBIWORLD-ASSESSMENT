<?php
include("config.php");
error_reporting(0);
session_start();
$email=$_SESSION['email'];
 $pass=$_SESSION['pass'];


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
.ellipsis {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 100px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 40px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}


</style>
</head>
 <body style="background-color:#ffffff;">  

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
<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Bluetooth Devices</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Bluetooth Devices"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Bluetooth Devices' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>


</div>

<?php	
$count++;
}
?>
</div>
<br>
<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Charger and USB Cables</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Chargers and USB Cables"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Chargers and USB Cables' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
<?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>


</div>

<?php	
$count++;
}
?>
</div>
<br>
<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Earphones</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Earphones"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Earphones' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
<?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?>  
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>

</div>

<?php	
$count++;
}
?>
</div>
<br>
<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Headphones</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Headphones"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Headphones' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>

</div>

<?php	
$count++;
}
?>
</div>
<br>

<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Powerbanks</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Powerbanks"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Powerbanks' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>

</div>

<?php	
$count++;
}
?>
</div>
<br>
<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Fitness Devices</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Fitness Devices"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Fitness Devices' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
<?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?>  
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>

</div>

<?php	
$count++;
}
?>
</div>
<br>

<div class="col-sm-12" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-5" >
<h2 style="font-weight:bold;font-size:2.5em">Phone Covers</h2>
</div> 
<div class="col-sm-offset-5 col-sm-2" >
  <a href="viewallac.php?id=Phone Covers"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<div class="row">
<?php
$q="select * from tbl_phone where category='Phone Covers' and type='Accessory'";
$res=mysqli_query($con,$q);
$count=1;
while($row1=mysqli_fetch_array($res))
{
	$name=$row1['name'];
	$img=$row1['image'];
    $price=$row1['price'];
    $pid=$row1['pid'];
	if($count==5)
	{
		break;
	}	
?>	

<div class="col-sm-3" style="margin-top:40px">
<div class="row">
<div class="col-xs-12" >

<a href="vaccessory.php?id=<?php echo $pid; ?>"><img src="photo\phones\<?php echo $row1['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row1['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold" class="ellipsis"><?php echo $row1['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row1['price'];?></span>
</div>

</div>

</div>

<?php	
$count++;
}
?>
</div>
<br>


</div>

<?php
include("footer.php");
?>


<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>
</body>