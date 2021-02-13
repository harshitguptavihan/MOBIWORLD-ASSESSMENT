<?php 
session_start();
error_reporting(0);
include("config.php");
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:login.php");

}

 $email=$_SESSION['email'];
 $pass=$_SESSION['pass'];



?>

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

#myelement:focus {
    outline: none;
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

div.card {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
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
 <body style="background-color:#f1f3f6">  

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
	
      <li><a href="signup.php" id="one"><span class="glyphicon glyphicon-user" style="color:#ffffff"></span> <h5 style="color:#ffffff;display:inline-block"> Sign Up</h5></a></li>
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
 
 
    
         <?php $email=$_SESSION['email'];
               $r3="select uid from tbl_user where email='$email'";
			   $res3=mysqli_query($con,$r3);
			   while($row3=mysqli_fetch_array($res3))
			   $uid=$row3['uid'];
               $r1="select pid from tbl_cart where uid='$uid'";
			   $res=mysqli_query($con,$r1);
			     $count=0;
				 
				 ?>
				<div class="container-fluid"> 
				 <?php
			   if(mysqli_fetch_array($res))
			 
			   {
			    while($row=mysqli_fetch_array($res))
			    $pid=$row['pid'];
                $r2="SELECT tbl_phone.pid,tbl_phone.name,tbl_phone.image,tbl_phone.color,tbl_phone.ram,tbl_phone.rom,tbl_phone.ss,tbl_phone.battery,tbl_phone.brand,tbl_phone.processor, tbl_phone.price,tbl_phone.camera,tbl_phone.type,tbl_cart.cid, tbl_cart.qty FROM tbl_phone ,tbl_cart WHERE tbl_phone.pid =tbl_cart.pid AND tbl_cart.uid='$uid' order by cid desc ";
			   
			   $res=mysqli_query($con,$r2);
			?>   
			<br>
			<br>
<div class="container">
<div class=" col-sm-8" style="border:1px solid #cbcbcb;background-color:#ffffff;position:relative;left:25px">
<div class="row">
<div class="col-sm-12" style="border-bottom:1px solid #cbcbcb;">
<h4>&nbsp;&nbsp;MY CART (<?php echo $countt; ?>)</h4>
</div>
</div>
<?php
while($row1=mysqli_fetch_array($res))
{
	$d=$row1['qty'];
	$p=$row1['price'];
	$b=$d*$p;
	$a=$a+$b;
	$type=$row1['type'];
	
?>
<br>
<div class="row" style="border-bottom:1px solid #cbcbcb">
<div class="col-sm-3">
<div class="row">
<div class=" col-sm-12  ">
<img src="photo/phones/<?php echo $row1['image']; ?>" class="img img-responsive center-block" style="height:100px;width:50px;margin-left:37px">
</div>

<div class="col-sm-12 " style="margin-top:20px;margin-left:7px">
<a class="btn btn-default " style="border-radius:50%;height:28px;width:27px" href="decreaseqty.php?cid=<?php echo $row1['cid']; ?>"><span style="font-weight:bold;position:relative;bottom:3px;right:2px">-</span></a> &nbsp;<span style="border:1px solid #cbcbcb;padding-right:10px;padding-left:10px;border-radius:3px"> <?php echo $d ; ?> </span>&nbsp; <a class="btn btn-default" style="border-radius:50%;height:28px;width:27px" href="increaseqty.php?cid=<?php echo $row1['cid']; ?>"><span style="font-weight:bold;position:relative;bottom:3px;right:4px">+</span></a>
 
</div>
</div>
<br>

</div>
<div class="col-sm-5">
<div class="row">
<div class="col-sm-12">
<h4 style="font-size:14px;font-weight:bold"><?php echo $row1['name'];?> (<?php echo $row1['color'];

if($type=="Phone")
{
	?>, <?php 
}
echo $row1['rom'];?>)</h4>
</div>
<div class="col-sm-12" style="margin-top:-12px">
<h4 style="font-size:12px;color:gray"><?php echo $row1['ram'];?></h4>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<h4 style="color:#b73918"><i class="fa fa-inr"></i> <?php echo $b;?></h4>
</div>

</div>
<div class="row">
<div class="col-sm-12">
<h4 style="font-size:14px;font-weight:bold"><a href="removeitem.php?id=<?php echo $row1['pid'];?>"  style="text-decoration:none;color:black">REMOVE</a></h4>
</div>

</div>

</div>
<div class="col-sm-4">
<div class="row" style="margin-left:10px">

<div class="col-sm-12">
<h4 style="font-size:12px;font-weight:bold;" >Delivery By: <?php  $da=date("Y-m-d");

echo date('d-M-y', strtotime($da. ' + 7 days')); 
 ?> </h4> <h4 style="font-size:12px;color:green">Free Delivery</h4>
</div>

</div>

<div class="row"  style="margin-left:10px;">
<div class="col-sm-12" style="margin-top:-12px">
<h4 style="font-size:10px;color:gray">7 Days Replacement Policy</h4>
</div>
</div>
</div>

</div>

<?php
}

?>
<div class="row" style="padding-top:15px;padding-bottom:15px">
<div class="col-sm-offset-5 col-sm-3">
<a href="mobiles.php" class="btn btn-default" style="border-radius:0px;height:40px;padding-top:10px"><i class="fa fa-chevron-left"></i> <span style="font-weight:bold">CONTINUE SHOPPING</span></a>
</div>
<div class="col-sm-3" style="margin-left:7px">
<form method="POST" action="checkout.php">


<input type="hidden" value="<?php echo $a;?>" name="check" readonly  id="myelement">


<input type="submit" class="h5 btn btn-default" value="PLACE ORDER" style="width:186px;height:40px;margin-top:0px;background-color:#7e4596;color:white;border-radius:0px;border:1px solid #7e4596" >

</form>
</div>
</div>
</div>
<div class="col-sm-offset-1 col-sm-3" style="border:1px solid #cbcbcb;background-color:#ffffff;position:relative;right:25px">
<div class="row">
<div class="col-sm-12" style="border-bottom:1px solid #cbcbcb;">
<h4 style="color:#878787;font-size:15px">Price Details</h4>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-7">
<h5>Price (<?php echo $countt; ?> items)</h5>
</div>
<div class="col-sm-offset-1 col-sm-4 text-right">
<h5><i class="fa fa-inr"></i> <?php echo $a;?></h5>
</div>
</div>
<div class="row">
<div class="col-sm-7">
<h5>Delivery Charges</h5>
</div>
<div class="col-sm-offset-2 col-sm-3 text-right">
<h5 style="color:green">FREE</h5>
</div>
</div>
<hr>
<div class="row" style="margin-bottom:7px">
<div class="col-sm-7">
<h5>Amount Payable</h5>
</div>
<div class="col-sm-offset-1 col-sm-4 text-right">
<h5><i class="fa fa-inr"></i> <?php echo $a;?></h5>
</div>
</div>

</div>
</div>
</div>
</div>
<?php
			   }
else
{
	
	?>
	<div class="container-fluid">
	
<div class="container" style="padding:10px">	
<div class="col-sm-12 text-center">
<img src="photo\empty cart.png" class="img img-responsive center-block">
<h1> Your Cart Is Empty</h1>
<a class="button_example1" style="text-decoration:none;color:white" href="mobiles.php">Shop Now</a>	
</div>
</div>
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