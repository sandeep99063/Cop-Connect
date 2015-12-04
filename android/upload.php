<?php
error_reporting(E_ALL);
//if(isset($_POST['ImageName'])){
//$imgname = $_POST['ImageName'];
//echo $imgname."  ".$_POST['base64'];
$imsrc=base64_decode($_POST['rohit']);
echo $imsrc;

$fp = fopen('rohit1.jpg', 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
	echo "Image uploaded";
}else{
	echo "Error uploading image";
}


echo "nope";
?>