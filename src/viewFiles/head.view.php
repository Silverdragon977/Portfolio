<?php 
$name = "Bank Name";
$pageName = "Log-In";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName . " | " . $name ?> </title>
    <link rel="stylesheet" type="text/css" href="./../portfolio_style.css"/>
<!-- Google Font API   -->
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'> 
</head>
