<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Jenssegers\Blade\Blade;

class UploadController
{
    public function index()
    {
        $blade = new Blade('views', 'cache');

        echo $blade->render('upload.content');
    }
}