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
$routes->get('quienes_somos', 'CQuienesSomos::index');
$routes->get('login', 'Login::index');


/*Ruta para activa la cuenta despues de registro*/
$routes->get('activate-user/(:any)', 'Users::activateUser/$1');
/*Ruta para ir de registro a inicio de sesion*/ 
$routes->get('iniciodesesion', 'Login::index');
/*Ruta para enviar el formulario*/
$routes->post('auth', 'Login::auth');
/*Ruta para cerrar sesion */
$routes->get('cerrarsesion', 'CCerrarSesion::index');
$routes->get('logout', 'Login::logout');
/*Ruta para boton de login>afterlogin */
$routes->get('afterlogin', 'CAfterLogin::index');

/* FINALIZA VISTA CLIENTES */


/*VISTA TÉCNICO */
/*Para solicitar materiales*/
$routes->get('solicitarMateriales', 'solicitarMaterialesController::solicitarMateriales');
/* Para ver las órdenes de servicio*/
$routes ->get('ordenesDeServicio', 'ordenesDeServicioController::index');
/* Para editar la información del técnico*/
$routes->get('editarPerfil', 'EmpleadoController::editarPerfil');
<<<<<<< HEAD
$routes->get('inicioSesion', 'EmpleadoController::inicioSesion');





/*Admin---<*/

/*Inicio*/
$routes->get('/Inicio','InicioController::index');
$routes->post('/buscar','AdminEmpleadosController::buscar');

/*Empleados*/
$routes->get('/empleados','AdminEmpleadosController::index');
$routes->post('/empleados/()','AdminEmpleadosController::actualizarEstado/');

/**Usuarios */
$routes->get('/usuario','UsuariosController::index');
$routes->post('/authe','UsuariosController::auth');
$routes->get('/salir','UsuariosController::logout');

$routes->get('/nuevo_empleado','AdminEmpleadosController::nuevoEmpleado');
$routes->post('/agregar_empleado','AdminEmpleadosController::agregarEmpleado');
$routes->get('/buscar_empleado/(:num)','AdminEmpleadosController::buscarEmpleado/$1');
$routes->post('/modificar_empleado','AdminEmpleadosController::modificar');

/*Rol*/
$routes->get('/nuevo_rol','AdminEmpleadosController::nuevoRol');
$routes->post('/agregar_rol','AdminRolesController::agregarRol');

/*Quejas */
$routes->get('/quejas','QuejasController::quejas');

/**---------> */ 

