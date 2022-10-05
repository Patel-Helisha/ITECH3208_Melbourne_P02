<?php

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo "Not connected to server";
}

if(!mysqli_select_db($conn,"employability"))

{
	echo "Connected to database";
}
if (isset($_POST['submit'])) 
{
	$image = $_FILES['image']['name'];
	$name = $_POST['cname'];
	$price = $_POST['c_price'];
	$category = $_POST['category'];
	$tid = $_POST['tid'];
	$synopsis = $_POST['synopsis'];
	$target = "img/".basename($image);
	
	$sql = "INSERT INTO `courses`(`cid`, `cname`, `c_price`, `image`, `category`, `tid`, `synopsis`) VALUES(NULL, '$name','$price','$image','$category','$tid','$synopsis')";
	$sql2=mysqli_query($conn, $sql);
	if(($sql2) && (move_uploaded_file($_FILES['image']['tmp_name'], $target)))
	{
		header('location:manage_course.php');
	}
	
	
	else
	{
		echo "Failed to insert data.";
	}

	
}
  $result = mysqli_query($conn, "SELECT * FROM courses");
?>
