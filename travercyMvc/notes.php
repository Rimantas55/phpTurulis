<?php

# 15 pamoka - neaisku kodel url elgiasi skirtingai

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

// Please note that $_GET['url'] will give you different results in case of different URL requests:

// http://oop-mvc.loc/index.php?url=test
// will give you: test

// http://oop-mvc.loc/url=test
// will give you: url=test

// http://oop-mvc.loc/abc=def
// will give you: abc=def

//http://localhost/phpTurulis/travercyMvc/index.php
// will give you: empty

//http://localhost/phpTurulis/travercyMvc/index.php=test
//will give you: index.php=test

//http://localhost/phpTurulis/travercyMvc/index.php?id=ada
//will give you: empty

// http://oop-mvc.loc/index.php?data=test
// will give you: Notice: Undefined index: url
// Looks like in this case it expects to find 'url' parameter in the URL address.

// http://oop-mvc.loc/
// will give you: Notice: Undefined index: url
// Looks like in this case it expects to find 'url' parameter in the URL address.

// Would be good to know, why in some cases it work without 'url' parameter and in other cases it's not working?


###################################################
