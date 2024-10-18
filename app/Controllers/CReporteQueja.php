<?php

namespace App\Controllers;


class CReporteQueja extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Quejas o Sugerencias'];
        return view('vistaclientes/reporte_queja', $data); 
    }
    
 
}
