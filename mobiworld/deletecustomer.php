<?php
include("config.php");
session_start();
$uid=$_REQUEST['uid'];
$q="delete from tbl_user WHERE uid='$uid'";
mysqli_query($con,$q);
$q="select * from tbl_user";
$q7="select count(uid) from tbl_user";
$res7=mysqli_query($con,$q7);
if($row7=mysqli_fetch_array($res7))
{
	 $counts=$row7['count(uid)'];
   
}	
$conts=$_SESSION['cont'];
if($conts==$counts)
{
?>
<script>
alert("User Can't be deleted due to some Pending Orders.");
window.location="managecustomer.php";
</script>
<?php
}	
?>
<script>

window.location="managecustomer.php";
</script>