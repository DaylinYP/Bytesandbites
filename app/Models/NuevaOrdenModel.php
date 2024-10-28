<?php

    namespace App\Models;

    use CodeIgniter\Model;

    

    class ClienteModel extends Model
    {
        protected $table         = 'clientes';
        protected $primaryKey = 'id_cliente';
        protected $allowedFields = [
            'id_cliente'
            ,'primer_nombre'
            , 'segudo_nombre'
            , 'primer_apellido'
            , 'segudo_apellido'
            , 'nit'
            , 'email'
            , 'activacion'
            , 'activation_token'
            , 'reset_token'
            , 'reset_token_expires_at'
            , 'telefono'
            , 'id_empresa'
        ];

        
    }

    class OrdenesServiceModel extends Model
    {
        protected $table         = 'orden_servicio';
        protected $primaryKey = 'no_orden';
        protected $allowedFields = [
            'no_orden'
            ,'id_cliente'
            , 'fecha_recepcion'
            , 'fecha_entrega_estimada'
            , 'fecha_entrega'
        ];
    }

    class DetalleEquiposModel extends Model
    {
        protected $table         = 'orden_servicio';
        protected $primaryKey = 'id_detalle_equipo';
        protected $allowedFields = [
            'id_detalle_equipo'
            ,'no_orden'
            , 'id_tipo_equipo'
            , 'id_marca'
            , 'modelo'
            , 'descripcion_cliente'
            , 'id_agente'
            , 'evaluacion_agente'
            , 'observaciones'
            , 'espesificaciones_equipo'
        ];
    }

