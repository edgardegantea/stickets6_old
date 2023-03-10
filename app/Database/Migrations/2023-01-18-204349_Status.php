<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Status extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'          => 'INT',
                'constraint'    => 12,
                'unsigned'      => true,
                'autoincrement' => true
            ],
            'evidencia'     => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'created_at'    => ['type' => 'datetime', 'null' => false],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('evidences', true);
    }

    public function down()
    {
        $this->forge->dropTable('evidences', true);
    }
}
