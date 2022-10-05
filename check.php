<?php
	
	session_start();
			$con=mysqli_connect("localhost","root","","employability");
	
	if (isset($_POST['submit']))
	{
		$digit = $_SESSION['digit'];
		
			$formCaptcha = $_POST['captcha'];
	
			
		if($digit != $formCaptcha)
			{	

			//echo "<p style='color: red';>Invalid Captcha code</p>";

			$message="Invalid Captcha code| Please enter valid Captcha!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = 'log_in.php'</script>";	
			}
		
		
		
		else
			{
			$message="Logged In successfully!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = 'index1.php'</script>";	
			}
		
	}

?>	