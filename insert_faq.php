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
	
	$question = $_POST['question'];
	$answer = $_POST['answer'];

	
	$sql = "INSERT INTO `faq`(`fid`, `question`, `answer`) VALUES(NULL, '$question','$answer')";
	$sql2=mysqli_query($conn, $sql);
	if($sql2)
	{
		echo"inserted";
		header('location:manage_faq.php');
	}
	
	
	else
	{
		echo "Failed to insert data.";
	}

	
}
  $result = mysqli_query($conn, "SELECT * FROM faq");
?>
