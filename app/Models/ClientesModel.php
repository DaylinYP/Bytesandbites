<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table      = 'clientes';
    protected $primaryKey = 'id_cliente';

    protected $allowedFields = [
        'id_cliente',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'nit',
        'contrasenia',
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
}

        
