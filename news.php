<?php
/*require_once 'src/TemplateEngine.php';

/**
 * That's how we did it our way back then
 */

//$templateEngine = new TemplateEngine();
//
//echo $templateEngine->render(
//    './views/layouts/main.blade.php',
//    './views/news/content.blade.php'
//);

require 'vendor/autoload.php';

use Graboids\Models\News;
use Jenssegers\Blade\Blade;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$news = News::all();

$blade = new Blade('views', 'cache');

$html = $blade->render('news.content', [
    'news' => $news,
]);

echo $html;