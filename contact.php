<?php
/*require_once 'services/TemplateEngine.php';

$templateEngine = new TemplateEngine();

echo $templateEngine->render(
    './views/layouts/main.blade.php',
    './views/contact/content.blade.php'
);*/
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

echo $blade->render('contact.content');