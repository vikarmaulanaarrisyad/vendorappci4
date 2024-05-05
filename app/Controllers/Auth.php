<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        $session = session();

        // Jika sudah login, redirect ke halaman lain (misalnya dashboard)
        if ($session->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        // Ambil instance dari UserModel
        $userModel = new UserModel();

        // Ambil data dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi data
        $validationRules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Cari pengguna berdasarkan username
        $user = $userModel->where('username', $username)->first();

        // Jika pengguna tidak ditemukan atau password tidak sesuai
        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }

        // Set session isLoggedIn menjadi true
        $session->set('isLoggedIn', true);
        // Simpan data pengguna ke dalam session jika perlu
        $session->set('userData', $user);

        // Redirect ke halaman dashboard atau halaman lain yang diinginkan setelah login
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $session = session();

        // Hapus session isLoggedIn dan userData
        $session->remove(['isLoggedIn', 'userData']);

        // Redirect ke halaman login
        return redirect()->to('/login');
    }

    // Metode lain seperti register, reset password, dll.
}
