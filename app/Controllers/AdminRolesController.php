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
            'txt_precio' => 'numeric|required',
        ];
                   
        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput();
        }
        /* 
        print_r($datos);
        */
        $rol->insert($datos);
        return redirect()->route('empleados');
    }
}
