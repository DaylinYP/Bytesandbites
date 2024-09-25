<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\EmpleadoModel; 

class EmpleadoController extends BaseController
{

    public function editarPerfil()
    {
        return view('vistaTecnico/editarPerfil');
    }
     public function inicioSesion()
    {
        return view('vistaTecnico/inicioSesion');
    }
}

