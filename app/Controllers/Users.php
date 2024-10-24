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
                'rules' => 'required|max_length[150]|valid_email|is_unique[clientes.email]'
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
    public function linkRequestForm()
    {
        return view('vistaclientes/link_request');
    }

    public function sendResetLinkEmail()
    {

        $rules = [
            'email' => 'required|max_length[150]|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $userModel = new UsersModel();

        $postEmail = $this->request->getPost('email');
        $user = $userModel->where(['email' => $postEmail, 'activacion' => 1])->first();

        if ($user) {
            $token = bin2hex(random_bytes(20));

            $expiresAt = new \DateTime();
            $expiresAt->modify('+1 hour');
            $userModel->update($user['id_cliente'], [
                'reset_token' => $token,
                'reset_token_expires_at' => $expiresAt->format('Y-m-d H:i:s')
            ]);

            $email = \Config\Services::email();
            $email->setTo($postEmail);
            $email->setSubject('Recuperar contraseña');

            // Cuerpo del mensaje
            $url = base_url('password-reset/' . $token);
            $body = '<p>Estimad@ ' . ($user['txtPrimerNombre'] ?? 'Usuario') . '</p>';
            $body .= "<p>Se ha solicitado un reinicio de contraseña.<br> Para restaurar la contraseña, 
            visita la siguiente dirección: <a href='$url'>$url</a></p>";

            // Enviar el email
            $email->setMessage($body);

            if (!$email->send()) {
                // Manejo de errores al enviar el correo
                return redirect()->back()->with('errors', 'Error al enviar el correo electrónico.');
            }
        } else {
            return redirect()->back()->withInput()->with('errors', 'El correo electrónico no está registrado.');
        }

        // Mostrar mensaje de éxito
        $titulo = 'Correo de recuperación enviado';
        $message = 'Se ha enviado un correo electrónico con instrucciones para reestablecer tu contraseña.';

        return $this->showMessage($titulo, $message);
    }

    public function resetForm($token)
    {
        $userModel = new UsersModel();
        $user = $userModel->where(['reset_token' => $token])->first();

        if ($user) {
            $currentDateTime = new \DateTime();
            $currentDateTimeStr = $currentDateTime->format('Y-m-d H:i:s');

            if ($currentDateTimeStr <= $user['reset_token_expires_at']) {
                return view('vistaclientes/password-reset', ['token' => $token]);
            } else {
                return $this->showMessage('El enlace ha expirado', 'Por favor, solicita un nuevo enlace para restablecer
                tu contraseña.');
            }
        }
        return $this->showMessage('Ocurrió un error', 'Por favor, intenta nuevamente más tarde.');
    }
    public function resetPassword()
    {
        $rules = [
            'password' => [
                'label' => 'Contraseña',
                'rules' => 'required|max_length[40]|min_length[5]'
            ],
            'repassword' => [
                'label' => 'Confirmar Contraseña',
                'rules' => 'required|matches[password]|max_length[50]|min_length[5]'
            ]

        ];
        // Validación de los campos
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        // Obtener los datos del POST
        $userModel = new UsersModel();
        $post = $this->request->getPost(['token', 'password']);
        $user = $userModel->where(['reset_token' => $post['token'], 'activacion' => 1])->first();

        if ($user) {
            $userModel->update($user['id_cliente'], [
                'contrasenia' => password_hash($post['password'], PASSWORD_DEFAULT),
                'reset_token' => '',
                'reset_token_expires_at' => ''
            ]);
            return $this->showMessage('Contraseña modificada', 'Hemos modificado la contraseña');
        }
        return $this->showMessage('Ocurrió un error', 'Por favor, intenta nuevamente más tarde.');
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
