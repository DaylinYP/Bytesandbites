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
            'segundo_nombre'  => $this->request->getVar('txt_sNombre'),  // Corrección aquí
            'primer_apellido' => $this->request->getVar('txt_pApellido'),
            'segundo_apellido'=> $this->request->getVar('txt_sApellido'),  // Corrección aquí
            'email'           => $this->request->getVar('txt_email'),
            'telefono'        => $this->request->getVar('txt_telefono'),
            'nit'             => $this->request->getVar('txt_nit'),
            'id_empresa'      => 1,  // Ejemplo de empresa por defecto
        ];
        

        // Guardar los datos del cliente
        $clienteModel = new UsersModel();
        $clienteModel->insert($clienteData);
        $id_cliente = $clienteModel->insertID();

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
                'id_cliente'            => $id_cliente,
                'fecha_recepcion'       => $fechaIngreso,
                'fecha_entrega_estimada'=> $fechasEstimada[$index],
                'id_estado_orden'=> 1,


            ];

            // Guardar los datos de la orden de servicio
            $ordenesServicioModel->insert($ordenData);
            $no_orden = $ordenesServicioModel->insertID();

            // Datos del equipo
            $equipoData = [
                'no_orden'              => $no_orden,
                'id_tipo_equipo'        => $tiposEquipo[$index],
                'id_marca'              => $marcas[$index],
                'modelo'                => $modelos[$index],
                'descripcion_cliente'   => $descripciones[$index],
                'evaluacion_agente'     => $evaluaciones[$index],
                'observaciones'         => $observaciones[$index],
                'espesificaciones_equipo'=> $especificaciones[$index],
            ];

            // Guardar los datos del equipo
            $detalleEquiposModel->insert($equipoData);
        }

        // Redirigir con un mensaje de éxito
        return redirect()->route('menu_ordenes_servicio');
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
            'titulo' => 'LISTA DE ÓRDENES PENDIENTES',
        ];

        return view('/agente_servicio/lista_ordenes', $datos);
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
            'ordenes' => $pendientes,
            'titulo' => ' LISTA DE ÓRDENES EN PROCESO',
        ];

        return view('/agente_servicio/lista_ordenes', $datos);
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
            'ordenes' => $pendientes,
            'titulo' => 'LISTA DE ÓRDENES FINALIZADAS',
        ];

        return view('/agente_servicio/lista_ordenes', $datos);
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
            'cliente' => $cliente,
            'orden' => $orden,
            'equipos' => $equipos,
        ];

        // Cargar la vista con los datos
        return view('/agente_servicio/detallesOrdenes', $datos);
    }
}
