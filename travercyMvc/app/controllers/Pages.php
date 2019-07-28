<?php

class Pages 
{
	public function __construct()
	{
		//echo "This is default page. <br> Pages controler loaded";
	}

	public function index()
	{
		//defotinis page pagal method, nes Core.php mes parasem kad index paramters bus default metodas
	}

	public function about($id) 
	{
		echo $id;
	}
}