<?php
    namespace App\Models;

    use CodeIgniter\Model;
    
    class SolicitudRepuestosModel extends Model
    {
        protected $table         = 'solicitud_repuestos';
        protected $primaryKey    = 'id_solicitud';
        protected $allowedFields = [
            'id_solicitud',
            'fecha_solicitud',
            'servicio_id',
            'no_orden',
            'id_repuesto',
            'detalles_nuevo_repuesto'
            
        ];
    }
    
