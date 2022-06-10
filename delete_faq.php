<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM faq WHERE fid='$_GET[fid]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_faq.php");
else
	
	echo "NOT DELETED";
?>