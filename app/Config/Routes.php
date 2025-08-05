<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/paket', 'Home::paket');
$routes->get('services/services_location_list', 'News::index');
$routes->get('aplikasi/(:num)/(:any)', 'News::detail/$1');
$routes->get('services/services_erp_regency', 'News::location');
$routes->get('layanan/(:num)/(:any)', 'News::location_detail/$1');