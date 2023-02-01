<?php


	class Car
	{
		//properties
		 // $num
		// public $name="BMW";
		// public $price="120000$";


		private $name;
		public $price;




		 // methods
		 // function sum(){

		 // }

		// void function no return value.
		// type function return value.
		public function getCarName($userName="default"){
			$this->name=$userName;
			echo $this->name;


		}


		public function getName(){
			return $this->name;

		}


		public function setName($name='default'){
			return $this->name=$name;


		}



		 public function getCarPrice($userPrice='0$'){
		 	$this->price=$userPrice;
		 	echo $this->price;
		 }


	}
	

$result=new Car(); //object create
 
 // call
// echo $result->name;
// echo"<br>";
// echo $result->price;




// insert user input into the method 
// void function call 
// $result->getCarName('Naing Lin Htun');
// echo "<br>";
// $result->getCarPrice('1300000$');



// return function call 
//$name=$result->getCarName('AAAA');
$bb=$result->setName("BBB");
echo $bb;
echo "<br>";
//echo $name;


$name=$result->getName();
echo $name;







 ?>