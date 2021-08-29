<?php
/*import blade*/

use Graboids\Models\Contact;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

contact::create($_POST);

header('Location: /');