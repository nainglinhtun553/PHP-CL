<!-- 
	Get data=> show => Edit=> Update=> -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Update Page</title>

		</head>
	<body>

	<?php 
	
	// step-1 get data
	require('db_connection.php');	
	
	$id=$_GET['id'];

	// create sql query
	$sql=" SELECT * FROM work WHERE id = '$id'";
	
	// take data from database.
	$query=mysqli_query($conn,$sql);


	// print into browser.
	// print_r(mysqli_fetch_assoc($query));


	$data=mysqli_fetch_assoc($query);// get data

	//step3 edit data
	if(isset($_GET['updateBtn'])){
		$taskId=$_GET['taskId'];
		$taskName=$_GET['taskName'];
				
			// update process is starting
			 $updateSQL="UPDATE work SET name='$taskName' WHERE id=$taskId";

			 //if insert or not insert userdata to database.
			 if(mysqli_query($conn,$updateSQL)){
			 	header("location:read.php");
			 }else{
			 	echo "update error";
			 }
		}


 ?>		
	
<a href="read.php">List Page</a><br>
<br>
<form  method="GET">
	<!-- catch id -->
	<input type="hidden" name="taskId" value="<?php echo $data['id'] ?>" required>
	<label for="name">Tasks</label>
	<!-- step-2show -->
	<input type="text" name="taskName" id="name" value="<?php echo $data['name'] ?>" required>

	<button name="updateBtn">update</button>
</form>
	</body>
	</html>