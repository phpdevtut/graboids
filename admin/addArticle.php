<?php
/*import blade*/
require '../vendor/autoload.php';

/*use blade*/
use Jenssegers\Blade\Blade;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// here we want to check a request:
// - we want to check if request has a cookie for us
// - if yes, we can check if there is a valid(existing) session id in the cookie
// - if no, we will redirect the user to login page
if (empty($_COOKIE)) {
    header('Location: /admin/login.php');
}
//gives cookie if you don't have one, or logs in
session_start();

if (!$_SESSION['is_admin']) {
    header('Location: /');
}

var_dump(session_id());

/*make new blade object, set path to views, set cache path to cache*/
$blade = new Blade('../views', '../cache');

$html = $blade->render('news.addArticle');

echo $html;