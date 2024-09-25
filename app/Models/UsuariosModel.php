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
        'estado_id'];

     public function validateUser($user, $password)
     {
        $user = $this->where(['nombre_usuario'=> $user , 'estado_id' => 1])->first();
        if ($user && password_verify($password, $user['contrasenia'])){
            return $user; 
        }
        return null;
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
