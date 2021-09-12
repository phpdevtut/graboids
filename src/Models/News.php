<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class News extends \Illuminate\Database\Eloquent\Model
{
    public const TABLE = 'news';

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
    ];

    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $title = $params['title'];
        $content = $params['content'];

        $db = new Database();
        return $db->query("INSERT INTO news (title, content) VALUES ('{$title}', '{$content}')");
    }
/*
    public static function all() {
        $db = new Database();
        return $db->query('SELECT * FROM news;')->fetchAll();
    }*/
}

