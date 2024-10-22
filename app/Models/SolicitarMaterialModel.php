<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitarMaterialModel extends Model
{
    protected $table = 'solicitud_materiales';
    protected $primaryKey = 'id_solicitud_materiales'; 
    protected $allowedFields = ['servicio_id', 'no_orden', 'id_repuesto'];

    public function insertarSolicitud($data)
    {
        return $this->insert($data);
    }
}