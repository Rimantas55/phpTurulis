<?php

//icludes some CONSTANT helpers and PHP debugging code
include '../codingHelpers/index.php';

class User 
{
	public $name;
	public $age;
	public static $minPasswordLenth = 6;

	public static function validatePassword($pass) 
	{
		if (strlen($pass) >= self::$minPasswordLenth) {
			return true;
		} else {
			return false;
		}
	}
}

$password = 'hello'; //string lenth is 5 and pass would not be valid
if (User::validatePassword($password)) {
	echo 'Password Valid';
} else {
	echo 'Password NOT Valid';
}