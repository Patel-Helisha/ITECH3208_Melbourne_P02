<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM contact WHERE id='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_feedback.php");
else
	
	echo "NOT DELETED";
?>