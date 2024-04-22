<?php

$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST["fname"]);
    $comment = htmlspecialchars($_POST["comment"]);
    echo "Hello " . $fullName . "! <br><br>" . "I have recieved your message!<br><br><br>";
    echo $comment;

};

include_once($APP_ROOT . "/src/viewFiles/footer.view.php");




