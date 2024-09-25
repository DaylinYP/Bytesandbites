<?php

namespace App\Controllers;


class CCerrarSesion extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Cerrar Sesión'];
        return view('vistaClientes/cerrarsesion', $data);

    }
 
}
