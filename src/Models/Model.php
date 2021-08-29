<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

abstract class Model
{
    public const TABLE = '';

    public static function getById(int $id) {
        $db = new Database();

        $statement = $db->prepare("SELECT * FROM `" . static::TABLE . "` WHERE id = :id;");
        $statement->bindValue(':id', $id);

        $queryWasSuccessful = $statement->execute();

        if ($queryWasSuccessful) {
            //returns it back to controller?
            return $statement->fetchObject();
        } else {
            throw new \Exception('Query was not successful!');
        }
    }
}
