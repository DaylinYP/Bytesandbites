<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\EmpleadoModel; 

class EmpleadoController extends BaseController
{

    public function editarPerfil()
    {
        $session = session();
        $idEmpleado = $session->get('id_empleado'); // Obtener el ID del empleado que inició sesión

        if (!$idEmpleado) {
            return redirect()->to('/login'); // Redirigir al login si no hay sesión activa
        }

        // Instanciar el modelo de empleados
        $empleadoModel = new EmpleadoModel();

        // Buscar los datos del empleado según el ID
        $empleado = $empleadoModel->find($idEmpleado);

        if (!$empleado) {
            // Manejar el caso en el que el empleado no exista
            return redirect()->to('/error'); // Redirigir a una página de error personalizada
        }

        // Pasar los datos del empleado a la vista
        $datos['empleado'] = $empleado;
        $datos['titulo'] = 'Editar Perfil del Empleado';

        // Retornar la vista con los datos del empleado
        return view('vistaTecnico/editarPerfil', $datos);
    }
     public function inicioSesion()
    {
        // Título que se mostrará en la vista de inicio de sesión
        $datos['titulo'] = 'Inicio de Sesión del Empleado';

        // Retornar la vista con los datos
        return view('vistaTecnico/inicioSesion', $datos);
    }
}

