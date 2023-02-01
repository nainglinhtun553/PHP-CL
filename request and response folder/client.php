<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Client site</title>
	<style>
		body{
			background-color:blue;
		}
	</style>
</head>
<body>
	<h1>Client Site</h1>

		<!-- GET|POST
		GET=><a href=""></a>
		POST=><form action="" method="post"></form> -->
		 <!-- post method with a tag -->
		<!-- <a href="server.php?name=nainglinhtun&job=programmer&address=Sagaing">Sever</a> -->

		<!-- using get method with form tag -->
		<!-- enctype='multipart/form-data' -->


		<form action="server.php" method="post" enctype='multipart/form-data'>
			First Name :<input type="text" name="firstName" id="" required><br>
			
			Second Name :<input type="text" name="secondName" id="" required><br>
			Password : <input type="password" name="passWord" required=""> <br>
			Job : <input type="text" name="job" required><br>
			Address: <input type="text" name="address" required><br>

			<select name="gender" id="">
				<option value="Male">Male</option>
				<option value="Felmale">Felmale</option>
			</select><br>

			<input type="file" name="myImage"><br>

			<!-- <button type="submit">Click to Send</button> -->
			<input type="submit" value="Click to Send">
		</form>

</body>
</html>