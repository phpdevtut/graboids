<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class Hunter
{
    public static function all() {
        $db = new Database();
        return $db->query('SELECT * FROM hunters;')->fetchAll();
    }

    public static function getById(int $id) {
        $db = new Database();

        $statement = $db->prepare('SELECT * FROM hunters WHERE id = :id;');
        $statement->bindValue(':id', $id);

        $queryWasSuccessful = $statement->execute();

        if ($queryWasSuccessful) {
            //returns it back to controller?
            return $statement->fetchObject();
        } else {
            throw new \Exception('Query was not successful!');
        }
    }
    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $src = $params['src'];
        $name = $params['name'];
        $desc = $params['desc'];

        $db = new Database();
        return $db->query("INSERT INTO hunters (src, name, desc) VALUES ('{$src}', '{$name}', '{$desc}')");
    }
}