<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\EmpleadoModel; 

class EmpleadoController extends BaseController
{
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
        
        return view('solicitudMateriales', $datos);
    }

    public function editarPerfil()
    {
        return view('vistaTecnico/editarPerfil');
    }
}