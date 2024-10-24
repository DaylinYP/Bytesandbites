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
            // Prepara los datos para la inserción en la base de datos
            $datos = [
                'id_repuesto' => $this->request->getVar('txt_id_repuesto'),
                'nombre' => $this->request->getVar('txt_nombre'),
                'id_tipo_equipo' => $this->request->getVar('txt_tipo_equipo'),
                'id_marca' => $this->request->getVar('txt_marca'),
                'modelo' => $this->request->getVar('txt_modelo'),
                'precio_repuesto' => $this->request->getVar('txt_precio'),
                'cantidad' => $this->request->getVar('txt_cantidad'),
                'id_proveedor' => $this->request->getVar('txt_proveedor'),
                'descripcion' => $this->request->getVar('txt_descripcion_repuesto'),
                'id_estado_repuesto' => $this->request->getVar('txt_estado_repuesto'),
            ];

            // Manejo del archivo de imagen
        $img = $this->request->getFile('txt_imagen');
        if ($img->isValid() && !$img->hasMoved()) {
            // Define la ruta de destino donde quieres guardar la imagen
            $newName = $img->getRandomName(); // Genera un nombre aleatorio para la imagen
            $img->move(ROOTPATH . 'public/uploads/repuestos', $newName);
            
            // Guarda la ruta de la imagen en la base de datos
            $ruta_imagen = 'uploads/repuestos/' . $newName;
        } else {
            $ruta_imagen = null; // O maneja el caso donde no se sube imagen
        }
    
        // Guardar en la base de datos, asegurándonos de que las claves de los datos coinciden
        $data = [
            'id_repuesto' => $datos['id_repuesto'],  // Asegúrate de que el campo sea 'id_repuesto' en la tabla
            'nombre' => $datos['nombre'],
            'id_tipo_equipo' => $datos['id_tipo_equipo'],  // Revisar que el nombre sea correcto en la tabla
            'id_marca' => $datos['id_marca'],  // Revisar que el nombre sea correcto en la tabla
            'modelo' => $datos['modelo'],
            'precio_repuesto' => $datos['precio_repuesto'],  // Debe coincidir con el nombre en la base de datos
            'cantidad' => $datos['cantidad'],
            'id_proveedor' => $datos['id_proveedor'],  // Asegúrate de que el campo en la tabla sea 'id_proveedor'
            'descripcion' => $datos['descripcion'],
            'id_estado_repuesto' => $datos['id_estado_repuesto'],  // Campo correcto de la tabla
            'img_repuesto' => $ruta_imagen // Guarda la ruta de la imagen en la base de datos
        ];
    
        $repuestosModel = new RepuestosModel();
        $repuestosModel->insert($data);
    
        return redirect()->to('/lista_repuestos');
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
        // Prepara los datos para la actualización en la base de datos
        $id_repuesto = $this->request->getVar('txt_id_repuesto');
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre'),
            'id_tipo_equipo' => $this->request->getVar('txt_tipo_equipo'),
            'id_marca' => $this->request->getVar('txt_marca'),
            'modelo' => $this->request->getVar('txt_modelo'),
            'precio_repuesto' => $this->request->getVar('txt_precio'),
            'cantidad' => $this->request->getVar('txt_cantidad'),
            'id_proveedor' => $this->request->getVar('txt_proveedor'),
            'descripcion' => $this->request->getVar('txt_descripcion_repuesto'),
            'id_estado_repuesto' => $this->request->getVar('txt_estado_repuesto'),
        ];
    
        // Manejo del archivo de imagen
        $img = $this->request->getFile('txt_imagen');
        if ($img->isValid() && !$img->hasMoved()) {
            // Define la ruta de destino donde quieres guardar la imagen
            $newName = $img->getRandomName(); // Genera un nombre aleatorio para la imagen
            $img->move(ROOTPATH . 'public/uploads/repuestos', $newName);
            
            // Actualiza la ruta de la imagen
            $datos['img_repuesto'] = 'uploads/repuestos/' . $newName;
        } else {
            // Si no se selecciona una nueva imagen, mantiene la actual
            $datos['img_repuesto'] = $this->request->getVar('imagen_actual');
        }
    
        // Instancia del modelo
        $repuestosModel = new RepuestosModel();
    
        // Actualiza los datos del repuesto
        $repuestosModel->update($id_repuesto, $datos);
    
        return redirect()->to('/lista_repuestos');
    }
    

    public function eliminarRepuesto($id = null)
    {
        $repuesto = new RepuestosModel();
        $repuesto->delete(['id_repuesto' => $id]);
        return redirect()->to('lista_repuestos'); 
    
}


}