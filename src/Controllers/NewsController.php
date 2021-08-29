<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\News;
use Jenssegers\Blade\Blade;

class NewsController
{
    public function index()
    {
        $news = News::all();

        $blade = new Blade('views', 'cache');

        $html = $blade->render('news.content', [
            'news' => $news,
        ]);

        echo $html;
    }

}