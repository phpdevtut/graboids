<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\User;
use Jenssegers\Blade\Blade;

class LoginController
{
    public function showForm() // GET /login
    {
        /*make new blade object, set path to views, set cache path to cache*/
        $blade = new Blade('views', 'cache');

        $message = empty($_SESSION['message']) ? 'No message' : $_SESSION['message'];
        unset($_SESSION['message']);

        $html = $blade->render('admin.login', [
            'message' => $message,
        ]);

        echo $html;
    }

    public function login() // POST /login
    {
        // here we have to take the data from the $_POST and try to find out
        // if we have a corresponding user in users table
        // if we find one, that means that user that sent request is indeed the guy
        $user = User::where('username', $_POST['username'])
            ->where('password', $_POST['password'])
            ->first();

        if ($user) {
            $_SESSION['is_admin'] = $user->admin;
            $_SESSION['user_id'] = $user->id;

            header('Location: /admin');
        } else {
            $_SESSION['message'] = 'Login or password is invalid.';
            header('Location: /login');
        }
    }
}
