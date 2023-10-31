<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', [UserController::class, 'login']);
