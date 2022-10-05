<?php	
			

 
			session_start();
			$con=mysqli_connect("localhost","root","","employability");
			
			$res=mysqli_query($con,"select fname from register");
$fname=$_SESSION['fname'];
			if(isset($_SESSION['email']))
				
{
	$font="C:\wamp64\www\ITECH3208\user\BRUSHSCI.TTF";
	$image=imagecreatefromjpeg("certificate\certificate.jpg");
	$color=imagecolorallocate($image,179,0,71);
	imagettftext($image,50,0,360,350,$color,$font,$_SESSION['fname']);
	
	$file=$_SESSION['fname'];
	$file_path="certificate/".$file.".jpg";
	$file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);

	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,-1,70,211,150);
	$pdf->Output();

	
	
}
?>

