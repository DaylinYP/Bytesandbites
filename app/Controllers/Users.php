<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        $data = ['titulo' => 'Registro'];
        return view('vistaclientes/registro', $data);
    }


    public function create()
    {
        $rules = [
            'txtPrimerNombre' => [
                'label' => 'Primer Nombre',
                'rules' => 'required|max_length[60]'
            ],
            'txtSegundoNombre' => [
                'label' => 'Segundo Nombre',
                'rules' => 'max_length[60]'
            ],
            'txtPrimerApellido' => [
                'label' => 'Primer Apellido',
                'rules' => 'required|max_length[60]'
            ],
            'txtSegundoApellido' => [
                'label' => 'Segundo Apellido',
                'rules' => 'max_length[60]'
            ],
            'txtNit' => [
                'label' => 'NIT',
                'rules' => 'required|max_length[13]'
            ],

            'txtContrasenia' => [
                'label' => 'Contraseña',
                'rules' => 'required|max_length[40]|min_length[5]'
            ],
            'txtReContrasenia' => [
                'label' => 'Confirmar Contraseña',
                'rules' => 'required|matches[txtContrasenia]|max_length[50]|min_length[5]'
            ],
            'txtEmail' => [
                'label' => 'Correo Electrónico',
                'rules' => 'required|max_length[150]|valid_email|is_unique[clientes.email]' // especifica 'clientes.email'
            ],
            'txtTelefono' => [
                'label' => 'Teléfono',
                'rules' => 'required|max_length[8]'
            ]
        ];






        // Validación de los campos
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }


        // Obtener los datos del POST
        $userModel = new UsersModel();
        $post = $this->request->getPost([
            'txtPrimerNombre',
            'txtSegundoNombre',
            'txtPrimerApellido',
            'txtSegundoApellido',
            'txtEmail',
            'txtContrasenia',
            'txtReContrasenia',
            'txtTelefono',
            'txtNit',
            'txtIdEmpresa'
        ]);

        // Generar token de activación
        $token = bin2hex(random_bytes(20));

        // Insertar los datos en la base de datos
        $userModel->insert([
            'primer_nombre' => $post['txtPrimerNombre'],
            'segundo_nombre' => $post['txtSegundoNombre'],
            'primer_apellido' => $post['txtPrimerApellido'],
            'segundo_apellido' => $post['txtSegundoApellido'],
            'nit' => $post['txtNit'],
            'contrasenia' => password_hash($post['txtContrasenia'], PASSWORD_DEFAULT),
            'contrasenia_p' => $post['txtReContrasenia'],
            'email' => $post['txtEmail'],
            'activacion' => 0,
            'activation_token' => $token,
            'telefono' => $post['txtTelefono'],
            'id_empresa' => $post['txtIdEmpresa']
        ]);

        // Configuración del email
        $email = \Config\Services::email();
        $email->setTo($post['txtEmail']);
        $email->setSubject('Activa tu cuenta');

        // Cuerpo del mensaje
        $url = base_url('activate-user/' . $token);
        $body = '<p>Hola ' . $post['txtPrimerNombre'] . '</p>';
        $body .= "<p>Para continuar con el proceso de registro, haz clic en el siguiente enlace: <a href='$url'>Activar cuenta</a></p>";
        $body .= '¡Gracias!';
     
        // Enviar el email
        $email->setMessage($body);
        $email->send();
       
        // Mostrar mensaje de éxito
        $titulo = 'Registro exitoso';
        $message = 'Revisa tu correo electrónico para activar tu cuenta.';

        return $this->showMessage($titulo, $message);
    }

    public function activateUser($token)
    {
        $userModel = new UsersModel();
        $user = $userModel->where(['activation_token' => $token, 'activacion' => 0])->first();

        if ($user) {
            $userModel->update($user['id_cliente'], [
                'activacion' => 1,
                'activation_token' => ''
            ]);
            return $this->showMessage('Cuenta activada', 'Tu cuenta ha sido activada.');
        }

        return $this->showMessage('Ocurrió un error', 'Por favor, intenta nuevamente más tarde.');
    }
    public function linkRequestForm(){
        return view('vistaclientes/link_request');
    }

    private function showMessage($title, $message)
    {
        $data = [
            'title' => $title,
            'message' => $message
        ];
        return view('layout/message', $data);
    }
}
