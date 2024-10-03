<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminEmpleadosModel;
use App\Models\EmpleadosModel;
use App\Models\EstadosModel;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminEmpleadosController extends BaseController
{
   protected $helpers = ['form'];


   public function index()
   {

      /* $datos['datos'] = $empleados->findAll();*/
      $db = \Config\Database::connect();

      $sql = $db->table('empleados');
      $sql->select(
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
         empresas.nombre_empresa as sucursal,
         empleados.extension,
         estados.nombre as estado'
      );
      $sql->join('roles', 'empleados.id_rol = roles.id_rol');
      $sql->join('empresas', 'empleados.id_empresa = empresas.id_empresa');
      $sql->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado');
      $sql->join('estados', 'usuarios.estado_id = estados.estado_id');

      $query = $sql->get();
      $resultado = $query->getResultArray();

      $data = ['empleadoss' => $resultado];
      return view('admin/empleados', $data);
   }

   public function buscar()
   {

      /* $datos['datos'] = $empleados->findAll();*/
      $busqueda = $this->request->getPost('busqueda');
      $db = \Config\Database::connect();

      $sql = $db->table('empleados');
      $sql->select(
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
         empresas.nombre_empresa as sucursal,
         empleados.extension,
         estados.nombre as estado'
      );
      $sql->join('roles', 'empleados.id_rol = roles.id_rol');
      $sql->join('empresas', 'empleados.id_empresa = empresas.id_empresa');
      $sql->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado');
      $sql->join('estados', 'usuarios.estado_id = estados.estado_id');


      if (!empty($busqueda)) {
         $sql->groupStart();
         $sql->like('empleados.primer_nombre', $busqueda);
         $sql->orLike('empleados.primer_apellido', $busqueda);
         $sql->orLike('empleados.email', $busqueda);
         $sql->orLike('empleados.id_empleado', $busqueda);
         // Agrega más campos según sea necesario
         $sql->groupEnd();
     }
      $query = $sql->get();
      $resultado = $query->getResultArray();

      $data = ['empleadoss' => $resultado];
      return view('admin/empleados', $data);
   }



   public function buscarEmpleado($id = null)
   {

      $db = \Config\Database::connect();
      $sql = $db->table('empleados');
      $sql->select(
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
         usuarios.contrasenia,
         usuarios.nombre_usuario,
         usuarios.fecha_creacion,
         usuarios.fecha_modificacion
         '
      );
      $sql->join('roles', 'empleados.id_rol = roles.id_rol');
      $sql->join('empresas', 'empleados.id_empresa = empresas.id_empresa');
      $sql->join('usuarios', 'empleados.id_empleado = usuarios.id_empleado');
      $sql->join('estados', 'usuarios.estado_id = estados.estado_id');
      $sql->where('usuarios.id_empleado', $id);
      $query = $sql->get();
      $resultado = $query->getResultArray();

      $datos = ['empleadosss' => $resultado];


      return view('admin/frm/frm_empleado_modificar', $datos);
   }


   public function modificar()
   {

      $empleados = new AdminEmpleadosModel();
      $usuarios = new UsuariosModel();

      $data = [

         $datos = [
            'id_empleado' => $this->request->getVar('txt_id'),
            'primer_nombre' => $this->request->getVar('txt_pr_nombre'),
            'segundo_nombre' => $this->request->getVar('txt_s_nombre'),
            'primer_apellido' => $this->request->getVar('txt_p_apellido'),
            'segundo_apellido' => $this->request->getVar('txt_s_apellido'),
            'dpi' => $this->request->getVar('txt_dpi'),
            'nit' => $this->request->getVar('txt_nit'),
            'email' => $this->request->getVar('txt_email_usuario'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'id_rol' => $this->request->getVar('txt_rol'),
            'id_empresa' => $this->request->getVar('txt_empresa'),
            'extension' => $this->request->getVar('txt_extension')

         ],

         $datosUsuarios = [
            'id_empleado' => $this->request->getVar('txt_id'),
            'nombre_usuario' => $this->request->getVar('txt_email_usuario'),
            'contrasenia' => password_hash($this->request->getPost('txt_contrasenia'), PASSWORD_DEFAULT),
            'contrasenia_p' => $this->request->getPost('txt_contrasenia'),
            'fecha_modificacion' => $this->request->getVar('txt_fecha_modificacion'),
            'estado_id' => $this->request->getVar('txt_estado')
         ]

      ];



      $reglas = [
         'txt_id' => [
            'label' => 'Colocar un id',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es obligatorio el {field}'
            ]
         ],
         'txt_pr_nombre' => [
            'label' => 'Primer Nombre',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_s_nombre' => [
            'label' => 'Segundo nombre',
            'rules' => 'min_length[2]',
            'errors' => [
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_p_apellido' => [
            'label' => 'Primer Apellido',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_s_apellido' => [
            'label' => 'Segundo Apellido',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_dpi' => [
            'label' => 'DPI',
            'rules' => 'numeric|exact_length[13]',
            'errors' => [
               'numeric' => 'Tiene que ser numerico',
               'exact_length' => 'tienen que ser 13'
            ]
         ],
         'txt_nit' => [
            'label' => 'NIT',
            'rules' => 'numeric|exact_length[8]',
            'errors' => [
               'numeric' => 'Tiene que ser numerico',
               'exact_length' => 'tienen que ser 8'
            ]
         ],
         'txt_email_usuario' => [
            'label' => 'EMAIL-Usuario',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}'
            ]
         ],
         'txt_telefono' => [
            'label' => 'Telefono',
            'rules' => 'required|exact_length[8]',
            'errors' => [
               'required' => 'Es necesario llenar {field} con 8 digitos',
               'exact_length' => 'tienen que ser 8'
            ]
         ],
         'txt_direccion' => [
            'label' => 'Direccion',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario llenar {field}'
            ]
         ],
         'txt_rol' => [
            'label' => 'Rol',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario seleccionar un {field}'
            ]
         ],
         'txt_empresa' => [
            'label' => 'Empresa',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario seleccionar una {field}'
            ]
         ],
         'txt_extension' => [
            'label' => 'Extension',
            'rules' => 'required|max_length[6]',
            'errors' => [
               'required' => 'Es necesario llenar {field} con 8 digitos',
               'max_length' => 'Necesario 6 numeros o menos'
            ]
         ],

         /**Usuario reglas */

         'txt_contrasenia' => [
            'label' => 'contraseña',
            'rules' => 'required|max_length[8]',
            'errors' => [
               'required' => '{field} obligatoria',
               'max_length' => 'Debe contener 8 caracteres o menos'
            ]

         ],
         'txt_fecha_creacion' => [
            'label' => 'fecha',
            'rules' => 'required',
            'errors' => [
               'required' => '{field} es obligatoria'
            ]
         ],
         'txt_estado' => [
            'label' => 'estado',
            'rules' => 'required',
            'errors' => [
               'required' => 'Selecciona un {field}'
            ]
         ]
      ];

      if (!$this->validate($reglas)) {
         return redirect()->back()->withInput();
      } 

         $empleados->update($datos['id_empleado'], $datos);
         $usuarios->update($datosUsuarios['id_empleado'], $datosUsuarios);
      
      return redirect()->route('empleados');



      //  print_r('es valido');




   }


   public function nuevoEmpleado()
   {
      return view('admin/frm/frm_empleado_nuevo');
   }
   public function agregarEmpleado()
   {
      $empleados = new AdminEmpleadosModel();
      $usuarios = new UsuariosModel();
      $datos = [
         'id_empleado' => $this->request->getVar('txt_id'),
         'primer_nombre' => $this->request->getVar('txt_pr_nombre'),
         'segundo_nombre' => $this->request->getVar('txt_s_nombre'),
         'primer_apellido' => $this->request->getVar('txt_p_apellido'),
         'segundo_apellido' => $this->request->getVar('txt_s_apellido'),
         'dpi' => $this->request->getVar('txt_dpi'),
         'nit' => $this->request->getVar('txt_nit'),
         'email' => $this->request->getVar('txt_email_usuario'),
         'telefono' => $this->request->getVar('txt_telefono'),
         'direccion' => $this->request->getVar('txt_direccion'),
         'id_rol' => $this->request->getVar('txt_rol'),
         'id_empresa' => $this->request->getVar('txt_empresa'),
         'extension' => $this->request->getVar('txt_extension')

      ];

      $datosUsuarios = [
         'id_empleado' => $this->request->getVar('txt_id'),
         'nombre_usuario' => $this->request->getVar('txt_email_usuario'),
         'contrasenia' => password_hash($this->request->getPost('txt_contrasenia'), PASSWORD_DEFAULT),
         'contrasenia_p' => $this->request->getPost('txt_contrasenia'),
         'fecha_creacion' => $this->request->getVar('txt_fecha_creacion'),
         'estado_id' => $this->request->getVar('txt_estado')
      ];

      $reglas = [
         'txt_id' => [
            'label' => 'Colocar un id',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es obligatorio el {field}'
            ]
         ],
         'txt_pr_nombre' => [
            'label' => 'Primer Nombre',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_s_nombre' => [
            'label' => 'Segundo nombre',
            'rules' => 'min_length[2]',
            'errors' => [
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_p_apellido' => [
            'label' => 'Primer Apellido',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_s_apellido' => [
            'label' => 'Segundo Apellido',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}',
               'min_length' => 'minimo 2 letras'
            ]
         ],
         'txt_dpi' => [
            'label' => 'DPI',
            'rules' => 'numeric|exact_length[13]',
            'errors' => [
               'numeric' => 'Tiene que ser numerico',
               'exact_length' => 'tienen que ser 13'
            ]
         ],
         'txt_nit' => [
            'label' => 'NIT',
            'rules' => 'numeric|exact_length[8]',
            'errors' => [
               'numeric' => 'Tiene que ser numerico',
               'exact_length' => 'tienen que ser 8'
            ]
         ],
         'txt_email_usuario' => [
            'label' => 'EMAIL-Usuario',
            'rules' => 'required|min_length[2]',
            'errors' => [
               'required' => 'Es necesario llenar {field}'
            ]
         ],
         'txt_telefono' => [
            'label' => 'Telefono',
            'rules' => 'required|exact_length[8]',
            'errors' => [
               'required' => 'Es necesario llenar {field} con 8 digitos',
               'exact_length' => 'tienen que ser 8'
            ]
         ],
         'txt_direccion' => [
            'label' => 'Direccion',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario llenar {field}'
            ]
         ],
         'txt_rol' => [
            'label' => 'Rol',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario seleccionar un {field}'
            ]
         ],
         'txt_empresa' => [
            'label' => 'Empresa',
            'rules' => 'required',
            'errors' => [
               'required' => 'Es necesario seleccionar una {field}'
            ]
         ],
         'txt_extension' => [
            'label' => 'Extension',
            'rules' => 'required|max_length[6]',
            'errors' => [
               'required' => 'Es necesario llenar {field} con 8 digitos',
               'max_length' => 'Necesario 6 numeros o menos'
            ]
         ],

         /**Usuario reglas */

         'txt_contrasenia' => [
            'label' => 'contraseña',
            'rules' => 'required|max_length[8]',
            'errors' => [
               'required' => '{field} obligatoria',
               'max_length' => 'Debe contener 8 caracteres o menos'
            ]

         ],
         'txt_fecha_creacion' => [
            'label' => 'fecha',
            'rules' => 'required',
            'errors' => [
               'required' => '{field} es obligatoria'
            ]
         ],
         'txt_estado' => [
            'label' => 'estado',
            'rules' => 'required',
            'errors' => [
               'required' => 'Selecciona un {field}'
            ]
         ]
      ];

      if (!$this->validate($reglas)) {
         return redirect()->back()->withInput();
      }

      //print_r($datos);

      $empleados->insert($datos);
      $usuarios->insert($datosUsuarios);

      return redirect()->route('empleados');
   }

   public function nuevoRol()
   {
      return view('admin/frm/frm_rol_nuevo');
   }
}
