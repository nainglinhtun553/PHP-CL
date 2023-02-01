<?php 
	//create class
	class Fruit {
		//create properties
		public $name;
		public $color;



		//create constructor method
		public function __construct($name,$color){
			$this->name=$name;
			$this->color=$color;


		}

		// create function for working assacioted with constructor.
		public function intro(){
			echo $this->name;
			echo "<br>";
			echo $this->color;
		}
	}

	// create new class with extend from fruit
	class Strawberry extends Fruit{
		//working function
		public function message(){
			echo "the fruit is {$this->name} and the color is {$this->color}.";
		}
	}



	// create object
	$strawberry= new Strawberry("Srawberry","red");

	// call function from class
	$strawberry->intro();
	echo "<br>";
	echo "<hr>";
	// call function from other class with inherience extended.
	$strawberry->message();









 ?>