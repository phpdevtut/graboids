<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class Hunter
{
    public static function all() {
        $db = new Database();
        return $db->query('SELECT * FROM hunters;')->fetchAll();
    }
}