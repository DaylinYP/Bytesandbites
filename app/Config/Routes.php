<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*VISTA CLIENTES*/
$routes->get('/', 'Home::index');
/*Formulario registro de clientes*/
$routes->get('registro', 'Users::index');



$routes ->get('solicitarMateriales', 'solicitarMaterialesController::solicitarMateriales');