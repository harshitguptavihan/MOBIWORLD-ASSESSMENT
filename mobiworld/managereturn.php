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
$con=mysqli_connect("localhost","root","","oms");
$q="select * from tbl_admin where email='$email' and password='$pass'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);
$q1="update tbl_return set crntdate=curdate()";
mysqli_query($con,$q1);
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
$res5=mysqli_query($con,$q5);

$noti=0;
while($row4=mysqli_fetch_array($res5))
{
	 /*$dor=$row4['dor'];
	 $crnt=$row4['crntdate']; */
	if($row4['status']=='Return Requested')
	{
		 $noti++;
	}

      /*if($crnt>=date('d-m-y', strtotime($dor. ' + 7 days')))
		{
		$dx=date('d-m-y', strtotime($dor. ' + 7 days'));
		echo $query1="delete from tbl_return where crntdate='$dx'"; die;
		mysqli_query($con,$query1);
		}*/
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
					 <li class="active">
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
                            <button type="button" id="sidebarCollapse" class="btn navbar-btn" style="background-color:#7e4596">
                                <i class="glyphicon glyphicon-chevron-left" style="color:black"></i>
                                
                            </button>
                        </div>

                      
                    </div>
                </nav>
				
				<br>
<div class=" col-sm-12">
<table border="1px" class="bordered"> 
  <tr style="background-color:#39334a">
     <th style="text-align:center;width:70px;height:40px;color:white">S. No.</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Order ID</th>
     <th style="text-align:center;width:110px;height:40px;color:white">User Name</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Product Name</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Account No</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Passbook</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Address</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Reason</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Status</th>
     <th style="text-align:center;width:110px;height:40px;color:white">Update</th>
  </tr>
<?php 


include("config.php");
$q="select * from tbl_return order by rid desc";
$res=mysqli_query($con,$q);
$i=1;
while($row=mysqli_fetch_array($res))
{
	$oid=$row['oid'];
	$uid=$row['uid'];
	$pid=$row['pid'];
	$aid=$row['aid'];
	$rid=$row['rid'];
	$reason=$row['reason'];
	$ac=$row['acno'];
	$img=$row['pimg'];
	$sts=$row['status'];

$q1="select * from tbl_order where oid='$oid'";
	
$res1=mysqli_query($con,$q1);
while($row1=mysqli_fetch_array($res1))
{
	$proid=$row1['proid']; 
}

$q2="select * from tbl_phone where pid='$pid'";
$res2=mysqli_query($con,$q2);
while($row2=mysqli_fetch_array($res2))
{
	$pname=$row2['name'];
	
}

$q3="select * from tbl_address where aid='$aid'";
$res3=mysqli_query($con,$q3);
while($row3=mysqli_fetch_array($res3))
{
	$name=$row3['name'];
	$phone=$row3['phone'];
	$pincode=$row3['pincode'];
	$landmark=$row3['landmark'];
	$street=$row3['street'];
	$city=$row3['city'];
	$state=$row3['state'];
	
}

$q4="select * from tbl_user where uid='$uid'";
$res4=mysqli_query($con,$q4);
while($row4=mysqli_fetch_array($res4))
{
	$uname=$row4['name'];
	
}
?>

<?php


?>
  <tr>
    <td style="text-align:center;width:150px;height:40px;" ><?php echo $i; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $proid; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $uname; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $pname; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><?php echo $ac; ?></td>
    <td style="text-align:center;width:150px;height:40px;"><img src="photo/passbook/<?php echo $img; ?>" class="img img-responsive center-block" style="height:50px;width:50px" data-toggle="modal" data-target="#myModall<?php echo $rid; ?>"></td>
	<td style="text-align:center;width:150px;height:40px;"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $aid; ?>">View</button></td>
	<td style="text-align:center;width:150px;height:40px;"><button class="btn btn-success" data-toggle="modal" data-target="#myModalll<?php echo $rid; ?>">View</button></td>
	<td style="text-align:center;width:410px;height:40px;"><form action="updatereturn.php?id=<?php echo $rid; ?>"method="POST" class="form">
				   <select name="status" class="form-control" >
				           <option><?php echo $sts; ?></option>
						   <option>--Update Status--</option>
						   
						   <option>Return In Process</option>
						   <option>Order Returned</option>
						  
				   </select>
				   <td style="text-align:center;width:150px;height:40px;"><input type="submit" class="btn btn-danger" value="Update">
				   </form></td>
    
  </tr> 
  <div id="myModal<?php echo $aid; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Address Details<?php $g=$aid; ?></h4>
		<?php  $q17="select * from tbl_address where aid= ".$aid."";
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
  <?php 
  }
				   ?>
  
  
 	
	
				   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
  <div id="myModalll<?php echo $rid; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reason</h4>
		
		

      </div>
      <div class="modal-body">
        
		
		
  
  
  <div class="form-group">
    <label for="reason">Reason:</label>
    <textarea cols="5" rows="5" class="form-control" id="reason"  name="state" readonly><?php echo $reason; ?> </textarea>
  </div>
  
 	
	
				   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModall<?php echo $rid; ?>" class="modal" style="padding-top:40px;left: 0;top: 0;width: 100%;height: 100%;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.1);">
  <button type="button" class="close" data-dismiss="modal" style="position: absolute;top: 15px;right:50px;color: #ffffff;font-size: 40px;font-weight: bold;">&times;</button>
  <div class="modal-content" style=" margin: auto;display: block;width: 65%;max-width: 540px;">
  <?php
  $q18="select * from tbl_return where rid= ".$rid."";
				   $res14=mysqli_query($con,$q18);
				   if($rowx=mysqli_fetch_array($res14))
				   {
					   
					   ?>
  <img class="img img-responsive center-block" src="photo/passbook/<?php echo $rowx['pimg']; ?>" style="border-radius:5px;">
  <?php
				   }
  ?>
  </div>
</div>
<?php
$i++; }
?>
</table>
                
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
