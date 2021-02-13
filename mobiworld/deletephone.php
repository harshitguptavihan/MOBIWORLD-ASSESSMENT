<?php
include("config.php");
session_start();
$pid=$_REQUEST['pid'];
$q="delete from tbl_phone WHERE pid='$pid'";
mysqli_query($con,$q);
$q7="select count(pid) from tbl_phone";
$res7=mysqli_query($con,$q7);
if($row7=mysqli_fetch_array($res7))
{
	 $counts=$row7['count(pid)'];
   
}	
$conts=$_SESSION['phonecont'];
if($conts==$counts)
{
?>
<script>
alert("Phone Can't be deleted due to some Pending Orders.");
window.location="managephone.php";
</script>
<?php
}	
?>
<script>

window.location="managephone.php";
</script>


