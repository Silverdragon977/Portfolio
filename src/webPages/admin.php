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
<a href="createRecord.php"><div class="button">Create New Project</div></a><br><br>
<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Languages used</th>
    <th>Description</th>
    <th>Github Link</th>
    <th>Action</th>
</tr>

<?php    //records as in an array
$adminConn = new DatabaseConnection();
$records = $adminConn->selectAllRecordsFromProjects();
echo 
"<tr>
<td>"  . $records[0]["_id"]  . "</td>" .
"<td>" . $records[0]["title"] . "</td>" . 
"<td>" . $records[0]["languages"] . "</td>" . 
"<td>" . $records[0]["short_description"] . "</td>" . 
"<td>" . $records[0]["github_link"] . "</td>" . 
"<td>" . " edit delete" . "</td>" . "</tr>";
echo 
"<tr>
<td>"  . $records[1]["_id"]  . "</td>" .
"<td>" . $records[1]["title"] . "</td>" . 
"<td>" . $records[1]["languages"] . "</td>" . 
"<td>" . $records[1]["short_description"] . "</td>" . 
"<td>" . $records[1]["github_link"] . "</td>" . 
"<td>" . " edit delete" . "</td>" . "</tr>";
echo 
"<tr>
<td>"  . $records[2]["_id"]  . "</td>" .
"<td>" . $records[2]["title"] . "</td>" . 
"<td>" . $records[2]["languages"] . "</td>" . 
"<td>" . $records[2]["short_description"] . "</td>" . 
"<td>" . $records[2]["github_link"] . "</td>" . 
"<td>" . " edit delete" . "</td>" . "</tr>";

?>


</table>



<?php include_once("./../../src/viewFiles/footer.view.php");