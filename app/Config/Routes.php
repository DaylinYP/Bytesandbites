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


/*Ruta de botón regresar de form_registro a página de inicio*/
$routes->get('regresar_Home', 'Home::index');
/*Ruta para acceder a las paginas desde el nav*/
$routes->get('index', 'Home:index');
$routes->get('registrarse', 'Users::index');
$routes->get('quienes_somos', 'quienesSomos::index');
$routes->get('login', 'Login::index');


/*Ruta para activa la cuenta despues de registro*/
$routes->get('activate-user/(:any)', 'Users::activateUser/$1');
/*Ruta para ir de registro a inicio de sesion*/ 
$routes->get('iniciodesesion', 'Login::index');
/*Ruta para enviar el formulario*/
$routes->post('auth', 'Login::auth');


/*VISTA TÉCNICO */
$routes->get('solicitarMateriales', 'solicitarMaterialesController::solicitarMateriales');
$routes ->get('ordenesDeServicio', 'ordenesDeServicioController::ordenesDeServicio');
$routes->get('solicitarMateriales', 'EmpleadoController::solicitarMateriales');
