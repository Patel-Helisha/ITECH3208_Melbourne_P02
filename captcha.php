<?PHP


  // initialise image with dimensions of 120 x 30 pixels
  $image = @imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");

  // set background to white and allocate drawing colours
  $background = imagecolorallocate($image, 197, 54, 130);
  imagefill($image, 0, 0, $background);
  $linecolor = imagecolorallocate($image, 246, 102, 180);
 $textcolor = imagecolorallocate($image, 253, 254, 254);

  // draw random lines on canvas
  for($i=0; $i < 6; $i++) {
    imagesetthickness($image, rand(1,3));
    imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
  }

  session_start();
	
	
	function random_strings($length_of_string)
{
 
    // String of all alphanumeric character
    $str_result = '12Ady';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),
                       0, $length_of_string);
}
 
// This function will generate
// Random string of length 10

	
  // add random digits to canvas
  $digit = '';
  for($x = 15; $x <= 95; $x += 20) {
    $digit .= ($num = random_strings(5));
    imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
	
  }

  // record digits in session variable
  $_SESSION['digit'] = $digit;
  $_SESSION['num'] = $num;
  
	
  // display image and clean up
  header('Content-type: image/png');
  imagepng($image);
  imagedestroy($image);
?>