<?php

/*
 * Base Controller
 * Loads the models and Views 
 */

class Controller
{
	//load model
	public function model($model) 
	{
		// Require model file
		require_once'../app/models/' . $model . '.php';

		//Instatiate model
		return new $model();
	}

	// Load view
	public function view($view, $data = []) //sita galima uzvadinti render funkcija
	{
		// check for view file
		if(file_exists('../app/views/' . $view . '.php')){
			require_once '../app/views/' . $view . '.php';
		} else {
			//View does not exist
			die('View does not exist');
		}
	}
}