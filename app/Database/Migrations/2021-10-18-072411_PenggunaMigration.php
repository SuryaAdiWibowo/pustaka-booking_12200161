<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenggunaMigration extends Migration
{
    public function up()
    {
        
        $this->forge->addfield([
           'id'=>[
               'type'           =>'INT','constraint' => 4,
               'unsigned'       => true,
               'auto_increment' => true
            ],
           'nama' => [
               'type'           => 'VARCHAR','constraint' => 50,
               'null'           => false
            ],
               'password' => [
               'type'           => 'VARCHAR','constraint' => 32,
               'null'           => false
            ]
            ]);
            $this->forge->addkey('id', true);
            $this->forge->createTable('pengguna');
    
    }

    public function down()
    {
    
        $this->forge->dropTable('pengguna');
    
    }
}
