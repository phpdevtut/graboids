<?php

declare(strict_types=1);

namespace Graboids\Controllers\Admin;

use Jenssegers\Blade\Blade;

class HuntersController
{
    public function add()
    {
        $blade = new Blade('views', 'cache');

        // here we want to check a request:
        // - we want to check if request has a cookie for us
        // - if yes, we can check if there is a valid(existing) session id in the cookie
        // - if no, we will redirect the user to login page
        if (empty($_COOKIE)) {
            header('Location: /admin/login.php');
        }

        if (!$_SESSION['is_admin']) {
            header('Location: /');
        }

        $html = $blade->render('hunters.addHunter');

        echo $html;
    }
}
