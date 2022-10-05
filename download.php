<?php 

$file = $_GET['file']. ".docx";
header("Content-type:application/docx");
header("Content-Disposition:attachment;filename= ".urlencode($file));
$fb = fopen($file, "r");
while(!feof($fb)){
    echo fread($fb, 8192);
    flush();
}
fclose($fb);


?>