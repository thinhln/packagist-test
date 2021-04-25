<?php

namespace App;
use PDO;

class MySqlConnection {
    private $servername = "mariadb";
    private  $username = "root";
    private  $password = "123";
    private $dbname = "neolab_db";

    function connect() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

$conn = new MySqlConnection();
$conn->connect();
