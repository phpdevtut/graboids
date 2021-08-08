<?php
/*
$layout = file_get_contents('./views/layouts/main.blade.php');
$content = file_get_contents('./views/upload/content.blade.php');

$html = str_replace('%content%', $content, $layout);

echo $html;*/
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

echo $blade->render('upload.content');
