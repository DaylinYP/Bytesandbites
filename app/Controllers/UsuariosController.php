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
            return redirect()->back()->withInput();
        }

        $usuario = new UsuariosModel();
        $post = $this->request->getPost(['txt_email_usuario', 'txt_contrasenia']);

        $user = $usuario->validateUser($post['txt_email_usuario'], $post['txt_contrasenia']);
      

        if ($user !== null){
            $this->setSession($user);
            return redirect()->to(base_url('/quejas'));
        }
        return redirect()->back()->withInput()->with('errors','El usuario o contraseña no coinciden');
    }

    private function setSession($userData){
        $data = [
            'logged_in' => true,
            'user_id' => $userData['id_empleado'],
            'user_name' => $userData['nombre_usuario']
        ];
        $this->session->set($data);
    }
} 
