<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KabupatenModel;
use App\Models\ProvinsiModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VendorModel;
use App\Models\WilayahModel;

class Vendor extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Vendor',

        ];

        return view('vendor/index', $data);
    }

    public function ambildata()
    {
        if (!$this->request->isAJAX()) {
            exit('Maaf tidak dapat menampilkan data');
        } else {
            $vendor = new VendorModel();
            $data = [
                'tampildata' => $vendor->getAll(),
            ];

            $msg = [
                'data' => view('vendor/listdata', $data),
            ];

            echo json_encode($msg);
        }
    }

    public function formtambah()
    {
        if (!$this->request->isAJAX()) {
            exit('Maaf tidak dapat menampilkan data');
        } else {
            $wilayah = new WilayahModel();
            $data = [
                'provinsi' => $wilayah->AllProvinsi(),
            ];
            $msg = [
                'data' => view('vendor/modaltambah', $data),
            ];
        }
        echo json_encode($msg);
    }

    public function simpandata()
    {
        if (!$this->request->isAJAX()) {
            exit('Maaf tidak dapat menampilkan data');
        } else {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'kode_vendor' => [
                    'label' => 'Kode Vendor',
                    'rules' => 'required|is_unique[vendor.kode_vendor]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar, silahkan coba yang lain',
                    ]
                ],
                'nama_vendor' => [
                    'label' => 'Nama Vendor',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'deskripsi' => [
                    'label' => 'Deskripsi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'id_provinsi' => [
                    'label' => 'Provinsi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'id_kabupaten' => [
                    'label' => 'Kota',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
            ]);
        }

        if (!$valid) {
            $msg = [
                'error' => [
                    'kode_vendor' => $validation->getError('kode_vendor'),
                    'nama_vendor' => $validation->getError('nama_vendor'),
                    'deskripsi' => $validation->getError('deskripsi'),
                    'alamat' => $validation->getError('alamat'),
                    'id_provinsi' => $validation->getError('id_provinsi'),
                    'id_kabupaten' => $validation->getError('id_kabupaten'),
                ]
            ];
        } else {
            $simpanData = [
                'kode_vendor' => $this->request->getPost('kode_vendor'),
                'nama_vendor' => $this->request->getPost('nama_vendor'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'alamat' => $this->request->getPost('alamat'),
                'id_provinsi' => $this->request->getPost('id_provinsi'),
                'id_kabupaten' => $this->request->getPost('id_kabupaten'),
            ];

            $vendorModel = new VendorModel();
            $vendorModel->insert($simpanData);

            $msg = [
                'sukses' => 'Data vendor berhasil disimpan'
            ];
        }

        echo json_encode($msg);
    }

    public function formedit()
    {
        if (!$this->request->isAJAX()) {
            # code...
        } else {
            // ambil dari request formedit
            $idVendor = $this->request->getVar('id');

            $vendor = new VendorModel();
            $result = $vendor->find($idVendor);

            $wilayah = new WilayahModel();


            $data = [
                'id' => $result['id'],
                'kode_vendor' => $result['kode_vendor'],
                'nama_vendor' => $result['nama_vendor'],
                'deskripsi' => $result['deskripsi'],
                'alamat' => $result['alamat'],
                'id_provinsi' => $result['id_provinsi'],
                'id_kabupaten' => $result['id_kabupaten'],
                'provinsi' => $wilayah->AllProvinsi(),
            ];
            $msg = [
                'sukses' => view('vendor/modaledit', $data),
            ];

            echo json_encode($msg);
        }
    }

    public function updatedata()
    {
        // Pastikan request adalah AJAX
        if (!$this->request->isAJAX()) {
            exit('Maaf tidak dapat menampilkan data');
        }

        // Ambil data dari request
        $updateData = [
            'nama_vendor' => $this->request->getVar('nama_vendor'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'alamat' => $this->request->getVar('alamat'),
            'id_provinsi' => $this->request->getVar('id_provinsi'),
            'id_kabupaten' => $this->request->getVar('id_kabupaten'),
        ];

        // Buat objek model VendorModel
        $vendorModel = new VendorModel();

        // Ambil ID vendor dari request
        $id = $this->request->getVar('id');

        // Lakukan update data menggunakan model VendorModel
        $vendorModel->update($id, $updateData);

        // Kirim respon JSON
        $msg = [
            'sukses' => 'Data vendor berhasil diupdate'
        ];

        echo json_encode($msg);
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $vendor = new VendorModel();

            $vendor->delete($id);

            // Kirim respon JSON
            $msg = [
                'sukses' => 'Data vendor berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }


    public function kabupaten()
    {
        $wilayahModel = new WilayahModel(); // Create an instance of the model
        $id_provinsi = $this->request->getPost('id_provinsi');
        $kab = $wilayahModel->AllKabupaten($id_provinsi); // Use the model method

        $options = [];
        foreach ($kab as $value) {
            $options[] = [
                'id' => $value['id_kabupaten'],
                'nama' => $value['nama_kabupaten'],
            ];
        }

        // Set JSON response
        return $this->response->setJSON(['data' => $options]);
    }
}
