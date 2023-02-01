<!doctype html>
<html>
<head>
	<title>Photo Gallery</title>
	<style>
		body 
		{
			background: #efefef;
			font-family: arial;
		}
		#wrap 
		{
			width: 950px;
			margin: 20px auto;
			padding: 20px;
			border: 5px solid blue;
			background: #fff;
		}
		#gallery img 
		{
			width: 200px;
			margin: 10px;
			border: 3px solid black;
		}
		#form 
		{
			margin-top: 20px;
			border-top: 2px solid red;
			padding: 10px;
			background: pink;
			
		}
		h1,h3{
			text-align: center;
		}

	</style>
</head>
<body>
	<h1>Please provide beautiful images in your laptop (or) mobile phone </h1>
	<h3>  It will be very funny  </h3>
	<div id="wrap">

		<div id="gallery">
			<?php
				$list = scandir("photo");
				for($i=2; $i < count($list); $i++) 
				{
					$name = $list[$i];

					echo "<a href='photo/$name'> <img src='photo/$name'> </a> ";
				}
			?>
		</div>

		<div id="form">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label for="photo">Choose a Photo</label>
				<input type="file" name="photo" id="photo">

				<input type="submit" value="Upload" />
			</form>
		</div>

	</div>
</body>
</html>
