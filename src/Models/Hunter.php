<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class Hunter extends Model
{
    public const TABLE = 'hunters';

    public static function all() {
        $db = new Database();
        return $db->query('SELECT * FROM hunters;')->fetchAll();
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
