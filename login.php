<?php
		$conn=mysqli_connect("localhost","root","");
		
		if(!$conn)
		{
			die("Not connected to server");
		}
		
		if(!mysqli_select_db($conn,"employability"))
		{
			die ("Database not selected");
		}		
if (isset($_POST['submit']))
{	
	session_start();
	$name=$_POST['name'];
	$password=$_POST['password'];
	$_SESSION['name']=$name;
	$sel="select * from admin where name='$name' and password='$password'";
	$row=mysqli_query($conn,$sel);
	$result=mysqli_num_rows($row);
	if($result > 0)
	{
		header("location:manage_user.php");
	}
	else
	{
		header("location:opps.html");
	}
}
?>