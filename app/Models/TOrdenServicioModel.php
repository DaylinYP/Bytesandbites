<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class TOrdenServicioModel extends Model
    {
        protected $table = 'orden_servicio';
        protected $primaryKey = 'no_orden';
        protected $allowedFields = ['no_orden', 'id_cliente', 'fecha_recepcion', 'fecha_entrega_estimada', 'fecha_entrega', 'id_estado_orden'];

        public function getOrdenesEstado()
        {
            return $this->select('orden_servicio.*, estado_ordenes.estado_orden')
                        ->join('estado_ordenes', 'estado_ordenes.id_estado_orden = orden_servicio.id_estado_orden')
                        ->where('orden_servicio.id_estado_orden', 1) // Especifica el nombre de la tabla aquí
                        ->findAll();
        }

        public function getOrdenesAsignadas()
        {
            return $this->select('orden_servicio.*, estado_ordenes.estado_orden')
                        ->join('estado_ordenes', 'estado_ordenes.id_estado_orden = orden_servicio.id_estado_orden')
                        ->where('orden_servicio.id_estado_orden', 2) // Especifica el nombre de la tabla aquí
                        ->findAll();
        }


    }



 
