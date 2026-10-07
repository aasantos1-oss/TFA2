<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('profile/(:num)', 'Pages::profile/$1');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
$routes->get('products', 'Products::index');
?>	