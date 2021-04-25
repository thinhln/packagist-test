<?php

namespace Tests;

use App\MySqlConnection;
use PHPUnit\Framework\TestCase;

class MySqlConnectionTest extends TestCase
{
    public function testConnection() {
        $conn = new MySqlConnection();
        $this->assertTrue($conn->connect());
    }
}
