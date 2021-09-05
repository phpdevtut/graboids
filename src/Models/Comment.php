<?php

declare(strict_types=1);

namespace Graboids\Models;

class Comment extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'comment',
    ];

    public $timestamps = false;

    /**
     * @return mixed
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
