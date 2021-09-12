<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\Graboid;
use Graboids\Models\User;
use Jenssegers\Blade\Blade;

class HomeController
{
    public function index()
    {
        $blade = new Blade('views', 'cache');

        $user = null;

        if (isset($_SESSION['user_id'])) {
            $user = User::find($_SESSION['user_id']);
        }

        $graboids = Graboid::all();

        $html = $blade->render('home.content', [
            'graboids' => $graboids,
            'user' => $user,
        ]);

        echo $html;
    }

    public function show(int $graboidId)
    {
        $blade = new Blade('views', 'cache');

        $graboid = Graboid::with('comments')->find($graboidId);

        $html = $blade->render('home.show', [
            'graboid' => $graboid,
        ]);

        echo $html;
    }

    public function delete(int $graboidId)
    {
        Graboid::deleteById($graboidId);

        header('Location: /');
    }
}
