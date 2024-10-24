<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RolesModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminRolesController extends BaseController
{
    protected $helpers = ['form'];

    public function agregarRol()
    {
        $rol = new RolesModel();
        $datos = [
            'nombre_rol' => $this->request->getVar('txt_nombre'),
            'descripcion' => $this->request->getVar('txt_descripcion_rol'),
            'precio' => $this->request->getVar('txt_precio')
        ];

        $reglas = [

            'txt_nombre' => [
                'label' => 'rol',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Es necesario el {field}'
                ]
            ],
            'txt_descripcion_rol' => [
                'label' => 'Descripcion',
                'rules' => 'min_length[5]|required',
                'errors' => [
                    'min_length' => 'minimo 5 palabras',
                    'required' => 'Es obligatorio el {field}'
                ]
            ],
            'txt_precio' => [
                'label' => 'Sueldo',
                'rules' => 'numeric|required',
                'errors' => [
                    'numeric' => 'Tiene que ser un numero',
                    'required' => 'Es obligatorio el {field}'
                ]
            ]
        ];

        if (!$this->validate($reglas)) { //Regla que sirve para validar y llamar a la alerta de error
            return redirect()->back()->withInput()->with('error', 'Por favor, corrige los errores en el formulario.');
        }
        /* 
        print_r($datos);
        */
        $rol->insert($datos);
        return redirect()->route('empleados')->with('success', 'Datos Agregados Correctamente');
    }
}
