<?php

declare(strict_types=1);

namespace Graboids\Models;


use Graboids\Services\Database;

class Register
{
    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $username = $params['username'];
        $password = $params['password'];

        $db = new Database();
        return $db->query("INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')");
    }
}