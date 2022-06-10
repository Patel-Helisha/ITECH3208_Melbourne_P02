<?php

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo "Not connected to server";
}

if(!mysqli_select_db($conn,"employability"))

{
	echo "database connected";
}
if (isset($_POST['submit'])) 
{
	$name = $_POST['tname'];

	$sql = "INSERT INTO `tutor`(`tid`, `tname`) VALUES (NULL, '$name')";
	$sql2=mysqli_query($conn, $sql);
	if($sql2)
	{
		echo"inserted";
		header("refresh:0.1; url=add_tutor.php");
	}
	else
	{
		echo"not inserted";
	}

}
	
  $result = mysqli_query($conn, "SELECT * FROM tutor");

?>
