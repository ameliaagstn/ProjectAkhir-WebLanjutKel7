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
$routes->get('/admin', [UserController::class, 'admin']);
$routes->get('/pembeli', [UserController::class, 'pembeli']);

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('create', 'Admin::create');
    $routes->get('buyers', 'Admin::buyers');
    $routes->get('financials', 'Admin::financials');
    $routes->get('products', 'Admin::products');
    $routes->get('create-buyers', 'Admin::createBuyers');
});