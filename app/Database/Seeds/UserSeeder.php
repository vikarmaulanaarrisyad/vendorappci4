<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@codeigniter.com',
            'password' => '$2y$10$3ZGb5brlrV938ZSJOrlxEud/cdRcvL5tmVi7OHCK74X3K1zwhQ1Ja',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, email,password) VALUES(:username:, :email:, :password:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
