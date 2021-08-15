<?php

require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

require_once 'includes/database.php';

$hunters = $db->query('SELECT * FROM hunters;')->fetchAll();
$blade = new Blade('views', 'cache');

$html = $blade->render('hunters.content', [
    'hunters' => $hunters,
]);

echo $html;