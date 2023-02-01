
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		h1{
			color:red;

		}
	</style>
</head>
<body>
	

	<?php 

 echo "<h1>Server Page</h1>";
 echo "<pre>";
 // var_dump($_REQUEST)."<br>";
 // var_dump($_REQUEST['name']);
 // echo "<br>";
 // var_dump($_REQUEST['address']);

 // var_dump($_POST["passWord"]);

var_dump($_POST);
echo "<br>";
var_dump($_FILES);
echo "<hr>";
echo "your first nmae is"."&nbsp;". $_POST["firstName"];
echo "<br>";
echo "your last name is"."&nbsp;". $_POST["secondName"];
echo "<br>";
 echo "your password is"."&nbsp;". $_POST["passWord"];
 echo "<br>";
 echo "your job is"."&nbsp;". $_POST["job"];
 echo "<br>";
 echo "your address is"."&nbsp;". $_POST["address"];
  echo "<br>";
 echo "<h1>Your address is {$_POST["address"]}</h1>";
 echo "<br>";
echo "your gender is "."&nbsp;". $_POST["gender"];
echo "<br>";
// echo "your image is "."&nbsp;". $_POST["myImage"];

 ?>
</body>
</html>