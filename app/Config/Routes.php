<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\PembeliController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\PenjualController;
use App\Controllers\Home;
use App\Controllers\Invoice;
use App\Controllers\InvoiceController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/login','Home::daftar');
$routes->get('/pembeli/dashboard', [PembeliController::class, 'dashboard'], ['filter' => 'role:pembeli']);
$routes->get('/penjual/dashboard', [PenjualController::class, 'dashboard'], ['filter' => 'role:penjual']);
$routes->get('/admin/dashboard', [PenjualController::class, 'dashboard'], ['filter' => 'role:admin']);
$routes->get('/login', [AuthController::class, 'login']);
$routes->get('/register', [AuthController::class, 'register']);
$routes->get('/profile/profile_admin', [AdminController::class, 'profile_admin'], ['filter' => 'role:admin']);
$routes->put('/listuser/(:any)', [AdminController::class, 'update'], ['filter' => 'role:admin']);
$routes->delete('/listuser/(:any)', [AdminController::class, 'destroy'], ['filter' => 'role:admin']);
$routes->get('/listuser', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/listuser/(:any)/edit', [AdminController::class, 'edit'], ['filter' => 'role:admin']);
$routes->get('/profile/pembeli', [PembeliController::class, 'pembeli'], ['filter' => 'role:pembeli']);
$routes->get('listuser/(:any)/profile', [AdminController::class, 'show'], ['filter' => 'role:admin']);
$routes->get('/penjual/profile', [PenjualController::class, 'profile'], ['filter' => 'role:penjual']);
$routes->get('/penjual/(:any)/edit', [PenjualController::class, 'edit'], ['filter' => 'role:penjual']);
$routes->put('/penjual/(:any)', [PenjualController::class, 'update'], ['filter' => 'role:penjual']);
$routes->get('profile_penjual', 'PenjualController::profile'); 
$routes->get('/pembeli/profile', [PembeliController::class, 'profile'], ['filter' => 'role:pembeli']);
$routes->get('/pembeli/(:any)/edit', [PembeliController::class, 'edit'], ['filter' => 'role:pembeli']);
$routes->put('/pembeli/(:any)', [PembeliController::class, 'update'], ['filter' => 'role:pembeli']);
$routes->get('profile_pembeli', 'PembeliController::profile'); 
$routes->get('/invoice/(:any)/detail_invoice', [InvoiceController::class, 'detail_invoice'], ['filter' => 'role:admin']);
$routes->delete('/invoice/(:any)', [InvoiceController::class, 'destroy'], ['filter' => 'role:admin']);
$routes->get('/invoice', [InvoiceController::class, 'list_invoice'], ['filter' => 'role:admin']);