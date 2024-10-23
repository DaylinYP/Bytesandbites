<?php

    namespace App\Controllers;

    use App\Models\SolicitudRepuestosModel;
    use App\Models\ServiciosModel;
    use App\Models\OrdenesServicioModel;
    use App\Models\RepuestosModel;

    class solicitarMaterialesController extends BaseController
    {
        public function SolicitarMateriales()
        {
            $solicitudRepuestoModel = new SolicitudRepuestosModel();
            $servicioModel = new ServiciosModel();
            $ordenesServicioModel = new OrdenesServicioModel();
            $repuestoModel = new RepuestosModel();

            // Obtener los datos
            // Pasar los datos a la vista
            
            $datos = [
                'solicitudes' => $solicitudRepuestoModel->findAll(),
                'servicios' => $servicioModel->findAll(),
                'ordenes' => $ordenesServicioModel->findAll(),
                'repuestos' => $repuestoModel->findAll(),
                'titulo' => 'Solicitud de Materiales',
            ];

            return view('vistaTecnico/solicitudMateriales', $datos);
        }
        public function agregarSolicitud()
        {

                // Prepara los datos para la inserción en la base de datos
                $datos = [

                    
                    'fecha_solicitud' => $this->request->getVar('txt_fecha_solicitud'),
                    'servicio_id' => $this->request->getVar('txt_servicio'),
                    'no_orden' => $this->request->getVar('txt_orden'),
                    'id_repuesto' => $this->request->getVar('txt_repuesto'),
                    'detalles_nuevo_repuesto' => $this->request->getVar('txt_nuevo_repuesto'),
                ];

                // Inserta los datos en la base de datos
                $solicitudRepuestoModel = new SolicitudRepuestosModel();
                $solicitudRepuestoModel->insert($datos);

                // Redirige a la lista de repuestos con un mensaje de éxito
                return redirect()->to('vistaTecnico/lista_solicitudes')->with('success', 'Solicitud agregado correctamente.');
            
        }


        public function listaSolicitudes(): string
        {
            $solicitudRepuestoModel = new SolicitudRepuestosModel();
            $servicioModel = new ServiciosModel();
            $ordenesServicioModel = new OrdenesServicioModel();
            $repuestoModel = new RepuestosModel();

            // Obtener los datos
            // Pasar los datos a la vista
            
            $datos = [
                'solicitudes' => $solicitudRepuestoModel->findAll(),
                'servicios' => $servicioModel->findAll(),
                'ordenes' => $ordenesServicioModel->findAll(),
                'repuestos' => $repuestoModel->findAll(),
                'titulo' => 'Lista de Solicitudes',
            ];


            return view('vistaTecnico/lista_solicitudes', $datos);
        }

    /*
    public function buscarTecnico($id = null)
    {
        $empleado = new EmpleadoModel();
        $empleado = $empleado->where('id_empleado', $id)->first();
        
        if ($empleado) {
            // Concatenar nombres y apellidos
            $nombres = $empleado['primer_nombre'] . ' ' . $empleado['segundo_nombre'];
            $apellidos = $empleado['primer_apellido'] . ' ' . $empleado['segundo_apellido'];

            $datos = [
                'nombres' => $nombres,
                'apellidos'=> $apellidos
            ];
        } else {
            $datos = ['id_empleado' => 'Empleado no encontrado'];
        }
        
        return view('vistaTecnico/solicitudMateriales' , $datos);
    }*/
    }



/*   public function index()
    {
        echo view('header');
        echo view('productos');
        echo view('footer');

    }
 */


