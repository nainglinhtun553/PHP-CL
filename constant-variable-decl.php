<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Constant</title>
</head>
<body>
	<h1>This constant variable declearation tutorials</h1>
	<hr>



	<?php 
//********************Note***********************








//********************Note***********************


	//define(name, value, case-insensitive) 
	//var let const


	// simple variable declearation 
	// $name ="code Lab";
	 // echo $name;



	 // constant declearation 
	 // define("NAME","Naing Lin Htun");
	 // output constant variable
	 // echo NAME;
	 // echo "<br>";

	 define("SNAME","Software Developer");


	function showMessage(){
		 echo SNAME;
		 echo "<br>";
	}

	showMessage();


	$arr=["Dog","fox","pig"];
	define("Arr",$arr);

	function output(){
		echo "the result of the arr is "."&nbsp;".Arr[1];
	}

	output();



	?>
</body>
</html>