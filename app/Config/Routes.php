<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*VISTA CLIENTES*/
$routes->get('/', 'Home::index');
/*Formulario registro de clientes*/
$routes->get('registro', 'Users::index');
$routes->post('registro', 'Users::create');


$routes->get('activate-user/(:any)', 'Users::activateUser/$1');

$routes ->get('solicitarMateriales', 'solicitarMaterialesController::solicitarMateriales');