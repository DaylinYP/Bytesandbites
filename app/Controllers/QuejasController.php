<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuejasModel;
use CodeIgniter\HTTP\ResponseInterface;


class QuejasController extends BaseController


{
    
    public function quejas() //Muestra las quejas en la vista
    {
        $quejas = new QuejasModel();
        $datos['datos'] = $quejas->findAll();
        
        return view('admin/quejas' , $datos);
    }
    public function eliminarQueja($id = null){ //Nos permite eliminar.
        $quejas = new QuejasModel();
       // print_r($id);
       $quejas->delete($id);
       return redirect()->route('quejas');
        

    }

    
}