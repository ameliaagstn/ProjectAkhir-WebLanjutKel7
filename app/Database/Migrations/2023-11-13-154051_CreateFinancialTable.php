<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFinancialTable extends Migration
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
            'date' => [
                'type' => 'DATE',
            ],
            'income' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'expenses' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('financial');
    }

    public function down()
    {
        $this->forge->dropTable('financial');
    }
}