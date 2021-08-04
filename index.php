<?php
$img_graboids = [
    [
        'id1' => 1,
        'src' => '/assets/images/grab1.jpg',
    ],
    [
        'id2' => 2,
        'src' => '/assets/images/grab2.jpg',
    ],
    [
        'id3' => 3,
        'src' => '/assets/images/grab3.jpg',
    ],
    [
        'id4' => 4,
        'src' => '/assets/images/grab4.jpg',
    ],
    [
        'id5' => 5,
        'src' => '/assets/images/grab5.jpg',
    ],
    [
        'id6' => 6,
        'src' => '/assets/images/grab6.jpg',
    ],
    [
        'id7' => 7,
        'src' => '/assets/images/grab7.jpg',
    ],
    [
        'id8' => 8,
        'src' => '/assets/images/grab8.jpg',
    ],
    [
        'id9' => 9,
        'src' => '/assets/images/grab9.jpg',
    ],
];


$layout = file_get_contents('./views/layouts/main.html');
$content = file_get_contents('./views/home/content.html');

$html = str_replace('%content%', $content, $layout);

echo $html;