<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>

	<h3>File Store</h3>
	 <!-- we must insert enctype='multipart/form-data' attribute to display photo information  -->
	<form action="" method="POST" enctype='multipart/form-data'>
		<!-- create upload form for upload image -->
		<input type="file" name="userProfile">
		<br><br>


		<!-- for save to create button -->
		<input type="submit" value="Save" name="storeProfile">

	</form>	

	<?php 
	// check click or unclick stroeprofile button
		if(isset($_POST['storeProfile'])){

			// echo "<pre>";
			// print_r($_FILES);


			$imgName=$_FILES['userProfile']['name'];
			$temName=$_FILES['userProfile']['tmp_name'];



			// create variable for save image
			$target_file='image/'.$imgName;			

			// writing move_upload_file() function to save uploaded images.
			// move_uploaded_file($temName, $target_file);
			
			// echo "success uploading........";


			if(move_uploaded_file($temName,$target_file)){
				move_uploaded_file($temName,$target_file);
				echo "sucess your upload"."&nbsp;".$imgName;

			}else {
				echo "error";
			}

		}

	 ?>
</body>
</html>