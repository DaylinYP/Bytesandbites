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

    public function verClientes(){
        return $this->select('clientes.*, empresas.nombre_empresa')
        ->join('empresas','clientes.id_empresa = empresas.id_empresa')
        ->findAll();

    }
    public function buscar($busqueda) {
        $this->select('clientes.*, empresas.nombre_empresa')
             ->join('empresas', 'clientes.id_empresa = empresas.id_empresa');
    
        if (!empty($busqueda)) {
            $this->groupStart()
                 ->like('clientes.primer_nombre', $busqueda)
                 ->orLike('clientes.primer_apellido', $busqueda)
                 ->orLike('clientes.email', $busqueda)
                 ->orLike('clientes.id_cliente', $busqueda)
                 // Agrega más campos según sea necesario
                 ->groupEnd();
        }
    
        return $this->findAll();
    }


}

        
