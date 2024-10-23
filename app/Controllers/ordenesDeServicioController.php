<?php

namespace App\Controllers;
use App\Models\TOrdenServicioModel;

class ordenesDeServicioController extends BaseController
{
    public function index()
    {
   $orden=new TOrdenServicioModel();
   $datos['datos']=$orden->getOrdenesEstado();
   $datos['titulo'] = 'Lista de Órdenes de Servicio';
   return view ('vistaTecnico/ordenesDeServicio', $datos);
    }

    }
 
