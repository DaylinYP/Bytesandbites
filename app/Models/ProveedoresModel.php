<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ProveedoresModel extends Model
{
    protected $table      = 'proveedores';
    protected $primaryKey = 'id_proveedor';

    protected $allowedFields = [
        'id_proveedor'
        ,'nombre_proveedor'
        ,'telefono'
        ,'direccion'
        ,'nombre_contacto'
        ,'telefono_contacto'
    ];


}
