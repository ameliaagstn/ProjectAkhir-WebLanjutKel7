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
$routes->get('/penjual/dashboard_penjual', [PenjualController::class, 'dashboard'], ['filter' => 'role:penjual']);
$routes->get('/admin/dashboard', [PenjualController::class, 'dashboard'], ['filter' => 'role:admin']);
$routes->get('/login', [AuthController::class, 'login']);
$routes->get('/register', [AuthController::class, 'register']);
$routes->get('/profile/profile_admin', [AdminController::class, 'profile_admin'], ['filter' => 'role:admin']);
$routes->put('/listuser/(:any)', [AdminController::class, 'update'], ['filter' => 'role:admin']);
$routes->delete('/listuser/(:any)', [AdminController::class, 'destroy'], ['filter' => 'role:admin']);
$routes->get('/listuser', [AdminController::class, 'listuser'], ['filter' => 'role:admin']);
$routes->get('/listuser/(:any)/edit', [AdminController::class, 'edit'], ['filter' => 'role:admin']);
$routes->get('/profile/pembeli', [PembeliController::class, 'pembeli'], ['filter' => 'role:pembeli']);
$routes->get('listuser/(:any)/profile', [AdminController::class, 'show'], ['filter' => 'role:admin']);
















//keranjang
$routes->get('/pembeli/keranjang', [PembeliController::class, 'keranjang'], ['filter' => 'role:pembeli']);
// $routes->match(['get', 'post'], '/pembeli/keranjang', [PembeliController::class, 'keranjang'], ['filter' => 'role:pembeli']);
$routes->post('/add-to-cart/(:num)/(:num)', 'CartController::addToCart/$1/$2');
$routes->delete('/pembeli/keranjang/(:any)', [PembeliController::class, 'deleteKeranjang']);
$routes->get('pembeli/shop', [PembeliController::class, 'shop']);