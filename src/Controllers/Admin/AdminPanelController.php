<?php

declare(strict_types=1);

namespace Graboids\Controllers\Admin;

use Jenssegers\Blade\Blade;

class AdminPanelController
{
    public function index()
    {
        $blade = new Blade('views', 'cache');

        // here we want to check a request:
        // - we want to check if request has a cookie for us
        // - if yes, we can check if there is a valid(existing) session id in the cookie
        // - if no, we will redirect the user to login page
        if (empty($_COOKIE)) {
            header('Location: /login');
        }

        if (empty($_SESSION['is_admin'])) {
            $_SESSION['message'] = 'Not an admin!';
            header('Location: /');
        }

        $html = $blade->render('admin.adminPanel');

        echo $html;
    }
}
