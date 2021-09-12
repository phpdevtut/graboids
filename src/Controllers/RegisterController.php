<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Carbon\Carbon;
use Graboids\Models\User;
use Jenssegers\Blade\Blade;

class RegisterController
{
    public function showForm()
    {
        $blade = new Blade('views', 'cache');

        echo $blade->render('register.content');
    }

    public function confirm(string $hash)
    {
        $user = User::where('confirmation_hash', $hash)->firstOrFail();

        $user->confirmed_at = Carbon::now()->toDateTimeString();
        $user->save();

        setFlash('Your email is confirmed!');

        header('Location: /');
    }

    public function register()
    {
        $email = $_POST['email'];

        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password_confirmation'];

        if ($password !== $passwordConfirmation) {
            $_SESSION['message'] = 'Password and password confirmation are not equal.';
            header('Location: /register');
        }

        if (empty($email)) {
            $_SESSION['message'] = 'Email cannot be empty.';
            header('Location: /register');
        }

        // send an email for a user with registration link
        $hash = sha1($email);

        $user = User::create([
            'password' => $password,
            'email' => $email,
            'confirmation_hash' => $hash,
        ]);

        mail(
            $email,
            'Confirm your email',
            'Here is your link http://graboids.local/register/confirm/' . $hash
        );

        $_SESSION['message'] = 'You were registered! Please check your email for a confirmation link.';

        header('Location: /');
    }
}
