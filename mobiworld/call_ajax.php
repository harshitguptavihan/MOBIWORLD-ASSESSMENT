<?php
include('config.php');
$s1=$_REQUEST["n"];
$select_query="select * from tbl_phone where name like '%".$s1."%'";
$sql=mysqli_query($con,$select_query) or die (mysqli_error());
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='view.php?product=".$row['pid']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='photo/phones/".$row['image']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['price'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>