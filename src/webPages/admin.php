<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION["log"] == "maybe"){
    // not logged in
    header("Location: ./loginAdmin.php");
} elseif ($_SESSION["log"] == "no"){
    // not logged in
    header("Location: ./loginAdmin.php");
};


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
    <th>src</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php    //records as in an array
$adminConn = new DatabaseConnection();
$records = $adminConn->selectAllRecordsFromProjects();

for ($i = 0; $i < sizeof($records); $i++ ){
    echo
"<tr>
<td>"  . $records[$i]["_id"] . "</td>" . 
"<td>"  . $records[$i]["title"] . "</td>" . 
"<td>" . $records[$i]["languages"] . "</td>" .  
"<td>" . $records[$i]["short_description"] . "</td>" . 
"<td>" . $records[$i]["github_link"] . "</td>" . 
"<td>" . $records[$i]["src"] . "</td>" . 
"<td>" . "<a href='admin.php?edit= "  . $i . "' class='editButton'> Edit </a>" . "</td>" . 
"<td>" . "<a href='admin.php?delete= "  . $records[$i]['_id'] . "' class='delButton'> Delete </a>" . "</td>" . 
"</tr>";
}

?>


</table>



<?php 

if (isset($_GET['delete'])){
    $db = new DatabaseConnection();
    $db->deleteProjectRecord($_GET['delete']);
}
if (isset($_GET['edit'])){
    $editById = intval($_GET['edit']);

?>
<div id="divBoxAdmin">
<div id="loginForm">
<form action='updateRecords.php' id='createForm' method='post'>

    <label for='title'> Enter title: </label><br>
        <input type='text' id='title' name='title' required value="<?php echo $records[$editById]['title'] ?>" readonly><br>


    <label for='languages'> Enter Languages used: </label><br>
        <input type='text' id='languages' name='languages' required value="<?php echo $records[$editById]['languages'] ?>"><br>

    <label for='short_description'> Enter Subject: </label><br>
        <textarea id='short_description' name='short_description' rows='10' cols='95' required><?php echo $records[$editById]['short_description'] ?></textarea><br>


    <label for='full_description'> Enter Description: </label><br>
        <textarea id='full_description' name='full_description' rows='10' cols='95' required><?php echo $records[$editById]['full_description'] ?></textarea><br>

    <label for='github_link'> Enter GitHub Link: </label><br>
        <input type='text' id='github_link' name='github_link' required value="<?php echo $records[$editById]['github_link'] ?>"><br>

    <button type='submit'>Submit</button>
</form>
</div>
</div>



<?php
}


include_once("./../../src/viewFiles/footer.view.php");