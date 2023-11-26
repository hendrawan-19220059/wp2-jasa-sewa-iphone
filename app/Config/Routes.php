<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');


// Login

$routes->get('/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/login', 'Login::authenticate', ['filter' => 'guestFilter']);

// Register
$routes->get('/', 'Register::index', ['filter' => 'guestFilter']);
$routes->get('/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/register', 'Register::register', ['filter' => 'guestFilter']);


// Perangkat
$routes->get('/perangkat', 'perangkat::index', ['filter' => 'authFilter']);
$routes->post('/perangkat', 'perangkat::index', ['filter' => 'authFilter']);
$routes->get('/perangkat/create', 'perangkat::create', ['filter' => 'authFilter']);
$routes->post('/perangkat/save', 'perangkat::save', ['filter' => 'authFilter']);
$routes->get('/perangkat/delete/(:segment)', 'perangkat::delete/$1', ['filter' => 'authFilter']);
$routes->get('/perangkat/(:segment)', 'perangkat::detail/$1', ['filter' => 'authFilter']);
$routes->get('/perangkat/update/(:segment)', 'perangkat::update/$1', ['filter' => 'authFilter']);
$routes->post('/perangkat/change/(:segment)', 'perangkat::change/$1', ['filter' => 'authFilter']);