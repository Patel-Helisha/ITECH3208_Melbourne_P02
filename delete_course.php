<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM courses WHERE cid='$_GET[cid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_course.php");
else
	echo "NOT DELETED";
?>