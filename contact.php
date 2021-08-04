<?php
require_once 'services/TemplateEngine.php';

$templateEngine = new TemplateEngine();

echo $templateEngine->render(
    './views/layouts/main.html',
    './views/contact/content.html'
);