<?php
session_start();
$con=mysqli_connect("localhost","root","","oms");
if(isset($_POST['sub']))	
{
		
	 $email=$_POST['email'];	
	 $pass=$_POST['pass'];
	
include("config.php");



$date=date("d-m-Y");




if($email=='admin@gmail.com')
{
  $q="SELECT * from tbl_admin where email='$email' && password='$pass'";
  $query=mysqli_query($con,$q);
  $row=mysqli_fetch_array($query);
  if($email==$row['email'] and $pass==$row['password'])
    {
	echo $_SESSION['email']=$email;
	echo $_SESSION['pass']=$pass;
	
	$qp="INSERT INTO `logindetails` (`email`, `password`, `details`, `date`) VALUES ( '$email', '$pass', 'SUCCESS', '$date');";
  $query=mysqli_query($con,$qp);
	header("Location:admin.php");
	}
else
{
?>
<script>
alert("Username Or Password is Incorrect!!!");
window.location="login.php";
</script>
<?php
}
} 
else
{
$q="SELECT * from tbl_user where email='$email' && password='$pass'";
  $query=mysqli_query($con,$q);
  $row=mysqli_fetch_array($query);
  if($email==$row['email'] and $pass==$row['password'])
    {
	echo $_SESSION['email']=$email;
	echo $_SESSION['pass']=$pass;
	
	
	
	$qp="INSERT INTO `logindetails` (`email`, `password`, `details`, `date`) VALUES ( '$email', '$pass', 'SUCCESS', '$date');";
  $query=mysqli_query($con,$qp);
	header("Location:index.php");
	}	
	
	else
{
?>
<script>
alert("Username Or Password is Incorrect!!!");
window.location="login.php";
</script>
<?php
$qp="INSERT INTO `logindetails` (`email`, `password`, `details`, `date`) VALUES ( '$email', '$pass', 'Faild', '$date');";
  $query=mysqli_query($con,$qp);
}
}
}




?>