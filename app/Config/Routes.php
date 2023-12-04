<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->setAutoRoute(true);


// Index
$routes->get('/', 'Home::index', ['filter' => 'guestFilter']);

// Login

$routes->get('/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/login', 'Login::authenticate', ['filter' => 'guestFilter']);

// Register
$routes->get('/', 'Register::index', ['filter' => 'guestFilter']);
$routes->get('/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/register', 'Register::register', ['filter' => 'guestFilter']);


// Logout
$routes->get('/logout', 'Login::logout', ['filter' => 'authFilter']);

// Perangkat
$routes->get('/perangkat', 'perangkat::index', ['filter' => 'authFilter']);
$routes->post('/perangkat', 'perangkat::index', ['filter' => 'authFilter']);

$routes->get('/perangkat/create', 'perangkat::create', ['filter' => 'authFilter']);
$routes->post('/perangkat/save', 'perangkat::save', ['filter' => 'authFilter']);

$routes->get('/perangkat/delete/(:segment)', 'perangkat::delete/$1', ['filter' => 'authFilter']);

$routes->get('/perangkat/(:segment)', 'perangkat::detail/$1', ['filter' => 'authFilter']);

$routes->get('/perangkat/update/(:segment)', 'perangkat::update/$1', ['filter' => 'authFilter']);
$routes->post('/perangkat/change/(:segment)', 'perangkat::change/$1', ['filter' => 'authFilter']);


// User List
$routes->get('/user-list', 'userList::index', ['filter' => 'authFilter']);
$routes->post('/user-list', 'userList::index', ['filter' => 'authFilter']);


// Pelanggan
$routes->get('/pelanggan', 'pelanggan::index', ['filter' => 'authFilter']);
$routes->post('/pelanggan', 'pelanggan::index', ['filter' => 'authFilter']);

$routes->get('/pelanggan/update/(:segment)', 'pelanggan::update/$1', ['filter' => 'authFilter']);
$routes->post('/pelanggan/change/(:segment)', 'pelanggan::change/$1', ['filter' => 'authFilter']);


// Transaksi
$routes->get('/transaksi', 'transaksi::index', ['filter' => 'authFilter']);
$routes->post('/transaksi', 'transaksi::index', ['filter' => 'authFilter']);

$routes->get('/transaksi/create', 'transaksi::create', ['filter' => 'authFilter']);
$routes->post('/transaksi/save', 'transaksi::save', ['filter' => 'authFilter']);
