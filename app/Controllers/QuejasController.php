<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuejasModel;
use CodeIgniter\HTTP\ResponseInterface;


class QuejasController extends BaseController


{
    
    public function quejas()
    {
    
        
        $quejas = new QuejasModel();
        $datos['datos'] = $quejas->findAll();
        
        return view('admin/quejas' , $datos);
    }

    
}