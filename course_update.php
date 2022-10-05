<?php
session_start();
	
	if(isset($_POST['update']))
	{
		$connection = mysqli_connect("localhost","root","","employability");
		
	
		
		$cid=$_POST['cid'];
		$cname=$_POST['cname'];
		$c_price=$_POST['c_price'];
		$image=$_POST['image'];
		$category=$_POST['category'];
		$tid=$_POST['tid'];
		$synopsis=$_POST['synopsis'];
		
		

		$query=" UPDATE `courses` SET `cid`='$cid',`cname`='$cname',`c_price`='$c_price',`image`='$image',`category`='$category',`tid`='$tid',`synopsis`= '$synopsis' WHERE  cid='$cid'";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			
			header('location: manage_course.php');
			echo "	jj";
		}
		else
		{
			
			header('location: update_course.php');
			echo"nn";
		}	
		
	}
	?>