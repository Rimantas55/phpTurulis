<?php
// Load Config
//C:\xampp\htdocs\phpTurulis\travercyMvc\app\config\config.php
require_once 'config/config.php';


// Load Libraries //ju nereikia nes susikurem autoloaderi
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
	require_once 'libraries/' . $className . '.php';
});
