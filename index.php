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
$router->get('/graboid/(\d+)/delete', '\Graboids\Controllers\HomeController@delete');
$router->get('/news', '\Graboids\Controllers\NewsController@index');
$router->get('/upload', '\Graboids\Controllers\UploadController@index');
$router->get('/about', '\Graboids\Controllers\AboutController@index');
$router->get('/contact', '\Graboids\Controllers\ContactController@index');
$router->get('logout', '\Graboids\Controllers\LogoutController@logout');

// Admin
$router->get('admin/admin-panel', '\Graboids\Controllers\Admin\AdminPanelController@index');
$router->get('admin/add-article', '\Graboids\Controllers\Admin\ArticlesController@add');
$router->get('admin/add-hunter', '\Graboids\Controllers\Admin\HuntersController@add');

// Hunters
$router->get('/hunters', '\Graboids\Controllers\HuntersController@index');
$router->get('/hunters/(\d+)', '\Graboids\Controllers\HuntersController@show');
$router->get('/hunters/(\d+)/delete', '\Graboids\Controllers\HuntersController@delete');

// Run it!
$router->run();
