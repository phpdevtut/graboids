<?php

$layout = file_get_contents('./views/layouts/main.blade.php');
$content = file_get_contents('./views/upload/content.blade.php');

$html = str_replace('%content%', $content, $layout);

echo $html;