<?php

$config = parse_ini_file('../../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

include_once($APP_ROOT . "/src/dataBase/databaseConnection.php");
include_once($APP_ROOT . "/src/webPages/data.php");
include_once($APP_ROOT . "/src/viewFiles/head.view.php");
include_once($APP_ROOT . "/src/viewFiles/header.view.php");
include_once($APP_ROOT . "/src/viewFiles/navigation.view.php");

?>
<table>
<tr>
    <th>Title</th>
    <th>Languages used</th>
    <th>Description</th>
    <th>Github Link</th>
</tr>
<!-- <tr>
    <td>01</td>
    <td>myTitle</td>
    <td>HTML, CSS, PHP</td>
    <td>Description Here</td>
    <td>http:fakewebsite.com</td>
    <td>view edit delete</td>
</tr> -->

<?php 
            //records as in an array
$adminConn = new DatabaseConnection();
$records = $adminConn->selectAllRecordsFromProjects();

for ($i = 0; $i < sizeof($records); $i++ ){

    echo
"<tr>
<td>"  . $records[$i]["title"] . "</td>" . 
"<td>" . $records[$i]["languages"] . "</td>" . 
"<td> <a href='" . $records[$i]["src"] . ".php'>" . 
$records[$i]["short_description"] . "</a></td>" . 
"<td>" . $records[$i]["github_link"] . "</td>" . 
"</tr>";

}

       ?>


</table>
<?php
include_once("./../../src/viewFiles/footer.view.php");