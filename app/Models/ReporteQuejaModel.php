<?php

namespace App\Models;

use CodeIgniter\Model;

class ReporteQuejaModel extends Model
{
    protected $table         = 'reporte_queja';
    protected $primaryKey    = 'no_orden';
    protected $allowedFields = [
        'no_orden', 
        'descripcion_quejas'
    ];
}
