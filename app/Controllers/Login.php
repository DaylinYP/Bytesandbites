<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index() //: string
    {
        return view('login');
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

        $user = $userModel->validateUser($post['txtCorreoElectronico'], $post['txtContrasenia']);

        if ($user !== null) {
            $this->setSession($user);
            return redirect()->to(base_url('home'));
        }

        return redirect()->back()->withInput()->with('errors', 'El usuario y/o la contraseña son incorrectos.');
    }

    private function setSession($userData){
        $data = [
            'logged_in' => true,
            'userid' => $userData['id'],
            'username' => $userData['txtCorreoElectronico']
        ];
        $this->session->set($data);
    }
}
