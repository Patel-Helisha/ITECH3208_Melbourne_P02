<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM assignment WHERE aid='$_GET[aid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_assignment.php");
else
	echo "NOT DELETED";
?>