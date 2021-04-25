<?php

namespace App;

class PostgreSqlConnection {
    private $host = "localhost";
    private  $username = "postgres";
    private  $password = "123";
    private $dbname = "postgres";
    private $port = "5432";

    function connect() {
        $dbconn3 = pg_connect("host=$this->host port=$this->port dbname=$this->dbname user=$this->username password=$this->password");
        return $dbconn3;
    }

}

$conn = new PostgreSqlConnection();
$conn->connect();
