<!DOCTYPE html>

<?php 
error_reporting(0);
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
include("config.php");
$q="select * from tbl_user where email='$email' and password='$pass'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);

$q2="select * from tbl_cancel where uid=(Select uid from tbl_user where email='$email')";
$res=mysqli_query($con,$q2);
$i=0;
while(mysqli_fetch_array($res))
{
	$i++;
}

$q3="select uid from tbl_order where uid=(select uid from tbl_user where email='$email')";
$res1=mysqli_query($con,$q3);
$i2=0;
while(mysqli_fetch_array($res1))
{
	$i2++;
}

$q4="select pid from tbl_phone where type='Phone'";
$res2=mysqli_query($con,$q4);
$i3=0;
while(mysqli_fetch_array($res2))
{
	$i3++;
}

$q5="select uid from tbl_return where uid=(select uid from tbl_user where email='$email')";
$res3=mysqli_query($con,$q5);
$i4=0;
while(mysqli_fetch_array($res3))
{
	$i4++;
}

$q6="select pid from tbl_phone where type='Accessory'";
$res4=mysqli_query($con,$q6);
$i5=0;
while(mysqli_fetch_array($res4))
{
	$i5++;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="material-design-iconic-font/css/material-design-iconic-font.min.css">
        <!-- Our Custom CSS -->
        <style>
		@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #222222;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #222222;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #7e4596;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 12px;
    display: block;
}
#sidebar ul li a:hover {
    color: BLACK;
    background: rgba(43,180,232,0.7);
	transition:0.5s;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: black;
    background: #7e4596;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #7e4596;
}

#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}


@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

		</style>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header" >
                    <img src="photo/logo1.png" class="img img-responsive">
                </div>

                <ul class="list-unstyled components">
				
				
					<br>
					<br>
					<br>
					<br>
					
                    <li class="active">
                        <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                        
                    </li>
                    <li>
                       <a href="changepassword.php"><i class="zmdi zmdi-settings zmdi-hc-spin"aria-hidden="true"></i>&nbsp;&nbsp;
Change Password </a>
                    </li>
					<li>
                        <a href="editprofile.php"><i class="fa fa-pencil"aria-hidden="true"></i>&nbsp;&nbsp;
Edit Profile </a>
                    </li>
					<li>
                        <a href="vorderreturn.php"><i class="zmdi zmdi-assignment-return "aria-hidden="true"></i>&nbsp;&nbsp;
View Returned Orders </a>
                    </li>
					<li>
                        <a href="vordercancel.php"><i class="zmdi zmdi-smartphone-erase "aria-hidden="true"></i>&nbsp;&nbsp;
View Cancelled Orders </a>
                    </li>
					<li>
                        <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                    </li>
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div class="col-sm-12" id="content">

                <nav>
                    <div class="container-fluid">

                        <div>
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596">
                                <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>
                        </div>

                      
                    </div>
                </nav>
                 <br>
                 <br>
                 <br>
                <div class="row">
				<div class="col-sm-offset-1 col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);border-radius:10px;height:150px">
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi  zmdi-smartphone-erase zmdi-hc-5x" style="color:white"></span>
                </div>
				<div class="col-sm-offset-1 col-sm-6" style="margin-top:15px;">
				<div class="row ">
				<span style="color:white;font-size:2.2em"><?php echo $i; ?></span>
				</div>
				<div class="row ">
				<span style="color:white;font-size:1em">Cancelled Orders</span>
				</div>
                </div>
                </div>
				<br>
				<div class="row">
				<div class="col-sm-12 text-center" Style="margin-top:5px">
				<a href="vordercancel.php" style="text-decoration:none"><span style="color:white;font-size:1.3em;font-weight:bold">View</span>&nbsp;&nbsp;&nbsp; <span class="zmdi zmdi-forward animated infinite fadeInLeft zmdi-hc-fw" style="color:white"></span></a>
                </div>
                </div>
                </div>
				
				<div class=" col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);border-radius:10px;height:150px;margin-left:50px">
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi zmdi-shopping-cart zmdi-hc-5x" style="color:white"></span>
                </div>
				<div class="col-sm-offset-1 col-sm-6" style="margin-top:15px;">
				<div class="row">
				<span style="color:white;font-size:2.2em"><?php echo $i2; ?></span>
				</div>
				
				<div class="row">
				<span style="color:white;font-size:1em">Items Bought</span>
				
                </div>
                </div>
                </div>
				<br>
				<div class="row">
				<div class="col-sm-12 text-center" Style="margin-top:5px">
				<a href="corder.php" style="text-decoration:none"><span style="color:white;font-size:1.3em;font-weight:bold">View</span>&nbsp;&nbsp;&nbsp; <span class="zmdi zmdi-forward animated infinite fadeInLeft zmdi-hc-fw" style="color:white"></span></a>
                </div>
                </div>
                </div>
				
				<div class=" col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);border-radius:10px;height:150px;margin-left:50px">
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi zmdi-assignment-return zmdi-hc-5x" style="color:white"></span>
                </div>
				<div class="col-sm-offset-1 col-sm-5" style="margin-top:15px;">
				<div class="row">
				<span style="color:white;font-size:2.2em"><?php echo $i4; ?></span>
				</div>
				
				<div class="row">
				<span style="color:white;font-size:1em">Items Returned</span>
				
                </div>
                </div>
                </div>
				<br>
				<div class="row">
				<div class="col-sm-12 text-center" Style="margin-top:5px">
				<a href="vorderreturn.php" style="text-decoration:none"><span style="color:white;font-size:1.3em;font-weight:bold">View</span>&nbsp;&nbsp;&nbsp; <span class="zmdi zmdi-forward animated infinite fadeInLeft zmdi-hc-fw" style="color:white"></span></a>
                </div>
                </div>
                </div>
                </div>
				
				<br>
                <br>
                <br>
                <br>
                <br>
                
                <br>
				
                <div class="row">
				<a href="editprofile.php">
				<div class="col-sm-offset-1 col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #45b649 0%, #dce35b 100%);border-radius:10px;height:150px">
				<br>
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi zmdi-account-o zmdi-hc-5x animated infinite pulse" style="color:white"></span>
                </div>
				<div class=" col-sm-6" style="margin-top:15px;">
				<br>
				<div class="row">
				<span style="color:white;font-size:1.9em">Edit Profile</span>
				</div>
                </div>
                </div>
				<br>
                </div></a>
				<a href="changepassword.php">
				<div class=" col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #dc3545 0%, #ffc107 100%);border-radius:10px;height:150px;margin-left:50px">
				
				<br>
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi zmdi-settings zmdi-hc-5x animated infinite pulse" style="color:white"></span>
                </div>
				<div class=" col-sm-7" style="margin-top:20px;">
				<br>
				<div class="row">
				<span style="color:white;font-size:1.2em">Change Password</span>
				</div>
                </div>
                </div>
				<br>
                </div></a>
				<a href="logout.php">
				<div class=" col-sm-3" style="background-image: -webkit-linear-gradient(90deg, #4272d7 0%, #28a745 100%);border-radius:10px;height:150px;margin-left:50px">
				<br>
				<div class="row">
				<div class="col-sm-offset-1 col-sm-4" style="margin-top:15px;">
				<span class="zmdi zmdi-power zmdi-hc-5x animated infinite pulse" style="color:white"></span>
                </div>
				<div class=" col-sm-6" style="margin-top:15px;">
				<br>
				<div class="row">
				<span style="color:white;font-size:2em">Log Out</span>
				</div>
                </div>
                </div>
				<br>
				
                </div></a>
                </div>
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
