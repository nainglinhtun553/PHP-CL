<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
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
						<h3 class="mb-3">Login Page</h3>
						<form method="POST">
							<div class="mb-3">
								<label for="">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>

							<div class="mb-3">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>

							<button type="submit" class="btn bg-dark text-white float-end" name="login">Login</button>

						</form>
					</div>
				</div>	
			</div>



		</div>
	</div>

	<?php 


	// step-2import session function
	session_start();

	// step-1 click or unclick login bottom
		if(isset($_POST['login'])){
			//catch email and password from form.
			$userEmail=$_POST['email'];
			$userPassword=$_POST['password'];

			//email password is not blank condition.
			if($userEmail !="" || $userPassword !=""){

						// step-3 user email,password and session email,password equal or not equal condition checking
						if($userEmail == $_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])){
							echo "Login Sucess";

						}else{
							echo "Login Fail! Try Again......";
						}
			}else{
				echo "need to fill";

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