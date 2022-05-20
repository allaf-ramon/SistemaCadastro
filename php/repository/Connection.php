<?php
    class Connection extends PDO {

        const HOSTNAME = "localhost";
        const USERNAME = "root";
        const PASSWORD = "";
        const SCHEMA = "senac";
        const PORT = 3306;
        
        private $conn;

        public function __construct() {
            $key = "strval";
            $dsn = "mysql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            return $this->conn;
        }
    }
