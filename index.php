<?php
/* import installed packages */
require 'vendor/autoload.php';

// start a session (if user has a cookie, we log him into his SESSION)
session_start();

use Graboids\Models\Graboid;
use Jenssegers\Blade\Blade;

// load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', '\Graboids\Controllers\HomeController@index');
$router->get('/(\d+)', '\Graboids\Controllers\HomeController@show');
$router->get('/hunters', '\Graboids\Controllers\HuntersController@index');
//is it taking the digit from content and passing it to show function? or where is the digit coming from?
$router->get('/hunters/(\d+)', '\Graboids\Controllers\HuntersController@show');
$router->get('/news', '\Graboids\Controllers\NewsController@index');
$router->get('/upload', '\Graboids\Controllers\UploadController@index');
$router->get('/about', '\Graboids\Controllers\AboutController@index');
$router->get('/contact', '\Graboids\Controllers\ContactController@index');

// Run it!
$router->run();
