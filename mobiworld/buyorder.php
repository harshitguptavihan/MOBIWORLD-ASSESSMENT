<?php
include("config.php");
session_start();
$rnd=mt_rand(10000000,1000000000);
$email=$_SESSION['email'];
$proid=$_SESSION['proid'];
$q4="select * from tbl_phone where pid='$proid'";
	$res4=mysqli_query($con,$q4);
	while($row4=mysqli_fetch_array($res4))
	{
		$pname=$row4['name'];
	}
//$_SESSION['email']=$email
$q="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$q);
if($row=Mysqli_fetch_array($res))
	 $uid=$row['uid']; 
  
	$q3="select aid from tbl_address where uid='$uid'";
	$res2=mysqli_query($con,$q3);
	while($row=mysqli_fetch_array($res2))
	{
		$aid=$row['aid'];
	}
	$query="insert into tbl_order (uid,pid,doo,address,proid,status) values('$uid','$proid',curdate(),'$aid','$rnd','Ordered')"; 
 mysqli_query($con,$query); 
 
			   $email=$_SESSION['email'];
               $r="select uid from tbl_user where email='$email'";
			   $res=mysqli_query($con,$r);
			   while($row=mysqli_fetch_array($res))
			   $uid=$row['uid'];
		        $qu1="delete from tbl_cart where uid='$uid'";
			   mysqli_query($con,$qu1);
$q1="select qty from tbl_phone where pid='$proid'";
$res1=mysqli_query($con,$q1);
			   while($row1=mysqli_fetch_array($res1))
				 $qty=$row1['qty']-1;
				$q2="update tbl_phone set qty='$qty' where pid='$proid'";
				mysqli_query($con,$q2);
				unset($_SESSION['proid']);
	 
 $q5="select * from tbl_user where email='$email'";
	$res5=mysqli_Query($con,$q5);
	if($row5=mysqli_fetch_array($res5))
	{
		$name=$row5['name'];
		$mailto=$row5['email'];
	}
    $mailSub = "Order Confirmation";
		$b="<br>";
   $mailMsg ="Dear ".$name." \n your order of ".$pname." with Order ID " .$rnd. " has been confirmed.".$b.$b.$b."This is auto generated mail please don't reply us";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "shopmobiworld@gmail.com";
   $mail ->Password = "mobiworld123";
   $mail ->SetFrom("shopmobiworld@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   { ?>
       <script>
	     alert("Order Successfully Placed");
	     window.location="corder.php";
	   </script>
  <?php  }  
   else 
   {
	   ?>
	   <script>
	     alert("Order Successfully Placed");
	     window.location="corder.php";
	   </script>
<?php } ?>
	
	
	
	


	
	
 
	
	
	
	

