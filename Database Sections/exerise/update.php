<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Your Information</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
  	*{
  		font-size:14px;

  	}
  </style>


</head>
<body class="bg-dark">
	<div class="container">
		

		<!-- php code for form update function -->
			<?php 

				require_once('db_connection.php');
				$id=$_GET['id'];


				$sql="SELECT * FROM user WHERE id='$id'";



				$query=mysqli_query($conn,$sql);

				$data=mysqli_fetch_assoc($query);


	if(isset($_GET['updateBtn'])){
		

			$taskId=$_GET['taskId'];
			$taskName=$_GET['userName'];
			$taskPhone=$_GET['userPhone'];



			$updateSQL="UPDATE user SET name='$taskName', phone='$taskPhone' WHERE id='$taskId' ";


			if(mysqli_query($conn,$updateSQL)){
				header("location:create.php");
			}else{
				echo"update error";
			}

		}
	 ?>



		<!-- php code for form update function -->
		<h4 class="text-warning my-2">Update Your Informations</h4>

		<form method="GET">
			<input type="hidden" name="taskId" id="" class="form-control w-25" value="<?php echo $data['id'] ?>">
			<div class=" mt-1  w-25">
				<label for="name" class="form-label">Name:</label>
				<input type="text" class="form-control" name="userName" id="name" placeholder="Enter Your Name" value="<?php echo $data['name']?>" required >

			</div>


			<div class="mb-3 mt-1 w-25">
				<label for="phone" class="form-label">Phone:</label>
				<input type="text" class="form-control" name="userPhone" id="phone" placeholder="Enter Your Phone Number" value="<?php echo $data['phone']?>" required>			
			</div>

			<button class="btn btn-warning text-white" name="updateBtn">Update</button>

		</form>
		


	</div>




</body>
</html>