<?php

declare(strict_types=1);

namespace Graboids\Models;

class Comment extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'comment',
        'commentable_id',
        'commentable_type',
    ];

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'parent_id',
            'id'
        );
    }

    /**
     * @return mixed
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
