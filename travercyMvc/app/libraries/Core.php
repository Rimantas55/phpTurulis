<?php

/*
App Core Class
Creates URL & loads core controller
URL FORMAT - example: /controller/method/params
*/
class Core 
{
	protected $currentController = 'Pages';
	protected $currentMethod = 'index';
	protected $params = [];

	public function __construct()
	{
		$this->getUrl();
	}

	public function getUrl()
	{
		//echo $_GET['url']; //cia pagal trevis
		if (isset($_GET['url'])) { //cia rekomenduotas code is comment, tuomet nemeta error jei path yra tuscias, pvz: http://localhost/phpTurulis/travercyMvc/
	echo $_GET['url'];
	} else {
		echo 'Tuscias URL / check app/labrieries/Core.php';
	}

	}
}