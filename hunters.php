<?php

require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;
use Graboids\Database;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new Database();
$hunters = $db->query('SELECT * FROM hunters;')->fetchAll();
$blade = new Blade('views', 'cache');

$html = $blade->render('hunters.content', [
    'hunters' => $hunters,
]);

echo $html;