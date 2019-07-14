<?php

/*ar dalinasi is 2*/

/*$number1 = rand(1,36);

function is_Power_of_two($number1)
{
	if(($number1 & ($number1 - 1)) == 0)
	{
		return "<h4>$number1 is power of 2</h4>";
	}
	else
	{
		return "$number1 is not power of 2";
	}
}
echo is_Power_of_two($number1);

echo '<br>';
echo '<br>';*/


$number = rand(1,36);
function abc($number){
	for ($i=1; $i <= $number; $i*=2) { 
		echo $i . '<br>';
		$e = $i;
	}
		if ($e == $number) {
			return '<h3>' . $e . ' is root of 2' . '</h3>';
		} else {
			return' NOOO this is ' . $number . '<br>';
		}
}

 echo abc($number);




