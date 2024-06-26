<?php

class DatabaseConnection {
       private $user = '';
       private $pass = '';
       private $host = '';
       private $name = '';
       private $conn = "";
        
       public function __construct(){

                try{
                // This will create the connection without needing to call a class
                        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->name", $this->user, $this->pass);
                        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // echo "Conneted Successfully", PHP_EOL;
                } catch(PDOException $e){
                        echo "Connection failed: " . $e->getMessage();
                }
       }
       public function selectAllRecordsFromLogin(){
        $showTable = "SELECT * FROM login";
        $stmt = $this->conn->query($showTable)->fetchall(PDO::FETCH_ASSOC);
        return $stmt;
       }
       public function selectAllRecordsFromProjects(){
                $showTable = "SELECT * FROM projects";
                $stmt = $this->conn->query($showTable)->fetchall(PDO::FETCH_ASSOC);
                return $stmt;
       }
       public function createProjectRecord($user_title, $user_languages, $user_short_description, $user_full_description, $user_github_link){
                $createQuery = "INSERT INTO projects (title, languages, short_description, full_description, github_link) Values ('$user_title', '$user_languages', '$user_short_description', '$user_full_description', '$user_github_link'); ";
                $this->conn->exec($createQuery);
        }
        public function deleteProjectRecord($id){
                $deleteQuery = "DELETE FROM projects WHERE _id = '$id' ";
                $this->conn->query($deleteQuery);
        }
        public function recordExists($title) {
                $check = "SELECT COUNT(*) FROM projects WHERE _id = $title";
                $stmt = $this->conn->query($check);
                $count = $stmt->fetchColumn();
            
                return $count > 0;
            }
            public function updateProjectRecord($user_title, $user_languages, $user_short_description, $user_full_description, $user_github_link) {
                        $query = 
                        "UPDATE projects
                            SET languages = '$user_languages',
                                short_description = '$user_short_description',
                                full_description = '$user_full_description',
                                github_link = '$user_github_link'
                                    WHERE title = '$user_title'
                        ";
                        $this->conn->query($query);
            }
};
