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

if (isset($_POST['submit']))
{	
	session_start();
	$email=$_POST['email'];
	$plaintext_password=$_POST['password'];
	$sel2=mysqli_query($con,"SELECT * FROM `register` WHERE email='$email'");
	$row2 = mysqli_fetch_assoc($sel2);
	$fname =$row2['fname'];
	$pwd =$row2['password'];
	$_SESSION['fname']=$fname;
	$_SESSION['email']=$email;
	
	$digit = $_SESSION['digit'];

	
	$capt = $_POST['capt'];
	//echo $capt;
	//echo "<br>";
	$textinput = $_POST['textinput'];
	//echo $textinput;
	
	$verify = password_verify($plaintext_password, $pwd);
	
	
	
	$sel="select * from register where email='$email' and password='$pwd'";
	//$sel1="select * from admin where email='$email' and password='$pass'";
	$row=mysqli_query($con,$sel);
	//$row1=mysqli_query($con,$sel1);
	$result=mysqli_num_rows($row);
	//$_SESSION['email']=$email;
	//$result1=mysqli_num_rows($row1);
	if($result > 0 && $capt == $textinput)
	{
	
		$_SESSION['email']=$email;
		header("location:index1.php");
	}
	
	elseif($result > 0 && $capt != $textinput)
	{
		$message="Invalid  captcha code  | Enter valid code";
		
		echo "<script type='text/javascript'>alert('$message');";
		echo "window.location.href = '/ITECH3208/user/log_in.php'</script>";
	}
	
	else{
		
		$message="Invalid Details  | Enter valid details";
		
		echo "<script type='text/javascript'>alert('$message');";
		echo "window.location.href = '/ITECH3208/user/log_in.php'</script>";
		
	}
	
}
?> 