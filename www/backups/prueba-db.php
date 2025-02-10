<?php

Class Database {
    private $host = "localhost";
    private $db = "mydatabase";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function getDatabase() {
        if ($this->conn) {
            return $this->conn;
        } else {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db};charset=utf8", $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conn;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
}