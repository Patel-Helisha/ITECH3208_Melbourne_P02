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
	$h1=$_POST['fname'];
	$h2=$_POST['lname'];
	$h3=$_POST['email'];  
	$h4=$_POST['pno'];
	$h5=$_POST['password'];
	
	$in="INSERT INTO `register`(`fname`, `lname`, `email`, `pno`, `password`) VALUES ('$h1','$h2','$h3','$h4','$h5')";
if(mysqli_query($conn,$in))
{
	header('location:log_in.php');
	echo"Record inserted successfully";
	}
else
{
	echo"fail to insert record";
}
}
?>