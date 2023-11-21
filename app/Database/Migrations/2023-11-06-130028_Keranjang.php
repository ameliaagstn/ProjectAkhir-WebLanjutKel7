<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>[
                'type'              => 'INT',
                'constraint'        => 10,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],

            'nama_barang'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],

            'jumlah'    =>[
                'type'              => 'INT',
                'constraint'        => 100,
            ],

            'total_harga'   =>[
                'type'              => 'INT',
                'constraint'        => 100,
            ],

            'created_at'    =>[
                'type'              => 'DATETIME',
                'null'              => true,
            ],

            'updated_at'    =>[
                'type'              => 'DATETIME',
                'null'              => true,
            ],

            'deleted_at'    =>[
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang', true);
    }
}
