<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		//format=>
		//mysqli_connect('hostname','username','password','databasename');
		//where, localhost=host name,root=database username,''= database password,test=connect database name.
		$connection=mysqli_connect('localhost','root','','test');

		// has or hasnot conditon checking
		if($connection){
			echo "database connect success!";
		}else {
			// die() function mean close the database
			// mysqli_connection_error() mean that the error message returning.
			die("connection fail!".mysqli_connection_error());
		}

	 ?>
	
</body>
</html>