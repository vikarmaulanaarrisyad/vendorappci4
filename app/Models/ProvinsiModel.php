<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'tbl_provinsi';
    protected $primaryKey = 'id_provinsi';
    protected $allowedFields = ['nama_provinsi'];

    public function vendors()
    {
        return $this->hasMany('App\Models\VendorModel', 'id_provinsi', 'id_provinsi');
    }
}
