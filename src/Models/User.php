<?php

declare(strict_types=1);

namespace Graboids\Models;

class User extends \Illuminate\Database\Eloquent\Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'password',
        'email',
        'confirmation_hash',
    ];

    public $timestamps = false;
}
