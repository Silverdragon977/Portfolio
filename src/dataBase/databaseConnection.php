<?php

class DatabaseConnection {
       private $user = 'mhoward';
       private $pass = 'qz1319lk';
       private $host = 'localhost';
       private $name = 'mhoward';
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


};
