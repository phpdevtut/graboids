<?php

declare(strict_types=1);

namespace Graboids\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;

class Graboid extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'src',
    ];

    public function comments(): MorphMany
    {
        return $this->morphMany(
            Comment::class,
            'commentable'
        );
    }


}
