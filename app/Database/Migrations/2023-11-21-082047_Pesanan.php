<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\Schema\Blueprint;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'fullname'         => [
                'type' => 'varchar',
                 'constraint' => 255,
                  
                ],

            'alamat'         => [
                'type' => 'varchar',
                 'constraint' => 255,
                  
                ],

            'metode_pengiriman'         => [
                'type' => 'varchar',
                 'constraint' => 100,
                  
                ],

            'kota'         => [
                'type' => 'varchar',
                 'constraint' => 100,
                  
                ],    
                
            'kode_pos'         => [
                'type' => 'varchar',
                 'constraint' => 100,
                  
                ],
                
            'email'         => [
                'type' => 'varchar',
                 'constraint' => 100,
                  
                ],    

            'telfon'         => [
                'type' => 'varchar',
                 'constraint' => 100,
                  
                ],

            'jumlah_item' => [
                'type'       => 'INT',
                'constraint' => 100,
            ],
            

            'total_bayar' => [
                'type'       => 'INT',
                'constraint' => 255,
            ],

            'bukti_pembayaran'       => [
                'type' => 'varchar',
                 'constraint' => 255,
                  'default' => 'assets\img\profile_default.webp',
                  'null' => true,
            ],

            'status_pembayaran' => [
                'type'    => 'ENUM',
                'constraint' => ['pending', 'approved',],
                'default' => 'pending',
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

            'status' => [
                'type'    => 'ENUM',
                'constraint' => ['diproses', 'dikirim', 'diterima'],
                'default' => 'diproses',
            ],

            'id_users' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_users', 'users', 'id');
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan', true);
    }
}