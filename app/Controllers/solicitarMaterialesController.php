<?php

namespace App\Controllers;

class solicitarMaterialesController extends BaseController
{
    public function solicitarMateriales()
    {
        return view('vistaTecnico/solicitudMateriales');
    }

/*
public function buscarTecnico($id = null)
{
    $empleado = new EmpleadoModel();
    $empleado = $empleado->where('id_empleado', $id)->first();
    
    if ($empleado) {
        // Concatenar nombres y apellidos
        $nombres = $empleado['primer_nombre'] . ' ' . $empleado['segundo_nombre'];
        $apellidos = $empleado['primer_apellido'] . ' ' . $empleado['segundo_apellido'];

        $datos = [
            'nombres' => $nombres,
            'apellidos'=> $apellidos
        ];
    } else {
        $datos = ['id_empleado' => 'Empleado no encontrado'];
    }
    
    return view('vistaTecnico/solicitudMateriales' , $datos);
}*/
}



/*   public function index()
    {
        echo view('header');
        echo view('productos');
        echo view('footer');

    }
 */


