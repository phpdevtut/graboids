<?php
/*import blade*/
require 'vendor/autoload.php';
/*use blade*/
use Jenssegers\Blade\Blade;

require_once 'includes/database.php';

$graboids = $db->query('SELECT * FROM graboids')->fetchAll();

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('views', 'cache');

$html = $blade->render('home.content', [
    'graboids' => $graboids,
]);

echo $html;