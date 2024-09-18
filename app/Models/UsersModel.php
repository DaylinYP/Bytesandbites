<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'clientes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false; // Considera habilitar esto si usas "soft deletes"
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_cliente',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nit',
        'email',
        'contrasenia',  
        'activacion',
        'activation_token',
        'reset_token',
        'reset_token_expires_at',
        'telefono',
        'id_empresa'
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;  // Corregido: se eliminó el error tipográfico
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Valida un usuario buscando el correo y verificando la contraseña
     *
     * @param string $email
     * @param string $contrasenia
     * @return array|null
     */
    public function validateUser($email, $contrasenia){
        // Buscar el correo en la base de datos
        $user = $this->where(['email' => $email, 'active' => 1])->first();
        
        // Verificar si existe el usuario y si la contraseña es correcta
        if ($user && password_verify($contrasenia, $user['password'])) {  // Asegúrate que el campo en la base de datos sea 'password'
            return $user;
        }

        return null; // Si el usuario no existe o la contraseña es incorrecta
    }
}