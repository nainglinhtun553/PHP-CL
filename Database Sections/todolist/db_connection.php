<?php 

// create database connection
$conn=mysqli_connect('localhost','root','','todo_list');

// check condtion
if(!$conn){
	echo "db is connected";
}

 ?>