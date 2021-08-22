<?php
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

echo $blade->render('addHunter.content');