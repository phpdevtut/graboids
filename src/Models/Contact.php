<?php

declare(strict_types=1);

namespace Graboids\Models;


use Graboids\Services\Database;

class Contact
{
    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $title = $params['title'];
        $content = $params['content'];

        $db = new Database();
        return $db->query("INSERT INTO emails (title, content) VALUES ('{$title}', '{$content}')");
    }
}