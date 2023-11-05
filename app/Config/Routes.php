<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\Home;
 
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/login','Home::daftar');
$routes->get('/dashboard', [UserController::class, 'dashboard']);
$routes->get('/login', [UserController::class, 'login']);
$routes->get('/register', [UserController::class, 'register']);