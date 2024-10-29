<?php

namespace App\Controllers;


class CRegistrarse extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Registro'];
        return view('registro', $data); 
    }
    
 
}
