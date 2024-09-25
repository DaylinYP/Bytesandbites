<?php

namespace App\Controllers;

class AfterLogin extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Login'];
        return view('vistacgtlientes/afterlogin', $data);

    }
 
}
