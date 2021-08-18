<?php
/*import blade*/
require '../vendor/autoload.php';

/*use blade*/
use Jenssegers\Blade\Blade;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('../views', '../cache');

$html = $blade->render('news.addArticle');

echo $html;