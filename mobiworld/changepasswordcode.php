<?php
session_start();
include("config.php");
$uid=$_REQUEST['uid'];
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];

$q="select password from tbl_user where uid='$uid'";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
	$opass=$row['password'];
}
if($opwd==$opass)
{
	$q2="update tbl_user set password='$npwd' where uid='$uid'";
	mysqli_query($con,$q2);
	
?>
<script>
alert("Password Changed Successfully");
window.location="changepassword.php";
</script>
<?php	
}
else
{
?>
<script>
alert("Password Didn't Match");
window.location="changepassword.php";
</script>
<?php
}
?>