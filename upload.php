 <?php
	//$user=$_POST['username'];
	$image=$_FILES['myfile'];
//	echo "Hello $user <br/>";
	echo "Your word document - ".$image['name'].", is submitted successfully!";

	move_uploaded_file($image['tmp_name'],"documents/".$image['name']);
	//here the "photos" folder is in same folder as the upload.php, 
	//otherwise complete url has to be mentioned
	?>