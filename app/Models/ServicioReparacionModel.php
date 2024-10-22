<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ServicioReparacionModel extends Model
    {
        protected $table         = 'servicios_reparacion';
        protected $primaryKey    = 'reparacion_id';
        protected $allowedFields = [
            'reparacion_id',
            'id_detalle_equipo',
            'fecha_ingreso',
            'fecha_finalizacion',
            'tecnico_id',
            'servicio_id',
            'precio',
            'descripcion'
        ];
    }
