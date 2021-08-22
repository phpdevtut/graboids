<?php
/*import blade*/

use Graboids\Models\Register;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Register::create($_POST);

if (empty($_COOKIE)) {
    session_start();
}

header('Location: /index.php');