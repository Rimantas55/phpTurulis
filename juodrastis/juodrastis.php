<?php

//icludes some CONSTANT helpers and PHP debugging code
include '../codingHelpers/index.php';

class User {
	private $name;
	private $age;
	private $height;
	private $weight;

	public function __construct($name, $age, $height, $weight) 
	{
		$this->name = $name;
		$this->age = $age;
		$this->height = $height;
		$this->weight = $weight;
	}

	# __get Magic method
	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	# __set Magic method
	public function __set($property, $value)
	{
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
		return $this;
	}

}


$user1 = new User('Jonas', 23, 177, 70);

//getting private properties with __get method
echo $user1->__get('name');
echo BR;

//setting private properties with __set method
$user1->__set('name', 'BOBIS');
echo $user1->__get('name');







