<?php


// given array. 0, 3 and 6 are missing.
$arr1 = array(-1, 1,2,4,5,7); 

// construct a new array:1,2....max(given array).
$arr2 = range(-1,max($arr1));                                                    

// use array_diff to get the missing elements 
$missing = array_diff($arr2,$arr1); // (3,6)

foreach ($missing as $value) {
	echo $value . " ";
}