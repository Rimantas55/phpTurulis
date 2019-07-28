<?php

// App Root
/* 
 * Jei rasom tik __FILE__ jis mums duoda--> 
 * C:\xampp\htdocs\phpTurulis\travercyMvc\app\config\config.php

 * Jei rasysims dirname(__FILE__) jis mums duoda -->
 * C:\xampp\htdocs\phpTurulis\travercyMvc\app\config

 * Jei rasysims dirname(__FILE__) jis mums duoda -->
 * C:\xampp\htdocs\phpTurulis\travercyMvc\app
 */

//xampp\htdocs\phpTurulis\travercyMvc\app
define('APPROOT', dirname(dirname(__FILE__))) . '<br>';
define('URLROOT', 'http://localhost/phpTurulis/travercyMvc'); //jei paliksim sliasa / po travercyMvc/ veliau rasant nereikes deti, bet jei nepaliksim reikes nepamirsti prirasyti
// Site Name
define('SITENAME', 'TravercyMVC');