<?php
/*import blade*/

use Graboids\Models\News;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if (empty($_COOKIE)) {
    header('Location: /admin/login.php');
}

session_start();

if (!$_SESSION['is_admin']) {
    header('Location: /');
}

News::create($_POST);

header('Location: /news.php');