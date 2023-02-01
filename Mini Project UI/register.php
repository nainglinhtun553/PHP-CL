<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register page</title>
	<!-- <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.min.css"> -->
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-3">
				<div class="text-center">
					<a href="login.php">
						<button class="btn bg-primary text-white mb-3" style="width:200px;">Login</button>
					</a>
				</div>

				<div class="text-center">
					<a href="register.php">
						<button class="btn bg-success text-white mb-3" style="width:200px;">Register</button>
					</a>
				</div>

				<div class="text-center">
					<a href="logout.php">
						<button class="btn bg-danger text-white mb-3" style="width:200px;">Logout</button>
					</a>
				</div>
			</div>



			<div class="col-5">
				<div class="card">
					<div class="card-body">
						<h3 class="mb-3">Register Page</h3>
						<form method="POST">
							<div class="mb-3">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control"placeholder="Name">
							</div>

							<div class="mb-3">
								<label for="">Email</label>
								<input type="text" name="email" class="form-control"placeholder="Email">
							</div>

							<div class="mb-3">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control"placeholder="Password">
							</div>


							<div class="mb-3">
								<label for="">Confirm Password</label>
								<input type="password" name="confirmPassword" class="form-control"placeholder="Confirm Password">
							</div>

							<button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>

						</form>
					</div>
				</div>	
			</div>



		</div>
	</div>


	<?php 
	


	//step.4
	// start the session function to save data in session storage.
	session_start();
	// step.6
	// function for strong password
	function checkStrongPassword($password){
		// for assigning for default value.
		$upperStatus=false;
		$lowerStatus=false;
		$numberStatus=false;
		$specialStatus=false;


		// check for include or noinclude assign value
		//6.1.A-Z include	
		if(preg_match('/[A-Z]/',$password)){
			$upperStatus=true;

		}

		//6.2.a-z include	
		if(preg_match('/[a-z]/',$password)){
			$lowerStatus=true;

		}


		//6.3.0-9 include
		if(preg_match('/[0-9]/',$password)){
			$numberStatus=true;

		}

		//6.4 !@#$ include
		if(preg_match('/[!@#$*%^]/',$password)){
			$specialStatus=true;
		}


		// step-7 upperstatus,lowerstatus,specialstatus and numberstatus are true and wrong condition checking. 
		if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
			//echo "Strong Password";
			return true;
		}else{
			//echo"Weak Password";
			return false;
		}

		
	}
	

	// check condition click or unclick of register button
	if(isset($_POST['register'])){

		// catch userinput name,email,password and confirm password
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirmPassword=$_POST['confirmPassword'];


		// homework= string in php in w3school website
		// userpassword is under or over 6 number of wards.
		// strlen function is check the length of the string.

		
		// step.1 name,email,password and confirm password must not equal to blank condition.
		if($name !="" && $email!="" && $password!="" && $confirmPassword!=""){

					// step.2 password is grater or not greater than 6.
						if(strlen($password)>=6 && strlen($confirmPassword)>=6){


								// step.3 password is equal or not equal to comfirm password
								if($password==$confirmPassword){
									// step-8
									$status=checkStrongPassword($password);
									//var_dump($status);



									// step-9  checking strong password with if statement. 
									if($status){
									// step.5 insert the name,email,password and confirm password to session storage.
									$_SESSION['name']=$name;
									$_SESSION['email']=$email;
									// hash to password by using password hash function.
									$_SESSION['password']=password_hash($password, PASSWORD_BCRYPT);

									echo "Register Success";

									}else{
										echo "Your Password is not strong Password(e.g contain A-Z a-z 0-9 @$#&)";

									}

									

								}else{
									echo "Password not same. Try Again!";

								}



						}else{
							echo "Password must be greater than 6";
						}


		}else{
			echo "Need to fill!l";
		}


	}






	 ?>





</body>
<!-- <script src="bootstrap-5.2.1-dist/js/bootstrap.bootstrap.min.js"></script> -->
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</html>