<?php 
session_start();
// AUTOLOADER
require 'vendor/autoload.php';

require_once 'Controller/Controller.php';
new Controller($_SERVER["REDIRECT_URL"],$_SERVER["QUERY_STRING"]);
?>


