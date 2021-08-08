<?php
/*import blade*/
require 'vendor/autoload.php';
/*use blade*/
use Jenssegers\Blade\Blade;

//header('Content-Type: application/json');

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('views', 'cache');
/*array of graboid photos*/
//$graboids = [
//    [
//        'id' => 1,
//        'src' => '/assets/images/grab1.jpg',
//    ],
//    [
//        'id' => 2,
//        'src' => '/assets/images/grab2.jpg',
//    ],
//    [
//        'id' => 3,
//        'src' => '/assets/images/grab3.jpg',
//    ],
//    [
//        'id' => 4,
//        'src' => '/assets/images/grab4.jpg',
//    ],
//    [
//        'id' => 5,
//        'src' => '/assets/images/grab5.jpg',
//    ],
//    [
//        'id' => 6,
//        'src' => '/assets/images/grab6.jpg',
//    ],
//    [
//        'id' => 7,
//        'src' => '/assets/images/grab7.jpg',
//    ],
//    [
//        'id' => 8,
//        'src' => '/assets/images/grab8.jpg',
//    ],
//    [
//        'id' => 9,
//        'src' => '/assets/images/grab9.jpg',
//    ],
//];


function saveGraboid($graboid) {
    $pdo = new PDO('sqlite:graboids-database.sqlite');
    $pdo->query('INSERT INTO graboids (src) VALUES ("' . $graboid['src'] . '");');
}

function getGraboids() {
    $pdo = new PDO('sqlite:graboids-database.sqlite');
    return $pdo->query('SELECT * FROM graboids;')->fetchAll();
}

//foreach ($graboids as $graboid) {
//    saveGraboid($graboid);
//}

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