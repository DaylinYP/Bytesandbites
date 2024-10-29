<?php

namespace App\Controllers;

class CServicioAlCliente extends BaseController
{    
        public function index(): string
        {
            $data = ['titulo' => 'Servicio al Cliente'];
            return view('vistaclientes/servicio_al_cliente', $data);
        }
    
}