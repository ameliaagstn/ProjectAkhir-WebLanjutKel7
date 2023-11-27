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
<<<<<<< HEAD

// $routes->get('/penjual/create', [PenjualController::class, 'create'], ['filter' => 'role:penjual']);
$routes->match(['get', 'post'], '/penjual/create', [PenjualController::class, 'create'], ['filter' => 'role:penjual']);
$routes->post('/penjual/store', [PenjualController::class, 'store'], ['filter' => 'role:penjual']);
$routes->get('/penjual/list_barang', [PenjualController::class, 'update'], ['filter' => 'role:penjual']);
$routes->delete('/penjual/list_barang', [PenjualController::class, 'destroy'], ['filter' => 'role:penjual']);
// $routes->match(['get', 'post'],'/kelas/store', [KelasController::class, 'store'], ['filter' => 'role:penjual']);
=======
$routes->get('/penjual/profile', [PenjualController::class, 'profile'], ['filter' => 'role:penjual']);
$routes->get('/penjual/(:any)/edit', [PenjualController::class, 'edit'], ['filter' => 'role:penjual']);
$routes->put('/penjual/(:any)', [PenjualController::class, 'update'], ['filter' => 'role:penjual']);
$routes->get('profile_penjual', 'PenjualController::profile'); 
$routes->get('/pembeli/profile', [PembeliController::class, 'profile'], ['filter' => 'role:pembeli']);
$routes->get('/pembeli/(:any)/edit', [PembeliController::class, 'edit'], ['filter' => 'role:pembeli']);
$routes->put('/pembeli/(:any)', [PembeliController::class, 'update'], ['filter' => 'role:pembeli']);
$routes->get('profile_pembeli', 'PembeliController::profile'); 
>>>>>>> 2fe740ceb03b3bf9088bad665e4b28223a0d997b
