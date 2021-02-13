<?php
include("config.php");
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
 $email=$_SESSION['email'];
 $pass=$_SESSION['pass'];   

 
?>
<script>





</script>
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
<br>
<br>
<div class="container-fluid">
<div class="col-sm-12 " style="margin-top:30px;">
<div class="panel panel-body" style="border:1px solid #cbcbcb;">
<div class="col-sm-12" style="border-bottom:1px solid #cbcbcb">
<h2 style="">Fill In Details To Complete Your Order</h3>
</div>
<form action="addresscode.php" class="form" method="post"name="form1" id="form1" >



<div class="container">
<div class="row">
<div class=" col-sm-4" style="margin-top:20px">
<h3 style="font-weight:bold;font-family: 'Poppins', sans-serif;">Personal Details</h3>
</div>

</div><br>
		 <div class="row">
          <div class=" col-sm-5">
        <span style="font-weight:bold;font-size:1.1em">Buyer's Name:</span> <br><input class="form-control" type="text" placeholder="Enter Your Name" name="name"  pattern="[a-zA-Z ]+" title="you can insert only alphabets" required>
          </div>
		  <div class="col-sm-offset-2 col-sm-5">
        
		
		<span style="font-weight:bold;font-size:1.1em">Mobile No:</span><br><input class="form-control" placeholder="Enter Your Mobile No." type="text" name="phone" Pattern="[0-9+]{13}" title="e.g., +919628XXXXXX" value="+91" required>
          </div>
		  </div>
		  <br><hr>
		  
<div class="row">
<div class=" col-sm-4" >
<h3 style="font-weight:bold;font-family: 'Poppins', sans-serif;">Address Details</h3>
</div>

</div><br>
		 <div class="row">
          <div class=" col-sm-5">
        <span style="font-weight:bold;font-size:1.1em">Area, Colony, Street, Sector, Village:</span> <br><input class="form-control" type="text" placeholder="Enter Your Address" name="street" required>
          </div>
		  <div class="col-sm-offset-2 col-sm-5">
        
		
		<span style="font-weight:bold;font-size:1.1em">Landmark:</span><br> <input class="form-control" type="text" placeholder="e.g. near apollo hospital" name="landmark">
          </div>
		  </div><br><br>
		  <div class="row">
		  <div class=" col-sm-5">
        <span style="font-weight:bold;font-size:1.1em">Town/City:</span> <br><input class="form-control" type="text" placeholder="Enter Your City" name="city">
          </div>
		  <div class="col-sm-offset-2 col-sm-5" required  pattern="[a-zA-Z ]+" title="e.g., Sitapur">
        
		
		<span style="font-weight:bold;font-size:1.1em">Pincode:</span><br> <input class="form-control" type="text" placeholder="Enter Your Pincode" name="pincode" Pattern="[0-9]{6}" title="e.g., 261XXX" required>
          </div>
		  </div><br><br>
		  <div class="row">
		  <div class=" col-sm-5">
        <span style="font-weight:bold;font-size:1.1em">State:</span> <br><input class="form-control" type="text" placeholder="Enter Your State" name="state" required  pattern="[a-zA-Z ]+" title="e.g., Uttar Pradesh">
          </div>
		  </div>
		  <br><hr>
<div class="row">
<div class=" col-sm-4" >
<h3 style="font-weight:bold;font-family: 'Poppins', sans-serif;">Payment Details</h3>
</div>

</div><br>
		 <div class="row">
          <div class=" col-sm-5">
        <span style="font-weight:bold;font-size:1.1em">Choose Payment Method:</span>
		
		
		<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="Credit/Debit card")
  {
	  document.getElementById("i1").style.display = "block";
	  document.getElementById("i2").style.display = "block";
	  document.getElementById("i3").style.display = "block";
	  document.getElementById("i4").style.display = "block";
	  document.getElementById("i5").style.display = "block";
	  document.getElementById("i6").style.display = "block";
  }
  
  else
  {
	  document.getElementById("i1").style.display = "none";
	  document.getElementById("i2").style.display = "none";
	  document.getElementById("i3").style.display = "none";
	  document.getElementById("i4").style.display = "none";
	  document.getElementById("i5").style.display = "none";
	  document.getElementById("i6").style.display = "none";
  }
  
}
</script>
		
		<select id="mySelect" onchange="myFunction()" class="form-control" name="paymethod">
	<option>--Select type--</option>
	<option>COD</option>
	<option>Credit/Debit card</option>
</select>
</div>
</div>
<br>
<hr id="i1" style="display:none">

<div class="row" id="i2" Style="display:none">
<div class=" col-sm-4" >
<h3 style="font-weight:bold;font-family: 'Poppins', sans-serif;">Card Details</h3>
</div>

</div><br>
<div class="row" style="display:none" id="i3">
<div class="col-sm-5">
  <span style="font-weight:bold;font-size:1.1em">Card Number:</span>
  <input placeholder="1234-1234-1234-1234" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" name="card" type="text" class="form-control" >
</div>
<div class="col-sm-offset-2 col-sm-5" style="display:none" id="i4">
  <span style="font-weight:bold;font-size:1.1em">Expiry Date:</span>
  <input name="expdate" type="month" class="form-control" >
</div>
</div><br><br>
<div class="row" style="display:none" id="i5">
<div class="col-sm-5" >
  <span style="font-weight:bold;font-size:1.1em">CVV:</span>
  <input type="text" name="cvv" placeholder="e.g., 123" pattern="[0-9]{3}" class="form-control">
</div>
<div class="col-sm-offset-2 col-sm-5" style="display:none" id="i6">
  <span style="font-weight:bold;font-size:1.1em">PIN:</span>
  <input type="password" placeholder="XXXX" pattern="[0-9]{4}" name="pin" class="form-control">
  <br>
</div>

</div>
<hr>

<div class="row">
<div class=" col-sm-4" >
<h3 style="font-weight:bold;font-family: 'Poppins', sans-serif;">Solve Captcha</h3>
</div>

</div><br>
<div class="row">
<div class="col-sm-1">
<input type="text" value="<?php echo rand(-10,10)?>" readonly name="c1" class="form-control">
</div>
<div class="col-xs-1" style="font-weight:bold;position:relative;top:5px;left:25px">+</div>
<div class=" col-sm-1">
<input type="text" value="<?php echo rand(-10,10)?>" readonly name="c2" class="form-control">
</div><div class="col-xs-1" style="font-weight:bold;position:relative;top:5px;left:25px">=</div>
<div class=" col-sm-1">
<input type="text"  name="c3" class="form-control">
</div>          
</div>          
		  <br>
		  <br>
		  
		  <br>
		  <br>
		  <div class="row">
		  <div class="col-sm-offset-4 col-sm-4">
		  <input type="submit" name="Submit" class="h5 btn btn-default" value="PLACE ORDER"  style="width:100%;height:40px;margin-top:0px;background-color:#7e4596;color:white;border-radius:0px;border:1px solid #7e4596">
		  </div>
		  </div>
		  </div>
</form>
<br>
<br>
</div>
</div>
</div>
<?php 
include("footer.php");
?>
<script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>
</body>