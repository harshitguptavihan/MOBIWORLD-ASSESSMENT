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
while($row=mysqli_fetch_array($query))
{
$name=$row['name'];	
$phone=$row['phone'];	
$uid=$row['uid'];	
}
$q2="select * from tbl_cancel where uid='$uid'";
$res=mysqli_query($con,$q2);

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
					
                    <li>
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
					<li class="active">
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
        
				<div class="col-sm-offset-2 col-sm-8">
               <table border="1px" class="bordered">
			     <tr style="background-color:#39334a">
			       <th style="text-align:center;width:70px;height:40px;color:white">S No.</th>  
			       <th style="text-align:center;width:200px;height:40px;color:white">Product Name</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Price</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Brand</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Color</th>
			       <th style="text-align:center;width:150px;height:40px;color:white">Cancel Date</th>
				 </tr>
<?php	
$i=1;			   
while($row1=mysqli_fetch_array($res))
{
	?>
<tr> 
<td style="text-align:center;height:40px;"><?php echo $i; ?></td>	
	<?php
	$pid=$row1['pid'];
	$cdate=$row1['canceldate'];

$q3="select * from tbl_phone where pid='$pid'";
$res2=mysqli_query($con,$q3);
while($row2=mysqli_fetch_array($res2))
{
	 $pname=$row2['name'];
	$price=$row2['price'];
	$brand=$row2['brand'];
	$color=$row2['color'];
	
	?>
	<td style="text-align:center;height:40px;"><?php echo $pname; ?></td>
	<td style="text-align:center;height:40px;"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $price; ?></td>
	<td style="text-align:center;height:40px;"><?php echo $brand; ?></td>
	<td style="text-align:center;height:40px;"><?php echo $color; ?></td>
	<?php
}?>
<td style="text-align:center;height:40px;color:maroon"><?php echo $cdate; ?></td>
</tr>
<?php
$i++;
}	?>			   
				
				 
				 </table>
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
