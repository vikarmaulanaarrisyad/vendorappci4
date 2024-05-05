<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table            = 'vendor';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_vendor', 'nama_vendor', 'deskripsi', 'alamat', 'provinsi', 'kota'];
}
