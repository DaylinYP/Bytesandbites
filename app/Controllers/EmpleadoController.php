<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\EmpleadoModel; 

class EmpleadoController extends BaseController
{

    public function verPerfil()
    {

        // Iniciar la sesión
        $session = \Config\Services::session();

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirige si no está autenticado
        }

        // Recuperar datos de la sesión
        $data = [
            'titulo' => 'Perfil del Usuario',
            'logged_in' => $session->get('logged_in'),
            'user_empleado' => $session->get('user_empleado'),
            'user_role' => $session->get('user_role'),
            'user_dpi' => $session->get('user_dpi'),
            'user_nit' => $session->get('user_nit'),
            'user_email' => $session->get('user_email'),
            'user_telefono' => $session->get('user_telefono'),
            'user_direccion' => $session->get('user_direccion'),
            'user_nombre_empresa' => $session->get('user_nombre_empresa'),
            'user_extension' => $session->get('user_extension')
        ];

        // Retornar la vista con los datos del empleado
        return view('perfil_usuario', $data);
    }
     public function inicioSesion()
    {
        // Título que se mostrará en la vista de inicio de sesión
        $datos['titulo'] = 'Inicio de Sesión del Empleado';

        // Retornar la vista con los datos
        return view('vistaTecnico/inicioSesion', $datos);
    }
}

