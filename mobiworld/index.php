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
   
<div id="my" class="carousel slide" data-ride="carousel" data-interval="6000" style="margin-top:-20px" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#my" style="background-color:black" data-slide-to="0" class="active"></li>
    <li data-target="#my" style="background-color:black" data-slide-to="1" ></li>
    <li data-target="#my" style="background-color:black" data-slide-to="2" ></li>
    <li data-target="#my" style="background-color:black" data-slide-to="3" ></li>
    <li data-target="#my" style="background-color:black" data-slide-to="4" ></li>
    
  </ol>

  <!-- indicators End -->
  
  
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="photo/phones/<?php echo $row1['image1'];?>">
	  
    </div>

    <div class="item">
      <img src="photo/phones/<?php echo $row1['image2'];?>" >
	  
    </div>

    <div class="item">
      <img src="photo/phones/<?php echo $row1['image3'];?>" >
	  
    </div>
	
	<div class="item">
      <img src="photo/phones/<?php echo $row1['image4'];?>" >
	 
    </div>
	
	<div class="item">
      <img src="photo/phones/<?php echo $row1['image5'];?>" >
	  
    </div>
	
	
  </div>

  <!-- Slides or photo End HEre -->
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#my" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left "></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#my" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" ></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- controls end -->
</div>

<div class="container-fluid text-center">
<div class="row" style="margin-top:50px">
<div class="col-sm-12 text-center">
<span style="font-size:3em">Shop By Brand</span>
</div>
</div>
<div class="row" style="margin-top:30px">
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=1"><img src="photo/xiaomi.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=2"><img src="photo/samsung.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=3"><img src="photo/huawei.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=4"><img src="photo/realme.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=5"><img src="photo/oppo.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=6"><img src="photo/vivo.jpg" class="img img-responsive p1"></a>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-offset-4 col-sm-2 text-center">
<a href="brandphone.php?id=7"><img src="photo/iphone.jpg" class="img img-responsive p1"></a>
</div>
<div class="col-sm-2 text-center">
<a href="brandphone.php?id=8"><img src="photo/pixel.png" class="img img-responsive p1"></a>
</div>
</div>
</div><br>
<div class="container" style="padding:1px;background-color:gray;margin-top:40px">
</div>

<div class="container-fluid">
<div class="row" style="margin-top:50px">
<div class="col-sm-12 text-center">
<span style="font-size:3em">Hot Accessories</span>
</div>
</div>
<div class="container" style="margin-top:40px;width:97%">
<div class="row">
<a href="viewallac.php?id=Bluetooth Devices"><div class="col-sm-3 text-center" >
<img src="photo/phones/<?php echo $row1['bigimg'];?>" class="img img-responsive p2" style="height:645px;width:296px">
</div></a>
<div class="col-sm-9" style="position:relative;right:30px">
<div class="row">
<a href="viewallac.php?id=Chargers and USB Cables"><div class="col-sm-offset-1 col-sm-3 text-center " >
<div class="panel panel-body p2 " style="width:240px;border-radius:0px">
<div class="row">
<div class="col-sm-12 text-center">
<img src="photo/phones/<?php echo $row1['accimg1'];?>" class=" img img-responsive" style="height:200px;width:200px">
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#616161"><?php echo $row1['head1'];?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#7e4596"><span class="fa fa-inr"></span> <?php echo $row1['price1'];?></h5>
</div>
</div>
</div>
</div></a>
<a href="viewallac.php?id=Powerbanks"><div class="col-sm-offset-1 col-sm-3 text-center " >
<div class="panel panel-body p2" style="width:240px;border-radius:0px">
<div class="row">
<div class="col-sm-12 text-center">
<img src="photo/phones/<?php echo $row1['accimg2'];?>" class=" img img-responsive" style="height:200px;width:200px">
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#616161"><?php echo $row1['head2'];?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#7e4596"><span class="fa fa-inr"></span> <?php echo $row1['price2'];?></h5>
</div>
</div>
</div>
</div></a>
<a href="viewallac.php?id=Bluetooth Devices"><div class="col-sm-offset-1 col-sm-3 text-center" >
<div class="panel panel-body p2" style="width:240px;border-radius:0px">
<div class="row">
<div class="col-sm-12 text-center">
<img src="photo/phones/<?php echo $row1['accimg3'];?>" class=" img img-responsive" style="height:200px;width:200px">
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#616161"><?php echo $row1['head3'];?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#7e4596"><span class="fa fa-inr"></span> <?php echo $row1['price3'];?></h5>
</div>
</div>
</div>
</div></a>
</div>
<br>
<div class="row">
<a href="viewallac.php?id=Earphones"><div class="col-sm-offset-1 col-sm-3 text-center " >
<div class="panel panel-body p2" style="width:240px;border-radius:0px">
<div class="row">
<div class="col-sm-12 text-center">
<img src="photo/phones/<?php echo $row1['accimg4'];?>" class=" img img-responsive" style="height:200px;width:200px">
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#616161"><?php echo $row1['head4'];?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#7e4596"><span class="fa fa-inr"></span> <?php echo $row1['price4'];?></h5>
</div>
</div>
</div>
</div></a>
<a href="viewallac.php?id=Fitness Devices"><div class="col-sm-offset-1 col-sm-3 text-center " >
<div class="panel panel-body p2" style="width:240px;border-radius:0px">
<div class="row">
<div class="col-sm-12 text-center">
<img src="photo/phones/<?php echo $row1['accimg5'];?>" class=" img img-responsive" style="height:200px;width:200px">
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#616161"><?php echo $row1['head5'];?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center">
<h5 style="font-weight:bold;color:#7e4596"><span class="fa fa-inr"></span> <?php echo $row1['price5'];?></h5>
</div>
</div>
</div>
</div></a>
<div class="col-sm-offset-1 col-sm-3 text-center" >
<div class="panel panel-body p2" style="width:240px;border-radius:0px;height:302px">
<div class="row">
<div class="col-sm-12 text-center">
<a href="accessories.php"><img src="photo/browsemore.jpg" class=" img img-responsive" style="height:200px;width:200px;margin-top:40px"></a>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="container" style="padding:1px;background-color:gray;margin-top:40px">
</div>




<div class="container-fluid">
<div class="row" style="margin-top:50px">
<div class="col-sm-12 text-center">
<span style="font-size:3em">Upcoming Innovations</span>
</div>
</div><br>
<div class="container" style="margin-top:40px;width:97%">
<div class="row">
<div class=" col-sm-7">
<video width="700" height="393" controls  poster="photo/thumb1.png"  class="afterglow" id="myvideo"  style="border-radius:25px">
  <source src="photo/vid1.mp4" type="video/mp4">
  
</video>
</div>
<div class="col-sm-5">
<div class="row">
<div class="col-sm-12 text-center">
<h2 style="font-weight:bold">Galaxy Fold</h2>
</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<p style="font-size:1.2em;font-weight:bold">A new chapter in mobile begins.</p><br>

<p style="font-size:1.2em;font-weight:bold;display:inline-block">The</p> &nbsp; <span style="font-size:1.4em;font-weight:bold;display:inline-block;color:darkblue">#GalaxyFold</span> &nbsp; <p style="font-size:1.2em;font-weight:bold;display:inline"> is the most significant leap forward, completely reinventing the shape of mobile with our first-ever foldable 7.3 inch Super AMOLED Infinity-Flex Display.</p><br><br>


<p style="font-size:1.2em;font-weight:bold;">Ten years after the first Galaxy, we didn’t just change the shape of the phone, we changed the shape of tomorrow.</p><br>

<h3 style="font-weight:bold;color:darkblue">#DoWhatYouCant</h3>
</div>
</div>
</div>
</div><br><hr><br>
<div class="row">
<div class="col-sm-5">
<div class="row">
<div class="col-sm-12 text-center">
<h2 style="font-weight:bold">Fitbit Charge 3</h2>
</div>
</div><br><br><br>
<div class="row">
<p style="font-size:1.2em;font-weight:bold;">Meet Fitbit Charge 3 –This swimproof advanced fitness tracker does more than count steps—it tracks 24/7 heart rate, calorie burn, 15+ exercises, goal progress, sleep and more.</p><br>
 <p style="font-size:1.2em;font-weight:bold;">Know your body so you can be empowered to take action, improve yourself and reach your goals.</p><br>
 <h3 style="font-weight:bold;color:darkblue">#BeFitAtEveryBit</h3>
</div>
</div>
<div class=" col-sm-7">
<video width="700" height="393" controls  poster="photo/thumb2.png"  class="afterglow" id="myvideo"  style="border-radius:25px">
  <source src="photo/vid2.mp4" type="video/mp4">
  
</video>
</div>
</div><br><hr><br>
<div class="row">

<div class=" col-sm-7">
<video width="700" height="393" controls  poster="photo/thumb3.png"  class="afterglow" id="myvideo"  style="border-radius:25px">
  <source src="photo/vid3.mp4" type="video/mp4">
  
</video>
</div>

<div class="col-sm-5">
<div class="row">
<div class="col-sm-12 text-center">
<h2 style="font-weight:bold">Apple AirPods 2</h2>
</div>
</div><br><br>
<div class="row">
<p style="font-size:1.2em;font-weight:bold;">The new wireless AirPods are the first of their kind to intelligently connect to your devices while delivering incredible sound for up to twelve hours on a single charge.</p><br>
 <p style="font-size:1.2em;font-weight:bold;">There's also wireless charging,active noise cancellation and hand free Siri. The Apple-designed W2 chip makes it possible.</p>
 
 <h3 style="font-weight:bold;color:darkblue">#AirPods</h3>
</div>
</div>
</div>

</div>
</div>
<br>



<?php
include("footer.php");
?>


<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>
</body>
