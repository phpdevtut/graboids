<?php

$layout = file_get_contents('./views/layouts/main.html');
$content = file_get_contents('./views/about/content.html');

$html = str_replace('%content%', $content, $layout);

echo $html;