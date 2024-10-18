<?php

namespace App\Controllers;


class CServicioAlCliente extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Servicio al cliente'];
        return view('servicio_al_cliente', $data); 
    }
    
 
}
