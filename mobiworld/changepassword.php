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
					
                    <li>
                        <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                        
                    </li>
                    <li class="active">
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
					<div class="col-sm-offset-3 col-sm-6" style="margin-top:30px;">
<div class="panel panel-body" style="box-shadow:3px 3px 7px gray;border-radius:0px">
<form  action="changepasswordcode.php?uid=<?php echo $uid; ?>" method="POST" class="form" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-12 text-center">
<h2 style="font-weight:bold;color:#161F27">Change Password</h2> 
</div>
</div>
<br><br>
<div class="col-sm-12">
          <div class="row">
          <div class="col-sm-12">
        <span style="font-weight:bold;font-size:1.1em">Old Password:</span><br> <input type="password" class="form-control" placeholder="Enter Your Old Password" name="opwd">
          </div>
		  
		  
		  </div><br><br>
		  <div class="row">
		  <div class="col-sm-12">
        <span style="font-weight:bold;font-size:1.1em">New Password:</span><br> <input type="password"  class="form-control" placeholder="Enter Your New Password" name="npwd">
          </div>
		  
		  </div><br>

 


		  
		  
	
<br><br>

         <div class="row">
          <div class="col-sm-offset-3 col-sm-6" >
          <input type="submit" class="btn  btn-primary form-control" value="Update Password" name="sub">
          </div>
          </div>
          </div>
</form>


        
		

</div>



                       
                    </div>
					
                </nav>
          
				
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
