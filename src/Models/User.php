<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class User extends \Illuminate\Database\Eloquent\Model
{
    public const TABLE = 'users';
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
