<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->post('/login', 'Home::login');
$routes->get('/salir', 'Home::salir');
$routes->get('/editar', 'Home::editar');
$routes->get('/eliminar','Home::eliminar');
$routes->post('guardar', 'Home::guardar');
$routes->post('crear', 'Home::crear');