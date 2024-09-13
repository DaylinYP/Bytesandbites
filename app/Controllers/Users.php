<?php

namespace App\Controllers;

use App\Models\UsersModel; // Importar el modelo correctamente

class Users extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Registro'];
        return view('vistaClientes/registro', $data);
    }

    public function create()
    {
        $rules = [
            'txtPrimerNombre' => 'required|max_length[60]',
            'txtSegundoNombre'=> 'max_length[60]',
            'txtPrimerApellido' => 'required|max_length[60]',
            'txtSegundoApellido' => 'max_length[60]',
            'txtEmail' => 'required|max_length[150]|valid_email|is_unique[clientes.email]',
            'txtTelefono' => 'required|max_length[8]',
            'txtNit' => 'required|max_length[13]',
            'txtContrasenia' => 'required|max_length[50]|min_length[5]',
            'txtReContrasenia' => 'matches[txtContrasenia]',
        ];

        // Validación de los campos
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        // Obtener los datos del POST
        $userModel = new UsersModel();
        $post = $this->request->getPost([
            'txtPrimerNombre', 'txtSegundoNombre',
            'txtPrimerApellido', 'txtSegundoApellido',
            'txtEmail', 'txtTelefono', 'txtNit', 'txtContrasenia'
        ]);

        // Generar token de activación
        $token = bin2hex(random_bytes(20));

        // Insertar los datos en la base de datos
        $userModel->insert([
            'primer_nombre' => $post['txtPrimerNombre'],
            'segundo_nombre' => $post['txtSegundoNombre'],
            'primer_apellido' => $post['txtPrimerApellido'],
            'segundo_apellido' => $post['txtSegundoApellido'],
            'email' => $post['txtEmail'],
            'nit' => $post['txtNit'],
            'contrasenia' => password_hash($post['txtContrasenia'], PASSWORD_DEFAULT),
            'active' => 0,
            'activation_token' => $token
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
        return $this->showMessage('Registro exitoso', 'Revisa tu correo electrónico para activar tu cuenta.');
    }

    public function activateUser($token)
    {
        $userModel = new UsersModel();
        $user = $userModel->where(['activation_token' => $token, 'active' => 0])->first();

        if ($user) {
            $userModel->update($user['id'], [
                'active' => 1,
                'activation_token' => ''
            ]);
            return $this->showMessage('Cuenta activada', 'Tu cuenta ha sido activada.');
        }

        return $this->showMessage('Ocurrió un error', 'Por favor, intenta nuevamente más tarde.');
    }

    private function showMessage($title, $message)
    {
        $data = [
            'title' => $title,
            'message' => $message
        ];
        return view('message', $data);
    }
}
