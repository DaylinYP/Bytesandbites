<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class OrdenesServicioModel extends Model
    {
        protected $table         = 'orden_servicio';
        protected $primaryKey = 'no_orden';
        protected $allowedFields = [
            'no_orden'
            ,'id_cliente'
            , 'fecha_recepcion'
            , 'fecha_entrega_estimada'
            , 'fecha_entrega'
            , 'id_estado_orden'
        ];

       

        
    }


    
