<!DOCTYPE html>
<html>
<head>
	<title>ImageUpload</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br/>
		<input type="submit" value="upload">
	</form>
</body>
</html>
  
 //php portion
 