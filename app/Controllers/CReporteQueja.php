<?php

namespace App\Controllers;

use App\Models\ReporteQuejaModel;

class CReporteQueja extends BaseController
{
    public function index(): string
    {
        $queja = new ReporteQuejaModel();
        $datos = [
            'titulo' => 'Quejas o Sugerencias',
            'datos' => $queja->findAll()
        ];
        return view('vistaclientes/reporte_queja', $datos); 
    }
    
    public function agregarQueja()
    {
        $datos = [
            'no_orden' => $this->request->getVar('txtNoOrden'),
            'descripcion_quejas' => $this->request->getVar('txtDescripcionQueja')
        ];
        $queja = new ReporteQuejaModel();
        $queja->insert($datos);
        return redirect()->to(base_url('reporte_queja'))->with('mensaje', 'Queja agregada correctamente');
    }
    public function agregarQueja2()
    {
        $datos = [
            'no_orden' => $this->request->getVar('txtNoOrden'),
            'descripcion_quejas' => $this->request->getVar('txtDescripcionQueja')
        ];
        $queja = new ReporteQuejaModel();
        $queja->insert($datos);
        return redirect()->to(base_url('reporte_de_queja'))->with('mensaje', 'Queja agregada correctamente');
    }
    
}
