<?php
$user = 'mhoward';
$pass = 'qz1319lk';
$host = 'localhost';
$name = 'mhoward';
try{
        $conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conneted Successfully", PHP_EOL;
} catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->query("SHOW TABLES LIKE 'login'");
if ($stmt->rowCount() !== 0) {

// echo "login table exists!";

} else {
        $query = "
                CREATE TABLE login(
                        _id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        _created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        _modified_date DATETIME NULL,
                        _deleted_date DATETIME NULL,
                        email varchar(255),
                        password varchar(255),
                        name varchar(255)
                );
        INSERT INTO login(email, password, name)
        Values(
                'silverdragon977@gmail.com',
                '1234',
                'Michael Howard'
        );
        ";
        $conn->exec($query);
};
$stmt = $conn->query("SHOW TABLES LIKE 'projects'");
if ($stmt->rowCount() !== 0) {
// echo "projects table exists";
} else {
$query = "
CREATE TABLE projects(
                _id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                _created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                _modifited_date DATETIME NULL,
                _deleted_date DATETIME NULL,
                title varchar(255),
                description varchar(255),
                languages varchar(255),
                github_link varchar(255)
        );
        ";
$stmt = $conn->exec($query);
};

// $showTable = "SELECT * FROM login";
// $stmt = $conn->query($showTable)->fetchAll(PDO::FETCH_ASSOC);
// print_r($stmt);


// $showTable = "SELECT * FROM projects";
// $stmt = $conn->query($showTable)->fetchAll(PDO::FETCH_ASSOC);
// print_r($stmt);