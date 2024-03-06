<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/single-post', 'Home::singlepost');
$routes->get('/login', 'Auth::login');

// Manage
$routes->get('/dashboard', 'Manage::index');
$routes->get('/write_article', 'Manage::write_article');

