<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class InicioController extends BaseController
{
    public function index()
    {

        $session = \Config\Services::session();

        // Recuperar datos de la sesión
        $data['user_role'] = $session->get('user_role');
        $data['user_name'] = $session->get('user_name');
        $data['user_nombre'] = $session->get('user_nombre');

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirige si no está autenticado
        }

        return view('admin/Inicio', $data);
    }
}
