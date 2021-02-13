<!DOCTYPE html>
<?php
include("config.php");
$q="select * from tbl_phone where type='Phone'";
$r=mysqli_query($con,$q);
$TotalSet=mysqli_num_rows($r); 

?>
<html lang="en">
<head>
	<style>
	@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100" style="border:1px solid black;border-radius:10px">
					<table >
						<thead>
							<tr class="table100-head">
								<th class="column1">S.No.</th>
								<th class="column2">Brand</th>
								<th class="column3">Name</th>
								
								<th class="column4">Color</th>
								
								<th class="column5">Action</th>
							</tr>
						</thead>
						<tbody>
 <?php  
$i=1; 
 for($j=1;$j<=$TotalSet;$j++)
 {
  $SetRow=mysqli_fetch_array($r);
 
 ?>
<tr>
 <td class="column1"><?php echo $i; ?></td>
 <td class="column2"><?php echo $SetRow['brand']; ?></td>
 <td class="column3"><?php echo $SetRow['name'];
if(!$SetRow['qty']) 
{
	?>
<i class="zmdi zmdi-notifications-active animated infinite pulse" aria-hidden="true" style="color:maroon;margin-left:30px"></i>		
	<?php
	
}?></td>
 <td class="column4"><?php echo $SetRow['color']; ?></td>
 <td class="column5"><button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal<?php echo $SetRow['pid']; ?>">Update</button> <a href="deletephone.php?pid=<?php echo $SetRow['pid']; ?>" class="btn btn-danger">Delete</a></td>
 </tr>
 
<!-- Modal -->
<div id="myModal<?php echo $SetRow['pid']; ?>" class="modal fade" role="dialog" style="font-family:'Poppins', sans-serif">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title" style="font-weight:bold;display:inline-block">Update Details</h4>
		
		
      </div>
      
      <div class="modal-body">
        
		<form class="form" action="updatemobile.php">
		
  <div class="form-group">
    <label for="price" style="font-weight:bold;font-size:1.1em">Price:</label>
    <input type="text" class="form-control" style="border:1px solid black" id="price" value="<?php echo $SetRow['price']; ?>" name="price">
  </div>
  <div class="form-group">
    <label for="qty" style="font-weight:bold;font-size:1.1em">Quantity:</label>
    <input type="text" class="form-control" id="qty" style="border:1px solid black" value="<?php echo $SetRow['qty']; ?>" name="qty">
  </div>
  
  <input type="hidden" class="form-control"  value="<?php echo $SetRow['pid']; ?>" name="pid">
	<button type="submit" class="btn btn-success" style="font-weight:bold;font-size:1.1em">Update</button>	
	</form>	
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="font-weight:bold;font-size:1.1em" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <?php
 $i++;}
 ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>