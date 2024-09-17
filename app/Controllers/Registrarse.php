<?php

namespace App\Controllers;
use App\Models\RegistrarseModel;

class Registrarse extends BaseController
{
    public function index(): string
    {
        return view('registrarse');

    }
 
}
