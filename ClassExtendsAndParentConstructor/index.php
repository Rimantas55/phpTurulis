<?php

//icludes some CONSTANT helpers and PHP debugging code
include '../codingHelpers/index.php';

class User {
	protected $name;
	protected $age;
	
	public function __construct($name, $age) 
	{
		$this->name = $name;
		$this->age = $age;
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


class Customer extends User 
{
	private $balance;

	public function __construct($name, $age, $balance) 
	{
		// parent::__construct means that we do not repeat parameters from User class
		parent::__construct($name, $age);
		$this->balance = $balance;
	}

	public function getBalance() {
		return  "<strong>" . $this->name . "</strong>" . ' have paid ' . $this->balance;
	}

	//to get parameter $balance we need create in the same class new getters and setters
	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	public function pay($pay)
	{
		echo $this->name . ' have paid ' . $pay . ' ' . $this->balance;
	}
}

$customer1 = new Customer('John', 33, ' , you have 1000 dol. in balance');

// magic method __get
echo $customer1->__get('balance');
echo BR;
echo $customer1->pay(100);
echo BR;
echo $customer1->getBalance();