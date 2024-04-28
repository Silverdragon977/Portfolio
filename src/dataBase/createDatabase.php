<?php

$user = 'mhoward';
$pass = 'qz1319lk';
$host = 'localhost';
$name = 'mhoward';
$conn = "";


$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn->query("SHOW TABLES LIKE 'projects'");
if ($stmt->rowCount() !== 0) {
// echo "login table exists!";
$query = "
        INSERT INTO projects(title, short_description, full_description, languages, github_link)
        Values(
                'Bemidji Burgers Website',
                'This site was created Summer 2023. Bemidji Burgers is a resturant site located in Bemidji for Beavers!',
                'This site was created Summer 2023. Bemidji Burgers is a resturant site located in Bemidji for Beavers! This is a parody website that uses HTML, CSS, and javascript. It features the town of Bemidji as well as a shopping cart. This website currently does not have a database implementation.',
                'HTML, CSS, Javascript',
                'https://github.com/Silverdragon977/Bemidji-Burgers.git'
        );
        ";
        //$conn->exec($query);

        $query = "
        INSERT INTO projects(title, short_description, full_description, languages, github_link)
        Values(
                'JavaBank',
                'This is a small project I created in the summer in Java.',
                'This is a small project I created in the summer in Java. It will construct a basic account and restrict the user from using any methods until they call the login method and it returns true.',
                'Java',
                'https://github.com/Silverdragon977/JavaBank.git'
        );
        ";
        //$conn->exec($query);

        $query = "
        INSERT INTO projects(title, short_description, full_description, languages, github_link)
        Values(
                'RadixSort',
                'This C++ console app generate an average timing with 10 increasing vector sizes.',
                'This C++ console app generate an average timing with 10 increasing vector sizes. Then I grab the data and find an average to try and figure out the time complexity of Radix Sort in C++.',
                'Java',
                'https://github.com/Silverdragon977/RadixSort.git'
        );
        ";
        //$conn->exec($query);

} else {
        $query = "
                CREATE TABLE projects(
                        _id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        _created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        _modified_date DATETIME NULL,
                        _deleted_date DATETIME NULL,
                        title varchar(255),
                        short_description varchar(150),
                        full_description MEDIUMTEXT,
                        languages varchar(255),
                        github_link varchar(255)

                );
        ";
        //$conn->exec($query);

        








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