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

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0 1px 1px #ccc;
    -moz-box-shadow: 0 1px 1px #ccc;
    box-shadow: 0 1px 1px #ccc;
}

.bordered tr:hover {
    background: #ECECEC;    
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}
.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}
.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}
.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}
.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}
.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
} 

		</style>
    </head>
    <body>



        <div class="wrapper">
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
					
                    <li >
                        <a href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                        
                    </li>
                    <li>
                       <a href="managephone.php"><i class="glyphicon glyphicon-phone"aria-hidden="true"></i>&nbsp;&nbsp;
Manage Phones </a>
                    </li>
					<li>
                        <a href="manageaccessories.php"><i class="fa fa-headphones"aria-hidden="true"></i>&nbsp;&nbsp;
Manage Accessories </a>
                    </li>
					<li class="active">
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
                        <a href="managewebsite.php"><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Manage Website</a>
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

                        <div>
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596;height:34px">
                                <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>
                        </div>

                      
                    </div>
                </nav><br>
<div class="col-sm-offset-2 col-sm-10">
<?php 

$q="select * from logindetails order by date desc";
$q7="select count(uid) from tbl_user";
$res7=mysqli_query($con,$q7);
if($row7=mysqli_fetch_array($res7))
{
	$count=$row7['count(uid)'];
    $_SESSION['cont']=$count;
}	
	


$res=mysqli_query($con,$q);
?>
<table border="1px" class="bordered"> 
  <tr style="background-color:#39334a">
     
    
     <th style="text-align:center;width:110px;height:40px;color:white">S No.</th>
     <th style="text-align:center;width:110px;height:40px;color:white">E-Mail</th>
	  <th style="text-align:center;width:110px;height:40px;color:white">Status</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Date</th>
  </tr>
<?php
$i=1;
while($row=mysqli_fetch_array($res))
 {
?>
  <tr>
    
    
    <td style="text-align:center;width:150px;height:40px;"><?php echo $i; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $row['email']; ?></td>
	<td style="text-align:center;width:200px;height:40px;"><?php echo $row['details']; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $row['date']; ?></td>
    
  </tr> 
<?php
$i++; }
?>
</table>
                
            </div>
        </div>

 
  <script src="js\jquery.js"></script>
<script src="js\bootstrap.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
