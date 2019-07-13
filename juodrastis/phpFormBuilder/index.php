<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'InputHelper.php';

echo 'ok' . '<br>';

$select = new FormHelper('action', 'post');
echo $select->createSelect([
	'name' => 'selectName',
	'form' => 'formName'],
	[
		'name' => 'oprionName',
		'value' => 'optionValue'
	]

);
