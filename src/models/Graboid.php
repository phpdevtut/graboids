<?php

declare(strict_types=1);

namespace Graboids\Models;

use Graboids\Services\Database;

class Graboid
{
    public static function all() {
        $db = new Database();
        $graboids = $db->query('SELECT * FROM graboids')->fetchAll();

        return $db->query('SELECT * FROM graboids')->fetchAll();
    }
}