<?php

require_once __DIR__ . '/../services/Database.php';

$db = new Database(
    'localhost',
    'homestead',
    'homestead',
    'secret'
);