<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrdenesServicioModel;


class InicioController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        // Recuperar datos de la sesión
        $data['titulo'] = 'Inicio';
        $data['user_role'] = $session->get('user_role');
        $data['user_name'] = $session->get('user_name');
        $data['user_nombre'] = $session->get('user_nombre');

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirige si no está autenticado
        }

        $ordenesServicioModel = new OrdenesServicioModel();

        // Contar las órdenes según su estado
        $data['pendientesCount'] = $ordenesServicioModel->where('id_estado_orden', 1)->countAllResults();
        $data['enProcesoCount'] = $ordenesServicioModel->where('id_estado_orden', 2)->countAllResults();
        $data['finalizadasCount'] = $ordenesServicioModel->where('id_estado_orden', 3)->countAllResults();

        // Pasar todos los datos a la vista
        return view('admin/Inicio', $data);
    }

}
