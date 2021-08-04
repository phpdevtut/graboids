<?php
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

$graboids = [
    [
        'id' => 1,
        'src' => '/assets/images/grab1.jpg',
    ],
    [
        'id' => 2,
        'src' => '/assets/images/grab2.jpg',
    ],
    [
        'id' => 3,
        'src' => '/assets/images/grab3.jpg',
    ],
    [
        'id' => 4,
        'src' => '/assets/images/grab4.jpg',
    ],
    [
        'id' => 5,
        'src' => '/assets/images/grab5.jpg',
    ],
    [
        'id' => 6,
        'src' => '/assets/images/grab6.jpg',
    ],
    [
        'id' => 7,
        'src' => '/assets/images/grab7.jpg',
    ],
    [
        'id' => 8,
        'src' => '/assets/images/grab8.jpg',
    ],
    [
        'id' => 9,
        'src' => '/assets/images/grab9.jpg',
    ],
];

echo $blade->render('home.content', [
    'graboids' => $graboids,
]);
