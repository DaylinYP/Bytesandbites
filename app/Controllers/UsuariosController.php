<?php

namespace App\Controllers;

use App\Models\UsuariosModel; // Importar el modelo correctamente

class UsuariosController extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        $data = ['titulo' => 'Usuariosss'];
        return view('admin/usuarios_login', $data);
    }

    public function auth()
    {

        $reglas = [
            'txt_email_usuario' => 'required',
            'txt_contrasenia' => 'required',
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }
        $usuario = new UsuariosModel();
        $post = $this->request->getPost(['txt_email_usuario', 'txt_contrasenia']);

        $user = $usuario->validateUser($post['txt_email_usuario'], $post['txt_contrasenia']);



        if ($user !== null) {
            $this->setSession($user); // Guardar los datos del usuario y rol en la sesión

            // Dependiendo del rol, redirigir a diferentes vistas
            if ($user['nombre_rol'] === 'Gerente') {
                return redirect()->to(base_url('/Inicio')); // Vista para admin
            } elseif ($user['nombre_rol'] === 'Tecnico') {
                return redirect()->to(base_url('')); // Vista para empleado
            }
            /* else {
                return redirect()->to(base_url('/')); // Vista genérica
            }*/
        }
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
    }

    private function setSession($userData)
    {
        $data = [
            'logged_in' => true,
            'user_id' => $userData['id_empleado'],
            'user_name' => $userData['nombre_usuario'],
            'user_role' => $userData['nombre_rol'],
            'user_nombre' => $userData['primer_nombre']. ' ' .$userData['primer_apellido']
        ];
        $this->session->set($data);
    }

    public function logout()
    {
        if ($this->session->get('logged_in')) {
            $this->session->destroy();
        }
        return redirect()->to(base_url('/usuario'));
    }
}
