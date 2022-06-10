<?php 

$con=mysqli_connect("localhost","root","");
if(!$con)
{
		echo "Not connected to server";
}

if(!mysqli_select_db($con,"employability"))
{
		echo "Not connected to database";
}

if (isset($_POST['ok']))
{	
	session_start();
	$name=$_POST['name'];
	$msg=$_POST['msg'];
	$date = date("Y/m/d");
	$time = date("h:i:sa");
	$sql = "INSERT INTO `review`(`b_id`, `name`, `message`, `date`, `time`) VALUES  (NULL,'$name','$msg','$date','$time')";
	if(mysqli_query($con,$sql))
	{
		header("location:review.php");
		
	}
	else
	{
		
	}
}
?>