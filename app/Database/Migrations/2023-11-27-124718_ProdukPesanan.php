<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukPesanan extends Migration
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

            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 100,
            ],

            'subtotal' => [
                'type'       => 'INT',
                'constraint' => 255,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'id_pesanan' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],

            'id_barang'    =>[
                'type'              => 'INT',
                'constraint'        => '10',
                'unsigned'          =>  true,
            ],


        ]);


        $this->forge->addKey('id_pesanan', true);
        $this->forge->addForeignKey('id_pesanan', 'pesanan', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');

        // Create table
        $this->forge->createTable('produk_pesanan');



    }

    public function down()
    {
        $this->forge->dropTable('produk_pesanan');
    }
}
