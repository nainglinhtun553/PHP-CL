<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Process</title>
</head>
<body>
	<h3>Login Form</h3>



	<form action="" method="POST">
		Email <input type="email" name="userEmail" id=""><br>
		Password <input type="password" name="userPassword" id=""><br>

		<input type="submit" value="Log In" name="loginBtn">

	</form>


	<?php 

		



		// check condition of click or unclick on login button
		//if(isset($_POST['loginBtn'])){

			//************************************************************************ just for knowledge********************

			//first password hash to hide the default password string.
			//$hashPassword=password_hash($password, PASSWORD_BCRYPT);

			// tempoary output for password encrypt.
			// echo $password;
			// echo "<br>";
			// echo$hashPassword;
			// echo"<br>";



	
			
			// check condition equal or not equal to the normal password with the encrypt password value.
			//$result=password_verify($password, $hashPassword);
			// var_dump($result);

			//************************************************************************ just for knowledge********************


			//catch useremail and userpassword from login form. 
			//$userEmail=$_POST['userEmail'];
			//$userPassword=$_POST['userPassword'];


			//temporary output to check error
			//echo $userEmail.",".$userPassword;



			//check condition of default email and password are equal or not equal to the useremail and password
			//if($email==$userEmail && password_verify($userPassword, $password)){
			// 	echo "Login Success!";
			// }else{
			// 	echo "Login Fail! Try Again.....";
			// }

		//}

		
		//create default email
		$email="admin@gmail.com";

		//create default password
		$password='$2y$10$m80Qu4GTB49241cddUMTMemEM5hXeU/Fd4ggKCO08QNXAb0qhq.p6';// admin123

		// check condition click or unclick on loginBtn
		if(isset($_POST['loginBtn'])){

			// catch user input email using post method from form.
			$userEmail=$_POST['userEmail'];
			// catch user input password using post method from form.
			$userPassword=$_POST['userPassword'];



			// check condition of default email and password are equal or not equal to the useremail and password
			//password_verify (password,hash)

			if($email==$userEmail && password_verify($userPassword,$password)){
				echo "Login Success!";
			}else{
				echo "Login Fail!";
			}

		}




	 ?>



</body>
</html>