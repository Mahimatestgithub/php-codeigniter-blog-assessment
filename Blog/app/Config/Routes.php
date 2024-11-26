<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test-connection', 'TestConnection::index');
$routes->match(['get', 'post'], 'admin/add-blog', 'Admin::addBlog');
$routes->get('/', 'BlogController::index');
$routes->get('/blog/(:num)', 'BlogController::detail/$1'); // Blog detail






