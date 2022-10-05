<?php
session_start();
	
	if(isset($_POST['update']))
	{
		$connection = mysqli_connect("localhost","root","","employability");
		
	
		
		$fid=$_POST['fid'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		
		
		

		$query=" UPDATE `faq` SET `fid`='$fid',`question`='$question',`answer`='$answer' WHERE  fid='$fid'";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			
			header('location: manage_faq.php');
			echo "	jj";
		}
		else
		{
			
			header('location: update_faq.php');
			echo"nn";
		}	
		
	}
	?>