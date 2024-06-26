<?php

$config = parse_ini_file('./config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

?>
<div id="divBoxAdmin">
<div id="loginForm">
<form action='commentHandler.php' id='contactForm' method='post'>
    <label for='fname'> Enter full name: </label><br>
        <input type='text' id='fname' name='fname' required><br>
    <label for='comment'> Enter message: </label><br>
        <textarea id='comment' name='comment' rows='10' cols='95' required></textarea><br>
    <button type='submit'>Submit</button>
</form>
</div>
</div>
<?php

include_once($APP_ROOT . "/src/viewFiles/footer.view.php");