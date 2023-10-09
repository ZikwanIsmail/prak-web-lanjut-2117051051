<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/user/profile/(:any)/(:any)/(:any)', 'UserController::profile/$1/$2/$3');

$routes-> get('/user/create', [UserController::class, 'create']);
$routes-> get('/user', [UserController::class, 'index']);
$routes-> post('/user/store', [UserController::class, 'store']);
$routes-> get('user/(:any)', [UserController::class, 'show']);
$routes->post('/user/delete/(:num)', 'UserController::delete/$1');

$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');

