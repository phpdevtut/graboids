<?php

require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');
/*$hunters = [
    [
        'id' => 1,
        'src' => '/assets/images/hunters/hunter1.jpg',
    ],
    [
        'id' => 2,
        'src' => '/assets/images/hunters/hunter2.jpg',
    ],
    [
        'id' => 3,
        'src' => '/assets/images/hunters/hunter3.jpg',
    ],
    [
        'id' => 4,
        'src' => '/assets/images/hunters/hunter4.jpg',
    ],
    [
        'id' => 5,
        'src' => '/assets/images/hunters/hunter5.jpg',
    ],
];

function saveHunter($hunters) {
    $pdo = new PDO('sqlite:graboids-database.sqlite');
    $pdo->query('INSERT INTO hunters (src) VALUES ("' . $hunters['src'] . '");');
}

foreach ($hunters as $hunter) {
    saveHunter($hunter);
}*/

function getHunters() {
    $pdo = new PDO('mysql:host=localhost;dbname=homestead', 'homestead', 'secret');
    return $pdo->query('SELECT * FROM hunters;')->fetchAll();
}

$hunters = getHunters();

$html = $blade->render('hunters.content', [
    'hunters' => $hunters,
]);

echo $html;
