
<!-- && = and
အခြေအနေ နှစ်ခုလုံး မှန်ရင် လုပ်ဆောင်မည်။

||= or
အခြေအနေ နှစ်ခုထဲက တစ်ခု မှန်ရင် အလုပ် လုပ်ဆောင်ပေးမည်။  -->




<?php

// if statement with and or.

	// $name="naing lin htun";

	// if($name =="naing lin htun"){
	// 	echo "you are right!";
	// }else{
	// 	echo"no";
	// }


$car =['BMW','Toyota','Honda'];

// count method in php is equal to varname.length method in js.
// echo count($car);



// output array using for looping in php 
for($i=0;$i<count($car);$i++){
	echo $car[$i]."<br>";
}

// ouput array using for each looping in php.

// where $car mean array variable name and 
// $item mean array index.

foreach($car as $item){
	echo $item."<br>";
}


// ouput array using while looping in php.
// $num =1 is sample let.
// num ++ is mean 1line added to 1 value.

$num =1;
while($num <= 20){
	echo $num."<br>";
	$num++;
}


// output result using do while looping in php.
// start declearation with constant value for loop.
$number=10;
do{
	echo  $number."<br>";
	$number++;
}while($number <=20);



// function writing 
function outputMessage(){
	echo "This is function Output Message"."<br>";
}

// calling function name to work this.
outputMessage();



// function with parameter 
//parameter ဆိုသည်မှာ function name နောက်က ()ထဲမှာ ထည့်ပေးရသော variable တစ်ခု သို့မဟုတ် တစ်ခုထက် ပိုသော variable ဖြစ်သည်။ 

//၄င်းသည် function call ခေါ်သောအခါမှာ နောက်က () ထဲမှာ ပါသော parameter တန်ဖိုးကို အပေါ်မှာ အလုပ်လုပ်မည့် function parameter ထဲကိုလှမ်းထည့်မည်။ ၄င်း parameter မှ တစ်ဆင့် function အတွင်းကို ထည့်ပြီး အလုပ်လုပ်သည်။ 
// အလုပ်လုပ်မယ့် function parameter ထဲမှာ ='empty ' သည် အောက်က function call parameter မှာ တန်ဖိုး မပါခဲ့လျှင် default တန်ဖိုး ဖြစ်တဲ့ empty စာသားကိုဖော်ပြဖို့အတွက် သတ်မှတ်ထားခြင်း ဖြစ်သည်။ 

// function output($x ='empty'){
// 	echo "$x";
// }

// output("hello! Naing Lin Htun.");



// simple function
// function output($x,$y){
// 	echo "the sum of this result is". $x+$y;
// }

// output(10,20);


// return function 
//return function သည် အလုပ်လုပ်သည့် function အတွင်း လုပ်ဆောင်ချက်တွေကို အပြင် function call ကနေ တစ်ဆင့် ပေါင်းပြီး output ထုတ်ခြင်း ဖြစ်သည်။


function output($x,$y){
	return "the sum of this result is"."&nbsp;". $x+$y;
}

$result1=output(10,20);
echo $result1."<br>";
$result2= output(10,50);
echo $result2;

?>