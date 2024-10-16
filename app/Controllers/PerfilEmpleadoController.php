<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;
use App\Models\RolesModel; // Asegúrate de que este modelo existe
use App\Models\EmpresasModel; // Asegúrate de que este modelo existe

class PerfilEmpleadoController extends BaseController
{
    public function perfilEmpleado($id): string
    {
        $empleadoModel = new EmpleadoModel();
        $rolModel = new RolesModel();
        $empresaModel = new EmpresasModel();

        // Obtener el empleado por su ID
        $empleado = $empleadoModel->find($id);

        if (!$empleado) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Empleado no encontrado");
        }

        // Obtener el nombre del rol y la empresa
        $rol = $rolModel->find($empleado['id_rol']);
        $empresa = $empresaModel->find($empleado['id_empresa']);

        // Crear el nombre completo
        $nombreCompleto = $empleado['primer_nombre'] . ' ' . $empleado['segundo_nombre'] . ' ' . $empleado['primer_apellido'] . ' ' . $empleado['segundo_apellido'];

        // Pasar los datos a la vista
        $datos = [
            'empleado' => $empleado,
            'nombreCompleto' => $nombreCompleto,
            'nombreRol' => $rol ? $rol['nombre_rol'] : 'N/A', // Cambia 'nombre_rol' 
            'nombreEmpresa' => $empresa ? $empresa['nombre_empresa'] : 'N/A', // Cambia 'nombre_empresa'
        ];

        return view('/encargado_bodega/perfil_empleado', $datos);
    }
}
