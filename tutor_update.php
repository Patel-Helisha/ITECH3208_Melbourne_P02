<?php
session_start();
	
	if(isset($_POST['update']))
	{
		$connection = mysqli_connect("localhost","root","","employability");
		
	
		
		$tid=$_POST['tid'];
		$tname=$_POST['tname'];
				
		

		$query=" UPDATE `tutor` SET `tid`='$tid',`tname`='$tname' WHERE  tid='$tid'";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			
			header('location: manage_tutor.php');
			echo "	jj";
		}
		else
		{
			
			header('location: update_tutor.php');
			echo"nn";
		}	
		
	}
	?>