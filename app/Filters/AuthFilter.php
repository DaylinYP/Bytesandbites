<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        log_message('debug', 'El filtro de autenticación está siendo llamado.');
        $session = \Config\Services::session();
        
        if (!$session->get('logged_in')) {
            
            return redirect()->to('/login'); // Redirige si no está autenticado
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Lógica adicional después de procesar la solicitud (si es necesario)
    }
}
