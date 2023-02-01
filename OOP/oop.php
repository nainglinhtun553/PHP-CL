<?php 
	class fruit {
		// properties
		public $name;
		public $color;



		//method
		//insert
		function set_name($name){
			$this->name=$name;
		}
		//get
		function get_name(){
			return $this->name;
		}

		//insert
		function set_color($color){
			$this->color=$color;
		}

		// get
		function get_color(){
			return $this->color; 
		}




	}
	// create object
	$apple =new fruit();
	$banana=new fruit();
	$showcolor=new fruit();

	// insert user value in method into class from outside
	$apple->set_name('Apple');
	$banana->set_name('Banana');
	$showcolor->set_color('red');



	// output to browser

	echo $apple->get_name();
	echo "<br>";
	echo $banana->get_name();
	echo "<br>";
	echo $showcolor->get_color();









 ?>