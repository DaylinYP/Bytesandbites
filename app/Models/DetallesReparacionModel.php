<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class DetallesReparacionModel extends Model
    {
        protected $table         = 'detalles_servicio_reparacion';
        protected $primaryKey    = 'id_detalle_srv_reparacion';
        protected $allowedFields = [
            'id_detalle_srv_reparacion',
            'fecha',
            'reparacion_id',
            'id_repuesto',
            'precio_detalle_reparacion',
            'descripcion'
        ];
    }