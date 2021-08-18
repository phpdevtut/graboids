<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;
use PDO;

class User
{
    public static function findByUsernameAndPassword(string $username, string $password)
    {
        $db = new Database();

        $statement = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);

        $queryWasSuccessful = $statement->execute();

        if ($queryWasSuccessful) {
            return $statement->fetchObject();
        } else {
            throw new \Exception('Query was not successful!');
        }
    }
}