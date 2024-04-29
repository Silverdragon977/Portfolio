<?php 
$name = "Bank Name";
$pageName = "Log-In";
$config = parse_ini_file('./../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName . " | " . $name ?> </title>
    <link rel="stylesheet" type="text/css" href="<?php echo $APP_ROOT . "/src/portfolio_style.css"?>">
<!-- Google Font API   -->
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'> 
</head>
