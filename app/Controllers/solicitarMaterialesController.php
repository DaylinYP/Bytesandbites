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

            // Obtener las solicitudes de materiales
            $solicitudes = $solicitudRepuestoModel->findAll();

            // Obtener las servicios, oredenes de servicio y repuestos
            $servicios = $servicioModel->findAll();
            $ordenes = $ordenesServicioModel->findAll();
            $repuestos = $repuestoModel->findAll();


            // Pasar los datos a la vista
            
            $datos = [
                'solicitudes' => $solicitudes,
                'repuestos' => $repuestos,
                'servicios' => $servicios,
                'ordenes' => $ordenes,
                'titulo' => 'Solicitud de Materiales',
            ];

            return view('vistaTecnico/solicitudMateriales', $datos);
        }

        public function listaSolicitudes(): string
        {
            $solicitudRepuestoModel = new SolicitudRepuestosModel();
            $servicioModel = new ServiciosModel();
            $ordenesServicioModel = new OrdenesServicioModel();
            $repuestoModel = new RepuestosModel();

            // Obtener las solicitudes de materiales
            $solicitudes = $solicitudRepuestoModel->findAll();

            // Obtener las servicios, oredenes de servicio y repuestos
            $servicios = $servicioModel->findAll();
            $ordenes = $ordenesServicioModel->findAll();
            $repuestos = $repuestoModel->findAll();


            // Pasar los datos a la vista
            
            $datos = [
                'solicitudes' => $solicitudes,
                'repuestos' => $repuestos,
                'servicios' => $servicios,
                'ordenes' => $ordenes,
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


