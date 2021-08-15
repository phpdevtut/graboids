<?php

declare(strict_types=1);

namespace Graboids\Services;

use PDO;

class Database
{
    /**
     * @var PDO
     */
    private $connection;

    public function __construct() {
        $dbname = $_ENV['DB_NAME'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];

        $this->connection = new PDO('mysql:host=localhost;dbname=' . $dbname, $username, $password);
    }

    public function query(string $query)
    {
        return $this->connection->query($query);
    }
}
