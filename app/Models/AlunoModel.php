<?php 

namespace App\Models;

use CodeIgniter\Model;

class AlunoModel extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id_aluno';
    protected $allowedFields = [
        'nome',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'estado',
        'foto'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}

?>