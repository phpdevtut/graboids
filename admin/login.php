<?php
/*import blade*/
require '../vendor/autoload.php';

/*use blade*/

use Graboids\Models\User;
use Jenssegers\Blade\Blade;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$params = [];

if (empty($_POST)) {
    $message = 'Nothing, man!';
} else {
    // here we have to take the data from the $_POST and try to find out
    // if we have a corresponding user in users table
    // if we find one, that means that user that sent request is indeed the guy
    $user = User::findByUsernameAndPassword($_POST['username'], $_POST['password']);

    if ($user) {
        // have to start a session for the user found
        session_start();

        $_SESSION['is_admin'] = $user->admin;
        $_SESSION['user_id'] = $user->id;

        header('Location: /admin/addArticle.php');
    } else {
        $message = 'User not found!';
    }
}

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('../views', '../cache');

$html = $blade->render('admin.login', [
    'message' => $message,
    'params' => $params,
]);

echo $html;