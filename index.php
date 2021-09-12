<?php
/* import installed packages */
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// start a session (if user has a cookie, we log him into his SESSION)
session_start();

/**
 * You try to access GET /login endpoint
 * - even if you are on this site first time, you get a cookie from server with session_id
 */


// load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create Router instance
$router = new \Bramus\Router\Router();

// Eloquent setting up //////////////////////
$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

//////////////////////////////////////////////////////////////////////////


// Define routes
$router->get('/', '\Graboids\Controllers\HomeController@index');
$router->get('/(\d+)', '\Graboids\Controllers\HomeController@show');
$router->get('/graboid/(\d+)/delete', '\Graboids\Controllers\HomeController@delete');
$router->get('/news', '\Graboids\Controllers\NewsController@index');
$router->get('/upload', '\Graboids\Controllers\UploadController@index');
$router->get('/about', '\Graboids\Controllers\AboutController@index');
$router->get('/contact', '\Graboids\Controllers\ContactController@index');
$router->get('/logout', '\Graboids\Controllers\LogoutController@logout');

// Admin
$router->get('/admin', '\Graboids\Controllers\Admin\AdminPanelController@index');
$router->get('/admin/add-article', '\Graboids\Controllers\Admin\ArticlesController@add');
$router->get('/admin/add-hunter', '\Graboids\Controllers\Admin\HuntersController@add');

$router->get('/admin/hunters', '\Graboids\Controllers\Admin\HuntersController@index');
$router->get('/admin/hunters/(\d+)/edit', '\Graboids\Controllers\Admin\HuntersController@edit');
$router->post('/admin/hunters/(\d+)', '\Graboids\Controllers\Admin\HuntersController@update');

$router->get('/admin/graboids', '\Graboids\Controllers\Admin\HomeController@index');
$router->get('/admin/graboids/(\d+)/edit', '\Graboids\Controllers\Admin\HomeController@edit');
$router->post('/admin/graboids/(\d+)', '\Graboids\Controllers\Admin\HomeController@update');

$router->get('/admin/news', '\Graboids\Controllers\Admin\ArticlesController@index');
$router->get('/admin/news/(\d+)/edit', '\Graboids\Controllers\Admin\ArticlesController@edit');
$router->post('/admin/news/(\d+)', '\Graboids\Controllers\Admin\ArticlesController@update');


// Login
$router->get('/login', '\Graboids\Controllers\LoginController@showForm');
$router->post('/login', '\Graboids\Controllers\LoginController@login');

// Hunters
$router->get('/hunters', '\Graboids\Controllers\HuntersController@index');
$router->get('/hunters/(\d+)', '\Graboids\Controllers\HuntersController@show');
$router->get('/hunters/(\d+)/delete', '\Graboids\Controllers\HuntersController@delete');

// Run it!
$router->run();
