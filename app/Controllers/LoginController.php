<?php
namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login_usuarios/login_users');
    }

    public function auth()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        try {
            $usuariosModel = new UsuariosModel();
            $post = $this->request->getPost(['email', 'password']);

            // Se utiliza la función 'esc()' para evitar inyecciones de código
            $usuario = $usuariosModel->validacion(esc($post['email']), esc($post['password']));

            if ($usuario) {
                $id_rol = $usuariosModel->getRole($usuario['id_usuario']);
                $nombre_sucursal = $usuariosModel->getSucursalName($usuario['id_sucursal']);
                $this->setSession($usuario, $id_rol, $nombre_sucursal);

                // Regenera el ID de la sesión para mayor seguridad
                session()->regenerate();

                return $this->redirectByRole($id_rol);
            }
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Hubo un error en el proceso de autenticación.');
        }

        return redirect()->back()->withInput()->with('error', 'Credenciales no válidas.');
    }

    private function setSession($usuario, $id_rol, $nombre_sucursal)
    {
        $session = \Config\Services::session();
        $data = [
            'id_usuario' => $usuario['id_usuario'],
            'email' => $usuario['email'],
            'nombre_completo' => esc($usuario['nombre'] . ' ' . $usuario['apellido']),
            'sucursal' => esc($nombre_sucursal),
            'id_rol' => $id_rol,
            'isLoggedIn' => true
        ];
        $session->set($data);
    }

    private function redirectByRole($id_rol)
    {
        switch ($id_rol) {
            case 1:  // Vendedor
                return redirect()->to(base_url('vendedores'));
            case 2:  // Administrador de Vendedores
                return redirect()->to(base_url('admin/ventas'));
            case 3:  // Bodeguero
                return redirect()->to(base_url('empleado-bodega'));
            case 4:  // Administrador de Bodega
                return redirect()->to(base_url('admin/bodega'));
            case 5:  // Gerente
                return redirect()->to(base_url('ver_gerencia'));
            default:
                return redirect()->to(base_url('default_dashboard'));
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        
        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login'));
    }

    public function checkSessionOnBack()
    {
        $session = \Config\Services::session();

        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login'));
    }
}
        