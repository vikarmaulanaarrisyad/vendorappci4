<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login', 'Login::login_action');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'dashboardFilter']);
$routes->get('/vendor', 'Vendor::index', ['filter' => 'dashboardFilter']);
$routes->get('/vendor/ambildata', 'Vendor::ambildata', ['filter' => 'dashboardFilter']);
$routes->get('/vendor/formtambah', 'Vendor::formtambah', ['filter' => 'dashboardFilter']);
$routes->post('/vendor/formedit', 'Vendor::formedit', ['filter' => 'dashboardFilter']);
$routes->post('/vendor/updatedata', 'Vendor::updatedata', ['filter' => 'dashboardFilter']);
$routes->post('/vendor/simpandata', 'Vendor::simpandata', ['filter' => 'dashboardFilter']);
