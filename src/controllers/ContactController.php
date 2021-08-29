<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Jenssegers\Blade\Blade;

class ContactController
{
    public function index()
    {
        $blade = new Blade('views', 'cache');

        $html = $blade->render('contact.content');

        echo $html;
    }

}