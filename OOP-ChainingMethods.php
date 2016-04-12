<?php 

class Bike {

	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price, $max_speed){
		$this-> price = $price;
		$this-> speed = $max_speed;
		$this-> miles = 0;
		$this-> displayInfo();
	}
	public function displayInfo(){
		echo "<div>Price:".$this-> price."<br>";
		echo $this-> speed." speed<br>";
		echo "Miles Driven:".$this-> miles."</div><br>";
		return $this;
	}
	public function drive(){
		echo "Driving <br>";
		$this-> miles += 10;
		return $this;
	}
	public function reverse(){
		echo "Reversing <br>";
		if($this->miles == 0){
		}
		else {
		$this-> miles -= 5;
		}
		return $this;
	}
	
}

$bike1 = new Bike('$100.00', 10);
$bike1->drive()->drive()->drive()->reverse()->displayInfo();
// $bike1->drive();
// $bike1->drive();
// $bike1->reverse();
// $bike1->displayInfo();

$bike2 = new Bike('$200.00', 15);
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();
// $bike2->drive();
// $bike2->reverse();
// $bike2->reverse();
// $bike2->displayInfo();

$bike3 = new Bike('$50.00', 1);
$bike3->reverse()->reverse()->reverse()->displayInfo();
// $bike3->reverse();
// $bike3->reverse();
// $bike3->displayInfo();

 ?>