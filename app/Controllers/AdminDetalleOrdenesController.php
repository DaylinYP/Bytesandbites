<?php

    namespace App\Controllers;

    use App\Controllers\BaseController;
    use App\Models\EmpresasModel;
    use App\Models\UsersModel;
    use App\Models\EmpleadoModel;
    use App\Models\OrdenesServicioModel;
    use App\Models\TipoEquipoModel;
    use App\Models\MarcaModel;
    use App\Models\DetallesEquiposModel;
    use App\Models\ServicioReparacionModel;
    use App\Models\ServiciosModel;
    use App\Models\DetallesReparacionModel;
    use App\Models\EstadoOrdenesModel;
    

    class AdminDetalleOrdenesController extends BaseController
    {
        protected $helpers = ['form'];

        public function ordenes()
        {
            // Instancias de cada modelo
            $clientesModel = new UsersModel();
            $empresasModel = new EmpresasModel();
            $empleadoModel = new EmpleadoModel();
            $ordenesServicioModel = new OrdenesServicioModel();
            $tipoEquipoModel = new TipoEquipoModel();
            $marcaModel = new MarcaModel();
            $detallesEquiposModel = new DetallesEquiposModel();
            $servicioReparacionModel = new ServicioReparacionModel();
            $serviciosModel = new ServiciosModel();
            $detallesReparacionModel = new DetallesReparacionModel();
            $estadoOrdenesModel = new EstadoOrdenesModel();
        
            // Obtener los datos de cada modelo
            $datos['clientes'] = $clientesModel->findAll();
            $datos['empresas'] = $empresasModel->findAll();
            $datos['empleados'] = $empleadoModel->findAll();
            $datos['ordenes'] = $ordenesServicioModel->findAll();
            $datos['tipos_equipo'] = $tipoEquipoModel->findAll();
            $datos['marcas'] = $marcaModel->findAll();
            $datos['detalles_equipos'] = $detallesEquiposModel->findAll();
            $datos['servicios_reparacion'] = $servicioReparacionModel->findAll();
            $datos['servicios'] = $serviciosModel->findAll();
            $datos['detalles_reparacion'] = $detallesReparacionModel->findAll();
            $datos['estados_ordenes'] = $estadoOrdenesModel->findAll();
        
            // Pasar los datos a la vista
            $datos['titulo'] = 'Lista Completa de Órdenes';
        
            // Renderizar la vista con todos los datos
            return view('admin/lista_ordenes', $datos);
        }
        
    



        public function buscarOrdenes()
        {
        

        // Redirige a la vista de órdenes
        return redirect()->to('verOrdenes');
        }


    }
