<?php

namespace App\Controllers;

use App\Models\RepuestosModel;
use App\Models\MarcaModel;
use App\Models\TipoEquipoModel;
use App\Models\ProveedoresModel;
use App\Models\EstadoRepModel;

class RepuestosController extends BaseController
{
    public function index(): string
    {
        $repuestoModel = new RepuestosModel();
        $marcaModel = new MarcaModel();
        $tipoEquipoModel = new TipoEquipoModel();
        $proveedorModel = new ProveedoresModel();
        $estadoRepuestoModel = new EstadoRepModel();

        // Obtener los repuestos
        $repuestos = $repuestoModel->findAll();

        // Obtener las marcas, tipos de equipo y proveedores
        $marcas = $marcaModel->findAll();
        $tiposEquipo = $tipoEquipoModel->findAll();
        $proveedores = $proveedorModel->findAll();
        $estadoRepuestos = $estadoRepuestoModel->findAll();

        // Pasar los datos a la vista
        
        $datos = [
            'repuestos' => $repuestos,
            'marcas' => $marcas,
            'tiposEquipo' => $tiposEquipo,
            'proveedores' => $proveedores,
            'estadoRepuestos' => $estadoRepuestos,
            'titulo' => 'Lista de Repuestos',
        ];

        return view('/encargado_bodega/lista_repuestos', $datos);
    }

    public function nuevoRepuesto(): string
    {
        $marcaModel = new MarcaModel();
        $tipoEquipoModel = new TipoEquipoModel();
        $proveedorModel = new ProveedoresModel();
        $estadoRepuestoModel = new EstadoRepModel();

        // Obtener marcas y tipos de equipo para el formulario
        
        $datos = [
            'marcas' => $marcaModel->findAll(),
            'tiposEquipo' => $tipoEquipoModel->findAll(),
            'proveedores' => $proveedorModel->findAll(),
            'estadoRepuestos' => $estadoRepuestoModel->findAll(),
            'titulo' => 'Nuevo Repuesto',
        ];

        return view('/encargado_bodega/nuevo_repuesto', $datos);
    }

    public function agregarRepuesto()
    {
        $file = $this->request->getFile('txt_imagen');

        // Verifica si el archivo es válido y no está vacío
        if ($file && $file->isValid()) {
            // Generar un nombre único para la imagen
            $newName = $file->getRandomName();

            // Mover el archivo a la carpeta de uploads
            $file->move(WRITEPATH . 'uploads', $newName);
            
            // Guarda la ruta relativa de la imagen
            $imgPath = 'uploads/' . $newName; 

            // Prepara los datos para la inserción en la base de datos
            $datos = [
                'id_repuesto' => $this->request->getVar('txt_id_repuesto'),
                'nombre' => $this->request->getVar('txt_nombre'),
                'id_tipo_equipo' => $this->request->getVar('txt_tipo_equipo'),
                'id_marca' => $this->request->getVar('txt_marca'),
                'modelo' => $this->request->getVar('txt_modelo'),
                'precio' => $this->request->getVar('txt_precio'),
                'img_repuesto' => $imgPath,  // Guarda la ruta relativa
                'cantidad' => $this->request->getVar('txt_cantidad'),
                'id_proveedor' => $this->request->getVar('txt_proveedor'),
                'descripcion' => $this->request->getVar('txt_descripcion_repuesto'),
                'id_estado_repuesto' => $this->request->getVar('txt_estado_repuesto'),
            ];

            // Inserta los datos en la base de datos
            $repuestoModel = new RepuestosModel();
            $repuestoModel->insert($datos);

            // Redirige a la lista de repuestos con un mensaje de éxito
            return redirect()->to('/lista_repuestos')->with('success', 'Repuesto agregado correctamente.');
        } else {
            // Manejar el error en caso de que no se suba correctamente
            return redirect()->back()->with('error', 'No se pudo subir la imagen. Asegúrate de seleccionar un archivo válido.');
        }
    }

    public function buscarRepuesto($id = null)
    {
        $repuestoModel = new RepuestosModel();
        $marcaModel = new MarcaModel();
        $tipoEquipoModel = new TipoEquipoModel();
        $proveedorModel = new ProveedoresModel();
        $estadoRepuestoModel = new EstadoRepModel();

        $datos = [
            'repuesto' => $repuestoModel->where('id_repuesto', $id)->first(), // Obtenemos el repuesto
            'marcas' => $marcaModel->findAll(),
            'tiposEquipo' => $tipoEquipoModel->findAll(),
            'proveedores' => $proveedorModel->findAll(),
            'estadoRepuestos' => $estadoRepuestoModel->findAll(),
            'titulo' => 'Modificar Repuesto',
        ];

        return view('/encargado_bodega/actualizar_repuesto', $datos);
    }



    public function modificarRepuesto()
    {
        $repuestoModel = new RepuestosModel();

        // Obtener el archivo de imagen subido
        $file = $this->request->getFile('txt_imagen');
        $imgPath = $this->request->getVar('imagen_actual'); // Ruta de la imagen actual

        // Si se selecciona una nueva imagen y es válida
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Generar un nuevo nombre para la imagen
            $newName = $file->getRandomName();
            
            // Mover la nueva imagen a la carpeta de uploads
            $file->move(WRITEPATH . 'uploads', $newName);
            
            // Guardar la ruta de la nueva imagen
            $imgPath = 'uploads/' . $newName;
        }

        // Datos a actualizar
        $datos = [
            'id_repuesto' => $this->request->getVar('txt_id_repuesto'),
            'nombre' => $this->request->getVar('txt_nombre'),
            'id_tipo_equipo' => $this->request->getVar('txt_tipo_equipo'),
            'id_marca' => $this->request->getVar('txt_marca'),
            'modelo' => $this->request->getVar('txt_modelo'),
            'precio' => $this->request->getVar('txt_precio'),
            'img_repuesto' => $imgPath, // Actualizamos la imagen con la nueva o mantenemos la anterior
            'cantidad' => $this->request->getVar('txt_cantidad'),
            'id_proveedor' => $this->request->getVar('txt_proveedor'),
            'descripcion' => $this->request->getVar('txt_descripcion_repuesto'),
            'id_estado_repuesto' => $this->request->getVar('txt_estado_repuesto'),
        ];


        // Redirigir a la lista de repuestos
        $repuesto = new RepuestosModel();
        $repuesto->update($datos['id_repuesto'], $datos);
        return redirect()->to('lista_repuestos'); 
    
    }


    public function eliminarRepuesto($id = null)
    {
        $repuesto = new RepuestosModel();
        $repuesto->delete(['id_repuesto' => $id]);
        return redirect()->to('lista_repuestos'); 
    
}


}