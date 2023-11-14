<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBuyerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('buyer');
    }

    public function down()
    {
        $this->forge->dropTable('buyer');
    }
}