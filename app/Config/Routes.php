<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/producto', 'Productos::show');
/* a continuacion solicito un argumento o parametro numerico */
$routes->get('/productos/(:num)', 'Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$2/$1');

/* ruta para llamar directamente a una vista, tambien se le puede enviar parametros */
$routes->view('productoList/(:alpha)', 'lista_productos');

/* tambien se pueden definir grupos de rutas ( esto puede servir por ejemplo cuando un grupo necesita al gun tipo de filtro) */

/* su sintaxis es: */
$routes->group('admin', static function ($routes) {
    $routes->get('/productos', 'Admin\Productos::index');
});