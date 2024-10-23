<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiciosModel extends Model
{
    protected $table         = 'servicios';
    protected $primaryKey    = 'servicio_id';
    protected $allowedFields = [
        'servicio_id',
        'nombre',
        'img_servicio',
        'precio_servicio'
        
    ];
}

