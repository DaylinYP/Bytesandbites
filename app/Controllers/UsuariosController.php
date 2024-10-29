<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

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
            'txt_email_usuario' => [
                'label'=> 'Usuario',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Es obligatorio'
                ]
            ],
            'txt_contrasenia' => 'required',
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $usuario = new UsuariosModel();
        $post = $this->request->getPost(['txt_email_usuario', 'txt_contrasenia']);

        // Validar las credenciales del usuario
        $user = $usuario->validateUser($post['txt_email_usuario'], $post['txt_contrasenia']);

        if ($user !== null) {
            $this->setSession($user); // Guardar los datos del usuario y el rol en la sesión

            // Redirigir según el rol del usuario
            if ($user['nombre_rol'] === 'Gerente') {
                $this->session->set('rol', 'admin'); // Establece el rol de admin
                return redirect()->to(base_url('/Inicio')); // Vista para Gerente
            } elseif ($user['nombre_rol'] === 'Agente') {
                $this->session->set('rol', 'agente'); // Establece el rol de agente
                return redirect()->to(base_url('menu_ordenes_servicio')); // Vista para Agente
            } elseif ($user['nombre_rol'] === 'Bodega') {
                $this->session->set('rol', 'bodega'); // Establece el rol de encargado de bodega
                return redirect()->to(base_url('/lista_repuestos')); // Vista para Bodega
            } elseif ($user['nombre_rol'] === 'Técnico') {
                $this->session->set('rol', 'tecnico'); // Establece el rol de técnico
                return redirect()->to(base_url('ordenesDeServicio')); // Vista para Técnico
            } else {
                return redirect()->to(base_url('/login')); // Redirección a login si no hay rol válido
            }
        }

        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
    }

    // Método para establecer los datos del usuario en la sesión
    private function setSession($userData)
    {
        $data = [
            'logged_in' => $userData['id_empleado'],
            'user_name' => $userData['nombre_usuario'],
            'user_role' => $userData['nombre_rol'], // Guardamos el rol del usuario
            'user_nombre' => $userData['primer_nombre'] . ' ' . $userData['primer_apellido'],
            'user_empleado' => $userData['primer_nombre'] . ' ' . $userData['segundo_nombre'] . ' ' . $userData['primer_apellido'] . ' ' . $userData['segundo_apellido'],
            'user_dpi'  => $userData['dpi'],
            'user_nit'            => $userData['nit'],
            'user_email'          => $userData['email'],
            'user_telefono'       => $userData['telefono'],
            'user_direccion'      => $userData['direccion'],
            'user_nombre_empresa'     => $userData['id_empresa'],
            'user_extension'      => $userData['extension'],
        
        ];

        // Guardar la información en la sesión
        $this->session->set($data);
    }

    // Método para cerrar sesión
    public function logout()
    {
        if ($this->session->get('logged_in')) {
            $this->session->destroy();
        }
        return redirect()->to(base_url('/usuario'));
    }

    

}
