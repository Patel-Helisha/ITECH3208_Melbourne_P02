<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM register WHERE uid='$_GET[uid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_user.php");
else
	
	echo "NOT DELETED";
?>