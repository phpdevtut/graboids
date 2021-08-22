<?php
/*import blade*/

use Graboids\Models\addHunterToDatabase;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

addHunterToDatabase::create($_POST);

header('Location: /hunters.php');