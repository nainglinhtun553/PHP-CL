<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>encrypt and Decrypt
	process</title>
</head>
<body>
	<?php
		
		echo "Encrypt and Decrypt";
		echo "<hr>";
		$name ="naing lin htun";
		// encrypt the text using md5()
		$encName=md5($name); // encrypt the value using md5 process
		$secName=sha1($name);

		$thirdName=crypt($name,"NLT"); //($name,"Naing");
		echo $secName;
		echo "<br>";
		echo $encName;
		echo "<br>";
		echo $thirdName;


	?>


	<hr>
	<h1>Password Hash</h1>
	<hr>

	<?php
		$password ="password123";

		$passwordhash=password_hash($password, PASSWORD_DEFAULT);// (plaintext,algorithm)

		echo "the default password result is"."&nbsp;"."$password";
		echo "<br>";
		echo "<h1>the hash password result is</h1>"."&nbsp;".$passwordhash;

		$result=password_verify($password, $passwordhash);
		echo "<br>";
		var_dump($result);
		echo "<br>";
		echo password_verify("naing lin htun",$passwordhash)? "this is same password":"this is wrong password";

	?>



</body>
</html>