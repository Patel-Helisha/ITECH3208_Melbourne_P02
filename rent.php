<?php
	$con=mysqli_connect("localhost","root","","employability");
	if(isset($_POST['submit']))
	{
		//session_start();
		$start=$_POST['start'];
		$end=$_POST['end']; 
		$id=$_POST['id'];
		$sd= strtotime($start);
		$ed= strtotime($end); 
		$diff = $ed - $sd;
		$days = $diff/(60*60*24);
		$_SESSION['start']=$start;
		$_SESSION['end']=$end;
		
		if($days > 30) 
		{
			$message="Invalid Number of Days  |   Limit upto 30 days. Thank You";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$sql="INSERT INTO `booking_cal`(start,end) VALUES ('$start','$end')";
			if(mysqli_query($con,$sql))
			{
				echo"inserted"; 
				header ("location:/ITECH3208/user/index.php");
			}
			else
			{
				echo "Not inserted"; 
			}
		}
	}
?>
