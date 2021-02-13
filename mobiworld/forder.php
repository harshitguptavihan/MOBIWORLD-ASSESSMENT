<?php
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
include("config.php");
$oid=$_REQUEST['id'];
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$_SESSION['orderid']=$oid;
//$o=$_SESSION['orderid'];
$q1="select * from tbl_phone where pid=(select pid from tbl_order where oid='$oid')"; 
$res1=mysqli_query($con,$q1);
while($row1=mysqli_fetch_array($res1))
{
	$pid=$row1['pid'];
   	$img=$row1['image'];
   	$price=$row1['price'];
   	$color=$row1['color'];
    $ram=$row1['ram'];
   	$rom=$row1['rom'];
   	$brand=$row1['brand'];
   	$pname=$row1['name'];
   	$type=$row1['type'];
}
$_SESSION['pid']=$pid;
$q2="select * from tbl_address where aid=(select address from tbl_order where oid='$oid')";
$res2=mysqli_query($con,$q2);
while($row2=mysqli_fetch_array($res2))
{
	 $street=$row2['street'];
	 $name=$row2['name'];
	 $phone=$row2['phone'];
	 $pincode=$row2['pincode'];
	 $landmark=$row2['landmark'];
	 $city=$row2['city'];
	 $state=$row2['state'];
	 $paym=$row2['paymethod'];
}

$q4="update tbl_order set currentd=curdate()";
mysqli_query($con,$q4);
$q3="select * from tbl_order where oid='$oid'";
$res3=mysqli_query($con,$q3);
while($row3=mysqli_fetch_array($res3))
{
	$status=$row3['status'];
	$dod=$row3['dod'];
	$doo=$row3['doo'];
	$crnt=$row3['currentd'];
	$rnd=$row3['proid'];
	$qty=$row3['qty'];
}
$q5="select * from tbl_return where oid='$oid'";
$res4=mysqli_query($con,$q5);
if($row4=mysqli_fetch_array($res4))
{
	$sts=$row4['status'];
}
else
{
	$sts=0;
}


if($status=='Delivered')
 $count=4;
else 
 if($status=="In Transit")
 $count=3;
 else
 if($status=='Dispatched')
 $count=2;
 else
 $count=1;
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
border:1px solid #8d518c; -webkit-border-radius: 5px; -moz-border-radius: 5px;border-radius: 5px;font-size:12px; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: 0px 0px 0 rgba(0,0,0,0.3);font-weight:bold; color: black;text-align:center;
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
 <body style="background-color:#ffffff">  

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
<br>

<div class="container" style="border:1px solid #cbcbcb;width:95%;border-radius:3px;">
<?php
if($sts)
{
	
	?><h3 style="color:#b73918"><?php echo $sts;?></h3>
<?php	
}
else
{
if($status!="Delivered")
{
?>
<h3 style="font-weight:bold;display:inline-block">Expected Delivery Date:</h3> <h3 style="display:inline-block;color:green"><?php echo date('Y-m-d', strtotime($doo. ' + 10 days'));  ?> </h3>
<?php
}
Else
{
?>
<h3 style="font-weight:bold;display:inline-block">Delivered On:</h3> <h3 style="display:inline-block;color:green"> <?php echo $dod; ?></h3>
<?php
}
}
?>
</div>
<div class="container"  style="border:1px solid #cbcbcb;width:95%;border-radius:3px;padding:20px">

<div class="col-sm-offset-1 col-sm-10">
<div class="row">
<div class=" col-sm-2">
<img src="photo/phones/<?php echo $img;?>" class="img img-responsive" style="height:265px;width:130px">
</div>


<div class=" col-sm-4" style="margin-top:10px;">
<div class="row">
  <div class="col-sm-12" style="margin-top:10px">
  <span style="font-weight:bold;" class="h4"><?php echo $pname;?></span> <span class="h4" style="font-weight:bold"><?php echo $color;?></span>
  </div>
  </div>
  <div class="row" >
  <div class=" col-sm-12" > 
  <span style="font-size:10px;font-weight:bold;">By:</span> <span style="font-size:10px;font-weight:bold;color:blue"><?php echo $brand; ?></span>
  </div>
  </div><br>
  <?php
  if($type=='Phone')
  {
  ?>
  <div class="row">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">RAM Type:</span> <span class="h5" ><?php echo $ram;?></span>
  </div>
  </div>
   <div class="row">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">ROM Type:</span> <span class="h5" ><?php echo $rom;?></span>
  </div>
  </div>
  <?php
  }
  
  ?>
 
  
  
  <div class="row" style="margin-top:15px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Order ID:</span> <span class="h5" ><?php echo $rnd; ?></span>
  </div>
  </div>
  <div class="row" >
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Quantity:</span> <span class="h5" ><?php echo $qty; ?></span>
  </div>
  </div>
  <br>
  <?php
  if($type=="Accessory")
  {
  ?>
  <br>
 <?php
  }
 ?>
  
  <div class="row" style="margin-top:5px">
  <div class=" col-sm-12" > 
  <span style="font-weight:bold;font-size:1.4em;color:#b73918" class="fa fa-inr"> <?php echo $price*$qty; ?></span>
  </div>
  </div>
 
  <div class="row" style="margin-top:5px">
  <div class=" col-sm-12" > 
  <?php if($type=='phone') 
  {	  ?>
  <a href="phone.php?id=<?php echo $pid;?>" class="button_example" style="text-decoration:none">Buy Again</a>
  
  <?php
  }
  else
  {
	   ?>
  <a href="vaccessory.php?id=<?php echo $pid;?>" class="button_example" style="text-decoration:none">Buy Again</a>
  
  <?php
  }
	  
  ?>
  </div>
  </div>

</div>
<div class="col-sm-4" style="margin-top:10px">
<div class="row">
  <div class="col-sm-12" style="margin-top:10px">
  <span style="font-weight:bold;" class="h4">Address Details</span> 
  </div>
  </div>
  <br>
 
  
  <div class="row" style="margin-top:10px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Buyer's Name:</span> <span class="h5" ><?php echo $name;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Phone No:</span> <span class="h5" ><?php echo $phone;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">House No/Flat No/Street:</span> <span class="h5" ><?php echo $street;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Landmark:</span> <span class="h5" ><?php echo $landmark;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">City:</span> <span class="h5" ><?php echo $city;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Pincode:</span> <span class="h5" ><?php echo $pincode;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">State:</span> <span class="h5" ><?php echo $state;?></span>
  </div>
  </div>
  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <span style="font-weight:bold;" class="h5">Payment Method:</span> <span class="h5" ><?php echo $paym;?></span>
  </div>
  </div>
  
</div>
<div class="col-sm-2" style="margin-top:20px">

  <?php if($status!='Delivered')
  {
if($status!='Ordered')
	{ 
	
	?>
<div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <a href="#" class="button_example1" style="width:100%;text-decoration:none">*Cancel Order</a> </div></div><?php
  }
  
  else{
	  ?>
	  <div class="row" style="margin-top:5px">
  <div class="col-sm-12">
  <button class="button_example1" style="width:100%;text-decoration:none" data-toggle="modal" data-target="#myModal2<?php echo $oid ; ?>">*Cancel Order</button> 
    <!-- Modal -->
<div id="myModal2<?php echo $oid ; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight:bold">Cancel Order</h4>
      </div>
      <div class="modal-body">
	  <form action="cancelorder.php?oid=<?php echo $oid ; ?>" method="POST" class="form">
       
<br>
<script>
function myFunction() {
	
  var y = document.getElementById("sel2").value;
  if(y=="Others")
  {
	  document.getElementById("creason").style.display = "block";
  }
  else
  {
	  document.getElementById("creason").style.display = "none";
  }
  
}
</script>
<div class="row">
		<div class="col-sm-12">
		<span style="font-weight:bold">Select Reason:</span>
<select class="form-control" id="sel2" onchange="myFunction()" name="reason">
    <option>Order by Mistake</option>
    <option>Product Cost too High</option>
    <option>Found Cheaper Somewhere else</option>
    <option>Need to Change Shipping Address</option>
    <option>Others</option>
  </select>
  </div>
  </div>
  <br>
  <div class="row" id="creason" style="display:none"> 
  <div class="col-sm-12"> 
  <textarea cols="5" rows="5" type="text" class="form-control" placeholder="Write your reason here..."  name="creason" ></textarea>
  <br>
  </div>
  </div>
  <br>
					<hr>
					
 
<div class="row">
  <div class="col-sm-12 text-center" >
 <input type="submit" class="btn btn-primary" value="Submit">
 </div>
                    </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </div>
  </div>
	  
	  <?php
  }
  }
  
  else
  {
	
if((date('Y-m-d', strtotime($dod. ' + 7 days'))>$crnt))
{
 if(!$sts) 
 {
  ?>
<div class="row" style="margin-top:5px">
  <div class="col-sm-12">
<button class="button_example1" style="width:100%;text-decoration:none" data-toggle="modal" data-target="#myModal<?php echo $oid ; ?>">*Return Item</button>
  <!-- Modal -->
<div id="myModal<?php echo $oid ; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight:bold">Request For Return </h4>
      </div>
      <div class="modal-body">
	  <form action="forderreturn.php" method="POST" enctype="multipart/form-data" class="form">
        <div class="row">
		<div class="col-sm-12">
  <label for="acct">Account No.:</label>
  <input type="text" class="form-control" id="acct" name="acno" placeholder="Enter Your Bank A/C No.">
</div>
</div>
<br>
<script>
function myFunction() {
	
  var x = document.getElementById("sell").value;
  if(x=="Others")
  {
	  document.getElementById("oreason").style.display = "block";
  }
  else
  {
	  document.getElementById("oreason").style.display = "none";
  }
  
}
</script>
<div class="row">
		<div class="col-sm-12">
		<span style="font-weight:bold">Select Reason:</span>
<select class="form-control" id="sell" onchange="myFunction()" name="reason">
    <option>Damaged Product</option>
    <option>Wrong Product Delivered</option>
    <option>Poor Quality Product</option>
    <option>Bought From Market</option>
    <option>Others</option>
  </select>
  </div>
  </div>
  <br>
  <div class="row" id="oreason" style="display:none"> 
  <div class="col-sm-12"> 
  <textarea cols="5" rows="5" type="text" class="form-control" placeholder="Write your reason here..."  name="oreason" ></textarea>
  <br>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
                     <label for="pimg" >Upload Your Passbook photo</label>
                    <input type="file" class="form-control-file" id="pimg" name="pimg"> 
                    </div>
                    </div><br>
					<hr>
					
 
<div class="row">
  <div class="col-sm-12 text-center" >
 <input type="submit" class="btn btn-primary" value="Submit">
 </div>
                    </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>
<?php
} 
}
?><div class="row" style="margin-top:5px">
  <div class="col-sm-12">
	  <button class="button_example" style="width:100%;text-decoration:none" data-toggle="modal" data-target="#myModal1<?php echo $oid ; ?>">Write Review</button>
	  
	  <div id="myModal1<?php echo $oid ; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight:bold">Review Product </h4>
      </div>
      <div class="modal-body">
	  <form action="reviewcode.php" method="POST"  class="form">
        <div class="row">
		<div class="col-sm-12">
  <label for="title">Title:</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
</div>
</div>

  <br>
   <div class="row">
  <div class="col-sm-12">
  <label for="title">Description:</label>
  <textarea cols="10" rows="5" id="title" class="form-control"  placeholder="Write Description..." name="description"></textarea>
  <br>
  </div>
  </div>
<br>
					<hr>
					
 
<div class="row">
  <div class="col-sm-12 text-center" >
 <input type="submit" class="btn btn-primary" value="submit">
 </div>
                    </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	  </div>
	  </div>
 <?php }
  ?>
  </div>
  </div>
</div>

<div class="col-sm-12" style="margin-left:5px;margin-top:30px;border-top:1px solid #cbcbcb ">
<br>
<div class="row">
<span style="font-size:10px;font-style:italic;font-weight:bold;color:maroon">*Cancel of Order isn't guaranteed after dispatch. Please do not accept if the product is delivered.</span><br>
<?php
if((date('Y-m-d', strtotime($dod. ' + 7 days'))>$crnt)and ($status=='Delivered'))
{
?>
<span style="font-size:10px;font-style:italic;font-weight:bold;color:maroon">*Return is applicable for 7 days only from the date of delivery.</span>

<?php	
}
?>
</div>
</div>
</div>
<div class="container"  style="border:1px solid #cbcbcb;width:95%;border-radius:3px;">
<div class="col-sm-12">
<div class="row">
<h3 style="font-weight:bold">Track Your Order</h3>
</div><br>
<div class="col-sm-12">
<div class="row">
<div class="col-sm-1" style="padding:63px">
</div>
<div class="col-sm-2">
<div class="row">
<div class="col-sm-6 text-center">
<img src="photo/ordered.png" class="img img-responsive"><br>
<span style="color:#7e4596;font-weight:bold">Ordered</span>
</div>
<div class="col-sm-4" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<div class="col-sm-2">
<span class="fa fa-circle" style="color:#7e4596;margin-top:26px"></span>
</div>
</div>
</div>
<div class="col-sm-2" style="margin-left:6px">

<div class="row">

<?php if($count>=2)
{
	?>
<div class="col-sm-4" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<?php
	}
 else
 {
	 ?>
	 <div class="col-sm-4" style="padding:3px;background-color:#949494;margin-top:30px">
</div>
	  <?php
	 }
	 ?>
<div class="col-sm-6 text-center">
<?php if($count>=2)
{
	?>
	<img src="photo/dispatch2.png" class="img img-responsive">
	<?php
	}
 else
 {
	 ?>
	 <img src="photo/dispatch.png" class="img img-responsive">
	 <?php
	 }
	 ?>
	 <br>
	 <?php if($count>=2)
{
	?>
<span style="color:#7e4596;font-weight:bold">Dispatched</span>

<?php
	}
 else
 {
	 ?>
	 <span style="color:#949494;font-weight:bold">Dispatched</span>
	 <?php
	 }
	 ?> 
</div>

</div>
</div>

<div class="col-sm-2" style="margin-left:-25px">
<div class="row">
<?php if($count>=2)
{
	?>
<div class="col-sm-5" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<div class="col-sm-2">
<span class="fa fa-circle" style="color:#7e4596;margin-top:26px"></span>
</div><?php
}
else
{
?>
<div class="col-sm-5" style="padding:3px;background-color:#949494;margin-top:30px">
</div>
<div class="col-sm-2">
<span class="fa fa-circle" style="color:#949494;margin-top:26px"></span>
</div>
<?php
}
if($count>=3)
{
?>


<div class="col-sm-5" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<?php
}
else
{
?>
<div class="col-sm-5" style="padding:3px;background-color:#949494;margin-top:30px">
</div>
<?php
}
?>
</div>
</div>
<div class="col-sm-2"  >
<div class="row">
<div class="col-sm-6 text-center">
<?php if($count>=3)
{
	?>
	<img src="photo/intransit2.png" class="img img-responsive">
	<?php
	}
 else
 {
	 ?>
	 <img src="photo/intransit.png" class="img img-responsive">
	 <?php
	 }
	 ?><br>
	 
	 <?php if($count>=3)
{
	?>
<span style="color:#7e4596;font-weight:bold">In Transit</span>
<?php
	}
 else
 {
	 ?>
	 
	 <span style="color:#949494;font-weight:bold">In Transit</span>
	 <?php
 }
 ?>
</div>

	 <?php if($count>=3)
{
	?>
<div class="col-sm-4" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<div class="col-sm-2">
<span class="fa fa-circle" style="color:#7e4596;margin-top:26px"></span>
</div>
<?php
	}
 else
 {
	 ?>
	 <div class="col-sm-4" style="padding:3px;background-color:#949494;margin-top:30px">
</div>
<div class="col-sm-2">
<span class="fa fa-circle" style="color:#949494;margin-top:26px"></span>
</div>
	 <?php
 }
 ?>
</div>
</div>
<div class="col-sm-2" style="margin-left:6px">
<div class="row">
<?php if($count>=4)
{
	?>

<div class="col-sm-4" style="padding:3px;background-color:#7e4596;margin-top:30px">
</div>
<div class="col-sm-6 text-center">

	<img src="photo/delivered2.png" class="img img-responsive">
	<br>
<span style="color:#7e4596;font-weight:bold">Delivered</span>
</div>
<?php
	}
 else
 {
	 ?><div class="col-sm-4" style="padding:3px;background-color:#949494;margin-top:30px">
</div>
<div class="col-sm-6 text-center">
	 <img src="photo/delivered.png" class="img img-responsive">
	 <br>
<span style="color:#949494;font-weight:bold">Delivered</span>
</div>
	 <?php
	 }
	 ?>
</div>
</div>

</div>
</div>
</div>
</div>
<br>
<br>
</div>
<?php include("footer.php"); ?>
<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>
</body>