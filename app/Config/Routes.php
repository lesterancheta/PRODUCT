<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'Productcontroller::lesterancheta');
$routes->get('/product/(:any)', 'Productcontroller::product/$1');