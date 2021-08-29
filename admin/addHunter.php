<?php
/*import blade*/

use Graboids\Models\Hunter;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Hunter::create($_POST);

header('Location: /hunters');