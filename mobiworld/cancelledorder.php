<?php
include("config.php");

session_start();
error_reporting(0);

if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];

$q="select * from tbl_admin where email='$email' and password='$pass'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);

//for tbl_order
$q1="select * from tbl_cancel order by caid desc ";
$res1=mysqli_query($con,$q1);

$q3="select * from tbl_order";
$res3=mysqli_query($con,$q3);

$notifiy=0;
while($row3=mysqli_fetch_array($res3))
{
	$onoti=$row3['status'];
	if($onoti=='Ordered')
	{
		 $notifiy++;
	}
	
}
$q5="select * from tbl_return";
$res5=mysqli_query($con,$q5);

$noti=0;
while($row4=mysqli_fetch_array($res5))
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
.button1{
transition:0.1s;
}

.button:hover{
transition:0.1s;
	transform:scale(1.03);
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
					<li>
					 <a href="managecustomer.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Manage Customer</a>
					</li>
                    <li class="active">
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
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596;">
                                <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>
                        </div>

                      
                    </div>
                </nav>
				<br>
				<div class="col-sm-12">
               <table border="1px" class="bordered">
			     <tr style="background-color:#39334a">
			       <th style="text-align:center;width:70px;height:40px;color:white">S No.</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Order By</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Product Name</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Price</th>
			       
			       <th style="text-align:center;width:110px;height:40px;color:white">Cancel Date</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Reason</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Action</th>
				 
				 </tr>
               <?php
				$i=1;			   
			     while($row1=mysqli_fetch_array($res1))
				 {  
			   ?><tr> 
			      <td style="text-align:center;width:150px;height:40px;"><?php echo $i; ?></td>
			       <?php
				   $uid=$row1['uid'];
				   $pid=$row1['pid'];
				   $canceldate=$row1['canceldate'];
				   $reason=$row1['reason'];
				   $q2="SELECT name from tbl_user where uid='$uid'";
				   $res2=mysqli_query($con,$q2);
				   if($row2=mysqli_fetch_array($res2))
				   {
					   $uname=$row2['name'];
				   }
				   ?>
				   <td style="text-align:center;width:250px;height:40px;"><?php echo $uname ; ?> </td>
				  <?php
				   $q3="select * from tbl_phone where pid='$pid'";
				   $res3=mysqli_query($con,$q3);
				   if($row3=mysqli_fetch_array($res3))
				   { ?>
					  <td style="text-align:center;width:250px;height:40px;"><?php echo $pname=$row3['name']; ?> </td>
					  <td style="text-align:center;width:150px;height:40px;"><?php echo $price=$row3['price']; ?> </td>
				   <?php
				   } ?>
				   <td style="text-align:center;width:250px;height:40px;"><?php echo $canceldate; ?></td>
				  
				   
				   
				   <!-- Modal -->

				   
				   
				 
				     <td style="text-align:center;width:150px;height:40px;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row1['caid']; ?>">View here</button></td>
					 
					 <td style="text-align:center;width:150px;height:40px;"><a href="deletecancel.php?cid=<?php echo $row1['caid']; ?>" class="btn btn-danger" >Delete</a></td>
				   	   
				  </tr>
				  
				  
				  
				  
				  
				  
				  
				 <!-- Modal -->
<div id="myModal<?php echo $row1['caid']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cancel Reason</h4>
		
		

      </div>
      <div class="modal-body">
        
		
		
  
  <div class="col-sm-12">
    <label for="phone">Reason:</label>
    <textarea cols="5" rows="5"	class="form-control" id="phone" readonly><?php echo $reason; ?></textarea>
  </div>
  
      </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
			   <?php 
			   
				$i++; }
			   ?>
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
