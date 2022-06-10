<?php
	$con=mysqli_connect("localhost","root","","video_renting");
	session_start();

	session_destroy();
	header("location:index.html");
?>