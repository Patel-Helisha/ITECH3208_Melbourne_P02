<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM result WHERE rid='$_GET[rid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_result.php");
else
	echo "NOT DELETED";
?>