<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\PembeliController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\PenjualController;
use App\Controllers\Home;
 
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

// $routes->get('/penjual/create', [PenjualController::class, 'create'], ['filter' => 'role:penjual']);
$routes->match(['get', 'post'], '/penjual/create', [PenjualController::class, 'create'], ['filter' => 'role:penjual']);
$routes->post('/penjual/store', [PenjualController::class, 'store'], ['filter' => 'role:penjual']);
$routes->get('/penjual/list_barang', [PenjualController::class, 'update'], ['filter' => 'role:penjual']);
$routes->delete('/penjual/list_barang', [PenjualController::class, 'destroy'], ['filter' => 'role:penjual']);
// $routes->match(['get', 'post'],'/kelas/store', [KelasController::class, 'store'], ['filter' => 'role:penjual']);