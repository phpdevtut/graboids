<?php
/*import blade*/
require 'vendor/autoload.php';
/*use blade*/
use Jenssegers\Blade\Blade;

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('views', 'cache');

function getGraboids() {
    $pdo = new PDO('mysql:host=localhost;dbname=homestead', 'homestead', 'secret');

    return $pdo->query('SELECT * FROM graboids;')->fetchAll();
}

/*foreach ($graboids as $graboid) {
    saveGraboid($graboid);
}*/
/*is this an array?*/
$graboids = getGraboids();

/*show content from file views/home/content, pass in array of graboids
changes scope of graboids so content can take it.
does home.content mean the home/content.blade.php file? Or does it mean the section('content')?
does 'graboids' mean the prior array above ^? So we are taking the variable above '$graboids' and
putting it into another '$graboids'? So is it, $graboids = $graboids = base array or $graboids = base array?*/

//echo json_encode($graboids);

$html = $blade->render('home.content', [
    'graboids' => $graboids,
]);

echo $html;