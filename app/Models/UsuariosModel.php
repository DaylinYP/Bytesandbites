<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_empleado';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_empleado',
        'nombre_usuario',
        'contrasenia',
        'fecha_creacion',
        'fecha_modificacion',
        'estado_id'
    ];

    protected $belongsTo = [
        'usuario' => 'App\Models\UsuarioModel',
        'estado'  => 'App\Models\EstadoModel',
    ];

    /*    public function validateUser($user, $password)
     {
        $user = $this->where(['nombre_usuario'=> $user , 'estado_id' => 1])->first();
        if ($user && password_verify($password, $user['contrasenia'])){
            return $user; 
        }
        return null;
     }   
     */

    public function validateUser($user, $password)
    {
        // Obtener el usuario por nombre de usuario y estado activo
        $user = $this->db->table('usuarios')
            ->join('empleados', 'usuarios.id_empleado = empleados.id_empleado')
            ->join('roles', 'empleados.id_rol = roles.id_rol')  // Relacionar con la tabla roles
            ->select('usuarios.*, empleados.*, roles.nombre_rol') // Obtener campos necesarios
            ->where(['usuarios.nombre_usuario' => $user, 'usuarios.estado_id' => 1])
            ->get()
            ->getRowArray(); // Obtener una fila como arreglo

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['contrasenia'])) {
            return $user; // Retornar todos los datos del usuario con el rol
        }

        return null; // Si no coincide la contraseña o el usuario no existe
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
