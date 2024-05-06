<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
    // tampil data
    public function AllProvinsi()
    {
        return $this->db->table('tbl_provinsi')
            ->get()->getResultArray();
    }

    public function AllKabupaten($id_provinsi)
    {
        return $this->db->table('tbl_kabupaten')
            ->where('id_provinsi', $id_provinsi)
            ->get()->getResultArray();
    }

    public function AllKecamatan($id_kabupaten)
    {
        return $this->db->table('tbl_kabupaten')
            ->where('id_kabupaten', $id_kabupaten)
            ->get()->getResultArray();
    }
}
