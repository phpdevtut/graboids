<?php
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

echo $blade->render('register.content');