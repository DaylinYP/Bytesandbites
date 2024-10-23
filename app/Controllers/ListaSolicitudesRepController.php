<?php

namespace App\Controllers;

use App\Models\SolicitudRepuestosModel;
use App\Models\ServiciosModel;
use App\Models\OrdenesServicioModel;
use App\Models\RepuestosModel;


class ListaSolicitudesRepController extends BaseController
{
    public function listaSolicitudes(): string
    {
        $solicitudRepuestoModel = new SolicitudRepuestosModel();
        $servicioModel = new ServiciosModel();
        $ordenesServicioModel = new OrdenesServicioModel();
        $repuestoModel = new RepuestosModel();

        // Obtener las solicitudes de materiales
        $solicitud = $solicitudRepuestoModel->findAll();

        // Obtener las marcas, tipos de equipo y proveedores
        $servicio = $servicioModel->findAll();
        $orden = $ordenesServicioModelrModel->findAll();
        $repuesto = $repuestoModel->findAll();


        // Pasar los datos a la vista
        
        $datos = [
            'repuesto' => $repuesto,
            'servicio' => $servicio,
            'orden' => $orden,
            'solicitud' => $solicitud,
            'titulo' => 'Lista de Repuestos',
        ];

        return view('/vistaTecnico/lista_solicitudes', $datos);
    }
}