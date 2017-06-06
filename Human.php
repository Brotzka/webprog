<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 31.05.17
 * Time: 17:56
 */



class Human {

	protected $name;
	protected $alter = 0;

	public function __construct($name){
		$this->setName($name);
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function hatGeburtstag()
	{
		$this->alter = $this->alter + 1;
	}

	public function getAlter(){
		return $this->alter;
	}
}

$eva = new Human('Eva');
echo $eva->getName(), "<br>";

for($i = 0; $i <= 10; $i++){
	$eva->hatGeburtstag();
}

print_r($eva);


$fabian = new Human("Fabian Hagen");
echo "<p>". $fabian->getName() . "</p>";


class Mann extends Human {
	protected $bartlaenge;

	public function setName( $name ) {
		$this->name = "Ich bin " . $name;
	}
}

$tim = new Mann('Tim');

print_r($tim);