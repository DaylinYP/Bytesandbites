<?php

namespace App\Controllers;

class CAfterLogin extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Login'];
        return view('vistaclientes/afterlogin', $data);

    }
 
}
