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
	$desc = $_POST['c_desc'];
	$category = $_POST['category'];
	$tid = $_POST['tid'];
	$synopsis = $_POST['synopsis'];
	$target = "img/".basename($image);
	
	$sql = "INSERT INTO `courses`(`cid`, `cname`, `c_price`, `image`, `c_desc`, `category`, `tid`, `synopsis`) VALUES(NULL, '$name','$price','$image','$desc','$category','$tid','$synopsis')";
	$sql2=mysqli_query($conn, $sql);
	if($sql2)
	{
		echo"Inserted";
	}
	else
	{
		echo"Failed";
	}
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
	{
		echo "Image uploaded successfully";
	}
	else
	{
		echo "Failed to upload image";
	}

	
}
  $result = mysqli_query($conn, "SELECT * FROM courses");
?>
