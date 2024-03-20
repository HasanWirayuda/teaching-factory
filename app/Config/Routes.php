<?php

use App\Filters\KhususMember;
use App\Filters\KhususPelanggan;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Tefa::index');
$routes->setAutoRoute(true);