<?php 

	class Animals{
		public $name;
		public $color;


		public function __construct($animalName="default",$animalColor="default"){
			$this->name= $animalName;
			$this->color=$animalColor;


		}
		public function sleep(){
			echo "<br>";
			echo"Good night.....";
		}
	}


	// extend of animals class
	class Dog extends Animals
	{
		public function greeting(){
			
			echo "<br>";
			echo"hello Dog";
		}
	}

		$animal=new Animals('shwe war','yellow');
		$dog= new Dog("Aung Net","wihte");

		echo $animal->name;


		$dog=new dog();
		$dog->greeting();

		$animal->sleep();

		echo "<br>";
		echo $dog->name;





 ?>