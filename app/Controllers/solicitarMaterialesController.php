<?php

namespace App\Controllers;

use App\Models\SolicitarMaterialModel; 

class SolicitarMaterialesController extends BaseController
{
    public function solicitarMateriales()
    {
        return view('vistaTecnico/solicitudMateriales');
    }

    public function procesarSolicitud()
    {
        $materialModel = new SolicitarMaterialModel();

        // Configurar las reglas de validación
        $validation = \Config\Services::validation();
        $validation->setRules([
            'no_servicio_reparacion' => 'required',
            'txt_orden_de_servicio' => 'required',
            'txt_no_repuesto' => 'required',
        ]);

        // Validar los datos del formulario
        if (!$this->validate($validation->getRules())) {
            return view('vistaTecnico/solicitudMateriales', [
                'validation' => $this->validator,
            ]);
        } else {
            // Recoger los datos del formulario
            $data = [
                'servicio_id' => $this->request->getPost('no_servicio_reparacion'),
                'no_orden' => $this->request->getPost('txt_orden_de_servicio'),
                'id_repuesto' => $this->request->getPost('txt_no_repuesto'),
            ];

            // Llamar al modelo para insertar los datos
            $materialModel->insertarSolicitud($data);

            // Almacenar el mensaje en la sesión
            session()->setFlashdata('success', 'Material solicitado correctamente');

            // Redireccionar a la misma vista
            return view('vistaTecnico/solicitudMateriales');
     }
    }
}
