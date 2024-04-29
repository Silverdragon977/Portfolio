<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$config = parse_ini_file('../../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

$_SESSION["log"] = "maybe";
?>

<div id="divBoxAdmin">
<div id="loginForm">
<form action='loginHandler.php' id='contactForm' method='post'>
    <label for='username'> Enter username: </label><br>
        <input type='text' id='username' name='username' required><br>
    <label for='email'> Enter email: </label><br>
        <input type="email"   for="email" id='email' name='email' required><br>
    <label for="password"> Enter Password: </label><br>
        <input type="password" id="password" name="password" required>
    <button type="submit">Submit</button>
</form>
</div>
</div>
<?php
include_once("./../../src/viewFiles/footer.view.php");