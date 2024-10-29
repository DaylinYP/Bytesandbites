<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['titulo' => 'Inicio'];
        return view('vistaclientes/index', $data);

    } 
}
