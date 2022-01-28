<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alunos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_aluno' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'auto_increment' => true
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'cep' => [
                'type' => 'VARCHAR',
                'constraint' => 8
            ],

            'logradouro' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'numero' => [
                'type' => 'int',
                'constraint' => 11
            ],

            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],

            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => 2
            ],

            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 248
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'updated_at' => [
                'type' => 'DATETIME'
            ],

            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id_aluno', true);
        $this->forge->createTable('alunos');
    }

    public function down()
    {
        $this->forge->dropTable('alunos');
    }
}
