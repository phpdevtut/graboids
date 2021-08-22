<?php

declare(strict_types=1);

namespace Graboids\Models;


use Graboids\Services\Database;

class addHunterToDatabase
{
    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $src = $params['src'];
        $hunter_name = $params['hunter_name'];
        $hunter_desc = $params['hunter_desc'];

        $db = new Database();
        return $db->query("INSERT INTO hunters (src, hunter_name, hunter_desc) VALUES ('{$src}', '{$hunter_name}', '{$hunter_desc}')");
    }
}