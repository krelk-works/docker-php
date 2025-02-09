<?php

Class Database {
    private $host = "mariadb";
    private $username = "root";
    private $password = "root";
    private $database = "my_database";

    public function getConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}