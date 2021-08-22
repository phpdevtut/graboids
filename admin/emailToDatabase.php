<?php
/*import blade*/

use Graboids\Models\emailToDatabase;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

emailToDatabase::create($_POST);

header('Location: /index.php');