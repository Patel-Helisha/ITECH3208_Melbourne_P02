<?php
	
	$con=mysqli_connect("localhost","root","","employability");
	
	$aid=$_GET['aid'];
	$status=$_GET['status'];
	
	$query="UPDATE assignment SET status=$status WHERE aid=$aid";
	
	mysqli_query($con,$query);
	
	header('location:manage_assignment.php');
	
	
?>