<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	
	require_once('db_connection.php');
	// create a varaible for catch id number form other with GET Method.
	$id= $_GET['id'];


	// create sql query
	$sql="SELECT * FROM work WHERE id=$id";
	echo "<pre>";
	// take data from database.
	$query=mysqli_query($conn,$sql);


	// print into browser.
	// print_r(mysqli_fetch_assoc($query));


	$data=mysqli_fetch_assoc($query);// get data


 ?>

	<form action="" method="POST">
		<label for="name">Task</label>
		<input type="text" name="taskName" id="name" placeholder="Testing">
		
		<button>update</button>


	</form>
	
</body>
</html>