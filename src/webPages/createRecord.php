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
?>

<div id="divBoxAdmin">
<div id="loginForm">
<form action='createRecordHandler.php' id='createForm' method='post'>

    <label for='title'> Enter title: </label><br>
        <input type='text' id='title' name='title' required><br>


    <label for='languages'> Enter Languages used: </label><br>
        <input type='text' id='languages' name='languages' required><br>

    <label for='short_description'> Enter Subject: </label><br>
        <textarea id='short_description' name='short_description' rows='10' cols='95' required></textarea><br>


    <label for='full_description'> Enter Description: </label><br>
        <textarea id='full_description' name='full_description' rows='10' cols='95' required></textarea><br>

    <label for='github_link'> Enter GitHub Link: </label><br>
        <input type='text' id='github_link' name='github_link' required><br>

    <button type='submit'>Submit</button>
</form>
</div>
</div>
<?php include_once("./../../src/viewFiles/footer.view.php");