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
		$data = [
			'title' => "Welcome"
		];
		
		$this->view('pages/index', $data);

	}

	public function about() 
	{
		$this->view('pages/about');
	}
}