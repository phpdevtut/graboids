<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\Hunter;
use Jenssegers\Blade\Blade;

class HuntersController
{
    public function index() {
        $blade = new Blade('views', 'cache');

        $hunters = Hunter::all();

        $html = $blade->render('hunters.content', [
            'hunters' => $hunters,
        ]);

        echo $html;
    }

    public function show(int $hunterId) {
        $blade = new Blade('views', 'cache');
// gives back single hunter database object?
        $hunter = Hunter::getById($hunterId);
//sends database object to "show"?
        $html = $blade->render('hunters.show', [
            'hunter' => $hunter,
        ]);

        echo $html;
    }

    public function delete(int $hunterId)
    {
        Hunter::deleteById($hunterId);

        header('Location: /hunters');
    }
}
