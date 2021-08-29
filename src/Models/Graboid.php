<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class Graboid
{
    public static function all() {
        $db = new Database();
/*        $graboids = $db->query('SELECT * FROM graboids')->fetchAll();*/

        return $db->query('SELECT * FROM graboids')->fetchAll();
    }

    public static function getById(int $id) {
        $db = new Database();

        $statement = $db->prepare('SELECT * FROM graboids WHERE id = :id;');
        $statement->bindValue(':id', $id);

        $queryWasSuccessful = $statement->execute();

        if ($queryWasSuccessful) {
            return $statement->fetchObject();
        } else {
            throw new \Exception('Query was not successful!');
        }
    }
}