<?php
namespace App\Controllers;

use App\Models\UsersModel; // Importar el modelo correctamente

class Users extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        $data = ['titulo' => 'Registro'];
        return view('vistaClientes/registro', $data);
    }

    public function create()
    {
        $rules = [
            'txtPrimerNombre' => [
                'label' => 'Primer Nombre',
                'rules' => 'is_unique|required|max_length[60]'
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
            'txtEmail' => [
                'label' => 'Correo Electrónico',
                'rules' => 'required|max_length[150]|valid_email|is_unique[clientes.email]'
            ],
            'txtTelefono' => [
                'label' => 'Teléfono',
                'rules' => 'required|max_length[8]'
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
            ]
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
            'txtEmail', 'txtContrasenia', 'txtTelefono', 'txtNit'
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
            'contrasenia' => password_hash($post['txtContrasenia'], PASSWORD_DEFAULT),
            'nit' => $post['txtNit'],
            'activacion' => 0,
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
        $title = 'Registro exitoso';
        $message = 'Revisa tu correo electrónico para activar tu cuenta.';

        return $this->showMessage($title, $message);
    }

    public function activateUser($token)
    {
        $userModel = new UsersModel();
        $user = $userModel->where(['activation_token' => $token, 'activacion' => 0])->first(); // 'active' => 'activacion'

        if ($user) {
            $userModel->update($user['id'], [
                'activacion' => 1,
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
