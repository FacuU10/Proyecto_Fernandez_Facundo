<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Nuevas rutas para las páginas solicitadas
$routes->get('/quienes-somos', 'Home::quienesSomos');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/terminos-y-usos', 'Home::terminosYUsos');
$routes->get('en_construccion', 'Home::enConstruccion');

// Puedes mantener o eliminar la ruta /plantilla si ya no la necesitas
// $routes->get('/plantilla', 'Home::plantilla');

