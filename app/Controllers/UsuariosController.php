<?php

namespace App\Controllers;

use App\Models\UsuariosModel; // Importar el modelo correctamente

class UsuariosController extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        $data = ['titulo' => 'Usuariosss'];
        return view('admin/usuarios_login', $data); //Vista login para empleados
    }

    public function auth() //Función para autentificación
    {

        $reglas = [
            'txt_email_usuario' => 'required',
            'txt_contrasenia' => 'required', //datos requeridos
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }
        $usuario = new UsuariosModel();
        $post = $this->request->getPost(['txt_email_usuario', 'txt_contrasenia']); //obtiene los datos del login

        $user = $usuario->validateUser($post['txt_email_usuario'], $post['txt_contrasenia']);
        //Compara los datos con el metodo validateUser que es llamado del modelo Usuarios.



        if ($user !== null) {
            $this->setSession($user); // Guardar los datos del usuario y rol en la sesión

            // Dependiendo del rol, redirigir a diferentes vistas
            if ($user['nombre_rol'] === 'Gerente') {
                return redirect()->to(base_url('/Inicio')); // Vista para admin
            } elseif ($user['nombre_rol'] === 'Tecnico') {
                return redirect()->to(base_url('')); // Vista para Tecnico
            } elseif ($user['nombre_rol'] === 'Agente') {
                return redirect()->to(base_url('menu_ordenes_servicio')); // Vista para Agente
            }elseif ($user['nombre_rol'] === 'Bodega') {
                return redirect()->to(base_url('lista_repuestos')); // Vista para Encargado de Bodega
            }
            /* else {
                return redirect()->to(base_url('/')); // Vista genérica
            }*/
        }
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
    }

    private function setSession($userData) //Recopila estos datos.
    {
        $data = [
            'logged_in' => true,
            'user_id' => $userData['id_empleado'],
            'user_name' => $userData['nombre_usuario'],
            'user_role' => $userData['nombre_rol'],
            'user_nombre' => $userData['primer_nombre']. ' ' .$userData['primer_apellido']
        ];
        $this->session->set($data);
        log_message('debug', 'Sesión establecida: ' . json_encode($data)); // Log para verificar
    }

    public function logout() //Cierra la sesion
    {
        if ($this->session->get('logged_in')) {
            $this->session->destroy();
        }
        return redirect()->to(base_url('/usuario'));
    }
}
