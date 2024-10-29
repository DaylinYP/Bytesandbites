<?php

namespace App\Controllers;

class CInicioDos extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Inicio'];
        return view('vistaclientes/inicio_dos', $data);

    } 
    public function verPagina():string{
        $data = ['titulo' => 'Quiénes Somos'];
        return view('vistaClientes/quienes_somos', $data);
    }
    public function agregarQueja():string{
        $data = ['titulo' => 'Queja/Sugerencia'];
        return view('vistaClientes/reporte_de_queja', $data);
    }
    public function verReporteQueja():string{
        $data = ['titulo' => 'Servicio al Cliente'];
        return view('vistaClientes/servicio_al_cliente_lg', $data);
    }
        
}
