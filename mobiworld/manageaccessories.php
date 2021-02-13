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
$q="select * from tbl_admin where email='$email' and password='$pass'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);

$q3="select * from tbl_order";
$res1=mysqli_query($con,$q3);

$notifiy=0;
while($row3=mysqli_fetch_array($res1))
{
	$onoti=$row3['status'];
	if($onoti=='Ordered')
	{
		 $notifiy++;
	}
	
}

$q5="select * from tbl_return";
$res3=mysqli_query($con,$q5);

$noti=0;
while($row4=mysqli_fetch_array($res3))
{
	
	if($row4['status']=='Return Requested')
	{
		 $noti++;
	}
	
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">
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
	color:black;
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
.button1{
transition:0.1s;
}

.button:hover{
transition:0.1s;
	transform:scale(1.03);
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
					<br>
                    <li>
                        <a href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                        
                    </li>
                    <li >
                        <a href="managephone.php" style="font-family:'Poppins', sans-serif;"><i class="glyphicon glyphicon-phone"aria-hidden="true"></i>&nbsp;&nbsp;
Manage Phones </a>
                    </li>
					<li class="active">
                        <a href="manageaccessories.php" ><i class="fa fa-headphones"aria-hidden="true"></i>&nbsp;&nbsp;
Manage Accessories </a>
                    </li>
					<li>
					 <a href="managecustomer.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Manage Customer</a>
					</li>
                    <li>
                        <a href="manageorder.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Manage Orders<?php
						if($notifiy>=1)
						{
							?>
							
						<i class="zmdi zmdi-notifications-active animated infinite pulse" aria-hidden="true" style="margin-left:80px"></i>	
							<?php
						}
						?></a>
                    </li>
					<li>
                        <a href="managewebsite.php"><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;&nbsp; Manage Website</a>
                    </li>
					<li>
                        <a href="managereturn.php"><i class="zmdi zmdi-assignment-return" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Return Items<?php
						if($noti>=1)
						{
							?>
							
						<i class="zmdi zmdi-notifications-active animated infinite pulse" aria-hidden="true" style="margin-left:100px;"></i>	
							<?php
						}
						?></a>
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
                    
                        
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596;height:34px;width:40px;border-radius:5px">
                            <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			                <a href="addaccessories.php">
                            <button style="height:34px;width:160px;border-radius:5px;box-shadow:2px 2px 5px gray;" class="button btn btn-large"><span style="font-size:1.2em;font-weight:bold">+ Add New Accessories</span>
                            </button>
                            </a> 
   
                    </div>
               
                </nav>


<?php
include("tableaccessories.php");
?>     
                
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

