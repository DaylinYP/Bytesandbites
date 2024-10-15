<?php    
    
    namespace App\Models;

        use CodeIgniter\Model;

        class DetallesEquiposModel extends Model
    {
        protected $table      = 'detalle_equipos';
        protected $primaryKey = 'id_detalle_equipo';

        protected $allowedFields = [
            'id_detalle_equipo'
            ,'no_orden'
            ,'id_tipo_equipo'
            ,'id_marca'
            ,'modelo'
            ,'descripcion_cliente'
            ,'id_agente'
            ,'evaluacion_agente'
            ,'observaciones'
            ,'espesificaciones_equipo'
        ];

    }