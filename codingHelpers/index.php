<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BR = '<br>';
const preTag = '<pre>';
const preEndTag = '</pre>';

function print_rPre($array) {
	echo '<pre>';
	print_r($array);
	echo '<pre>';
}

echo 'this msg from codingHelpers file '. BR;
