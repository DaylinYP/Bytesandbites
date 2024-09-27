<?php

namespace App\Controllers;

class CQuienesSomos extends BaseController
{    
        public function index(): string
        {
            $data = ['titulo' => 'Quiénes Somos'];
            return view('vistaClientes/quienessomos', $data);
        }
    
}