<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Iniciar Sesión'];
        return view('vistaClientes/form_inicio_sesion', $data);

    }
 
}
