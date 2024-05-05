<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vendor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_vendor' => [
                'type' => 'INT',
                'constraint' => 11,
                'unique' => true
            ],
            'nama_vendor' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vendor');
    }

    public function down()
    {
        $this->forge->dropTable('vendor');
    }
}
