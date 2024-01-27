<?php
$servername="localhost";
$username="root";
$password="";
$database="form";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
	die("error detected".mysqli_error());
}
else
{
	echo "connection established successfully";
}
?>