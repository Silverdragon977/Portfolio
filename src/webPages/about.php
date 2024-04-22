<?php
                               
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];


include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

echo '<img id="aboutImg" src="../Images/profile.jpg">';

 foreach ($aboutText as $text){ 
    echo "<div id='divBox'>" . $text["data"] . "<p></p>" . "</div>";
 };  


include_once($APP_ROOT . "/src/viewFiles/footer.view.php");