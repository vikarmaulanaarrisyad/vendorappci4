<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
    protected $table = 'tbl_kabupaten';
    protected $primaryKey = 'id_kabupaten';
    protected $allowedFields = ['nama_kabupaten'];

    public function vendors()
    {
        return $this->hasMany('App\Models\VendorModel', 'id_kabupaten', 'id_kabupaten');
    }
}
