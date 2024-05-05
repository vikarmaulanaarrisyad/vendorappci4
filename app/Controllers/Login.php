<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];

        return view('login', $data);
    }

    public function login_action()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            // invalid
            $data['validation'] = $this->validator;

            return view('login', $data);
        } else {
            // valid
            $session = session();
            $loginModel = new LoginModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $cekUsername = $loginModel->where('username', $username)->first();

            if ($cekUsername) {
                // cek password
                $cekPassword = password_verify($password, $cekUsername['password']);
                if ($cekPassword) {
                    // password benar
                    $session_data = [
                        'logged_in' => true,
                        'username' => $cekUsername['username'],
                    ];

                    $session->set($session_data);

                    return redirect()->to('/dashboard');
                } else {
                    // 
                    $session->setFlashdata('message', 'Password yang anda masukkan salah');
                    return redirect()->to('/');
                }
            } else {
                // username tidak ada di database
                $session->setFlashdata('message', 'Username tidak ditemukan');
                return redirect()->to('/');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
