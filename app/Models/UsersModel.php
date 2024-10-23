<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'clientes';
    protected $primaryKey       = 'id_cliente';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false; 
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_cliente',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nit',
        'contrasenia',
        'contrasenia_p',
        'email',
        'activacion',
        'activation_token',
        'reset_token',
        'reset_token_expires_at',
        'created_at',
        'updated_at',
        'telefono',
        'id_empresa'

    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true; 
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
    public function validateUser($email, $password)
    {
        
        $email = $this->where(['email' => $email, 'activacion' => 1])->first();

       
        if ($email && password_verify($password, $email['contrasenia'])) {         
                return $email;
        }

        return null; 
    }


    /**ADMIN -<<<--*/
    public function verClientes()
    {
        return $this->select('clientes.*, empresas.nombre_empresa')
            ->join('empresas', 'clientes.id_empresa = empresas.id_empresa')
            ->findAll();
    }
    public function buscar($busqueda)
    {
        $this->select('clientes.*, empresas.nombre_empresa')
            ->join('empresas', 'clientes.id_empresa = empresas.id_empresa');

        if (!empty($busqueda)) {
            $this->groupStart()
                ->like('clientes.primer_nombre', $busqueda)
                ->orLike('clientes.primer_apellido', $busqueda)
                ->orLike('clientes.email', $busqueda)
                ->orLike('clientes.id_cliente', $busqueda)
             
                ->groupEnd();
        }

        return $this->findAll();
    }

}
