<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // cek user logged_in 
        if (!session()->get('logged_in')) {
            session()->setFlashdata('message', 'Silahkan login terlebih dahulu');
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
