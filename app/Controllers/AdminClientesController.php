<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class AdminClientesController extends BaseController
{
    protected $helpers = ['form'];

    public function clientes()
    {
        $clientes = new UsersModel();
        $datos['datos'] = session()->getFlashdata('resultado') ?? $clientes->verClientes();
        $datos['titulo'] = 'Lista de Clientes';
        //print_r($datos);
        return view('admin/clientes', $datos);
    }

    public function buscarCliente()
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
