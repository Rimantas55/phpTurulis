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

echo __FILE__ . '<br>';
echo dirname(__FILE__) . '<br>';
echo dirname(dirname(__FILE__)) . '<br>';