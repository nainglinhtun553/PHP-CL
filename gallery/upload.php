<?php

$name 	= $_FILES["photo"]["name"];		// name of photo
$tmp 	= $_FILES["photo"]["tmp_name"];	// real photo file
$type 	= $_FILES["photo"]["type"];		// type of photo

if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") 
{
	move_uploaded_file($tmp, "photo/$name");
	header("location: index.php");
} 
else 
{
	echo "<p style='color:red'> Invalid file format!, <a href='index.php'>try again</a>.</p>";
}

?>
