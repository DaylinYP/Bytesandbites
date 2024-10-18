<?php

namespace App\Controllers;


class CReporteQueja extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Quejas o Sugerencias'];
        return view('reporte_queja', $data); 
    }
    
 
}
