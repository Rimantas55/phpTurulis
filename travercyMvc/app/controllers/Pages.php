<?php

class Pages extends Controller
{
	public function __construct()
	{
		//echo "This is default page. <br> Pages controler loaded";
	}
	
	//defotinis page pagal method, nes Core.php mes parasem kad index paramters bus default metodas
	public function index() 
	{
		$this->view('Hello');

	}

	public function about($id) 
	{
		echo $id;
	}
}