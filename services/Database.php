<?php

declare(strict_types=1);

class Database
{
    /**
     * @var PDO
     */
    private $connection;

    public function __construct(
        string $host,
        string $dbname,
        string $username,
        string $password
    ) {
        $this->connection = new PDO('mysql:host=localhost;dbname=' . $dbname, $username, $password);
    }

    public function query(string $query)
    {
        return $this->connection->query($query);
    }
}
