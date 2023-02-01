<?php 

	// create database connection 
	require_once("db_connection.php");
	// $_GET mean catch the id 
 	$id= $_GET['id'];


 	$sql="DELETE FROM work WHERE id=$id";


  	// if the finished or unfinished delete condition into the database.
  	if(mysqli_query($conn,$sql))
  	{
  		//read.php ကိုပြန်ညွှန်းမည်။ 
  		header('location:read.php');
  	}else{
  		echo "Delete Fail".mysqli_error();
  	}

 ?>