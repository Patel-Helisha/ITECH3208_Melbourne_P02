<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM tutor WHERE tid='$_GET[tid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_tutor.php");
else
	echo "NOT DELETED";
?>