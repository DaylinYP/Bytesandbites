<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Registro'];
        return view('vistaClientes/registro', $data);

    }
 
}
