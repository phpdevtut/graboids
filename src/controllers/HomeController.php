<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\Graboid;
use Jenssegers\Blade\Blade;

class HomeController
{
    public function index() {
        $blade = new Blade('views', 'cache');

        $graboids = Graboid::all();

        $html = $blade->render('home.content', [
            'graboids' => $graboids,
        ]);

        echo $html;
    }

    public function show(int $graboidId) {
        $blade = new Blade('views', 'cache');

        $graboid = Graboid::getById($graboidId);

        $html = $blade->render('home.show', [
            'graboid' => $graboid,
        ]);

        echo $html;
    }
}