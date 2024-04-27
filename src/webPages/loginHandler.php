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

    $user_userName = htmlspecialchars($_POST["username"]);
    $user_email = htmlspecialchars($_POST["email"]);
    $user_password = htmlspecialchars($_POST["password"]);
    try {
        include_once($APP_ROOT . "/src/dataBase/databaseConnection.php");
        $loginConn = new DatabaseConnection();
        $array = $loginConn->selectAllRecordsFromLogin();
        $db_username = $array[0]["name"];
        $db_email = $array[0]["email"];
        $db_password = $array[0]["password"];

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    };
 } else {
    header("Location: ./loginAdmin.php");
};




function compare($user_userName, $user_email, $user_password, $db_username, $db_email, $db_password ) {
    if ($user_userName == $db_username){
        if ($user_email == $db_email){
            if ($user_password == $db_password) {
             return TRUE;   
            } else {return FALSE;};
        } else {return FALSE;};
    } else {return FALSE;};
};
if (compare($user_userName, $user_email, $user_password, $db_username, $db_email, $db_password) == TRUE){
    header("Location: ./admin.php");
} else { 
    header("Location: ./loginAdmin.php");
};

include_once($APP_ROOT . "/src/viewFiles/footer.view.php");