<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\UsersModel; // Modelo de usuarios
use App\Models\OrdenesServicioModel;
use App\Models\DetallesEquiposModel;
use App\Models\MarcaModel;
use App\Models\TipoEquipoModel;
use App\Models\EstadoOrdenesModel;
use App\Models\EmpleadoModel;
use App\Models\EmpresasModel;
use App\Models\ServicioReparacionModel;
use App\Models\ServiciosModel;
use App\Models\DetallesReparacionModel;
use CodeIgniter\Controller;

class OrdenesController extends Controller
{
    protected $marcaModel;
    protected $tipoEquipoModel;
    protected $clientesModel;
    protected $detalleEquiposModel;
    protected $ordenesServicioModel;

    public function __construct()
    {
        // Inicializa los modelos
        $this->marcaModel = new MarcaModel();
        $this->tipoEquipoModel = new TipoEquipoModel();
        $this->clientesModel = new UsersModel();
        $this->detalleEquiposModel = new DetallesEquiposModel();
        $this->ordenesServicioModel = new OrdenesServicioModel();
    }

    public function index(): string
    {  
        $session = \Config\Services::session();

        // Recuperar datos de la sesión
        $data['titulo'] = 'Inicio';
        $data['user_role'] = $session->get('user_role');
        $data['user_name'] = $session->get('user_name');
        $data['user_nombre'] = $session->get('user_nombre');

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirige si no está autenticado
        }

        // Contar las órdenes según su estado
        $pendientesCount = $this->ordenesServicioModel->where('id_estado_orden', 1)->countAllResults();
        $enProcesoCount = $this->ordenesServicioModel->where('id_estado_orden', 2)->countAllResults();
        $finalizadasCount = $this->ordenesServicioModel->where('id_estado_orden', 3)->countAllResults();

        // Pasar los conteos a la vista
        $datos = [
            'pendientesCount' => $pendientesCount,
            'enProcesoCount' => $enProcesoCount,
            'finalizadasCount' => $finalizadasCount,
            'titulo' => ' Inicio',
        ]; 
        
        return view('/agente_servicio/menu_ordenes_servicio',  $datos);
    }

    // Método para mostrar el formulario de nueva orden
    public function nuevaOrden(): string
    {
        // Obtener marcas y tipos de equipo para el formulario
        $datos = [
            'titulo' => 'Nueva Orden',
            'marcas' => $this->marcaModel->findAll(),
            'tiposEquipo' => $this->tipoEquipoModel->findAll(),
            'clientes' => $this->clientesModel->findAll(),
            'detalleEquipos' => $this->detalleEquiposModel->findAll(),
        ];
        
        return view('/agente_servicio/nueva_orden', $datos);
    }

    // Método para agregar una nueva orden
    public function agregarOrden()
    {
        $validation = \Config\Services::validation();

        // Reglas de validación
        $validation->setRules([
            'txt_nit' => 'required',
            'txt_pNombre' => 'required',
            'txt_pApellido' => 'required',
            'txt_tipo_equipo.*' => 'required',
            'txt_marca.*' => 'required',
            'txt_modelo.*' => 'required',
            'txt_descripcion_cliente.*' => 'required',
            'txt_evaluacion.*' => 'required',
            'txt_especificaciones.*' => 'required',
            'txt_observaciones.*' => 'required',
            'txt_fecha_ingreso.*' => 'required',
            'txt_fecha_estimada.*' => 'required',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }
    
        $session = \Config\Services::session();
        $data['logged_in'] = $session->get('logged_in');
    
        // Recuperar el ID del empleado desde la sesión
        $idEmpleado = $data['logged_in'];
    
        // Datos del cliente
        $clienteData = [
            'nit' => $this->request->getPost('txt_nit'),
            'primer_nombre' => $this->request->getPost('txt_pNombre'),
            'segundo_nombre' => $this->request->getPost('txt_sNombre'),
            'primer_apellido' => $this->request->getPost('txt_pApellido'),
            'segundo_apellido' => $this->request->getPost('txt_sApellido'),
            'email' => $this->request->getPost('txt_email'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'id_empresa' => 1,
        ];
    
        // Guardar cliente (modelo UsersModel) - actualizamos el cliente si ya existe
        $this->clientesModel->save($clienteData); 
        $clienteId = $this->clientesModel->insertID(); // Obtener el ID del cliente insertado
    
        // Datos de los equipos
        $tipoEquipos = $this->request->getPost('txt_tipo_equipo');
        $marcas = $this->request->getPost('txt_marca');
        $modelos = $this->request->getPost('txt_modelo');
        $descripciones = $this->request->getPost('txt_descripcion_cliente');
        $evaluaciones = $this->request->getPost('txt_evaluacion');
        $especificaciones = $this->request->getPost('txt_especificaciones');
        $observaciones = $this->request->getPost('txt_observaciones');
        $fechasIngreso = $this->request->getPost('txt_fecha_ingreso');
        $fechasEstimadas = $this->request->getPost('txt_fecha_estimada');
    
        for ($i = 0; $i < count($tipoEquipos); $i++) {
            // Datos de la orden para cada equipo
            $ordenData = [
                'id_cliente' => $clienteId,
                'fecha_recepcion' => $fechasIngreso[$i], 
                'fecha_entrega_estimada' => $fechasEstimadas[$i],
                'id_estado_orden' => 1,
            ];
    
            // Guardar orden (modelo OrdenesServicioModel)
            $this->ordenesServicioModel->save($ordenData); 
            $ordenId = $this->ordenesServicioModel->insertID(); // Obtener el ID de la orden insertada
    
            // Datos del detalle del equipo
            $detalleEquipo = [
                'no_orden' => $ordenId,
                'id_tipo_equipo' => $tipoEquipos[$i],
                'id_marca' => $marcas[$i],
                'modelo' => $modelos[$i],
                'descripcion_cliente' => $descripciones[$i],
                'evaluacion_agente' => $evaluaciones[$i],
                'observaciones' => $observaciones[$i],
                'especificaciones_equipo' => $especificaciones[$i],
                'id_agente' => $idEmpleado
            ];
    
            // Guardar detalles de equipos (modelo DetallesEquiposModel)
            $this->detalleEquiposModel->save($detalleEquipo); // Guardar cada detalle de equipo usando el método save()
        }
    
        // Redirigir o devolver una respuesta de éxito
        return redirect()->to('menu_ordenes_servicio');  // Redirigir a la lista de órdenes u otra página
    }
    
    public function getNombreCompleto($cliente)
    {
        return trim($cliente['primer_nombre'] . ' ' . 
                    $cliente['segundo_nombre'] . ' ' .
                    $cliente['primer_apellido'] . ' ' .
                    $cliente['segundo_apellido']);
    }

    public function ordenesPendientes(): string
    {
        // Obtener órdenes pendientes
        $pendientes = $this->ordenesServicioModel->where('id_estado_orden', 1)->findAll();

        // Agregar nombre completo del cliente y estado a cada orden
        foreach ($pendientes as &$orden) {
            $cliente = $this->clientesModel->find($orden['id_cliente']);
            $orden['nombre_completo'] = $this->getNombreCompleto($cliente);
            $estado = (new EstadoOrdenesModel())->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido';
        }

        // Pasar los datos a la vista
        $datos = [
            'ordenes' => $pendientes,
            'titulo' => 'ÓRDENES PENDIENTES',
            'titulo_2' => 'LISTA DE ÓRDENES PENDIENTES',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }

    public function ordenesEnProceso(): string
    {
        // Obtener órdenes en proceso
        $enProceso = $this->ordenesServicioModel->where('id_estado_orden', 2)->findAll();

        // Agregar nombre completo del cliente y estado a cada orden
        foreach ($enProceso as &$orden) {
            $cliente = $this->clientesModel->find($orden['id_cliente']);
            $orden['nombre_completo'] = $this->getNombreCompleto($cliente);
            $estado = (new EstadoOrdenesModel())->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido';
        }

        // Pasar los datos a la vista
        $datos = [
            'ordenes' => $enProceso,
            'titulo' => 'ÓRDENES EN PROCESO',
            'titulo_2' => 'LISTA DE ÓRDENES EN PROCESO',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }

    public function ordenesFinalizadas(): string
    {
        // Obtener órdenes finalizadas
        $finalizadas = $this->ordenesServicioModel->where('id_estado_orden', 3)->findAll();

        // Agregar nombre completo del cliente y estado a cada orden
        foreach ($finalizadas as &$orden) {
            $cliente = $this->clientesModel->find($orden['id_cliente']);
            $orden['nombre_completo'] = $this->getNombreCompleto($cliente);
            $estado = (new EstadoOrdenesModel())->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido';
        }

        // Pasar los datos a la vista
        $datos = [
            'ordenes' => $finalizadas,
            'titulo' => 'ÓRDENES FINALIZADAS',
            'titulo_2' => 'LISTA DE ÓRDENES FINALIZADAS',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }

    public function ordenImprint($id): string
{  
    $marcaModel = new MarcaModel();
    $tipoEquipoModel = new TipoEquipoModel();
    $clienteModel = new UsersModel();
    $detalleEquiposModel = new DetallesEquiposModel();
    $ordenesServicioModel = new OrdenesServicioModel();
    $empleadoModel = new EmpleadoModel();
    $empresasModel = new EmpresasModel();
    $servicioReparacionModel = new ServicioReparacionModel();
    $serviciosModel = new ServiciosModel();
    $detallesReparacionModel = new DetallesReparacionModel();

    // Obtén los datos específicos de la orden
    $orden = $ordenesServicioModel->where('no_orden', $id)->first();
    $cliente = $clienteModel->where('id_cliente', $orden['id_cliente'])->first();
    $detalleEquipo = $detalleEquiposModel->where('id_detalle_equipo', $id)->first();
    $empleado = $empleadoModel->where('id_empleado', $detalleEquipo['id_agente'])->first();
    $marca = $marcaModel->find($detalleEquipo['id_marca']);
    $tipoEquipo = $tipoEquipoModel->find($detalleEquipo['id_tipo_equipo']);
    $empresa = $empresasModel->find($cliente['id_empresa']);
    $detalleRep = $detallesReparacionModel->where('id_detalle_srv_reparacion', $id)->first();
    $servicioRep = $servicioReparacionModel->where('reparacion_id', $id)->first();
    $servicio = $servicioRep ? $serviciosModel->where('servicio_id', $servicioRep['servicio_id'])->first() : null;
    $empleado2 = $servicioRep ? $empleadoModel->where('id_empleado', $servicioRep['tecnico_id'])->first() : null;

    // Pasar los datos específicos a la vista
    $datos = [
        'titulo' => 'Detalles de la Orden',
        'ordenes' => $orden,
        'clientes' => $cliente,
        'detalleEquipos' => $detalleEquipo,
        'empleado' => $empleado,
        'empleado2' => $empleado2,
        'marcas' => $marca,
        'tiposEquipo' => $tipoEquipo,
        'empresa' => $empresa,
        'servicio' => $servicio,
        'servicioRep' => $servicioRep,
        'detalleRep' => $detalleRep,
    ];

    return view('/agente_servicio/orden_imprint', $datos);
}



}
=======
<?php

namespace App\Controllers;

use App\Models\UsersModel; // Borre el modelo de cliente porque era el mismo de usersModel
use App\Models\OrdenesServicioModel;
use App\Models\DetallesEquiposModel;
use App\Models\MarcaModel;
use App\Models\TipoEquipoModel;
use App\Models\EstadoOrdenesModel;
use CodeIgniter\Controller;


class OrdenesController extends Controller
{

    // Método para mostrar el formulario de ordenes de Servicio

    public function index(): string
    {  

        $session = \Config\Services::session();

        // Recuperar datos de la sesión
        $data['titulo'] = 'Inicio';
        $data['user_role'] = $session->get('user_role');
        $data['user_name'] = $session->get('user_name');
        $data['user_nombre'] = $session->get('user_nombre');

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirige si no está autenticado
        }

       // Cargar el modelo de órdenes de servicio
       $ordenesServicioModel = new OrdenesServicioModel();

       // Contar las órdenes según su estado
       $pendientesCount = $ordenesServicioModel->where('id_estado_orden', 1)->countAllResults();
       $enProcesoCount = $ordenesServicioModel->where('id_estado_orden', 2)->countAllResults();
       $finalizadasCount = $ordenesServicioModel->where('id_estado_orden', 3)->countAllResults();

       // Pasar los conteos a la vista
       $datos = [
           'pendientesCount' => $pendientesCount,
           'enProcesoCount' => $enProcesoCount,
           'finalizadasCount' => $finalizadasCount,
           'titulo' => ' Inicio',

       ]; 
        
        return view('/agente_servicio/menu_ordenes_servicio',  $datos);
    }

    // Método para mostrar el formulario de nueva orden
    public function nuevaOrden(): string
    {
        $marcaModel = new MarcaModel();
        $tipoEquipoModel = new TipoEquipoModel();
        $clienteModel = new UsersModel();
        $detalleEquiposModel = new  DetallesEquiposModel();
        $ordenesServicioModel = new OrdenesServicioModel();

        // Obtener marcas y tipos de equipo para el formulario
       
        $datos = [
            'titulo' => 'Nueva Orden',
            'marcas' => $marcaModel->findAll(),
            'tiposEquipo' => $tipoEquipoModel->findAll(),
            'clientes' => $clienteModel->findAll(),
            'detalleEquipos' => $detalleEquiposModel->findAll(),
            'ordenes' => $ordenesServicioModel->findAll(),
        ];
        
        return view('/agente_servicio/nueva_orden', $datos);
    }

    // Método para agregar una nueva orden
    public function agregarOrden()
    {
        // Validar los datos del formulario
        $validation = \Config\Services::validation();
        $validation->setRules([
            'txt_pNombre'          => 'required|min_length[3]',
            'txt_email'            => 'required|valid_email',
            'txt_telefono'         => 'required|numeric',
            'txt_fecha_ingreso.*'  => 'required|valid_date',
            'txt_fecha_estimada.*' => 'required|valid_date',
        ]);

        if (!$this->validate($validation->getRules())) {
            // Si la validación falla, redirigir con errores
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Obtener los datos del cliente
        $clienteData = [
            'primer_nombre'   => $this->request->getVar('txt_pNombre'),
            'segundo_nombre'  => $this->request->getVar('txt_sNombre'),  // Corregido
            'primer_apellido' => $this->request->getVar('txt_pApellido'),
            'segundo_apellido'=> $this->request->getVar('txt_sApellido'),  // Corregido
            'email'           => $this->request->getVar('txt_email'),
            'telefono'        => $this->request->getVar('txt_telefono'),
            'nit'             => $this->request->getVar('txt_nit'),
            'id_empresa'      => 1,  // Empresa por defecto
        ];

        $clienteModel = new UsersModel();

        // Verificar si el cliente ya existe
        $existingClient = $clienteModel->where('email', $clienteData['email'])->first();

        if ($existingClient) {
            // Si el cliente ya existe, obtener su id
            $id_cliente = $existingClient['id_cliente'];
        } else {
            // Si no existe, guardar el nuevo cliente
            $clienteModel->insert($clienteData);
            $id_cliente = $clienteModel->insertID();  // Obtener el id del cliente recién insertado
        }

        // Obtener los datos de las órdenes y equipos
        $fechasIngreso = $this->request->getVar('txt_fecha_ingreso');
        $fechasEstimada = $this->request->getVar('txt_fecha_estimada');
        $tiposEquipo = $this->request->getVar('txt_tipo_equipo');
        $marcas = $this->request->getVar('txt_marca');
        $modelos = $this->request->getVar('txt_modelo');
        $descripciones = $this->request->getVar('txt_descripcion_cliente');
        $evaluaciones = $this->request->getVar('txt_evaluacion');
        $observaciones = $this->request->getVar('txt_observaciones');
        $especificaciones = $this->request->getVar('txt_especificaciones');

        $ordenesServicioModel = new OrdenesServicioModel();
        $detalleEquiposModel = new DetallesEquiposModel();

        // Guardar cada equipo con su correspondiente orden de servicio
        foreach ($fechasIngreso as $index => $fechaIngreso) {
            // Datos de la orden de servicio
            $ordenData = [
                'id_cliente'            => $id_cliente,  // Usar el id_cliente para todas las órdenes
                'fecha_recepcion'       => $fechaIngreso,
                'fecha_entrega_estimada'=> $fechasEstimada[$index],
                'id_estado_orden'       => 1,  // Estado predeterminado "pendiente"
            ];

            // Guardar los datos de la orden de servicio
            $ordenesServicioModel->insert($ordenData);
            $no_orden = $ordenesServicioModel->insertID();  // Obtener el id de la orden recién insertada

            // Datos del equipo
            $equipoData = [
                'no_orden'              => $no_orden,  // Asociar el equipo a la orden recién insertada
                'id_tipo_equipo'        => $tiposEquipo[$index],
                'id_marca'              => $marcas[$index],
                'modelo'                => $modelos[$index],
                'descripcion_cliente'   => $descripciones[$index],
                'evaluacion_agente'     => $evaluaciones[$index],
                'observaciones'         => $observaciones[$index],
                'especificaciones_equipo'=> $especificaciones[$index],
            ];

            // Guardar los datos del equipo
            $detalleEquiposModel->insert($equipoData);
        }

        // Redirigir con un mensaje de éxito
        return redirect()->route('menu_ordenes_servicio')->with('success', 'Orden y equipos guardados exitosamente.');
    }


    
    public function getNombreCompleto($cliente)
    {
        return trim($cliente['primer_nombre'] . ' ' . 
                    $cliente['segundo_nombre'] . ' ' .
                    $cliente['primer_apellido'] . ' ' .
                    $cliente['segundo_apellido']);
    }

    public function ordenesPendientes(): string
    {
        // Cargar el modelo de órdenes de servicio, clientes y estados
        $ordenesServicioModel = new OrdenesServicioModel();
        $clienteModel = new UsersModel();
        $estadoOrdenesModel = new EstadoOrdenesModel(); // Instancia del modelo de estados

        // Suponiendo que el estado "pendiente" tiene un id de 1
        $pendientes = $ordenesServicioModel
            ->where('id_estado_orden', 1) // Filtrar por el estado "pendiente"
            ->findAll();

        // Recorrer las órdenes pendientes y agregar el nombre completo del cliente y el estado
        foreach ($pendientes as &$orden) {
            // Buscar al cliente por su ID
            $cliente = $clienteModel->find($orden['id_cliente']);
            
            // Construir el nombre completo del cliente
            $orden['nombre_completo'] = trim(
                $cliente['primer_nombre'] . ' ' .
                ($cliente['segundo_nombre'] ? $cliente['segundo_nombre'] . ' ' : '') .
                $cliente['primer_apellido'] . ' ' .
                ($cliente['segundo_apellido'] ? $cliente['segundo_apellido'] : '')
            );

            // Buscar el nombre del estado por su ID
            $estado = $estadoOrdenesModel->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido'; // Si no encuentra el estado, mostrar 'Desconocido'
        }

        // Pasar los datos filtrados a la vista

        $datos = [
            'ordenes' => $pendientes,
            'titulo' => 'ÓRDENES PENDIENTES',
            'titulo_2' => 'LISTA DE ÓRDENES PENDIENTES',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }

    public function ordenesEnProceso(): string
    {
        // Cargar el modelo de órdenes de servicio, clientes y estados
        $ordenesServicioModel = new OrdenesServicioModel();
        $clienteModel = new UsersModel();
        $estadoOrdenesModel = new EstadoOrdenesModel(); // Instancia del modelo de estados

        // Suponiendo que el estado "pendiente" tiene un id de 1
        $pendientes = $ordenesServicioModel
            ->where('id_estado_orden', 2) // Filtrar por el estado "pendiente"
            ->findAll();

        // Recorrer las órdenes pendientes y agregar el nombre completo del cliente y el estado
        foreach ($pendientes as &$orden) {
            // Buscar al cliente por su ID
            $cliente = $clienteModel->find($orden['id_cliente']);
            
            // Construir el nombre completo del cliente
            $orden['nombre_completo'] = trim(
                $cliente['primer_nombre'] . ' ' .
                ($cliente['segundo_nombre'] ? $cliente['segundo_nombre'] . ' ' : '') .
                $cliente['primer_apellido'] . ' ' .
                ($cliente['segundo_apellido'] ? $cliente['segundo_apellido'] : '')
            );

            // Buscar el nombre del estado por su ID
            $estado = $estadoOrdenesModel->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido'; // Si no encuentra el estado, mostrar 'Desconocido'
        }

        // Pasar los datos filtrados a la vista

        $datos = [
            'titulo' => 'ÓRDENES EN PROCESO',
            'ordenes' => $pendientes,
            'titulo_2' => ' LISTA DE ÓRDENES EN PROCESO',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }

    public function ordenesFinalizadas(): string
    {
        // Cargar el modelo de órdenes de servicio, clientes y estados
        $ordenesServicioModel = new OrdenesServicioModel();
        $clienteModel = new UsersModel();
        $estadoOrdenesModel = new EstadoOrdenesModel(); // Instancia del modelo de estados

        // Suponiendo que el estado "pendiente" tiene un id de 1
        $pendientes = $ordenesServicioModel
            ->where('id_estado_orden', 3) // Filtrar por el estado "pendiente"
            ->findAll();

        // Recorrer las órdenes pendientes y agregar el nombre completo del cliente y el estado
        foreach ($pendientes as &$orden) {
            // Buscar al cliente por su ID
            $cliente = $clienteModel->find($orden['id_cliente']);
            
            // Construir el nombre completo del cliente
            $orden['nombre_completo'] = trim(
                $cliente['primer_nombre'] . ' ' .
                ($cliente['segundo_nombre'] ? $cliente['segundo_nombre'] . ' ' : '') .
                $cliente['primer_apellido'] . ' ' .
                ($cliente['segundo_apellido'] ? $cliente['segundo_apellido'] : '')
            );

            // Buscar el nombre del estado por su ID
            $estado = $estadoOrdenesModel->find($orden['id_estado_orden']);
            $orden['estado_orden'] = $estado ? $estado['estado_orden'] : 'Desconocido'; // Si no encuentra el estado, mostrar 'Desconocido'
        }

        // Pasar los datos filtrados a la vista

        $datos = [
            'titulo' => 'ÓRDENES FINALIZADAS',
            'ordenes' => $pendientes,
            'titulo' => 'LISTA DE ÓRDENES FINALIZADAS',
        ];

        return view('/agente_servicio/ordenes', $datos);
    }
    
    public function verDatosOrden($idOrden): string
    {
        // Cargar el modelo de órdenes de servicio y detalles de equipos
        $ordenesServicioModel = new OrdenesServicioModel();
        $detalleEquiposModel = new DetallesEquiposModel();
        $clienteModel = new UsersModel();

        // Buscar la orden de servicio por ID
        $orden = $ordenesServicioModel->find($idOrden);

        // Si no se encuentra la orden, redirigir o mostrar un mensaje de error
        if (!$orden) {
            return redirect()->route('ordenes_pendientes')->with('error', 'Orden no encontrada.');
        }

        // Buscar el cliente asociado a la orden
        $cliente = $clienteModel->find($orden['id_cliente']);

        // Obtener los detalles del equipo asociados a la orden
        $equipos = $detalleEquiposModel->where('no_orden', $idOrden)->findAll();

        // Pasar los datos a la vista

        $datos = [
            'titulo' => 'Detalles Órdenes',
            'cliente' => $cliente,
            'orden' => $orden,
            'equipos' => $equipos,
        ];

        // Cargar la vista con los datos
        return view('/agente_servicio/detallesOrdenes', $datos);
    }
}
>>>>>>> 09f152e5f9d6fc0f306d54c9b8088dba08fd6a2c
