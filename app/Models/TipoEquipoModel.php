<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class TipoEquipoModel extends Model
{
    protected $table      = 'tipo_equipo';
    protected $primaryKey = 'id_tipo_equipo';

    protected $allowedFields = [
        'id_tipo_equipo'
        ,'nombre_tipo'
    ];

	public function repuestos()
    {
        return $this->hasMany(Repuesto::class, 'id_tipo_equipo');
    }

}
