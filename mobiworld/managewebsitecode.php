<?php
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['pass'])))
{
	header("Location:index.php");

}
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
include("config.php");

$source="photo/phones/".basename($_FILES['image1']['name']);
$image1=$_FILES['image1']['name'];
move_uploaded_file($_FILES['image1']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['accimg1']['name']);
$accimg1=$_FILES['accimg1']['name'];
move_uploaded_file($_FILES['accimg1']['tmp_name'],$source);

$head1=$_POST['head1'];
$price1=$_POST['price1'];

$source="photo/phones/".basename($_FILES['image2']['name']);
$image2=$_FILES['image2']['name'];
move_uploaded_file($_FILES['image2']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['accimg2']['name']);
$accimg2=$_FILES['accimg2']['name'];
move_uploaded_file($_FILES['accimg2']['tmp_name'],$source);

$head2=$_POST['head2'];
$price2=$_POST['price2'];

$source="photo/phones/".basename($_FILES['image3']['name']);
$image3=$_FILES['image3']['name'];
move_uploaded_file($_FILES['image3']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['accimg3']['name']);
$accimg3=$_FILES['accimg3']['name'];
move_uploaded_file($_FILES['accimg3']['tmp_name'],$source);

$head3=$_POST['head3'];
$price3=$_POST['price3'];

$source="photo/phones/".basename($_FILES['image4']['name']);
$image4=$_FILES['image4']['name'];
move_uploaded_file($_FILES['image4']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['accimg4']['name']);
$accimg4=$_FILES['accimg4']['name'];
move_uploaded_file($_FILES['accimg4']['tmp_name'],$source);

$head4=$_POST['head4'];
$price4=$_POST['price4'];

$source="photo/phones/".basename($_FILES['image5']['name']);
$image5=$_FILES['image5']['name'];
move_uploaded_file($_FILES['image5']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['accimg5']['name']);
$accimg5=$_FILES['accimg5']['name'];
move_uploaded_file($_FILES['accimg5']['tmp_name'],$source);

$head5=$_POST['head5'];
$price5=$_POST['price5'];

$source="photo/phones/".basename($_FILES['bigimg']['name']);
$bigimg=$_FILES['bigimg']['name'];
move_uploaded_file($_FILES['bigimg']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['vid1']['name']);
$vid1=$_FILES['vid1']['name'];
move_uploaded_file($_FILES['vid1']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['vid2']['name']);
$vid2=$_FILES['vid2']['name'];
move_uploaded_file($_FILES['vid2']['tmp_name'],$source);

$source="photo/phones/".basename($_FILES['vid3']['name']);
$vid3=$_FILES['vid3']['name'];
move_uploaded_file($_FILES['vid3']['tmp_name'],$source);

 $q="UPDATE tbl_website  SET image1='$image1',image2='$image2',image3='$image3',image4='$image4',image5='$image5',accimg1='$accimg1',head1='$head1',price1='$price1',accimg2='$accimg2',head2='$head2',price2='$price2',accimg3='$accimg3',head3='$head3',price3='$price3',accimg4='$accimg4',head4='$head4',price4='$price4',accimg5='$accimg5',head5='$head5',price5='$price5',bigimg='$bigimg',vid1='$vid1',vid2='$vid2',vid3='$vid3' WHERE mid=5"; 
mysqli_query($con,$q);?>
<script>
alert("Content Updated Successfully");
</script>
<?php
header("location:managewebsite.php");
?>