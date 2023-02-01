<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Read Page</title>
</head>
<body>
	<h1>Tasks List</h1>
	<a href="create.php">Create</a><br><br>
	<table border="1">
		<thead>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>Update and Delete</th>
		  </tr>
		</thead>

		<tbody>
			<!-- <tr>
				<td>1</td>
				<td>CodeLab</td>
				<td>1.1.2022</td>
				<td>
					<a href="#">Update</a>|
					<a href="#">Delete</a>
				</td>
			</tr> -->
	

	 <!-- row looping section into the database -->
	<?php 

	// link database connection
	require_once("db_connection.php");

	// read data into the database.
	$sql="SELECT * FROM work";

	// link query into the data with php.
	$query=mysqli_query($conn, $sql);
	
	
	// mysqli_num_rows() method mean the count of rows
	 $totalRow = mysqli_num_rows($query);//10
	// echo $row;


	 // echo "<pre>";
	 // var_dump(mysqli_fetch_assoc($query));




	// create table with html table in php
	 //{$row['id']} သည် $row ဆိုတဲ့ row ထဲမှာ ပါတဲ့ id တွေကို လှမ်းဖမ်းသည်။ $row သည် database မှာရှိတဲ့ row တစ်ခုချင်းစီအားလုံးကို လှမ်းဖမ်းသည်။ 
	
		while($row=mysqli_fetch_assoc($query) ){

				// time conversion into database from php.
			//read more about the date and time formant writing in php
			//https://www.php.net/manual/en/datetime.format.php
			$time=date('d:m:Y-g:i:s:a',strtotime($row['created_at']));
			// $uptime=date('d:m:Y-g:i:s:a',strtotime($row['updated_at']));



				echo"
				<tr>
				<td>{$row['id']}</td>
				<td>{$row['name']}</td>
				<td>$time</td>
				
				<td>
					<a href='update.php?id={$row['id']}'>Update</a>|
					<a href='delete.php?id={$row['id']}'>Delete</a>
				</td>
			</tr>";

		}

	 ?>
		</tbody>
	</table>

	

	
</body>
</html>