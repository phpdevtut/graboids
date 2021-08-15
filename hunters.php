<?php

require 'vendor/autoload.php';

use Graboids\Models\Hunter;
use Jenssegers\Blade\Blade;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hunters = Hunter::all();

$blade = new Blade('views', 'cache');

$html = $blade->render('hunters.content', [
    'hunters' => $hunters,
]);

echo $html;