 <!-- //    /*****note*******/

	//string Methods
	// addcslashes() သည် စာသားတစ်ခုရဲ့အရှေ့မှာ \ ထည့်ချင်တဲ့အခါမှာ အသုံးပြုသည်။ 
		// $result = addcslashes("Naing Lin Htun", "L H");
		// echo $result;

	// addslahes() သည် double quate ရဲ့အရှေ့မှာ \ ထည့်ချင်သောအခါမှာ အသုံးပြုသည်။
	// $result1=addslashes('what does "lo" Mean?');
		// echo $result1


	//bin2hex () သည် string ကနေ hyperdemicial value ကို ပြောင်းလဲခြင်းအတွက် အသုံးပြုသည်။
	// $result2 =bin2hex("naing lin htun");
	// 	echo $result2;


	//chop() သည်  sentence တစ်ခုရဲ့ ညာဘက်အဆုံးမှာ ရှိတဲ့ wordsတွေကို ဖျက်ချင်တဲ့အခါမှာအသုံးပြုသည်။ 
	// $str="This is web programming channels";
	// 	echo chop($str,"channles");

	// chr() သည်  ascii value ကနေ character value ပြောင်းလဲချင်တဲ့အခါမှာ အသုံးပြုသည်။
	// https://www.cs.cmu.edu/~pattis/15-1XX/common/handouts/ascii.html
	// echo chr(116);

	//chunk_split() သည် မိမိလိုချင်သော စာလုံးတွေကို ပုံစံ assign တစ်ခု သတ်မှတ်ခွဲခြားခြင်း ဖြစ်ပါသည်။၄င်းသည် space တန်ဖိုးပါထည့်တွက်သည်။
	//$name="PHP Programming";
		 // echo chunk_split($name,2,"|");


	//    /*****note*******/ -->





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>build in string methods in php</title>
</head>
<body>
	strlen() <br>
	str_word_count() <br>
	strrev() <br>
	str_shffle() <br>
	strpos(str,search) <br>
	substr(string, start,end) <br>
	strupper() <br>
	str_lower() <br>
	strip_tags() <br>
	str_replace(find,new,string) <br>
	trim() <br>
	str_split() <br>
	explode() <br>
	<hr>




<?php


echo"<h1> PHP Output </h1>";


$name="naing lin htun is studying full-stack developer course from Code_Lab";
$result="aaa niang lin Htun Web Developer aaaa";

// echo $name."<br>";
// echo substr($name,0,8);
// echo "<br>";
// echo $name[7];
// echo strtoupper($name);
// echo strtolower($name);
// echo ucfirst($name);
// echo ucwords($name);


// var_dump($result);
// echo"<br>";
// var_dump(trim($result,"aaa"));


$result2="Web Development with PHP";
echo"<pre>";
var_dump(str_split($result2,5));


$arr =str_split($result2);
echo"Result is "."&nbsp;". $arr[9]."<br>";


var_dump(explode(" ", $result2,2));

echo"<hr>";


?>
</body>
</html>




