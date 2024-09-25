<?php

namespace App\Controllers;
use App\Models\RegistrarseModel;

class CRegistrarse extends BaseController
{
    public function index(): string
    {
        return view('registrarse');

    }
 
}
