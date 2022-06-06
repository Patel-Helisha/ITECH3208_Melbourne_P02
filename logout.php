<?php
	$con=mysqli_connect("localhost","root","","employability");
	session_start();

	session_destroy();
	header("location:index.php"); 
?>