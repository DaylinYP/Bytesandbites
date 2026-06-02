<?php

namespace App\Controllers;

use App\Models\TOrdenServicioModel;
use App\Models\EmpleadoModel;
use App\Models\ServiciosModel;
use App\Models\DetallesEquiposModel;
use App\Models\ServicioReparacionModel;
use App\Models\DetallesReparacionModel;

class OrdenesDeServicioController extends BaseController
{
    public function index()
    {
        $orden = new TOrdenServicioModel();
        $datos['datos'] = $orden->getOrdenesEstado(); // Obtiene solo órdenes pendientes
        $datos['titulo'] = 'Lista de Órdenes de Servicio';
        return view('vistaTecnico/ordenesDeServicio', $datos);
    }

    public function asignarOrden($noOrden)
{
    $ordenModel = new TOrdenServicioModel();
    $servicioReparacionModel = new ServicioReparacionModel();

    // Cambia el estado de la orden a "En proceso"
    $updateSuccess = $ordenModel->update($noOrden, ['id_estado_orden' => 2]);

    if (!$updateSuccess) {
        return redirect()->back()->with('error', 'Error al actualizar el estado de la orden.')->withInput();
    }

    // Recuperar el ID del empleado desde la sesión
    $session = session();
    $idEmpleado = $session->get('id_empleado');

    // Crear un nuevo registro en ServicioReparacionModel
    $dataServicioReparacion = [
        'id_detalle_equipo' => $noOrden, // Asegúrate de que este sea el ID correcto
        'fecha_ingreso' => date('Y-m-d H:i:s'), // Fecha actual
        'tecnico_id' => $idEmpleado,
        // Asegúrate de incluir otros campos requeridos aquí
    ];

    // Guardar el nuevo registro
    try {
        $servicioReparacionModel->insert($dataServicioReparacion);
        return redirect()->to('ordenesDeServicio')->with('success', 'Orden asignada correctamente.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error al asignar la orden: ' . $e->getMessage())->withInput();
    }
}


    public function ordenesAsignadas()
    {
        $orden = new TOrdenServicioModel();
        $datos['datos'] = $orden->getOrdenesAsignadas(); // Obtiene las órdenes asignadas
        $datos['titulo'] = 'Lista de Órdenes Asignadas';
        return view('vistaTecnico/ordenes_asignadas', $datos);
    }
}
