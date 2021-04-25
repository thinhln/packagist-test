<?php

namespace Tests;

use App\PostgreSqlConnection;
use PHPUnit\Framework\TestCase;

class PostgreSqlConnectionTest extends TestCase
{
    public function testConnection() {
        $conn = new PostgreSqlConnection();
        $this->assertTrue($conn->connect());
    }
}
