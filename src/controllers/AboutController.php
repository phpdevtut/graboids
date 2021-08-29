<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Jenssegers\Blade\Blade;

class AboutController
{
    public function index()
    {
        $blade = new Blade('views', 'cache');

        $html = $blade->render('about.content');

        echo $html;
    }

}