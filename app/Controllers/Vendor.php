<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VendorModel;

class Vendor extends BaseController
{
    public function index()
    {
        $vendorModel = new VendorModel();
        $data = [
            'title' => 'Data Vendor',
            'tampildata'  => $vendorModel->findAll(),
        ];

        return view('vendor/index', $data);
    }
}
