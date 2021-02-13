
<?php
session_start();
error_reporting(0);
include("config.php");
$email=$_SESSION['email'];
 $pass=$_SESSION['pass'];


?>




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
 

<div class="container-fluid">
<div class="container-fluid" style="box-shadow:1px 1px 3px gray;margin-top:40px">

<div class="col-sm-3" >
<h2 style="font-weight:bold;font-size:2.5em">New Launches</h2>
</div> 
<div class="col-sm-offset-7 col-sm-2" >
  <a href="viewall.php?id=New Launches"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='New Launches' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->
<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	

	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

	<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px" > </a>
 
 <?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>

<?php
$count++;	}
?>
<!-- panel1 end -->
</div>


<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-3" >
<h2 style="font-weight:bold;font-size:2.5em">Budget Phone</h2>
</div> 
<div class="col-sm-offset-7 col-sm-2" >
  <a href="viewall.php?id=Budget Phone"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div>
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Budget Phone' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<span class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>



<?php
$count++;	}
?>
<!-- panel1 end -->
</div>


<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-3" >
<h2 style="font-weight:bold;font-size:2.5em">Camera Phone</h2>
</div> 
<div class="col-sm-offset-7 col-sm-2" >
  <a href="viewall.php?id=Camera Phone"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div> 
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Camera Phone' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
<?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>



<?php
$count++;	}
?>
<!-- panel1 end -->
</div>


<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-4" >
<h2 style="font-weight:bold;font-size:2.5em">Top Selling Phone</h2>
</div> 
<div class="col-sm-offset-6 col-sm-2" >
  <a href="viewall.php?id=Top Selling Phone"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div> 
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Top Selling Phone' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>



<?php
$count++;	}
?>
<!-- panel1 end -->
</div>

<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-3" >
<h2 style="font-weight:bold;font-size:2.5em">Flagship</h2>
</div> 
<div class="col-sm-offset-7 col-sm-2" >
  <a href="viewall.php?id=Flagship"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div> 
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Flagship' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>



<?php
$count++;	}
?>
<!-- panel1 end -->
</div>

<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-4" >
<h2 style="font-weight:bold;font-size:2.5em">Big Battery Phone</h2>
</div> 
<div class="col-sm-offset-6 col-sm-2" >
  <a href="viewall.php?id=Big Battery Phone"><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div> 
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Big Battery Phone' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
<?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?> 
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>

</div>



<?php
$count++;	}
?>
<!-- panel1 end -->
</div>


<br>
<br>
<br>
<div class="container-fluid" style="box-shadow:1px 1px 3px gray">

<div class="col-sm-4" >
<h2 style="font-weight:bold;font-size:2.5em">Best In Performance </h2>
</div> 
<div class="col-sm-offset-6 col-sm-2" >
  <a href="viewall.php?id=Best In Performance "><button class="btn-hover color-3" style="margin-top:15px">View All</button></a>
</div>
</div> 
<br>
<div class="row" style="margin-top:30px">
<?php
$q="select * from tbl_phone where category='Best In Performance ' and type='Phone'";
$res=mysqli_query($con,$q);

?>
<!-- panel 1 -->

<?php
$count=1;
	while($row=mysqli_fetch_array($res))
  {
    if($count==5)
	{ break; }		
   
	?>
<div class="col-sm-3">

<div class="row">
<div class="col-xs-12" >

<a href="phone.php?id=<?php echo $row['pid']; ?>"><img src="photo\phones\<?php echo $row['image']?>" class="img img-responsive center-block p1" style="margin-top:20px;height:250px"></a>
 <?php if(!$row['qty'])
 { ?>
 <a href="#"><img src="photo/outofstock.png" class="img img-responsive center-block" style="z-index:2;position:absolute;bottom:100px;left:93px"></a>
 
  <?php
  
 }
 ?>
</div>
</div>
<div class="row">

<div class="col-sm-12 text-center">
<h5 style="color:black;font-weight:bold"><?php echo $row['name'];?></h5>

</div>
</div>
<div class="row">
<div class="col-sm-offset-3 col-sm-6 text-center">
<SPAN class="fa fa-rupee " style="color:gray;"> <?php echo $row['price'];?></span>
</div>

</div>



</div>



<?php
$count++;
	}
?>
<!-- panel1 end -->
</div>



</div>

<?php 
include("footer.php");

?>

<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>
</body>