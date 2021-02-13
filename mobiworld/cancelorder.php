<?php
include("config.php");
session_start();
$oid=$_REQUEST['oid'];

// harshit
 echo $qug="select * FROM tbl_order where oid='$oid';";
$resh=mysqli_query($con,$qug);
if($rh=mysqli_fetch_array($resh))
{
	echo $pid=$rh['pid'];
	echo $qt3=$rh['qty'];
$qh2="select qty from tbl_phone where pid='$pid'";
$resh1=mysqli_query($con,$qh2);
			   while($row1=mysqli_fetch_array($resh1))
				 $qty=$row1['qty']+$qt3;
			   $q3="update tbl_phone set qty='$qty' where pid='$pid'";
				mysqli_query($con,$q3);
}


$email=$_SESSION['email'];
$pid=$_SESSION['pid'];
$q3="select uid from tbl_user where email='$email'";
$res2=mysqli_query($con,$q3);
if($row=Mysqli_fetch_array($res2))
$uid=$row['uid'];
$creason=$_POST['creason'];
$reason=$_POST['reason'];
if($reason=='Others')
{
	
$q2="insert into tbl_cancel (uid,pid,oid,canceldate,reason)VALUES ('$uid','$pid','$oid',curdate(),'$creason')";
mysqli_query($con,$q2);
}
else
{
$q2="insert into tbl_cancel (uid,pid,oid,canceldate,reason)VALUES ('$uid','$pid','$oid',curdate(),'$reason')";
mysqli_query($con,$q2); 
}

$qu="select address FROM tbl_order where uid=(select uid from tbl_order where oid='$oid');";
$res=mysqli_query($con,$qu);
$count=0;
while($r=mysqli_fetch_array($res))

 $count++;
 

if($count!=1) 
{
 $q="DELETE from tbl_order where oid='$oid'";
 mysqli_query($con,$q);
} 
else
{
 $q1="delete  from tbl_address where aid=(select address from tbl_order where oid='$oid')";
$q="DELETE from tbl_order where oid='$oid'"; 
mysqli_query($con,$q1); 
mysqli_query($con,$q);
}



?>
<script>
alert("Ordered Cancelled Successfully.");
window.location="corder.php";
</script>