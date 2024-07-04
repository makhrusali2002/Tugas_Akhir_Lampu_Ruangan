<?php 
    class Database {
        private $host = "localhost";
        private $database_name = "id21602385_kelasiot";
        private $username = "id21602385_mahrusali02";
        private $password = "Ali-makhrus02";
       

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>