<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index() //: string
    {
        $data = ['titulo' => 'Login'];
        return view('vistaclientes/login' , $data);
    }

    public function auth(){
        $rules = [
            'txtCorreoElectronico' => 'required',
            'txtContrasenia' => 'required' 
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $userModel = new UsersModel();
        $post = $this->request->getPost(['txtCorreoElectronico', 'txtContrasenia']);

        $email = $userModel->validateUser($post['txtCorreoElectronico'], $post['txtContrasenia']);

        if ($email !== null) {
            $this->setSession($email);
            return redirect()->to(base_url('vistaclientes/cerrarsesion'));
        }

        return redirect()->back()->withInput()->with('errors', 'El usuario y/o la contraseña son incorrectos.');
    }

    private function setSession($userData){
        $data = [
            'logged_in' => true,
            'user_id' => $userData['id_cliente'],
            'user_correo' => $userData['email']
        ];
        $this->session->set($data);
    }
    public function logout(){
        if($this->session->get('logged_in')){
            $this->session->destroy();
        }
        return redirect()->to(base_url('vistaclientes/index'));
    }
}
