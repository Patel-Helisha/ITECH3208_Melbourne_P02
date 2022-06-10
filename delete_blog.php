<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM blog WHERE b_id='$_GET[b_id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_blog.php");
else
	echo "NOT DELETED";
?>