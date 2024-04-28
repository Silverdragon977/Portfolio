<?php 
// session_start();
// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];



////////////////////////////////////////////////////////////
include_once($APP_ROOT . "/src/dataBase/databaseConnection.php");
include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

  //records as in an array
$adminConn = new DatabaseConnection();
$records = $adminConn->selectAllRecordsFromProjects();


echo "
<article><h2>" . $records[0]["title"] . "</h2><br>
Languages used: " . $records[0]["languages"] . "<br><br></article><br><br><br><article>" .
$records[0]["full_description"] . "<br>" . 
"<t><b><a href='https://github.com/Silverdragon977/Bemidji-Burgers.git'>" . $records[0]["github_link"] . "</a></t></b><br></article>";

include_once($APP_ROOT . "/src/viewFiles/footer.view.php");

