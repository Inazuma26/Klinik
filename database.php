<?php
class Database {
    private $host = "localhost";
    private $username = "inazuma";
    private $password = "";
    private $database = "mini_projek";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Koneksi ke database gagal: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
