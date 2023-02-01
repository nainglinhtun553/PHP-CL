<!-- string
int boolean
float 



php => integer,double,boolean,null,string,array,object,undefined


 -->



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>this is variable and operator lessons</title>
	<style>
		.all{
			color:red;
			background-color:silver;
			width:1000px;
			height:500px;
		}
	</style>
</head>
<body>
	<div class="all">
		<?php
// $ start with variable declearation in php
 // $name="naing lin htun";

 // ouput with value and text
 // . ကို စာသား တစ်ခုနဲ့တစ်ခု ချိတ်ဆက်ရန် အသုံးပြုသည်။

 // var_dump($name."<br>");

 // ouput text
//  print($name);
// print_r($name);
// echo"$name";


// echo"<pre>";

// if you want to take the detail of information, you used to the var_dump() output method.
// var_dump and print_r are the same meaning.
// echo and print are the same meaning. 
// var_dump($_SERVER);

// print_r($_SERVER);



// $name = "naing lin htun";
// $num1 =25;
// $num2 = 15;
//  echo "the sum result is ". $num1 + $num2;


// simple array
$array =['one','two','three'];

echo"<pre>";

var_dump($array)."<br>";


// associated array
$assoArray=[
'name' => 'Naing Lin Htun',
'role' =>"Developer"
];

echo"<pre>";

var_dump($assoArray)."<br>";

// print value in associated array
echo "Your Name is"."&nbsp;". $assoArray['name']."<br>";


// print value as array index in associated array
echo $array[1]."<br>"."<br>";



// writing function and call function format in php

// writie function
function output(){
	echo"this is function.";
}
// call function
output();




// if statement in php

// variable decleartion 
$fruits ="mango";


// checking conditon 
if($fruits=="mango"){
	 echo"<br><br><br>"."this is mango";
}else{
	echo"<br><br><br>"."this is other fruits";
}


// tinary operator checking conditon format
$result=$fruits =='mango'? "this is mango" :"this is no mango";
echo "<br><br><br>". $result;

?>
	</div>
</body>
</html>