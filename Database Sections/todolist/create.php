<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create row</title>
</head>
<body>
	<h1>Todo List</h1>
	<a href="read.php">Read</a><br><br>
	<!-- action in php mean link connection of page to another page -->
	<form action="" method="POST">
			<label for="name">Your Tesks</label>
			<input type="text" name="taskName" id="name" placeholder="Enter your tesks">
			<button name="addBtn">Add</button>
	</form>

	<?php 

	// connect to db connection.php
	require_once("db_connection.php");

		if(isset($_POST['addBtn'])){
			$taskName= $_POST['taskName'];
			
			

			// form data validation message
			// form ကို စစ်လို့ blank အခြေအနေ ဖြစ်ခဲ့လျှင် Message is required ဖော်ပြပေးပြီး | မဖြစ်ခဲ့ရင် data ကို database ထဲမှာ သိမ်းပေးရမည်။ 
			if($taskName == " " || $taskName == null){
				echo"<small style='color:red;'>Message is required</small>";
			}else{
				// sql query
			// name is field name into work database.
			$sql=" INSERT INTO work(name) VALUES('$taskName') ";

			// $conn mean database connection variable name from db_connection.php .
			//$sql mean query data variable name.

			// if insert or not insert condtion.
			if(mysqli_query($conn,$sql)){
				header("location:read.php");
			}else{
				echo "Query Fail..".mysqli_error();	

			}

		}
		}

 	?>


</body>
</html>