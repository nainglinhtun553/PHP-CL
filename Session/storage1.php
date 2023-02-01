<?php 

	session_start(); // call session method from php and call session variable value from other page.

	//session_destroy(); // close session method.

	echo $_SESSION['name']; // call a session variable name from other page.
	echo"<br>";
	//echo $userName;// call a simple variable name from other page.

 ?>