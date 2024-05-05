<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Vendor extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List Vendor',
        ];

        return view('vendor/index', $data);
    }
}
