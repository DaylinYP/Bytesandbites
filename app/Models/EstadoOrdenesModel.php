<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadoOrdenesModel extends Model
{
    protected $table      = 'estado_ordenes';
    protected $primaryKey = 'id_estado_orden';

    protected $allowedFields = ['id_estado_orden', 'estado_orden'];
}




