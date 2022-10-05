<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM review WHERE b_id='$_GET[b_id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_review.php");
else
	
	echo "NOT DELETED";
?>