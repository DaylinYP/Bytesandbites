<?php

namespace App\Controllers;

class CInicioDos extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Inicio'];
        return view('vistaclientes/inicio_dos', $data);

    } 
}
