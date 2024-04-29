<?php 
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

include_once($APP_ROOT . "/src/dataBase/databaseConnection.php");
include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user_title             = htmlspecialchars($_POST["title"]);
$user_languages         = htmlspecialchars($_POST["languages"]);
$user_short_description = htmlspecialchars($_POST["short_description"]);
$user_full_description  = htmlspecialchars($_POST["full_description"]);
$user_github_link       = htmlspecialchars($_POST["github_link"]);

try {
    include_once($APP_ROOT . "/src/dataBase/databaseConnection.php");
    $createRecordConn = new DatabaseConnection();
    $createRecordConn->updateProjectRecord($user_title, $user_languages, $user_short_description, $user_full_description, $user_github_link);

} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
};

header("Location: ./admin.php");
} else {
header("Location: ./admin.php");
};