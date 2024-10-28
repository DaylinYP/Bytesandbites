<?php

namespace App\Models;

use App\Controllers\EmpleadosController;
use CodeIgniter\Model;

class AdminEmpleadosModel extends Model


{

    protected $table            = 'empleados';
    protected $primaryKey       = 'id_empleado';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_empleado',
        'dpi',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nit',
        'email',
        'telefono',
        'direccion',
        'id_rol',
        'id_empresa',
        'extension'
    ];




    public function verEmpleado() //Metodo qu devuelve una union de tablas
    {
        return $this->select(
            'empleados.id_empleado,
         empleados.dpi,
         empleados.primer_nombre, 
         empleados.segundo_nombre,
         empleados.primer_apellido,
         empleados.segundo_apellido,
         empleados.email,
         empleados.nit,
         empleados.telefono,
         empleados.direccion,
         roles.nombre_rol as rol,
         roles.precio as sueldo, 
         empresas.nombre_empresa as sucursal,
         empleados.extension,
         estados.nombre as estado'
        )
            ->join('roles', 'empleados.id_rol = roles.id_rol')
            ->join('empresas', 'empleados.id_empresa = empresas.id_empresa')
            ->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado')
            ->join('estados', 'usuarios.estado_id = estados.estado_id')
            ->findAll();
    }

    public function busqueda($busqueda) // Busca algun dato que se encuentren en las tablas que sean similares al parametro $busqueda.
    {
        $this->select(
            'empleados.id_empleado,
             empleados.dpi,
             empleados.primer_nombre, 
             empleados.segundo_nombre,
             empleados.primer_apellido,
             empleados.segundo_apellido,
             empleados.email,
             empleados.nit,
             empleados.telefono,
             empleados.direccion,
             roles.nombre_rol as rol,
             roles.precio as sueldo, 
             empresas.nombre_empresa as sucursal,
             empleados.extension,
             estados.nombre as estado'
        )
            ->join('roles', 'empleados.id_rol = roles.id_rol')
            ->join('empresas', 'empleados.id_empresa = empresas.id_empresa')
            ->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado')
            ->join('estados', 'usuarios.estado_id = estados.estado_id');

        if (!empty($busqueda)) {
            $this->groupStart()
                ->like('empleados.primer_nombre', $busqueda)
                ->orLike('empleados.segundo_nombre', $busqueda)
                ->orLike('empleados.primer_apellido', $busqueda)
                ->orLike('empleados.segundo_apellido', $busqueda)
                ->orLike('empleados.email', $busqueda)
                ->orLike('empleados.id_empleado', $busqueda)
                ->orLike('empleados.dpi', $busqueda)
                // Agrega más campos según sea necesario
                ->groupEnd();
        }
        return $this->findAll();
    }

    public function buscarID($id){ //Este metodo hace una busqueda por el Id 
        return $this->select(
            'empleados.id_empleado,
         empleados.dpi,
         empleados.primer_nombre as primer_nombre, 
         empleados.segundo_nombre,
         empleados.primer_apellido,
         empleados.segundo_apellido,
         empleados.email,
         empleados.nit,
         empleados.telefono,
         empleados.direccion,
         roles.id_rol,
         roles.nombre_rol as rol, 
         empresas.id_empresa,
         empresas.nombre_empresa as sucursal,
         empleados.extension,
         estados.estado_id,
         estados.nombre as estado,
         usuarios.id_empleado,
         usuarios.nombre_usuario,
         usuarios.contrasenia,
         usuarios.contrasenia_p,
         usuarios.nombre_usuario,
         usuarios.fecha_creacion,
         usuarios.fecha_modificacion
         '
        )
        ->join('roles', 'empleados.id_rol = roles.id_rol')
            ->join('empresas', 'empleados.id_empresa = empresas.id_empresa')
            ->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado')
            ->join('estados', 'usuarios.estado_id = estados.estado_id')
            ->where('usuarios.id_empleado', $id)
            ->first();
    }


    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
