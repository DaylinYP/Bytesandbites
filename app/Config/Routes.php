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
$routes->get('servicio_al_cliente', 'CServicioAlCliente::index');
$routes->get('reporte_queja', 'CReporteQueja::index');
$routes->post('agregar_reporte', 'CReporteQueja::agregarQueja');
$routes->get('inicio_dos', 'CInicioDos::index');



/*Ruta para activa la cuenta despues de registro*/
$routes->get('activate-user/(:any)', 'Users::activateUser/$1');
/*Ruta para recuperar contraseña*/ 
$routes->get('password-request', 'Users::linkRequestForm');
/*Ruta para ir de registro a inicio de sesion*/ 
$routes->get('iniciodesesion', 'Login::index');
/*Ruta para enviar el formulario*/
$routes->post('auth', 'Login::auth');
/*Ruta para cerrar sesion */
$routes->get('cerrar_sesion', 'CCerrarSesion::index');
$routes->get('logout', 'Login::logout');
/*Ruta para boton de login>afterlogin */
$routes->get('afterlogin', 'CAfterLogin::index');
/*Ruta para alerta */

/* FINALIZA VISTA CLIENTES */


/*VISTA TÉCNICO */
/*Para solicitar materiales*/
$routes->get('/solicitarMateriales','SolicitarMaterialesController::solicitarMateriales', ['filter' => 'auth']);
$routes->post('/agregar_solicitud','SolicitarMaterialesController::agregarSolicitud');
/*Para Lista de materiales solicitados*/
$routes->get('listaSolicitudes', 'SolicitarMaterialesController::listaSolicitudes',['filter' => 'auth']);
/* Para ver las órdenes de servicio*/
$routes ->get('ordenesDeServicio', 'ordenesDeServicioController::index',['filter' => 'auth']);
/* Para editar la información del técnico*/
$routes->get('perfil_usuario', 'EmpleadoController::verPerfil',['filter' => 'auth']);

$routes->get('inicioSesion', 'EmpleadoController::inicioSesion');





/*Admin---<*/

/*Inicio*/
$routes->get('/Inicio','InicioController::index',['filter' => 'auth']);
$routes->post('/buscar','AdminEmpleadosController::buscar');

/*Empleados*/

    //El ['filter' => 'auth'] sirve para permitir ingresar a la url si el usuario esta autentificado
$routes->get('/empleados','AdminEmpleadosController::index',['filter' => 'auth']);
$routes->post('/empleados/()','AdminEmpleadosController::actualizarEstado/');

/**Usuarios */
$routes->get('/usuario','UsuariosController::index');
$routes->post('/authe','UsuariosController::auth');
$routes->get('/salir','UsuariosController::logout');

$routes->get('/nuevo_empleado','AdminEmpleadosController::nuevoEmpleado', ['filter' => 'auth']);
$routes->post('/agregar_empleado','AdminEmpleadosController::agregarEmpleado');
$routes->get('/buscar_empleado/(:num)','AdminEmpleadosController::buscarEmpleado/$1',['filter' => 'auth']);
$routes->post('/modificar_empleado','AdminEmpleadosController::modificar');


/*Cliente */
$routes->get('/verClientes','AdminClientesController::clientes',['filter' => 'auth']);
$routes->post('/buscarCliente','AdminClientesController::buscarCliente');

/*Ordenes */
$routes->get('/verOrdenes','AdminDetalleOrdenesController::ordenes',['filter' => 'auth']);
$routes->post('/buscarOrdenes', 'AdminDetallesOrdenesController::buscarOrdenes');


/*Rol*/
$routes->get('/nuevo_rol','AdminEmpleadosController::nuevoRol',['filter' => 'auth']);
$routes->post('/agregar_rol','AdminRolesController::agregarRol',['filter' => 'auth']);

/*Quejas */
$routes->get('/quejas','QuejasController::quejas', ['filter' => 'auth']);
$routes->get('/eliminar_quejas/(:num)','QuejasController::eliminarQueja/$1',['filter' => 'auth']);
/**---------> */ 






/*Agente de Servicio*/
$routes->get('menu_ordenes_servicio', 'OrdenesController::index',['filter' => 'auth']);
$routes->get('ordenes_pendientes', 'OrdenesController::ordenesPendientes');
$routes->get('ordenes_enproceso', 'OrdenesController::ordenesEnProceso');
$routes->get('ordenes_finalizadas', 'OrdenesController::ordenesFinalizadas');

$routes->get('orden/nueva', 'OrdenesController::nuevaOrden',['filter' => 'auth']);
$routes->post('orden/agregar', 'OrdenesController::agregarOrden');


/*Encargado de Bodega*/

$routes->get('lista_repuestos', 'RepuestosController::index', ['filter' => 'auth']);

//Agregar nuevo registro
$routes->get('nuevo_repuesto', 'RepuestosController::nuevoRepuesto',['filter' => 'auth']);
$routes->post('agregar_repuesto', 'RepuestosController::agregarRepuesto');

//Actualizar un registro
$routes->get('buscar_repuesto/(:num)', 'RepuestosController::buscarRepuesto/$1',['filter' => 'auth']);
$routes->post('modificar_repuesto', 'RepuestosController::modificarRepuesto');


// Eliminar registro
$routes->get('eliminar_Repuesto/(:num)', 'RepuestosController::eliminarRepuesto/$1',['filter' => 'auth']);

/**---------> */ 
//Perfil de empleados
$routes->get('perfil_empleado/(:num)', 'EmpleadoController::perfilEmpleado/$1');
