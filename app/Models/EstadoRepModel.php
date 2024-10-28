<?php    
    
    namespace App\Models;

        use CodeIgniter\Model;

        class EstadoRepModel extends Model
    {
        protected $table      = 'estado_repuesto';
        protected $primaryKey = 'id_estado_repuesto';

        protected $allowedFields = [
            'id_estado_repuesto'
            ,'estado'
            
        ];

        

        public function repuestos()
        {
            return $this->hasMany(Repuesto::class, 'id_estado_repuesto');
        }


    }