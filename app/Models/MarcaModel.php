<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class MarcaModel extends Model
{
    protected $table      = 'marcas';
    protected $primaryKey = 'id_marca';

    protected $allowedFields = [
        'id_marca'
        ,'nombre_marca'
    ];

	

}

namespace App\Models;

    use CodeIgniter\Model;

    class EmpleadosModel extends Model
{
    protected $table      = 'empleados';
    protected $primaryKey = 'id_empleado';

    protected $allowedFields = [
        'id_empleado'
        ,'dpi'
        ,'primer_nombre'
        ,'segundo_nombre'
        ,'primer_apellido'
        ,'segundo_apellido'
        ,'nit'
        ,'email'
        ,'telefono'
        ,'direccion'
        ,'id_rol'
        ,'id_empresa'
        ,'extension'
    ];

    

	public function repuestos()
    {
        return $this->hasMany(Repuesto::class, 'id_empleado');
    }


}