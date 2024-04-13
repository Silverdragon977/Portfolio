<?php 
session_start();
// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_BASE"]);
////////////////////////////////////////////////////////////
include_once(APP_ROOT . "/src/webPages/data.php");

include_once(APP_ROOT . "/src/viewFiles/indexHead.view.php");
include_once(APP_ROOT . "/src/viewFiles/header.view.php");
include_once(APP_ROOT . "/src/viewFiles/navigation.view.php");

echo "Body of Homepage";

include_once(APP_ROOT . "/src/viewFiles/footer.view.php");

