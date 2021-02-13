<?php
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='oms';

if(!$con=mysqli_connect($db_host,$db_user,$db_pwd,$database))
die("can't Connect to Database");


?>