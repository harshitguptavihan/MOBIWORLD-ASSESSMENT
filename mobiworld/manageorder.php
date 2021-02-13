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
$q1="select * from tbl_order order by doo asc ";
if(isset($_POST['submit'])) {
	
	$newDate = date("Y-m-d", strtotime($_POST['date']));
  $q1="select * from tbl_order where doo='$newDate'";
   
}
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
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596;height:34px">
                                <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>&nbsp;
							 <a href="cancelledorder.php">
                            <button style="height:34px;width:130px;border-radius:5px;box-shadow:2px 2px 5px gray;" class="button btn"><span style="font-size:12px;font-weight:bold">Cancelled Orders</span>
                            </button>
                            </a>
							<a href="manageorder.php">
                            <button style="height:34px;width:130px;border-radius:5px;box-shadow:2px 2px 5px gray;" class="sm-md-offset-10 button btn"><span style="font-size:12px;font-weight:bold">All Orders</span>
                            </button>
                            </a>
                        </div>

                      
                    </div>
                </nav>
				<form method="POST" action="manageorder.php">
			<center>	<label for="birthday">Choose Date:</label>
<input type="date" id="birthday" name="date">
<button type="submit" class="btn btn-primary" name="submit">Submit</button></center>

</form>
				<br>
				<div class="col-sm-12">
               <table border="1px" class="bordered">
			     <tr style="background-color:#39334a">
			       <th style="text-align:center;width:110px;height:40px;color:white">Order ID</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Order By</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Product Name</th>
				   
			       <th style="text-align:center;width:110px;height:40px;color:white">Price</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Quantity</th>
				   <th style="text-align:center;width:15000px;height:40px;color:white">Order Date</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Payment</th>
				   <th style="text-align:center;width:110px;height:40px;color:white">Address</th>
			       <th style="text-align:center;width:110px;height:40px;color:white">Status</th>
				   <th style="text-align:center;width:110px;height:40px;color:white">Update</th>
				 
				 </tr>
               <?php
							   
			     while($row1=mysqli_fetch_array($res1))
				 {  
			   ?><tr> 
			      <td style="text-align:center;width:150px;height:40px;"><?php echo $row1['proid']; ?></td>
			       <?php
				   $uid=$row1['uid'];
				   $pid=$row1['pid'];
				   $orderdate=$row1['doo'];
				   $aid=$row1['address'];
				   $qty=$row1['qty'];
				   $ordid=$row1['proid'];
				   $q2="select name from tbl_address where uid='$uid'";
				   $res2=mysqli_query($con,$q2);
				   if($row2=mysqli_fetch_array($res2))
				   
				   {
				   ?>
					  <td style="text-align:center;width:150px;height:40px;"><?php echo $uname=$row2['name'];?> </td> 
				   <?php
				   }
				   $q3="select * from tbl_phone where pid='$pid'";
				   $res3=mysqli_query($con,$q3);
				   if($row3=mysqli_fetch_array($res3))
				   { ?>
					  <td style="text-align:center;width:250px;height:40px;"><?php echo $pname=$row3['name']; ?> </td>
					  
					  <td style="text-align:center;width:150px;height:40px;"><?php echo $price=$row3['price']; ?> </td>
				   <?php
				   } ?>
				   <td style="text-align:center;width:250px;height:40px;"><?php echo $qty ; ?> </td>
				   <td style="text-align:center;width:250px;height:40px;"><?php 
$newDate = date("d-m-Y", strtotime($orderdate));
 echo $newDate; ?></td>
				   <?php
				    $q4="select paymethod from tbl_address where aid='$aid'";
				    $res4=mysqli_query($con,$q4);
				    if($row4=mysqli_fetch_array($res4))
				    { ?> 
					   <td style="text-align:center;width:150px;height:40px;"><?php echo $pay=$row4['paymethod']; ?></td>
				    <?php 
					} ?>
				   
				   
				   <!-- Modal -->

				   
				   
				 
				     <td style="text-align:center;width:200px;height:40px;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row1['address']; ?>">View here</button></td>
				   <td style="text-align:center;width:410px;height:40px;">
				   <form action="updateorder.php?id=<?php echo $row1['oid']; ?>"method="POST" class="form">
				   <select name="status" class="form-control" style="margin-top:15px" >
				           <option><?php echo $row1['status'] ;?></option>
						   <option>--Update Status--</option>
						   <option>Ordered</option>
						   <option>Dispatched</option>
						   <option>In Transit</option>
						   <option>Delivered</option>
				   </select>
				   <td style="text-align:center;width:150px;height:40px;"><input type="submit" class="btn btn-danger" value="Update">
				   </form>
				   </td>		   
				  </tr>
				  
				  
				  
				  
				  
				  
				  
				 <!-- Modal -->
<div id="myModal<?php echo $row1['address']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Address Details<?php $g=$row1['address']; ?></h4>
		<?php  $q17="select * from tbl_address where aid= ".$row1['address']."";
				   $res13=mysqli_query($con,$q17);
				   if($rowz=mysqli_fetch_array($res13))
				   {
				    echo $rowz['name'];
				   
		?>
		

      </div>
      <div class="modal-body">
        
		
		
  
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" value="<?php echo $rowz['phone']; ?>" name="phone" readonly>
  </div>
  <div class="form-group">
    <label for="pincode">PinCode:</label>
    <input type="text" class="form-control" id="pincode" value="<?php echo $rowz['pincode']; ?>" name="pincode"  readonly>
  </div>
  <div class="form-group">
    <label for="street">Street:</label>
    <input type="text" class="form-control" id="street" value="<?php echo $rowz['street']; ?>" name="street"  readonly>
  </div>
  <div class="form-group">
    <label for="landmark">Landmark:</label>
    <input type="text" class="form-control" id="landmark" value="<?php echo $rowz['landmark']; ?>" name="landmark"  readonly>
  </div>
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" class="form-control" id="city" value="<?php echo $rowz['city']; ?>" name="city"  readonly>
  </div>
  <div class="form-group">
    <label for="state">State:</label>
    <input type="text" class="form-control" id="state" value="<?php echo $rowz['state']; ?>" name="state" readonly>
  </div>
  
 	
	
				   <?php }
				   ?>
      </div>
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
