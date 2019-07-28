<?php

/*
App Core Class
Creates URL & loads core controller
URL FORMAT - example: /controller/method/params
*/
class Core 
{
	protected $currentController = 'Pages';//if it is not others controllers it is gonna load Pages
	protected $currentMethod = 'index';
	protected $params = [];

	public function __construct()
	{
		print_r($this->getUrl());

		$url = $this->getUrl();

		//Look in contrillers for controller for first value
		if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
		// if file exists, set as controller
			$this->currentController = ucwords($url[0]);
			//unset 0 index
			unset($url[0]);
		}

		// Require the controller
		require_once '../app/controllers/' . $this->currentController . '.php';

		//Instanciate contriller class
		$this->currentController = new $this->currentController;
	}

	public function getUrl()
	{
		if (isset($_GET['url'])) { 
			//echo $_GET['url'];
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		} else {
			//echo 'Tuscias URL / check app/labrieries/Core.php';
		}
	}
}