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
        $datos['titulo'] = 'Quejas';


        return view('admin/quejas' , $datos);
    }
    public function eliminarQueja($id = null){
        $quejas = new QuejasModel();
       // print_r($id);
       $quejas->delete($id);
       return redirect()->route('quejas');
        

    }

    
}