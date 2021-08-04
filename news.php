<?php
require_once 'services/TemplateEngine.php';

$templateEngine = new TemplateEngine();

echo $templateEngine->render(
    './views/layouts/main.blade.php',
    './views/news/content.blade.php'
);