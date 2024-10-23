<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class RepuestosModel extends Model
    {
        protected $table         = 'repuestos';
        protected $primaryKey = 'id_repuesto';
        protected $allowedFields = [
            'id_repuesto'
            ,'nombre'
            , 'id_tipo_equipo'
            , 'id_marca'
            , 'modelo'
            , 'precio_repuesto'
            , 'img_repuesto'
            , 'cantidad'
            , 'id_proveedor'
            , 'descripcion'
            , 'id_estado_repuesto'
            
        ];

        
    }
