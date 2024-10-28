<?php
namespace App\Models;
use CodeIgniter\Model;

class EmpresasModel extends Model
{
   protected $table = 'empresas';

   protected $primaryKey = 'id_empresa';
   protected $allowedFields= ['id_empresa',
  'nombre_empresa' ,
  'eslogan',
  'logo',
  'mascotas_1' ,
  'mascotas_2' ,
  'vision' ,
  'mision' ,
  'valores' ,
  'historia',
  'img_historia' ,
  'telefono' ,
  'direccion' ];
}













