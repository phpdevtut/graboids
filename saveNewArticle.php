<?php
/*import blade*/

use Graboids\Models\News;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

News::create($_POST);

header('Location: /news.php');