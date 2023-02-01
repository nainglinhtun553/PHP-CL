<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>validation form </title>
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


		<style>
			
			.color{
				color:red;
			}
		</style>
</head>
<body>

	<?php 
	//step-1
		// default take blank conditon.
		$errorName=$errorAddress=$errorEmail=$errorPhone="";

		
		// default take blank with variable assigned condition. 
		$name=$email=$phone=$address="";
		

		//step-3
		if(isset($_POST['btnSave'])){
							// if click condition is blank the error message will show.
							// for name checking
							if($_POST['name']==null || $_POST['name']==" " || empty($_POST['name'])){
									$errorName="Please Fill Name Field!";
							}else{
								$name=$_POST['name'];
							}

							//for email checking
							if($_POST['email']==null || $_POST['email']==" " || empty($_POST['email'])){
									$errorEmail="Please Fill Email Field!";
							}else{
								$email=$_POST['email'];
							}


							//for phone checking
							if($_POST['phone'] == null || $_POST['phone']==" " || empty($_POST['phone'])){
									$errorPhone="Please Fill Phone Field!";	
							}else{
								$phone=$_POST['phone'];
							}

							//for address checking
							if($_POST['address']==null || $_POST['address']==" " || empty($_POST['address'])){
									$errorAddress="Please Fill Address Field!";
							}else{
								$address=$_POST['address'];
							}


							// if not equal to blank to show the assign values.
							if($name !="" && $email !="" && $address !="" && $phone=""){
								$name;
								$email;
								$phone;
								$address;
								

							}
		
			
				}
		 ?>



	<div class="container mt-5">
		<div class="row">
			<div class="col-6 offset-3 shadow">
				<form method="POST">
					
				<div class="my-3 px-5">
					<label for="">Name</label>
						<input type="text" name="name"  class="form-control" placeholder="Enter Name">
						<small class="text-danger"><?php echo $errorName; ?></small>
				</div>

				<div class="my-3 px-5">
					<label for="">Email</label>
						<input type="email" name="email"  class="form-control" placeholder="E.g example@gmail.com">
						<small class="text-danger"><?php echo $errorEmail; ?></small>
				</div>

				<div class="my-3 px-5">
					<label for="">Phone</label>
						<input type="number" name="phone"  class="form-control" placeholder="E.g 09-xxxxxxxxxx">
						<small class="text-danger"><?php echo $errorPhone; ?></small>


				</div>

				<div class="my-3 px-5">
						<label for="">Address</label>
						<textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter Address"></textarea>
						<small class="text-danger"><?php echo $errorAddress; ?></small>

				</div>

				<div class="my-3 px-5 float-end">
					<input type="submit" value="Save" class="btn bg-dark text-white" name="btnSave">
			</div>

				</form>



							
							<h6 class="color"><?php echo $name; ?></h6>
							<h6 class="color"><?php echo $email; ?></h6>
							<h6 class="color"><?php echo $address; ?></h6>
				


				
			</div>
		</div>
		





	</div>
	
</body>
	<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

</html>