<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Hunter extends \Illuminate\Database\Eloquent\Model
{
    public const TABLE = 'hunters';

    /**
     * @var string[]
     */
    protected $fillable = [
        'src',
        'name',
        'description',
    ];

    //Pass in text from POST, Title and Content as an array, 1 box holding title text, 1 box holding content text?
    public static function create(array $params) {
        $src = $params['src'];
        $name = $params['name'];
        $description = $params['description'];

        $db = new Database();
        return $db->query("INSERT INTO hunters (src, name, description) VALUES ('{$src}', '{$name}', '{$description}')");
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(
            Comment::class,
            'commentable'
        );
    }
}
