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

class DetalleOrdenesController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
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

    public function verDetalles($no_orden)
    {
        // Instancias de cada modelo
        $ordenesServicioModel = new OrdenesServicioModel();
        $detallesEquiposModel = new DetallesEquiposModel();
        $servicioReparacionModel = new ServicioReparacionModel();
        $serviciosModel = new ServiciosModel();
        $estadoOrdenesModel = new EstadoOrdenesModel();
        $clientesModel = new UsersModel();

        // Obtener los detalles de la orden
        $datos['orden'] = $ordenesServicioModel->where('no_orden', $no_orden)->first();
        $datos['detalles_equipos'] = $detallesEquiposModel->where('no_orden', $no_orden)->findAll();
        $datos['servicio_reparacion'] = $servicioReparacionModel->where('no_orden', $no_orden)->first();
        $datos['servicios'] = $serviciosModel->findAll();
        $datos['estado_orden'] = $estadoOrdenesModel->findAll();
        $datos['cliente'] = $clientesModel->where('id_cliente', $datos['orden']['id_cliente'])->first();

        // Pasar los datos a la vista
        $datos['titulo'] = 'Detalles de la Orden ' . $no_orden;

        // Renderizar la vista con los detalles de la orden
        return view('admin/detalle_orden', $datos);
    }

    public function buscarOrdenes()
    {
        // Redirige a la vista de órdenes
        return redirect()->to('verOrdenes');
    }
}
