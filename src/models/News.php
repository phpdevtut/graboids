<?php

declare(strict_types=1);

namespace Graboids\Models;


use Graboids\Services\Database;

class News
{
    public static function create(array $params) {
        $title = $params['title'];
        $body = $params['body'];

        $db = new Database();
        return $db->query("INSERT INTO news (title, body) VALUES ('{$title}', '{$body}')");
    }
}