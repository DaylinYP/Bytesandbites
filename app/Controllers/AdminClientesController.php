<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class AdminClientesController extends BaseController
{
    protected $helpers = ['form'];

    public function clientes()  //Muestra  todos los clientes del metodo del modelo llamado verCliente
    {
        $clientes = new UsersModel();
        $datos['datos'] = session()->getFlashdata('resultado') ?? $clientes->verClientes();
        //print_r($datos);
        return view('admin/clientes', $datos);
    }

    public function buscarCliente() //Llama al metodo buscar del modelo y lo manda a la vista
    {
        $clientes = new UsersModel();
        $busqueda = $this->request->getPost('busqueda');
        $datos['datos'] = $clientes->buscar($busqueda);
        // Almacena los resultados en la sesión
        session()->setFlashdata('resultado', $clientes->buscar($busqueda));

        // Redirige a la vista de clientes

        return redirect()->to('verClientes');
    }
}
