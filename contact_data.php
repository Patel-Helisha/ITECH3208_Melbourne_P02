<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo"server not connected";
}
else
{
	echo"server connected";			// connection is established
}
if(!(mysqli_select_db($conn,"employability")))
{
	echo"no database selected";
}
else
{
	echo"database selected";
}
if(isset($_POST['submit']))
{
	$h1=$_POST['uname'];
	$h2=$_POST['mail'];
	$h3=$_POST['message'];  

	
	$in="INSERT INTO `contact`(`uname`, `mail`, `message`) VALUES ('$h1','$h2','$h3')";
if(mysqli_query($conn,$in))
{
	header('location:index1.php');
	echo"Your feedback received successfully, thank you";
	}
else
{
	echo"fail to get your feedback";
}
}
?>