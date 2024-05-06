<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table            = 'vendor';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_vendor', 'nama_vendor', 'deskripsi', 'alamat', 'id_provinsi', 'id_kabupaten',];

    function getAll()
    {
        $builder = $this->db->table('vendor');
        $builder->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = vendor.id_provinsi');
        $builder->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = vendor.id_kabupaten');
        $query = $builder->get();
        return $query->getResult();
    }
}
