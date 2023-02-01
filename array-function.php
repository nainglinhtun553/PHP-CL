<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Function in PHP</title>
</head>
<body>


	<?php
	
	// $arr=['apple','mango','banana','orange'];
	// echo count($arr);
	// echo current($arr);
	//echo end($arr);
	// echo array_rand($arr);
	// echo $arr[array_rand($arr)];

	// $arr1=[1,2,3,4,5,6,7,8,9,10];
	// echo array_sum($arr1);


	// $number=range(1,20);
	// echo "<pre>";
	// var_dump($number);

	// search in array value in array by using ternory operator.
	//echo in_array("apple",$arr) ? "true":"false"; // boolean return 

	// associated array
	// $person = [
	// 	'name'=>'Naing Lin Htun',
	// 	'job'=> 'fullstack Developer',
	// 	'address'=>'Mandalay'
	// ];

	// echo array_key_exists("name", $person) ? "true":"false";
	// echo "<br>";
	// echo "<pre>";

	// array value 
	 // var_dump(array_values($person));

		// output the array keys.
	  // var_dump(array_keys($person));


// format => implode(" ခွဲဖို့ ထည့်ချင်သော operator အမှတ်အသား",array variable name)
	// echo implode(" ", $person);
	// echo "<br>";
	// echo join("|", $person);




// နောက်ကနေ array တစ်ခန်း ထည့်ကြည့်မည်။
// $arr=['apple','mango','banana','orange'];

// // add back of array index
// array_push($arr,"pineapple");

// // add font of array index
// array_unshift($arr, "potato");


// // remove back of array index
// array_pop($arr);

// // remove font of array index
// array_shift($arr);


// echo "<pre>";
// var_dump($arr);


 

// sorting of array in php
	//$arr=['apple','mango','banana','orange'];
// echo "<pre>";
// rsort($arr);

// $clength=count($arr);
// for($x=0;$x<$clength;$x++){
// 	echo $arr[$x];
// 	echo "<br>";
// }

$arr=['apple','mango','banana','orange'];
$person = [
		'name'=>'Naing Lin Htun',
		'job'=> 'fullstack Developer',
		'address'=>'Mandalay'
	];


	arsort($person);
	echo "<pre>";
	var_dump($person);
	echo "<hr>";


	shuffle($arr);
	echo "<pre>";
	var_dump($arr);

	






	?>
	
</body>
</html>